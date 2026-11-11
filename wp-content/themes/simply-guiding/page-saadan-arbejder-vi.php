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
  <!-- Logo-bar som på det gamle site: hvid fane med skrå sider op i hero'en, label + streg + logo-slider -->
  <div class="sg-logobar">
    <div class="sg-logobar__tab" aria-hidden="true"></div>
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

<div class="sg-band-wrap">
  <section class="sg-band" aria-labelledby="sgCitizensTitle">
    <div class="sg-wrap sg-band__grid">
      <div class="sg-band__copy">
        <h2 class="sg-band__title" id="sgCitizensTitle">Hvordan arbejder Simply Guiding med borgere?</h2>
        <p>Målet med vores støtte er, at hver person får udviklet sine evner og kan deltage i arbejdslivet eller uddannelsessystemet, på lige fod med alle andre, uanset udfordringer. Vi tror på bæredygtige og trygge relationer. Hos Simply Guiding får borgeren derfor sin egen konsulent tilknyttet. Sammen kortlægger de kompetencer, ressourcer og drømme for fremtiden.</p>
        <p>Konsulenten har et tæt samarbejde med kandidaten og der er altid ugentligt kontakt. Vi er uddannet i at inddrage pårørende, netværk eller andre personer, som er relevante at inddrage for at understøtte kandidatens progression mod job, uddannelse, bedre trivsel, raskmelding, etc.</p>
      </div>
      <div class="sg-band__media"><img src="<?php echo esc_url($u); ?>/assets/borgere.jpg" alt="To unge mænd går og snakker på en sti i skoven" width="1200" height="715" loading="lazy"></div>
    </div>
  </section>
</div>

<section class="sg-mind sg-mind--white" aria-labelledby="sgConsultTitle">
  <div class="sg-wrap sg-mind__grid">
    <div class="sg-mind__media"><img src="<?php echo esc_url($u); ?>/assets/konsulenter.jpg" alt="Konsulent fra Simply Guiding i samtale med en borger" width="840" height="1050" loading="lazy"></div>
    <div class="sg-mind__copy">
      <h2 class="sg-mind__title" id="sgConsultTitle">Simply Guiding’s konsulenter</h2>
      <p>Vores jobspecialister har en bred vifte af kompetencer og forskellige faglige baggrunde, der understøtter forløbet for den enkelte borger. Men det vigtigste er deres mindset, som vi løbende superviserer og træner dem i at bevare og udvikle, nemlig at de tror på borgeren og vedkommendes muligheder for fremtiden.</p>
      <h3 class="sg-mind__sub">Vi arbejder efter følgende principper i Simply Guiding:</h3>
      <ul class="sg-checks">
        <?php foreach (['Suspender din forforståelse og mød mennesket hvor det er', 'Tro på borgeren', 'Hav blik for borgerens ressourcer', 'Indgyd borgeren håb', 'Vi tror på, og arbejder efter ”place then train” modellen'] as $pr) : ?>
        <li><svg viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="8.6" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M6.2 10.3l2.5 2.5 5-5.3" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo esc_html($pr); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<div class="sg-band-wrap">
  <section class="sg-more" aria-labelledby="sgMoreTitle">
    <img class="sg-more__bg" src="<?php echo esc_url($u); ?>/assets/vide-mere.jpg" alt="" width="2000" height="1333" loading="lazy">
    <div class="sg-wrap sg-more__inner">
      <h2 class="sg-more__title" id="sgMoreTitle">Vil du vide mere?</h2>
      <p>Har du spørgsmål angående vores løsninger og indsatser? Så er vores konsulenter altid klar til at hjælpe. Du kan kontakte os på 26 34 44 54 eller skrive til os via vores kontaktformular. Vi sidder klar til at hjælpe dig til at finde den perfekte løsning.</p>
      <div class="sg-more__actions">
        <a class="sg-btn sg-btn--lg" href="tel:+4526344454">Ring på 26 34 44 54</a>
        <a class="sg-btn sg-btn--lg sg-btn--ghost" href="/kontakt">Udfyld vores kontaktformular</a>
      </div>
    </div>
  </section>
</div>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
