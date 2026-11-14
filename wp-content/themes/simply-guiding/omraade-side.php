<?php
/* Områdeside (/omraade/<slug>/): indhold fra content/omraade/<slug>.php, layout i omraade-ny.php (14. nov. 2026) */
$slug = get_post_field('post_name', get_queried_object_id());
$file = get_template_directory() . '/content/omraade/' . $slug . '.php';
if (!file_exists($file)) { status_header(404); get_template_part('404'); return; }
$c = require $file;
$u = get_template_directory_uri();
get_header();
get_template_part('template-parts/site-header');
get_template_part('template-parts/page-hero', null, [
  'label' => $c['label'], 'title' => $c['title'], 'lead' => $c['lead'], 'img' => $c['hero_img'], 'alt' => $c['hero_alt'],
  'btn1' => $c['btn1'], 'btn1_href' => '#formular', 'btn2' => $c['btn2'], 'btn2_href' => '#forloeb',
]);
?>
<div id="indhold"></div>
<?php
require get_template_directory() . '/omraade-ny.php';
get_template_part('template-parts/team', null, ['title' => 'Holdet bag Simply Guiding']);
get_template_part('template-parts/contact-form', null, ['title' => $c['form_title'], 'text' => $c['form_text']]);
get_template_part('template-parts/site-footer');
get_footer();
