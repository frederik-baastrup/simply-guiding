<?php
/* Om os (/om-os/) – tekst fra sg-web-om-sg.docx; ny opbygning 14. nov. 2026 i om-os-ny.php */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
get_template_part('template-parts/page-hero', null, [
  'title' => 'Om Simply Guiding',
  'lead'  => 'Hos Simply Guiding sørger vi for, at historien ikke gentager sig. Sammen skaber vi et nyt ståsted i livet for mennesket bag borgeren.',
  'video' => 'om-os-hero.mp4', 'full' => true, 'poster' => 'om-os-hero-v2.jpg',
  'btn1' => 'Kontakt os for en uforpligtende snak', 'btn2' => 'Mød holdet', 'btn2_href' => '#holdet',
]);
?>
<div id="indhold"></div>
<?php
require get_template_directory() . '/om-os-ny.php';
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
