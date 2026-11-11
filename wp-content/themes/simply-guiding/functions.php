<?php
if (!defined('ABSPATH')) exit;

function sg_enqueue_assets() {
    // filemtime() som versionsnummer: cachen brydes automatisk, hver gang filen ændres ved et nyt deploy.
    $style_path = get_stylesheet_directory() . '/style.css';
    $script_path = get_template_directory() . '/script.js';
    wp_enqueue_style('simply-guiding-style', get_stylesheet_uri(), [], file_exists($style_path) ? filemtime($style_path) : '1.0');
    wp_enqueue_script('simply-guiding-script', get_template_directory_uri() . '/script.js', [], file_exists($script_path) ? filemtime($script_path) : '1.0', true);
}
add_action('wp_enqueue_scripts', 'sg_enqueue_assets');

function sg_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sg_theme_setup');

// Undersider med egen skabelon (page-<slug>.php) skal findes i WordPress. Oprettes én gang med samme adresse som på det gamle site.
add_action('init', function () {
    $pages = ['saadan-arbejder-vi' => 'Sådan arbejder vi', 'projekter' => 'Projekter', 'indsatser' => 'Indsatser', 'loesninger' => 'Løsninger', 'om-os' => 'Om os', 'kontakt' => 'Kontakt', 'tak' => 'Tak', 'hvad-er-ips' => 'Hvad er IPS?', 'grundkursus-i-ips' => 'Grundkursus i IPS', 'ips-konsulentuddannelse' => 'IPS-konsulentuddannelse', 'cases' => 'Cases', 'cookies-og-privatlivspolitik' => 'Cookies og privatlivspolitik', 'blog' => 'Blog', 'postkort-2026' => 'Postkort 2026'];
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
                echo '<span role="cell" data-label="' . esc_attr($head[$i]) . '">' . esc_html($cell) . '</span>';
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
