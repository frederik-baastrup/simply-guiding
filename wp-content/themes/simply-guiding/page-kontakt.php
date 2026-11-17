<?php
/* Kontakt (/kontakt/) */
get_header();
get_template_part('template-parts/site-header');
if (isset($_GET['ny'])) { /* overhaling */
  require get_template_directory() . '/kontakt-ny.php';
  get_template_part('template-parts/site-footer'); get_footer(); return;
}
get_template_part('template-parts/page-hero', null, [
  'label' => 'Kontakt os', 'title' => 'Vil du vide mere? Vi er klar til at hjælpe',
  'lead'  => 'Har du spørgsmål, eller ønsker du at indgå et samarbejde med os? Så er vi klar til at hjælpe dig videre. Du kan ringe til os på 26 34 44 54, sende os en mail eller udfylde kontaktformularen herunder.',
]);
?>
<div id="indhold"></div>
<section class="sg-cinfo" aria-label="Kontaktoplysninger">
  <div class="sg-wrap sg-cinfo__grid sg-cinfo--v2">
    <div class="sg-cinfo__card"><span class="sg-gk-ico"><?php echo sg_icon('building'); ?></span><p class="sg-cinfo__l">Virksomhed</p><p class="sg-cinfo__k">Simply Guiding</p><p>CVR: 37319643</p></div>
    <a class="sg-cinfo__card" href="https://maps.google.com/?q=Lumbyvej+11,+5000+Odense+C" target="_blank" rel="noopener"><span class="sg-gk-ico"><?php echo sg_icon('pin'); ?></span><p class="sg-cinfo__l">Besøg os</p><p class="sg-cinfo__k">Lumbyvej 11</p><p>5000 Odense C</p></a>
    <a class="sg-cinfo__card" href="tel:+4526344454"><span class="sg-gk-ico"><?php echo sg_icon('phone'); ?></span><p class="sg-cinfo__l">Ring til os</p><p class="sg-cinfo__k">26 34 44 54</p><p>Fra 08:00 – 17:00</p></a>
    <a class="sg-cinfo__card" href="mailto:kontakt@simplyguiding.dk"><span class="sg-gk-ico"><?php echo sg_icon('mail'); ?></span><p class="sg-cinfo__l">Skriv til os</p><p class="sg-cinfo__k">kontakt@simplyguiding.dk</p><p>Du kan altid sende os en mail</p></a>
  </div>
</section>
<?php get_template_part('template-parts/contact-form'); ?>
<?php get_template_part('template-parts/team', null, ['title' => 'Holdet bag Simply Guiding']); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
