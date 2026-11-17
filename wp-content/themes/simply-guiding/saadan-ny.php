<?php
/* Sådan arbejder vi – overhaling (vises på /saadan-arbejder-vi/?ny=1). Samme tekst og rækkefølge; nyt layout. */
?>
<!-- Mindset og metoder -->
<section class="sg-gk-intro sg-sw-mind" aria-labelledby="sgMindTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <h2 class="sg-h2" id="sgMindTitle">Mindset og metoder</h2>
      <p class="sg-gk-lead">Vores indsatser er tilrettelagt ud fra mindset, principper, redskaber fra Supported Employment og IPS-metoden. Der er evidens for at opnå en højere effekt, når man arbejder ud fra disse metoder. Vi er som den eneste private aktør i Danmark specialister i Supported Employment og IPS-metoden.</p>
      <p class="sg-textlink"><a href="/hvad-er-ips/">Læs mere om IPS her <?php echo sg_arrow(); ?></a></p>
    </div>
    <div class="sg-gk-split__main">
      <ul class="sg-sw-cards">
        <li><span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span><div><h3>Uddannelse og supervision</h3><p>Vores medarbejdere uddannes af certificerede undervisere og arbejder metodebaseret – fx med Supported Employment, IPS og Supported Education (SEd). Alle har en individuel supervisor.</p></div></li>
        <li><span class="sg-gk-ico"><?php echo sg_icon('people'); ?></span><div><h3>Praktisk læring og feedback</h3><p>Praktisk læring mellem medarbejder og supervisor holder fast i metoden og vores mindset, baseret på en tillidsfuld feedbackkultur – og sikrer momentum i hvert forløb.</p></div></li>
      </ul>
    </div>
  </div>
</section>

<!-- Tæt samarbejde med landets jobcentre -->
<section class="sg-os-belief sg-sw-partner" aria-labelledby="sgPartnerTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side"><h2 class="sg-os-belief__title" id="sgPartnerTitle">Tæt samarbejde med landets jobcentre</h2></div>
    <div class="sg-gk-split__main">
      <p>Samarbejdet med det enkelte jobcenter er funderet i et partnerskab, hvor vi tilbyder at inspirere med specifik viden og evt. undervisning til jobcentrets medarbejdere med den opnåede specialisterfaring, som Simply Guiding har erhvervet gennem årene.</p>
      <div class="sg-sw-btns">
        <a class="sg-btn sg-btn--lg" href="/kontakt">Kontakt os og hør mere</a>
        <a class="sg-btn sg-btn--lg sg-btn--outline sg-gk-price__btn--ghost" href="/om-os/">Læs mere om os</a>
      </div>
    </div>
  </div>
</section>

<!-- Borgere -->
<section class="sg-gk-format sg-sw-citizens" aria-labelledby="sgCitizensTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media sg-gk-split--flip">
    <div class="sg-gk-split__main">
      <h2 class="sg-h2" id="sgCitizensTitle">Hvordan arbejder Simply Guiding med borgere?</h2>
      <p class="sg-gk-lead">Målet med vores støtte er, at hver person får udviklet sine evner og kan deltage i arbejdslivet eller uddannelsessystemet, på lige fod med alle andre, uanset udfordringer. Vi tror på bæredygtige og trygge relationer. Hos Simply Guiding får borgeren derfor sin egen konsulent tilknyttet. Sammen kortlægger de kompetencer, ressourcer og drømme for fremtiden.</p>
      <p>Konsulenten har et tæt samarbejde med kandidaten og der er altid ugentligt kontakt. Vi er uddannet i at inddrage pårørende, netværk eller andre personer, som er relevante at inddrage for at understøtte kandidatens progression mod job, uddannelse, bedre trivsel, raskmelding, etc.</p>
    </div>
    <div class="sg-gk-split__media"><img src="<?php echo esc_url($u); ?>/assets/borgere.jpg" alt="To unge mænd går og snakker på en sti i skoven" width="1200" height="715" loading="lazy"></div>
  </div>
</section>

<!-- Konsulenter -->
<section class="sg-gk-format sg-sw-consult" aria-labelledby="sgConsultTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media">
    <div class="sg-gk-split__media sg-os-tall"><img src="<?php echo esc_url($u); ?>/assets/konsulenter-v2.jpg" alt="To kolleger i en varm snak på kontoret" width="1536" height="1024" loading="lazy"></div>
    <div class="sg-gk-split__main">
      <h2 class="sg-h2" id="sgConsultTitle">Simply Guiding’s konsulenter</h2>
      <p class="sg-gk-lead">Vores jobspecialister har en bred vifte af kompetencer og forskellige faglige baggrunde, der understøtter forløbet for den enkelte borger. Men det vigtigste er deres mindset, som vi løbende superviserer og træner dem i at bevare og udvikle, nemlig at de tror på borgeren og vedkommendes muligheder for fremtiden.</p>
      <p class="sg-gk-sub">Vi arbejder efter følgende principper i Simply Guiding:</p>
      <ul class="sg-sw-principles">
        <?php foreach (['Suspender din forforståelse og mød mennesket hvor det er', 'Tro på borgeren', 'Hav blik for borgerens ressourcer', 'Indgyd borgeren håb', 'Vi tror på, og arbejder efter ”place then train” modellen'] as $pr) : ?>
        <li><?php echo sg_check_svg(); ?><span><?php echo esc_html($pr); ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
