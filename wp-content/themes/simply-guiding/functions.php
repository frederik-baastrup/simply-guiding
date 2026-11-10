<?php
if (!defined('ABSPATH')) exit;

function sg_enqueue_assets() {
    wp_enqueue_style('simply-guiding-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_script('simply-guiding-script', get_template_directory_uri() . '/script.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'sg_enqueue_assets');

function sg_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sg_theme_setup');
