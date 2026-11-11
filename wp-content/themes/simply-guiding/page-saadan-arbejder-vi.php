<?php
/* Sådan arbejder vi (/saadan-arbejder-vi/) – samme adresse som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
?>
<?php get_template_part('template-parts/page-hero', null, [
  'label' => 'Metode', 'title' => 'Sådan arbejder vi',
  'lead'  => 'Simply Guidings medarbejdere uddannes og arbejder metodebaseret. For eksempel ud fra IPS, Supported Employment, og IPS UNG/Supported Education (SEd). Læs mere om vores metoder og processer her.',
  'img' => 'saadan-arbejder-vi.jpg', 'img_w' => 1600, 'img_h' => 1054, 'alt' => 'Tre medarbejdere i arbejdstøj læsser udstyr ud af en varevogn',
]); ?>

<div id="indhold"></div>


<!-- Mindset og metoder: billedet står stille til venstre, mens teksten løber i en spalte til højre -->
<section class="sg-mind3" aria-labelledby="sgMindTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><img src="<?php echo esc_url($u); ?>/assets/mindset.jpg" alt="Konsulenter fra Simply Guiding i samtale" width="840" height="1050" loading="lazy"></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgMindTitle">Mindset og metoder</h2>
      <p class="sg-mind3__lead">Vores indsatser er tilrettelagt ud fra mindset, principper, redskaber fra Supported Employment og IPS-metoden. Der er evidens for at opnå en højere effekt, når man arbejder ud fra disse metoder. Vi er som den eneste private aktør i Danmark specialister i Supported Employment og IPS-metoden. <a href="/hvad-er-ips/">Læs mere om IPS her</a>.</p>
      <div class="sg-mind3__cols">
        <div><h3 class="sg-mind3__h3">Uddannelse og supervision</h3><p>Simply Guidings medarbejdere uddannes af certificerede undervisere og arbejder metodebaseret. For eksempel ud fra metoder som Supported Employment, IPS og Supported Education (SEd). Medarbejderne modtager supervision i vores metodegrundlag, og har tilknyttet en individuel supervisor.</p></div>
        <div><h3 class="sg-mind3__h3">Praktisk læring og feedback</h3><p>Vi organiserer praktisk læring mellem medarbejder og supervisor, så vi hele tiden opretholder metodisk tilgang og vores mindset, der er baseret på en tillidsfuld feedbackkultur. Det er helt essentielt at tilbyde supervision til hver enkelt medarbejder for at fastholde momentum i hvert enkelt forløb.</p></div>
      </div>
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

<!-- Borgere: mørkt bånd med overskrift og to tekstspalter, bredt billede nedenunder -->
<div class="sg-band-wrap">
  <section class="sg-band2 sg-band2--side" aria-labelledby="sgCitizensTitle">
    <div class="sg-wrap sg-band2__side">
      <div class="sg-band2__head">
        <h2 class="sg-h2 sg-h2--light" id="sgCitizensTitle">Hvordan arbejder Simply Guiding med borgere?</h2>
        <div class="sg-band2__cols">
          <p>Målet med vores støtte er, at hver person får udviklet sine evner og kan deltage i arbejdslivet eller uddannelsessystemet, på lige fod med alle andre, uanset udfordringer. Vi tror på bæredygtige og trygge relationer. Hos Simply Guiding får borgeren derfor sin egen konsulent tilknyttet. Sammen kortlægger de kompetencer, ressourcer og drømme for fremtiden.</p>
          <p>Konsulenten har et tæt samarbejde med kandidaten og der er altid ugentligt kontakt. Vi er uddannet i at inddrage pårørende, netværk eller andre personer, som er relevante at inddrage for at understøtte kandidatens progression mod job, uddannelse, bedre trivsel, raskmelding, etc.</p>
        </div>
      </div>
      <div class="sg-band2__media"><img src="<?php echo esc_url($u); ?>/assets/borgere.jpg" alt="To unge mænd går og snakker på en sti i skoven" width="1200" height="715" loading="lazy"></div>
    </div>
  </section>
</div>

<!-- Konsulenter: billede + tekst, principperne som store linjer -->
<section class="sg-consult" aria-labelledby="sgConsultTitle">
  <div class="sg-wrap sg-consult__grid">
    <div class="sg-consult__media"><img src="<?php echo esc_url($u); ?>/assets/konsulenter.jpg" alt="Konsulent fra Simply Guiding i samtale med en borger" width="840" height="1050" loading="lazy"></div>
    <div class="sg-consult__copy">
      <h2 class="sg-h2" id="sgConsultTitle">Simply Guiding’s konsulenter</h2>
      <p class="sg-consult__lead">Vores jobspecialister har en bred vifte af kompetencer og forskellige faglige baggrunde, der understøtter forløbet for den enkelte borger. Men det vigtigste er deres mindset, som vi løbende superviserer og træner dem i at bevare og udvikle, nemlig at de tror på borgeren og vedkommendes muligheder for fremtiden.</p>
      <h3 class="sg-consult__sub">Vi arbejder efter følgende principper i Simply Guiding:</h3>
      <ul class="sg-principles">
        <?php foreach (['Suspender din forforståelse og mød mennesket hvor det er', 'Tro på borgeren', 'Hav blik for borgerens ressourcer', 'Indgyd borgeren håb', 'Vi tror på, og arbejder efter ”place then train” modellen'] as $pr) : ?>
        <li><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo esc_html($pr); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>


<?php get_template_part('template-parts/final-cta'); ?>

<?php get_template_part('template-parts/more'); ?>

<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
