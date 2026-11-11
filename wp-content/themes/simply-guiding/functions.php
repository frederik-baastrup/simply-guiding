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

// Siden "Sådan arbejder vi" skal findes i WordPress, før page-saadan-arbejder-vi.php bruges.
// Oprettes én gang med samme adresse som på det gamle site (/saadan-arbejder-vi/).
add_action('init', function () {
    if (get_option('sg_page_saadan_created')) return;
    if (!get_page_by_path('saadan-arbejder-vi')) {
        wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => 'Sådan arbejder vi', 'post_name' => 'saadan-arbejder-vi']);
    }
    update_option('sg_page_saadan_created', 1);
});
