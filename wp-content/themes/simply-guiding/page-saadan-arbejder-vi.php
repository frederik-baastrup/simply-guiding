<?php
/* Sådan arbejder vi (/saadan-arbejder-vi/) – samme adresse som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$logos = [
  ['aalborg', 'Aalborg Kommune'], ['varde', 'Varde Kommune'], ['svendborg', 'Svendborg Kommune'], ['soenderborg', 'Sønderborg Kommune'],
  ['koege', 'Køge Kommune'], ['faaborg-midtfyn', 'Faaborg-Midtfyn Kommune', 'is-tall'], ['gladsaxe', 'Gladsaxe Kommune'],
];
$logo_list = function ($hidden) use ($u, $logos) {
  echo '<ul class="sg-logos__list"' . ($hidden ? ' aria-hidden="true"' : '') . '>';
  foreach ($logos as $l) {
    printf('<li><img src="%s/assets/%s.png" alt="%s"%s></li>', esc_url($u), $l[0], $hidden ? '' : esc_attr($l[1]), isset($l[2]) ? ' class="' . $l[2] . '"' : '');
  }
  echo '</ul>';
};
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split" aria-labelledby="sgPageTitle">
    <div class="sg-split">
      <div class="sg-split__copy">
        <p class="sg-pill">Metode</p>
        <h1 id="sgPageTitle">Sådan arbejder vi</h1>
        <p class="sg-hero__lead">Simply Guidings medarbejdere uddannes og arbejder metodebaseret. For eksempel ud fra IPS, Supported Employment, og IPS UNG/Supported Education (SEd). Læs mere om vores metoder og processer her.</p>
        <div class="sg-hero__actions">
          <a class="sg-btn sg-btn--lg" href="/kontakt">Kontakt os og hør mere</a>
          <a class="sg-btn sg-btn--lg sg-btn--ghost" href="#indhold">Læs mere</a>
        </div>
      </div>
      <div class="sg-split__media">
        <img src="<?php echo esc_url($u); ?>/assets/saadan-arbejder-vi.jpg" alt="Tre medarbejdere i arbejdstøj læsser udstyr ud af en varevogn" width="1600" height="1054" fetchpriority="high">
      </div>
    </div>
    <div class="sg-hero-bottom">
      <div class="sg-hero__notch">
        <div class="sg-hero__notch-inner">
          <p class="sg-hero__notch-label">Vi har bl.a. samarbejdet med</p>
          <div class="sg-logos" aria-label="Kommuner vi har samarbejdet med">
            <div class="sg-logos__track"><?php $logo_list(false); $logo_list(true); ?></div>
          </div>
        </div>
        <svg class="sg-hero__curve" viewBox="0 0 200 64" preserveAspectRatio="none" aria-hidden="true"><path d="M0 0 C100 0 100 64 200 64 L0 64 Z" fill="#fff"/></svg>
      </div>
    </div>
  </section>
</div>

<div id="indhold"></div>
<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
