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
    $pages = ['saadan-arbejder-vi' => 'Sådan arbejder vi', 'projekter' => 'Projekter'];
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
