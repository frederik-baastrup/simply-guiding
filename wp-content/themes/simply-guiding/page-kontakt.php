<?php
/* Kontakt (/kontakt/) */
get_header();
get_template_part('template-parts/site-header');
get_template_part('template-parts/page-hero', null, [
  'label' => 'Kontakt os', 'title' => 'Vil du vide mere? Vi er klar til at hjælpe',
  'lead'  => 'Har du spørgsmål, eller ønsker du at indgå et samarbejde med os? Så er vi klar til at hjælpe dig videre. Du kan ringe til os på 26 34 44 54, sende os en mail eller udfylde kontaktformularen herunder.',
]);
?>
<div id="indhold"></div>
<section class="sg-cinfo" aria-label="Kontaktoplysninger">
  <div class="sg-wrap sg-cinfo__grid">
    <div class="sg-cinfo__card"><p class="sg-cinfo__k">Simply Guiding</p><p>CVR: 37319643</p></div>
    <div class="sg-cinfo__card"><p class="sg-cinfo__k">Lumbyvej 11</p><p>5000 Odense C</p></div>
    <a class="sg-cinfo__card" href="tel:+4526344454"><p class="sg-cinfo__k">Ring på 26 34 44 54</p><p>Fra 08:00 – 17:00</p></a>
    <a class="sg-cinfo__card" href="mailto:kontakt@simplyguiding.dk"><p class="sg-cinfo__k">kontakt@simplyguiding.dk</p><p>Du kan altid sende os en mail</p></a>
  </div>
</section>
<?php get_template_part('template-parts/contact-form'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
