<?php
/* IPS-konsulentuddannelse (/ips-konsulentuddannelse/) – ny opsætning 14. nov. 2026 i samme stil som Grundkursus. Indholdet ligger i ips-ny.php */
get_header();
get_template_part('template-parts/site-header');
get_template_part('template-parts/page-hero', null, [
  'label' => 'Academy', 'title' => 'Uddannelse til IPS-konsulent',
  'lead'  => 'Tag Danmarks mest omfattende IPS-uddannelse og bliv klædt på til at arbejde som IPS-konsulent. Her kan du læse mere om, hvad du lærer på kurset.',
  'img' => 'mindset.jpg', 'img_w' => 840, 'img_h' => 1050, 'alt' => 'Undervisning hos Simply Guiding', 'img_pos' => '50% 0%',
]);
echo '<div id="indhold"></div>';
require get_template_directory() . '/ips-ny.php';
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
