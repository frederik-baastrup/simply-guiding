<?php
if (!defined('ABSPATH')) exit;

function sg_enqueue_assets() {
    // Versionsnummer = filens indhold (md5). Så får en halvt uploadet fil (midt i et deploy) aldrig samme adresse
    // som den færdige fil, og en browser kan ikke blive hængende i en ødelagt version i sin cache.
    $style_path = get_stylesheet_directory() . '/style.css';
    $script_path = get_template_directory() . '/script.js';
    $v = function ($f) { return file_exists($f) ? substr(md5_file($f), 0, 10) : '1.0'; };
    wp_enqueue_style('simply-guiding-style', get_stylesheet_uri(), [], $v($style_path));
    wp_enqueue_script('simply-guiding-script', get_template_directory_uri() . '/script.js', [], $v($script_path), true);
}
add_action('wp_enqueue_scripts', 'sg_enqueue_assets');

function sg_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sg_theme_setup');

// Undersider med egen skabelon (page-<slug>.php) skal findes i WordPress. Oprettes én gang med samme adresse som på det gamle site.
add_action('init', function () {
    $pages = ['saadan-arbejder-vi' => 'Sådan arbejder vi', 'projekter' => 'Projekter', 'indsatser' => 'Indsatser', 'loesninger' => 'Løsninger', 'om-os' => 'Om os', 'kontakt' => 'Kontakt', 'tak' => 'Tak', 'hvad-er-ips' => 'Hvad er IPS?', 'grundkursus-i-ips' => 'Grundkursus i IPS', 'ips-konsulentuddannelse' => 'IPS-konsulentuddannelse', 'cases' => 'Cases', 'cookies-og-privatlivspolitik' => 'Cookies og privatlivspolitik', 'blog' => 'Blog', 'postkort-2026' => 'Postkort 2026', 'omraade' => 'Områder'];
    $done = (array) get_option('sg_pages_created', []);
    if (get_option('sg_page_saadan_created')) $done['saadan-arbejder-vi'] = 1;
    foreach ($pages as $slug => $title) {
        if (!empty($done[$slug])) continue;
        if (!get_page_by_path($slug)) {
            wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title, 'post_name' => $slug]);
        }
        $done[$slug] = 1;
    }
    update_option('sg_pages_created', $done);
});

/*
 * Nyhedsbrev → Mailchimp via pluginnet "MC4WP: Mailchimp for WordPress" (samme som på det gamle site).
 * Vores egen formular (#sgSignup) sender felterne EMAIL og FNAME med det første MC4WP-formular-id,
 * så pluginnet tilmelder til den liste, der er valgt i pluginnets formular. Uden pluginnet sendes intet.
 */
function sg_mc4wp_form_id() {
    if (!function_exists('mc4wp_get_forms')) return 0;
    $forms = mc4wp_get_forms(['numberposts' => 1]);
    return $forms ? (int) $forms[0]->ID : 0;
}
function sg_signup_fields() {
    $id = sg_mc4wp_form_id();
    if (!$id) return;
    printf('<input type="hidden" name="_mc4wp_form_id" value="%d"><input type="hidden" name="_mc4wp_form_element_id" value="sgSignup"><input type="hidden" name="_mc4wp_timestamp" value="%d">', $id, time());
    echo '<label style="display:none !important">Udfyld ikke dette felt: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label>';
}
function sg_signup_response() {
    $id = sg_mc4wp_form_id();
    if (!$id || !function_exists('mc4wp_get_form')) return '';
    try { $form = mc4wp_get_form($id); } catch (Exception $e) { return ''; }
    return trim(wp_strip_all_tags($form->get_response_html('sgSignup')));
}

/* Tabel som responsivt gitter: første række er overskrifter; på mobil vises hver række som et kort med etiketter. */
function sg_table($rows) {
    $head = array_shift($rows);
    echo '<div class="sg-table" role="table"><div class="sg-table__row sg-table__head" role="row">';
    foreach ($head as $h) echo '<span role="columnheader">' . esc_html($h) . '</span>';
    echo '</div>';
    foreach ($rows as $r) {
        echo '<div class="sg-table__row" role="row">';
        foreach ($r as $i => $cell) {
            if ($i === 0 && strpos($cell, ':') !== false) {
                list($t, $sub) = array_map('trim', explode(':', $cell, 2));
                echo '<span role="cell" class="sg-table__name"><b>' . esc_html($t) . ':</b> ' . esc_html($sub) . '</span>';
            } elseif ($i === 0) {
                echo '<span role="cell" class="sg-table__name"><b>' . esc_html($cell) . '</b></span>';
            } else {
                echo '<span role="cell" data-label="' . esc_attr($head[$i]) . '">' . str_replace("\n", '<br><br>', esc_html($cell)) . '</span>';
            }
        }
        echo '</div>';
    }
    echo '</div>';
}

/*
 * Formularer (kontakt + kursustilmelding): sendes til admin-post.php og videre som mail til Simply Guiding.
 * Spam-værn: skjult honeypot-felt + mindst 3 sekunder fra siden blev vist. Efter afsendelse → /tak/.
 */
define('SG_FORM_TO', 'kontakt@simplyguiding.dk');
function sg_form_open($type) {
    echo '<form class="sg-form" method="post" action="' . esc_url(admin_url('admin-post.php')) . '">';
    echo '<input type="hidden" name="action" value="sg_form"><input type="hidden" name="sg_type" value="' . esc_attr($type) . '">';
    echo '<input type="hidden" name="sg_t" value="' . time() . '"><input type="hidden" name="sg_from" value="' . esc_url(home_url(add_query_arg([]))) . '">';
    echo '<label class="sg-hp" aria-hidden="true">Udfyld ikke dette felt <input type="text" name="sg_website" tabindex="-1" autocomplete="off"></label>';
}
function sg_form_handle() {
    $back = isset($_POST['sg_from']) ? esc_url_raw(wp_unslash($_POST['sg_from'])) : home_url('/');
    $spam = !empty($_POST['sg_website']) || (time() - (int) ($_POST['sg_t'] ?? 0)) < 3;
    $type = sanitize_key($_POST['sg_type'] ?? 'kontakt');
    $labels = [
        'navn' => 'Navn', 'lokation' => 'Lokation', 'email' => 'E-mail', 'telefon' => 'Telefon', 'besked' => 'Besked',
        'organisation' => 'Organisation / Arbejdssted', 'stilling' => 'Nuværende stilling', 'deltagertype' => 'Deltagertype',
        'dato' => 'Kursusdato', 'cvr' => 'CVR-nummer', 'ean' => 'EAN-nummer', 'reference' => 'Fakturareference',
        'selvbetaler' => 'Selvbetaler (faktura via mail)', 'betingelser' => 'Accepterer handelsbetingelser',
    ];
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    if ($spam || !is_email($email) || empty($_POST['navn'])) {
        wp_safe_redirect(add_query_arg('sg_fejl', '1', $back) . '#formular'); exit;
    }
    $lines = [];
    foreach ($labels as $k => $label) {
        if (!isset($_POST[$k]) || $_POST[$k] === '') continue;
        $v = is_array($_POST[$k]) ? implode(', ', array_map('sanitize_text_field', wp_unslash($_POST[$k]))) : sanitize_textarea_field(wp_unslash($_POST[$k]));
        $lines[] = $label . ': ' . $v;
    }
    $subject = $type === 'grundkursus' ? 'Tilmelding: Grundkursus i IPS' : 'Ny henvendelse fra simplyguiding.dk';
    wp_mail(SG_FORM_TO, $subject, implode("\n", $lines) . "\n\nSendt fra: " . $back, ['Reply-To: ' . $email]);
    wp_safe_redirect(home_url('/tak/')); exit;
}
add_action('admin_post_nopriv_sg_form', 'sg_form_handle');
add_action('admin_post_sg_form', 'sg_form_handle');

/* Succeshistorierne ligger under /cases/<slug>/ (som på det gamle site) og bruger alle page-case.php */
add_filter('template_include', function ($t) {
    if (is_page()) {
        $p = get_queried_object();
        if ($p && $p->post_parent && get_post_field('post_name', $p->post_parent) === 'cases') {
            $case = locate_template('page-case.php');
            if ($case) return $case;
        }
    }
    return $t;
});
add_action('init', function () {
    if (get_option('sg_cases_created')) return;
    $parent = get_page_by_path('cases');
    if (!$parent) return; // oprettes først, når /cases/ findes (næste sidevisning)
    foreach (['sannes-historie' => 'Sanne', 'kadans-historie' => 'Kadan', 'sofies-historie' => 'Sofie', 'martins-historie' => 'Martin', 'annas-historie' => 'Anna', 'gunhilds-historie' => 'Gunhild'] as $slug => $title) {
        if (!get_page_by_path('cases/' . $slug)) {
            wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title, 'post_name' => $slug, 'post_parent' => $parent->ID]);
        }
    }
    update_option('sg_cases_created', 1);
}, 20);

/* Nyheder: /blog/ er indlægssiden, og indlæg ligger direkte under roden (/<slug>/) som på det gamle site. Sættes én gang. */
add_action('init', function () {
    if (get_option('sg_reading_set')) return;
    $blog = get_page_by_path('blog');
    if (!$blog) return;
    $front = get_page_by_path('forside');
    if (!$front) { $fid = wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => 'Forside', 'post_name' => 'forside']); } else { $fid = $front->ID; }
    update_option('show_on_front', 'page');
    update_option('page_on_front', $fid);
    update_option('page_for_posts', $blog->ID);
    update_option('permalink_structure', '/%postname%/');
    flush_rewrite_rules(false);
    update_option('sg_reading_set', 1);
}, 30);

/* Indlæg, hvis udvalgte billede ikke kom med i importen, får det samme billede som på det gamle site */
function sg_post_fallback_img($post = null) {
    $map = [
        'uddannelsesprogram-for-kommunale-medarbejdere-der-arbejder-med-ungeloeft-initiativet' => 'uddannelse-integreret.jpg',
        'evaluering-af-ips-ung' => 'ips-match.jpg',
        'unges-stemme-i-eget-liv' => 'loesninger-beskaeftigelse.jpg',
        'recharge-tilpasset-forloeb-for-12-17-aarige-med-sociale-og-psykiske-udfordringer' => 'loesninger-boern-unge.jpg',
        'naar-ips-teamet-faar-professionel-hjaelp-bliver-resultaterne-endnu-bedre' => 'news/naar-ips-teamet.jpg',
        '25-millioner-skal-sikre-at-psykisk-syge-kommer-i-arbejde' => 'ips-hero.jpg',
    ];
    $slug = get_post_field('post_name', $post);
    return isset($map[$slug]) ? get_template_directory_uri() . '/assets/' . $map[$slug] : '';
}
/* Rester af WPBakery/Uncode-koder i importerede indlæg fjernes ved visning (teksten bevares) */
add_filter('the_content', function ($c) {
    if (!is_singular('post')) return $c;
    $c = preg_replace('/\[vc_raw_html[^\]]*\].*?\[\/vc_raw_html\]/s', '', $c);
    return preg_replace('/\[\/?(vc_|uncode)[^\]]*\]/', '', $c);
}, 9);

/* Dato på dansk uanset sidens sprogindstilling, fx "29. oktober 2025". */
function sg_date_da($post = null) {
    $ts = get_post_time('U', false, $post);
    $m = ['januar','februar','marts','april','maj','juni','juli','august','september','oktober','november','december'];
    return date_i18n('j', $ts) . '. ' . $m[(int) date_i18n('n', $ts) - 1] . ' ' . date_i18n('Y', $ts);
}

/* Gamle adresser, der skal til forsiden (301) */
add_action('template_redirect', function () {
    $path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    if (in_array($path, ['postkort-26', 'postkort-2026'], true)) {
        wp_redirect(home_url('/'), 301);
        exit;
    }
}, 1);


/* Grønt flueben (check123.svg) og liste med flueben */
function sg_check_svg() {
    return '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}
function sg_checks($items, $class = 'sg-checks') {
    echo '<ul class="' . esc_attr($class) . '">';
    foreach ($items as $i) echo '<li>' . sg_check_svg() . '<span>' . esc_html($i) . '</span></li>';
    echo '</ul>';
}

/* Holdet: bruges på Om os og områdesiderne */
function sg_team_members() {
    return [
        ['team-lars.jpg', 'Lars Olaf Nielsen', 'Direktør', '+4551905606', '51 90 56 06', 'lars@simplyguiding.dk'],
        ['team-marlene.jpg', 'Marlene Mohn Ishøi', 'Driftsdirektør', '+4551909603', '51 90 96 03', 'marlene@simplyguiding.dk'],
        ['team-tania.jpg', 'Tania Cortes', 'Økonomiansvarlig', '+4551903726', '51 90 37 26', 'tania@simplyguiding.dk'],
    ];
}

/* Små linjeikoner til punkter og kort */
function sg_icon($name) {
    $p = [
        'pin'    => '<path d="M12 21s-6.5-5.6-6.5-11a6.5 6.5 0 0 1 13 0c0 5.4-6.5 11-6.5 11z"/><circle cx="12" cy="10" r="2.4"/>',
        'anchor' => '<circle cx="12" cy="5" r="2"/><path d="M12 7v14M7 11h10M4.5 14a7.5 7.5 0 0 0 15 0"/>',
        'arrow'  => '<path d="M4 12h15M13 6l6 6-6 6"/>',
        'people' => '<circle cx="9" cy="8" r="3"/><path d="M3.5 19a5.5 5.5 0 0 1 11 0"/><circle cx="17" cy="9" r="2.3"/><path d="M15.5 14.2A4.5 4.5 0 0 1 21 18.5"/>',
        'spark'  => '<path d="M12 3v4M12 17v4M3 12h4M17 12h4M6 6l2.5 2.5M15.5 15.5 18 18M6 18l2.5-2.5M15.5 8.5 18 6"/>',
        'shield' => '<path d="M12 3 4.5 6v5.5c0 4.6 3.2 8.3 7.5 9.5 4.3-1.2 7.5-4.9 7.5-9.5V6z"/><path d="m9 12 2 2 4-4"/>',
        'heart'  => '<path d="M12 20s-7.5-4.6-7.5-10A4.3 4.3 0 0 1 12 7.4 4.3 4.3 0 0 1 19.5 10c0 5.4-7.5 10-7.5 10z"/>',
        'book'   => '<path d="M4 5.5A1.5 1.5 0 0 1 5.5 4H11v15H5.5A1.5 1.5 0 0 1 4 17.5zM20 5.5A1.5 1.5 0 0 0 18.5 4H13v15h5.5a1.5 1.5 0 0 0 1.5-1.5z"/>',
        'bolt'   => '<path d="M13 3 5 13.5h6L10 21l8-10.5h-6z"/>',
        'user'   => '<circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0 1 14 0"/>',
        'puzzle' => '<path d="m12 3 8.5 4.5L12 12 3.5 7.5z"/><path d="m3.5 12 8.5 4.5 8.5-4.5M3.5 16.5 12 21l8.5-4.5"/>',
        'bookopen' => '<path d="M12 6.5C10.3 5.2 7.8 4.5 4 4.5v13c3.8 0 6.3.7 8 2 1.7-1.3 4.2-2 8-2v-13c-3.8 0-6.3.7-8 2z"/><path d="M12 6.5v13"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5.5A1.5 1.5 0 0 1 10.5 4h3A1.5 1.5 0 0 1 15 5.5V7M3 12.5h18M10.5 12.5v1.5h3v-1.5"/>',
        'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'card'   => '<rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3 10h18M7 15h3"/>',
        'tag'    => '<path d="M3.5 12.5V4.5a1 1 0 0 1 1-1h8l8 8-9 9-8-8z"/><circle cx="8.5" cy="8.5" r="1.5"/>',
        'calendar' => '<rect x="3.5" y="5" width="17" height="15" rx="2"/><path d="M3.5 10h17M8 3v4M16 3v4M9 15l2 2 4-4"/>',
        'handshake' => '<path d="m3 12 4-4 4 2 3-2 3 1 4 3"/><path d="m7 12 3 3a1.4 1.4 0 0 0 2-2M10 15l1.5 1.5a1.4 1.4 0 0 0 2-2M12.5 16.5l.8.8a1.4 1.4 0 0 0 2-2l-2.3-2.3"/>',
    ];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($p[$name] ?? $p['arrow']) . '</svg>';
}

/* Områdesider: /omraade/<slug>/ bruger omraade-side.php med indhold fra content/omraade/<slug>.php. /omraade/ selv viderestilles til Løsninger. */
add_filter('template_include', function ($t) {
    if (is_page()) {
        $p = get_queried_object();
        if ($p && $p->post_parent && get_post_field('post_name', $p->post_parent) === 'omraade') {
            $f = locate_template('omraade-side.php');
            if ($f) return $f;
        }
    }
    return $t;
});
add_action('template_redirect', function () {
    if (is_page('omraade')) { wp_redirect(home_url('/loesninger/'), 301); exit; }
});
add_action('init', function () {
    if (get_option('sg_omraade_created')) return;
    $parent = get_page_by_path('omraade');
    if (!$parent) return;
    foreach (['jobcentre' => 'Jobcentre', 'boern-unge-familier' => 'Børn, unge og familier', 'forsikring-pension' => 'Forsikring og pension'] as $slug => $title) {
        if (!get_page_by_path('omraade/' . $slug)) {
            wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title, 'post_name' => $slug, 'post_parent' => $parent->ID]);
        }
    }
    update_option('sg_omraade_created', 1);
}, 20);

/* Tynd, lang pil til tekstlinks */
function sg_arrow() {
    return '<svg class="sg-arrow" viewBox="0 0 28 14" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 7h25M20 1.5 26 7l-6 5.5"/></svg>';
}


/*
 * SEO-titler og -beskrivelser (Rank Math) – overført fra det gamle site (WXR-eksport 11. nov. 2026) pr. adresse.
 * Skrives i Rank Maths egne felter én gang (kun hvor feltet er tomt), så de står klar, når Rank Math er aktiveret.
 * Uden Rank Math bruger temaet selv felterne til <title> og meta description.
 */
function sg_seo_map() {
    return [
        'blog' => ['Nyheder | Læs det seneste fra Simply Guiding', 'Læs de seneste nyheder om Simply Guiding her.'],
        'forside' => ['Simply Guiding | Vi matcher mennesker med muligheder', 'Simply Guiding hjælper mennesker, der lever med sociale, psykiske og fysiske udfordringer, tilbage til arbejdslivet. Læs om os her.'],
        'loesninger' => ['Løsninger | Læs mere om vores løsninger – Simply Guiding', 'Simply Guiding tilbyder en række løsninger og indsatser skræddersyet til specifikke målgrupper. Her kan du læse mere om vores løsninger.'],
        'saadan-arbejder-vi' => ['Sådan arbejder vi | Læs om vores metoder her', 'Simply Guidings medarbejdere uddannes og arbejder metodebaseret – fx IPS, Supported Employment og IPS UNG/Supported Education (SEd).'],
        'projekter' => ['Vores projekter | Oversigt over aktuelle projekter', 'Simply Guiding har udviklet en række projekter. På denne side kan du læse mere om vores aktuelle projekter og indsatsområder.'],
        'om-os' => ['Om os | Hvem er Simply Guiding? Se teamet her', 'Hos Simply Guiding sørger vi for, at historien ikke gentager sig. Sammen skaber vi et nyt ståsted i livet for mennesket bag borgeren. Mød holdet her.'],
        'cases/gunhilds-historie' => ['Læs Gunhilds historie her – Simply Guiding', 'Efter flere års kamp med sine psykiske lidelser endte Gunhild i et ressourceforløb, hjalp vi hende på arbejdsmarkedet. Læs mere her.'],
        'cases' => ['Cases | Se vores cases her – Simply Guiding', 'Er du interesseret i at vide, hvad borgerne siger? Så kan du se et overblik over vores cases her.'],
        'cases/sannes-historie' => ['Læs Sannes historie her – Simply Guiding', 'Læs historien om, hvordan vi med IPS-metoden hjalp Sanne i job, efter hun havde været ledig i mere end syv år.'],
        'cases/kadans-historie' => ['Læs Kadans historie her – Simply Guiding', 'Læs om syriske Kadans vej til job som maler efter 1½ år i Danmark. Kadans IPS integrationskonsulent ved Simply Guiding er en succeshistorie.'],
        'cases/martins-historie' => ['Læs Martins historie her – Simply Guiding', 'Før IPS-forløbet havde Martin på 37 år aldrig været ansat et sted i mere end et par uger ad gangen. Læs hans succeshistorie her.'],
        'cases/annas-historie' => ['Læs Annas historie her – Simply Guiding', 'Efter blot 5 måneders forløb hos Simply Guiding blev 41-årige Anna selvforsørgende. Før var hun ramt af stress. Læs hendes historie her.'],
        'cases/sofies-historie' => ['Læs Sofies historie her – Simply Guiding', 'Læs Sofies fortælling om, hvordan hun udviklede sig fra indlagt på psykiatrisk afdeling til at starte på en uddannelse som jordbrugsteknolog.'],
        'kontakt' => ['Kontakt os | Udfyld formularen her', 'Har du spørgsmål, eller ønsker du at indgå et samarbejde med os? Så er vi klar til at hjælpe dig videre. Du kan også ringe til os på 26 34 44 54.'],
        'cookies-og-privatlivspolitik' => ['', 'Her kan du læse vores privatlivspolitik.'],
        'hvad-er-ips' => ['Hvad er IPS? Læs om IPS-metoden her – Simply Guiding', 'IPS er en beskæftigelsesindsats, der er målrettet mennesker med en psykisk lidelse eller psykisk sårbarhed. Læs mere om IPS her.'],
        'ips-konsulentuddannelse' => ['IPS-uddannelse | Bliv IPS-konsulent | Se indhold her', 'Tag Danmarks mest omfattende IPS-uddannelse og bliv klædt på til at arbejde som IPS-konsulent. Læs mere om vores kurser her.'],
        'indsatser' => ['Indsatser | Se alle vores indsatser her – Simply Guiding', 'Simply Guiding hjælper kommuner og beskæftigelsesaktører med målrettede indsatser og uddannelser, der skaber varig inklusion. Se indsatser.'],
        'grundkursus-i-ips' => ['Grundkursus i IPS – Simply Guiding', 'Et praksisnært grundkursus, der giver dig et solidt og anvendeligt fundament i IPS-metoden. Du bliver klædt på til at omsætte metoden direkte i praksis.'],
        'omraade/jobcentre' => ['Ekstern beskæftigelsesaktør til jobcentre – Simply Guiding', 'Simply Guiding hjælper jobcentre med at skabe et nyt ståsted i livet for borgere i en sårbar situation. Specialister i IPS og Supported Employment.'],
        'omraade/boern-unge-familier' => ['Ekstern aktør for børn, unge og familier – Simply Guiding', 'Simply Guiding hjælper børn, unge og familier tilbage i trivsel, i skole og til et nyt ståsted i livet. Se vores forløb for børn- og familieafdelinger.'],
        'omraade/forsikring-pension' => ['Hjælp til sygemeldte for forsikring og pension – Simply Guiding', 'Simply Guiding hjælper sygemeldte tilbage i arbejde – hurtigt, trygt og med afsæt i den enkeltes situation. For forsikrings- og pensionsselskaber.'],
    ];
}
add_action('init', function () {
    if (get_option('sg_seo_seeded') === '1') return;
    foreach (sg_seo_map() as $path => $m) {
        $p = $path === 'forside' ? get_post((int) get_option('page_on_front')) : get_page_by_path($path);
        if (!$p) continue;
        if ($m[0] !== '' && get_post_meta($p->ID, 'rank_math_title', true) === '') update_post_meta($p->ID, 'rank_math_title', $m[0]);
        if ($m[1] !== '' && get_post_meta($p->ID, 'rank_math_description', true) === '') update_post_meta($p->ID, 'rank_math_description', $m[1]);
    }
    update_option('sg_seo_seeded', '1');
}, 30);
if (!defined('RANK_MATH_VERSION')) {
    add_filter('pre_get_document_title', function ($t) {
        $id = is_front_page() ? (int) get_option('page_on_front') : (is_home() ? (int) get_option('page_for_posts') : (is_singular() ? get_queried_object_id() : 0));
        $v = $id ? get_post_meta($id, 'rank_math_title', true) : '';
        return $v !== '' ? $v : $t;
    }, 20);
    add_action('wp_head', function () {
        $id = is_front_page() ? (int) get_option('page_on_front') : (is_home() ? (int) get_option('page_for_posts') : (is_singular() ? get_queried_object_id() : 0));
        $d = $id ? get_post_meta($id, 'rank_math_description', true) : '';
        if ($d === '' && is_singular('post')) $d = wp_trim_words(get_the_excerpt($id), 28, '…');
        if ($d !== '') echo '<meta name="description" content="' . esc_attr($d) . '">' . "\n";
    }, 1);
}

/* Google Search Console-verifikation (overført fra det gamle site, hvor den lå i GDPR Cookie Compliance) */
add_action('wp_head', function () {
    echo '<meta name="google-site-verification" content="rI9cWHHXule_HqpSp0AMqRU5LfUoHfhlJy_925qK6_A" />' . "\n";
}, 2);

/* Dokument-layout (lodret side med sidebar) – se inc/doc.php */
require_once get_template_directory() . '/inc/doc.php';

/* Forslag i dokument-layout vises på ?ny=1 og skal ikke indekseres */
add_filter('wp_robots', function ($r) { if (isset($_GET['ny'])) { $r['noindex'] = true; $r['nofollow'] = true; } return $r; });
add_filter('rank_math/frontend/robots', function ($r) { if (isset($_GET['ny'])) { $r['index'] = 'noindex'; $r['follow'] = 'nofollow'; } return $r; });

/* Forløb på områdesiderne som kort: mørkegrønt navnefelt + Målgruppe / Indsats (afløser tabellen) */
function sg_forloeb_cards($rows) {
    echo '<ol class="sg-fcards">';
    foreach ($rows as $i => $r) {
        $fmt = function ($t) { return str_replace("\n", '</p><p>', esc_html($t)); };
        echo '<li class="sg-fcard">';
        echo '<div class="sg-fcard__name"><span class="sg-fcard__no">' . sprintf('%02d', $i + 1) . '</span><h3>' . esc_html($r[0]) . '</h3></div>';
        echo '<div class="sg-fcard__col"><p class="sg-fcard__label">' . sg_icon('people') . 'Målgruppe</p><p>' . $fmt($r[1]) . '</p></div>';
        echo '<div class="sg-fcard__col"><p class="sg-fcard__label">' . sg_icon('spark') . 'Indsats</p><p>' . $fmt($r[2]) . '</p></div>';
        echo '</li>';
    }
    echo '</ol>';
}

