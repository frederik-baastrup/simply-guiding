<?php
/* Tak (/tak/) – vises efter en formular er sendt */
get_header();
get_template_part('template-parts/site-header');
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split sg-hero--noimg sg-hero--msg" aria-labelledby="sgPageTitle">
    <div class="sg-split"><div class="sg-split__copy">
      <p class="sg-pill">Formularen blev udfyldt korrekt</p>
      <h1 id="sgPageTitle">Tusind tak for din henvendelse</h1>
      <p class="sg-hero__lead">Vi har modtaget din besked, og den vil blive besvaret hurtigst muligt. Haster det, kan du altid ringe til os på 26 34 44 54, så får du fat på os med det samme.</p>
      <div class="sg-hero__actions">
        <a class="sg-btn sg-btn--lg" href="tel:+4526344454">Ring på 26 34 44 54</a>
        <a class="sg-btn sg-btn--lg sg-btn--ghost" href="/">Tilbage til forsiden</a>
      </div>
    </div></div>
  </section>
</div>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
