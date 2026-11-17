<?php
/* Sådan arbejder vi – forslag v3 (vises på /saadan-arbejder-vi/?ny=1, 17. nov. 2026).
   Struktur: metoder (påstand) → borgerforløbet (4 trin) → principper (mørkt bånd) → konsulenterne (uddannelse + supervision) → jobcentre (handling).
   Teksten er den eksisterende, delt op og let forkortet; ingen nye fakta. */
$principles = ['Suspender din forforståelse og mød mennesket, hvor det er', 'Tro på borgeren', 'Hav blik for borgerens ressourcer', 'Indgyd borgeren håb', 'Vi tror på og arbejder efter ”place then train”-modellen'];
$steps = [
  ['user', 'Egen konsulent', 'Vi tror på bæredygtige og trygge relationer. Derfor får borgeren sin egen konsulent tilknyttet.'],
  ['map', 'Fælles kortlægning', 'Sammen kortlægger de kompetencer, ressourcer og drømme for fremtiden.'],
  ['calendar', 'Tæt kontakt', 'Konsulenten har et tæt samarbejde med kandidaten, og der er altid ugentlig kontakt.'],
  ['people', 'Netværket inddrages', 'Vi inddrager pårørende, netværk eller andre relevante personer, så de understøtter vejen mod job, uddannelse, bedre trivsel eller raskmelding.'],
];
?>
<!-- 1. Metoder: sidens påstand -->
<section class="sg-sw3-intro" aria-labelledby="sgMindTitle">
  <div class="sg-wrap sg-sw3-intro__grid">
    <div>
      <p class="sg-gk-label">Mindset og metoder</p>
      <h2 class="sg-h2" id="sgMindTitle">Som den eneste private aktør i Danmark er vi specialister i Supported Employment og IPS</h2>
    </div>
    <div class="sg-sw3-intro__txt">
      <p class="sg-gk-lead">Vores indsatser er tilrettelagt ud fra mindset, principper og redskaber fra Supported Employment og IPS-metoden. Der er evidens for at opnå en højere effekt, når man arbejder ud fra disse metoder.</p>
      <p class="sg-textlink"><a href="/hvad-er-ips/">Læs mere om IPS her <?php echo sg_arrow(); ?></a></p>
    </div>
  </div>
</section>

<!-- 2. Borgerforløbet -->
<section class="sg-sw3-flow" aria-labelledby="sgCitizensTitle">
  <div class="sg-wrap sg-sw3-flow__grid">
    <figure class="sg-sw3-flow__img"><img src="<?php echo esc_url($u); ?>/assets/borgere.jpg" alt="To unge mænd går og snakker på en sti i skoven" loading="lazy"></figure>
    <div class="sg-sw3-flow__main">
      <h2 class="sg-h2" id="sgCitizensTitle">Sådan arbejder vi med borgere</h2>
      <p class="sg-sw3-flow__goal">Målet er, at hver person får udviklet sine evner og kan deltage i arbejdslivet eller uddannelsessystemet på lige fod med alle andre, uanset udfordringer.</p>
      <ol class="sg-sw3-steps">
        <?php foreach ($steps as $i => $st) : ?>
        <li><span class="sg-sw3-steps__no"><?php echo sprintf('%02d', $i + 1); ?></span><div><h3><?php echo esc_html($st[1]); ?></h3><p><?php echo esc_html($st[2]); ?></p></div></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- 3. Principper: mørkt bånd -->
<section class="sg-sw3-band" aria-labelledby="sgPrinTitle">
  <div class="sg-wrap">
    <div class="sg-sw3-band__box">
      <div class="sg-sw3-band__head">
        <h2 class="sg-h2" id="sgPrinTitle">Principperne, vi arbejder efter</h2>
        <p>Det vigtigste er konsulentens mindset: at tro på borgeren og vedkommendes muligheder for fremtiden.</p>
      </div>
      <ol class="sg-sw3-prin">
        <?php foreach ($principles as $i => $pr) : ?>
        <li><span><?php echo sprintf('%02d', $i + 1); ?></span><p><?php echo esc_html($pr); ?></p></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- 4. Konsulenterne -->
<section class="sg-sw3-team" aria-labelledby="sgConsultTitle">
  <div class="sg-wrap sg-sw3-team__grid">
    <div class="sg-sw3-team__main">
      <h2 class="sg-h2" id="sgConsultTitle">Simply Guidings konsulenter</h2>
      <p class="sg-gk-lead">Vores jobspecialister har en bred vifte af kompetencer og forskellige faglige baggrunde, der understøtter forløbet for den enkelte borger. Men det vigtigste er deres mindset, som vi løbende superviserer og træner dem i at bevare og udvikle.</p>
      <div class="sg-sw3-team__cards">
        <article><span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span><h3>Uddannelse og supervision</h3><p>Vores medarbejdere uddannes af certificerede undervisere og arbejder metodebaseret. Alle har en individuel supervisor.</p></article>
        <article><span class="sg-gk-ico"><?php echo sg_icon('people'); ?></span><h3>Praktisk læring og feedback</h3><p>Praktisk læring mellem medarbejder og supervisor, baseret på en tillidsfuld feedbackkultur, sikrer momentum i hvert forløb.</p></article>
      </div>
    </div>
    <figure class="sg-sw3-team__img"><img src="<?php echo esc_url($u); ?>/assets/konsulenter.jpg" alt="Konsulent fra Simply Guiding i samtale med en borger" width="840" height="1050" loading="lazy"></figure>
  </div>
</section>

<!-- Bevis: kundecitat + nøgletal (samme citat og tal som på forsiden og Om os) -->
<section class="sg-sw3-proof" aria-label="Det siger vores kunder">
  <div class="sg-wrap sg-sw3-proof__grid">
    <figure class="sg-sw3-proof__quote">
      <p class="sg-gk-label">Det siger vores kunder</p>
      <blockquote>“Vi oplever, at Simply Guiding har investeret både tid og ressourcer i at bygge et fornuftigt samarbejde op, og der er generelt stor tillid til fagligheden mellem os i Gladsaxe Kommune og IPS UNG-indsatsen.”</blockquote>
      <figcaption>
        <img src="<?php echo esc_url($u); ?>/assets/anne-madsen.jpg" alt="" width="56" height="56" loading="lazy">
        <span><strong>Anne Madsen</strong>Leder for Ungeenheden, Gladsaxe Kommune</span>
      </figcaption>
    </figure>
    <ul class="sg-sw3-proof__stats">
      <li><strong>25+</strong><span>kommuner</span><p>Tæt og tillidsfuldt samarbejde om at løfte beskæftigelses- og ungeindsatsen.</p></li>
      <li><strong>1.500+</strong><span>mennesker</span><p>Individuel støtte tilbage til job, uddannelse eller fællesskab.</p></li>
      <li><strong>10+</strong><span>år i branchen</span><p>Siden 2015 har vi fungeret som en specialiseret og resultatskabende ekstern aktør.</p></li>
    </ul>
  </div>
</section>

<!-- 5. Jobcentre: handling -->
<section class="sg-sw3-partner" aria-labelledby="sgPartnerTitle">
  <div class="sg-wrap">
    <div class="sg-sw3-partner__box">
      <figure><img src="<?php echo esc_url($u); ?>/assets/samarbejde.jpg" alt="" loading="lazy"></figure>
      <div class="sg-sw3-partner__txt">
        <p class="sg-gk-label">Til jobcentre</p>
        <h2 class="sg-h2" id="sgPartnerTitle">Tæt samarbejde med landets jobcentre</h2>
        <p>Samarbejdet med det enkelte jobcenter er funderet i et partnerskab. Vi tilbyder at inspirere jobcentrets medarbejdere med specifik viden og evt. undervisning – med den specialisterfaring, Simply Guiding har opbygget gennem årene.</p>
        <div class="sg-sw-btns">
          <a class="sg-btn sg-btn--lg" href="/kontakt/">Kontakt os og hør mere</a>
          <a class="sg-btn sg-btn--lg sg-btn--outline" href="/om-os/">Læs mere om os</a>
        </div>
      </div>
    </div>
  </div>
</section>
