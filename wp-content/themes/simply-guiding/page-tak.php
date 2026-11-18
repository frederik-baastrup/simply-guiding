<?php
/* Tak (/tak/) – vises efter en formular er sendt */
get_header();
get_template_part('template-parts/site-header');
$fra = isset($_GET['fra']) ? wp_validate_redirect(esc_url_raw(rawurldecode(wp_unslash($_GET['fra']))), '') : '';
if ($fra && untrailingslashit($fra) === untrailingslashit(home_url())) $fra = '';
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split sg-hero--noimg sg-hero--msg sg-hero--thanks" aria-labelledby="sgPageTitle">
    <div class="sg-split"><div class="sg-split__copy">
      <p class="sg-pill">Formularen blev udfyldt korrekt</p>
      <h1 id="sgPageTitle">Tusind tak for din henvendelse</h1>
      <p class="sg-hero__lead">Vi har modtaget din besked, og den vil blive besvaret hurtigst muligt. Haster det, kan du altid ringe til os på 26 34 44 54, så får du fat på os med det samme.</p>
      <div class="sg-hero__actions">
        <a class="sg-btn sg-btn--lg sg-thanks__back" href="<?php echo esc_url($fra ?: home_url('/')); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 6l-6 6 6 6"/></svg><?php echo $fra ? 'Tilbage hvor du kom fra' : 'Tilbage til forsiden'; ?></a>
        <a class="sg-btn sg-btn--lg sg-btn--ghost" href="tel:+4526344454">Ring på 26 34 44 54</a>
      </div>
    </div></div>
    <img class="sg-thanks__person" src="<?php echo esc_url(get_template_directory_uri() . '/assets/kontakt-marlene.webp'); ?>" alt="Marlene Mohn Ishøi, Driftsdirektør, Simply Guiding">
    <p class="sg-final__name sg-thanks__name"><b>Marlene Mohn Ishøi</b><span>Driftsdirektør, Simply Guiding</span>
      <span class="sg-final__name-contact"><a href="tel:+4551909603">51 90 96 03</a><a href="mailto:marlene@simplyguiding.dk">marlene@simplyguiding.dk</a></span>
    </p>
  </section>
</div>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
