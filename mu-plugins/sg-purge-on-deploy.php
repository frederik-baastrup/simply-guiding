<?php
/**
 * Plugin Name: SG Purge on Deploy
 * Description: Lader GitHub Actions tømme SiteGrounds cache lige efter hvert udrul, så ændringer er synlige med det samme. Besøg ?sg_deploy_purge=<token> for at udløse det.
 */

if (!defined('ABSPATH')) exit;

add_action('init', function () {
    if (!isset($_GET['sg_deploy_purge'])) return;

    // Hemmeligt token – skal matche værdien i .github/workflows/deploy.yml
    $token = '87d379a20b31f3d4a73f75c3f71f3140';

    if (!hash_equals($token, (string) $_GET['sg_deploy_purge'])) {
        status_header(403);
        exit('forbidden');
    }

    // Svaret må aldrig selv caches – ellers serverer SiteGround "purged" fra cachen uden at køre PHP
    nocache_headers();
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('X-Cache-Enabled: False');

    if (function_exists('sg_cachepress_purge_cache')) {
        sg_cachepress_purge_cache();
        status_header(200);
        exit('purged');
    }

    status_header(200);
    exit('no cache plugin found - nothing to purge');
});

/*
 * Mens sitet kører på det midlertidige domæne (*.sg-host.com), må siderne slet ikke caches.
 * Grunden: SiteGrounds bot-beskyttelse (sgcaptcha) blokerer GitHub Actions' tømme-kald ovenfor,
 * så et udrul blev ellers ikke synligt. Fjern/ændr dette, når sitet flytter til simplyguiding.dk.
 */
add_action('send_headers', function () {
    if (is_admin()) return;
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    if (substr($host, -strlen('.sg-host.com')) !== '.sg-host.com') return;
    nocache_headers();
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('X-Cache-Enabled: False');
});
