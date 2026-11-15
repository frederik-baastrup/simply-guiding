<?php
/* Sådan arbejder vi – nyt bud v2 (live 15. nov. 2026). Samme tekst; ny opbygning og rækkefølge. */
$principles = ['Suspender din forforståelse og mød mennesket hvor det er', 'Tro på borgeren', 'Hav blik for borgerens ressourcer', 'Indgyd borgeren håb', 'Vi tror på, og arbejder efter ”place then train” modellen'];
?>
<!-- Mindset og metoder -->
<section class="sg-sw2 sg-sw2-mind" aria-labelledby="sgMindTitle">
  <div class="sg-wrap">
    <div class="sg-sw2-head">
      <h2 class="sg-h2" id="sgMindTitle">Mindset og metoder</h2>
      <div>
        <p class="sg-gk-lead">Vores indsatser er tilrettelagt ud fra mindset, principper, redskaber fra Supported Employment og IPS-metoden. Der er evidens for at opnå en højere effekt, når man arbejder ud fra disse metoder. Vi er som den eneste private aktør i Danmark specialister i Supported Employment og IPS-metoden.</p>
        <p class="sg-textlink"><a href="/hvad-er-ips/">Læs mere om IPS her <?php echo sg_arrow(); ?></a></p>
      </div>
    </div>
    <div class="sg-sw2-trio">
      <figure class="sg-sw2-trio__img"><img src="<?php echo esc_url($u); ?>/assets/mindset.jpg" alt="" loading="lazy"></figure>
      <article class="sg-sw2-card"><span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span><h3>Uddannelse og supervision</h3><p>Vores medarbejdere uddannes af certificerede undervisere og arbejder metodebaseret – fx med Supported Employment, IPS og Supported Education (SEd). Alle har en individuel supervisor.</p></article>
      <article class="sg-sw2-card"><span class="sg-gk-ico"><?php echo sg_icon('people'); ?></span><h3>Praktisk læring og feedback</h3><p>Praktisk læring mellem medarbejder og supervisor holder fast i metoden og vores mindset, baseret på en tillidsfuld feedbackkultur – og sikrer momentum i hvert forløb.</p></article>
    </div>
  </div>
</section>

<!-- Borgere -->
<section class="sg-sw2 sg-sw2-citizens" aria-labelledby="sgCitizensTitle">
  <div class="sg-wrap">
    <figure class="sg-sw2-banner"><img src="<?php echo esc_url($u); ?>/assets/borgere.jpg" alt="To unge mænd går og snakker på en sti i skoven" width="1200" height="715" loading="lazy"></figure>
    <div class="sg-sw2-head">
      <h2 class="sg-h2" id="sgCitizensTitle">Hvordan arbejder Simply Guiding med borgere?</h2>
      <div>
        <p class="sg-gk-lead">Målet med vores støtte er, at hver person får udviklet sine evner og kan deltage i arbejdslivet eller uddannelsessystemet, på lige fod med alle andre, uanset udfordringer. Vi tror på bæredygtige og trygge relationer. Hos Simply Guiding får borgeren derfor sin egen konsulent tilknyttet. Sammen kortlægger de kompetencer, ressourcer og drømme for fremtiden.</p>
        <p>Konsulenten har et tæt samarbejde med kandidaten og der er altid ugentligt kontakt. Vi er uddannet i at inddrage pårørende, netværk eller andre personer, som er relevante at inddrage for at understøtte kandidatens progression mod job, uddannelse, bedre trivsel, raskmelding, etc.</p>
      </div>
    </div>
    <ul class="sg-sw2-chips" aria-label="Kort fortalt">
      <li><span class="sg-gk-ico"><?php echo sg_icon('user'); ?></span>Egen konsulent</li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('calendar'); ?></span>Altid ugentlig kontakt</li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('people'); ?></span>Pårørende og netværk inddrages</li>
    </ul>
  </div>
</section>

<!-- Konsulenter -->
<section class="sg-sw2 sg-sw2-consult" aria-labelledby="sgConsultTitle">
  <div class="sg-wrap">
    <div class="sg-sw2-split">
      <figure class="sg-sw2-split__img"><img src="<?php echo esc_url($u); ?>/assets/konsulenter.jpg" alt="Konsulent fra Simply Guiding i samtale med en borger" width="840" height="1050" loading="lazy"></figure>
      <div class="sg-sw2-split__txt">
        <h2 class="sg-h2" id="sgConsultTitle">Simply Guiding’s konsulenter</h2>
        <p class="sg-gk-lead">Vores jobspecialister har en bred vifte af kompetencer og forskellige faglige baggrunde, der understøtter forløbet for den enkelte borger. Men det vigtigste er deres mindset, som vi løbende superviserer og træner dem i at bevare og udvikle, nemlig at de tror på borgeren og vedkommendes muligheder for fremtiden.</p>
      </div>
    </div>
    <p class="sg-gk-sub sg-sw2-sub">Vi arbejder efter følgende principper i Simply Guiding:</p>
    <ol class="sg-sw2-principles">
      <?php foreach ($principles as $i => $pr) : ?>
      <li><span><?php echo sprintf('%02d', $i + 1); ?></span><p><?php echo esc_html($pr); ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- Tæt samarbejde med landets jobcentre -->
<section class="sg-sw2 sg-sw2-partner" aria-labelledby="sgPartnerTitle">
  <div class="sg-wrap">
    <div class="sg-sw2-panel">
      <figure><img src="<?php echo esc_url($u); ?>/assets/samarbejde.jpg" alt="" loading="lazy"></figure>
      <div class="sg-sw2-panel__txt">
        <p class="sg-gk-label">Jobcentre</p>
        <h2 class="sg-h2" id="sgPartnerTitle">Tæt samarbejde med landets jobcentre</h2>
        <p>Samarbejdet med det enkelte jobcenter er funderet i et partnerskab, hvor vi tilbyder at inspirere med specifik viden og evt. undervisning til jobcentrets medarbejdere med den opnåede specialisterfaring, som Simply Guiding har erhvervet gennem årene.</p>
        <div class="sg-sw-btns">
          <a class="sg-btn sg-btn--lg" href="/kontakt">Kontakt os og hør mere</a>
          <a class="sg-btn sg-btn--lg sg-btn--outline" href="/om-os/">Læs mere om os</a>
        </div>
      </div>
    </div>
  </div>
</section>
