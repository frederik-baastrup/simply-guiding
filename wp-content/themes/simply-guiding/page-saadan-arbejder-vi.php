<?php
/* Sådan arbejder vi (/saadan-arbejder-vi/) – samme adresse som på det gamle site; ny opbygning 15. nov. 2026 i saadan-v2.php */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
?>
<?php get_template_part('template-parts/page-hero', null, [
  'label' => 'Metode', 'title' => 'Sådan arbejder vi',
  'lead'  => 'Simply Guidings medarbejdere uddannes og arbejder metodebaseret. For eksempel ud fra IPS, Supported Employment, og IPS UNG/Supported Education (SEd). Læs mere om vores metoder og processer her.',
  'img' => 'saadan-arbejder-vi-v2.jpg', 'img_w' => 1600, 'img_h' => 1054, 'alt' => 'Tre personer går en tur langs havnefronten',
]); ?>

<div id="indhold"></div>
<?php
require get_template_directory() . '/saadan-v3.php';
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
