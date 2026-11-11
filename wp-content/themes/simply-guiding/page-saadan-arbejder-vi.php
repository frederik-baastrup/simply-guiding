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
  </section>
  <!-- Logo-bar: hvid fane med bløde buer, der går op i hero'en (som på det gamle site) -->
  <div class="sg-logobar">
    <svg class="sg-logobar__tab" viewBox="0 0 1000 40" preserveAspectRatio="none" aria-hidden="true"><path d="M0 40 C90 40 80 0 170 0 L830 0 C920 0 910 40 1000 40 Z" fill="#fff"/></svg>
    <div class="sg-logobar__inner">
      <p class="sg-logobar__label">Vi har bl.a. samarbejdet med</p>
      <div class="sg-logos" aria-label="Kommuner vi har samarbejdet med">
        <div class="sg-logos__track"><?php $logo_list(false); $logo_list(true); ?></div>
      </div>
    </div>
  </div>
</div>

<div id="indhold"></div>

<section class="sg-mind" aria-labelledby="sgMindTitle">
  <div class="sg-wrap sg-mind__grid">
    <div class="sg-mind__media"><img src="<?php echo esc_url($u); ?>/assets/mindset.jpg" alt="Konsulenter fra Simply Guiding i samtale" width="840" height="1050" loading="lazy"></div>
    <div class="sg-mind__copy">
      <h2 class="sg-mind__title" id="sgMindTitle">Mindset og metoder</h2>
      <p>Vores indsatser er tilrettelagt ud fra mindset, principper, redskaber fra Supported Employment og IPS-metoden. Der er evidens for at opnå en højere effekt, når man arbejder ud fra disse metode. Vi er som den eneste private aktør i Danmark specialister i Supported Employment og IPS-metoden. <a href="/hvad-er-ips/">Læs mere om IPS her</a>.</p>
      <p>Simply Guidings medarbejdere uddannes af certificerede undervisere og arbejder metodebaseret. For eksempel ud fra metoder som Supported Employment, IPS og Supported Education (SEd).</p>
      <p>Medarbejderne modtager supervision i vores metodegrundlag, og har tilknyttet en individuel supervisor. Derudover organiserer vi praktisk læring mellem medarbejder og supervisor, så vi hele tiden opretholder metodisk tilgang og vores mindset, der er baseret på en tillidsfuld feedbackkultur. Det er helt essentielt at tilbyde supervision til hver enkelt medarbejder for at fastholde momentum i hvert enkelt forløb.</p>
    </div>
  </div>
</section>

<section class="sg-partner" aria-labelledby="sgPartnerTitle">
  <div class="sg-wrap sg-partner__inner">
    <h2 class="sg-partner__eyebrow" id="sgPartnerTitle">Tæt samarbejde med landets jobcentre</h2>
    <p class="sg-partner__text">Samarbejdet med det enkelte jobcenter er funderet i et partnerskab, hvor vi tilbyder at inspirere med specifik viden og evt. undervisning til jobcentrets medarbejdere med den opnåede specialisterfaring, som Simply Guiding har erhvervet gennem årene.</p>
    <div class="sg-partner__actions">
      <a class="sg-btn sg-btn--lg" href="/kontakt">Kontakt os og hør mere</a>
      <a class="sg-btn sg-btn--lg sg-btn--outline" href="/om-os/">Læs mere om os</a>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
