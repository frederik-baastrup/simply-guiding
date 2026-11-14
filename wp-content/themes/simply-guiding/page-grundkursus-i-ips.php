<?php
/* Grundkursus i IPS (/grundkursus-i-ips/) – ny opsætning 14. nov. 2026. Indholdet ligger i grundkursus-ny.php, formularen i template-parts/course-signup.php */
get_header();
get_template_part('template-parts/site-header');
require get_template_directory() . '/grundkursus-ny.php';
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
