<?php
/**
 * Plugin Name: Fjern fil markeret af SiteGrounds scanner
 * Description: Sletter Symfony Consoles Terminal.php i Matomo-pluginnet (kun brugt fra kommandolinjen; SiteGround markerer den som mistænkelig pga. proc_open). Matomo virker uden den. Kører igen, hvis en Matomo-opdatering lægger filen tilbage.
 */
if (!defined('ABSPATH')) exit;

add_action('init', function () {
    $f = WP_CONTENT_DIR . '/plugins/matomo/app/vendor/prefixed/symfony/console/Terminal.php';
    if (file_exists($f)) {
        @chmod($f, 0644);
        @unlink($f);
    }
    if (isset($_GET['sg_check_flagged']) && current_user_can('manage_options')) {
        wp_die(file_exists($f) ? 'Filen findes stadig' : 'Filen er fjernet', 'Tjek', ['response' => 200]);
    }
}, 1);
