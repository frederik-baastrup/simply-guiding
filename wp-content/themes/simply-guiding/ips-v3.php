<?php
/* IPS-konsulentuddannelse – v3 (live 17. nov. 2026). Samme opbygning som Grundkursus v3 (sg-gk3-*). Samme tekst og fakta. */
$u = get_template_directory_uri();
$folder = $u . '/assets/ips-konsulentuddannelse-folder.pdf';
$topics = [
  ['Metoden og de otte principper', 'Du bliver undervist i IPS-metoden og de otte principper, den bygger på. Du lærer at screene kandidater til IPS-forløb og at arbejde tværfagligt med kandidaten i centrum.'],
  ['Værktøjer til jobskabelse', 'Du får konkrete værktøjer til at støtte psykisk sårbare i at opnå job eller uddannelse – herunder virksomhedskontakt, etablering af praktikker og jobmatch.'],
  ['Kortlægning og en realistisk plan', 'Du lærer at kortlægge kandidatens muligheder og lægge en ambitiøs og realistisk plan med fokus på det ordinære arbejdsmarked eller adgang til uddannelse.'],
];
?>
<div id="info"></div>

<!-- 1. Overblik -->
<section class="sg-gk3-intro" id="om-uddannelsen" aria-labelledby="ipsIntroTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-intro__grid">
      <div>
        <p class="sg-gk-label">Om uddannelsen</p>
        <h2 class="sg-h2" id="ipsIntroTitle">Bliv uddannet til IPS-konsulent hos Simply Guiding</h2>
      </div>
      <div class="sg-gk3-intro__txt">
        <p class="sg-gk-lead">Med uddannelsen til IPS-konsulent får du indgående viden om metoden og bliver klædt på til at praktisere alle dens elementer – fra on-boarding af kandidater, virksomhedsmatch og opstart af et arbejdsrettet forløb til tværfagligt samarbejde og fastholdelse i job eller uddannelse.</p>
        <p>Du og dine kolleger får løbende supervision af jeres praksis med vejledning på jeres kandidatforløb. I jobcentre, der vil introducere IPS som ny praksis, uddannes typisk flere medarbejdere, så de sammen udgør et IPS-team.</p>
      </div>
    </div>
    <ul class="sg-gk3-facts" aria-label="Uddannelsen kort fortalt">
      <li><span class="sg-gk-ico"><?php echo sg_icon('calendar'); ?></span><span><small>Varighed</small>Typisk 54 uger · 15 dage</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('people'); ?></span><span><small>Form</small>Teori, øvelser og rollespil</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('shield'); ?></span><span><small>Afslutning</small>Fidelity og Advanced Practitioner</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('tag'); ?></span><span><small>Pris</small>Efter aftale</span></li>
    </ul>
  </div>
</section>

<!-- 2. Det lærer du -->
<section class="sg-gk3-prog" aria-labelledby="ipsTopicsTitle">
  <div class="sg-wrap sg-gk3-prog__grid">
    <div class="sg-gk3-prog__side">
      <h2 class="sg-h2" id="ipsTopicsTitle">Det lærer du på uddannelsen</h2>
      <p class="sg-gk3-prog__claim">Simply Guiding er den førende leverandør af den evidensbaserede IPS-metode, som hjælper psykisk sårbare tilbage til et stabilt og givende arbejdsliv.</p>
      <a class="sg-btn sg-btn--lg" href="/kontakt/">Kontakt os</a>
    </div>
    <ol class="sg-gk3-prog__list">
      <?php foreach ($topics as $i => $t) : ?>
      <li><span class="sg-gk3-prog__no"><?php echo sprintf('%02d', $i + 1); ?></span><div><h3><?php echo esc_html($t[0]); ?></h3><p><?php echo esc_html($t[1]); ?></p></div></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- 3. Sådan foregår det -->
<section class="sg-gk3-format" aria-labelledby="ipsFormatTitle">
  <div class="sg-wrap sg-gk3-format__grid">
    <div class="sg-gk3-format__txt">
      <p class="sg-gk-label">Sådan foregår det</p>
      <h2 class="sg-h2" id="ipsFormatTitle">Tre måder at lære på</h2>
      <ol class="sg-gk3-mini">
        <li><h3>Teoretisk viden</h3><p>Principperne bag IPS, IPS-manualen og komplementære teorier – og hvordan du bruger dem med kandidater og virksomheder.</p></li>
        <li><h3>Praktiske øvelser</h3><p>Du arbejder med dine egne kandidater, vi gennemgår cases i dybden, og du får løbende feedback, så dine sager ikke går i stå.</p></li>
        <li><h3>Rollespil</h3><p>Du trænes i de situationer, der kan opstå i et IPS-forløb – fx at screene kandidater og arbejde tværfagligt med kandidaten i fokus.</p></li>
      </ol>
    </div>
    <figure class="sg-gk3-format__img sg-gk3-format__img--tall"><img src="<?php echo esc_url($u); ?>/assets/kursus-tilmeld.jpg" alt="Kursusdeltagere hos Simply Guiding" loading="lazy"></figure>
  </div>
</section>

<!-- 4. I praksis -->
<section class="sg-gk3-daily" aria-labelledby="ipsDailyTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-daily__box">
      <div>
        <p class="sg-gk-label">I praksis</p>
        <h2 class="sg-h2" id="ipsDailyTitle">IPS bliver en integreret del af din arbejdsdag</h2>
        <p class="sg-gk3-daily__lead">IPS er en beskæftigelsesindsats for mennesker med psykiske diagnoser eller psykisk sårbarhed, som ønsker – og er motiverede for – at komme i arbejde eller uddannelse.</p>
      </div>
      <div class="sg-gk3-daily__txt">
        <p>Med IPS-indsatsens principper og værktøjer lærer du at følge borgerens vej og sætte deres ønsker og drømme i centrum. Du afdækker, hvad der interesserer den enkelte, og kortlægger og beskriver deres kompetencer – så du kan give den rette støtte og finde det bedst mulige jobmatch.</p>
        <p>IPS-opgaverne er ofte mere omfattende end i en traditionel jobindsats. De spænder fra jobafklaring til konkrete udfordringer i borgerens hverdag, og arbejdet koordineres, hvor det er relevant, med fx bostøtte, sociale mentorer eller psykiatriske behandlere.</p>
        <p>Du arbejder aktivt med dine kandidater – uanset sygdomsstatus – så længe de er motiverede for job eller uddannelse. Målet er job, uddannelse og hel eller delvis selvforsørgelse, og metoden læner sig op ad principperne om empowerment og mestring af eget liv.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. For hvem + afslutning -->
<section class="sg-gk3-band" aria-labelledby="ipsWhoTitle">
  <div class="sg-gk3-band__box">
    <div class="sg-gk3-band__grid">
      <div>
        <p class="sg-gk3-band__label">Målgruppe</p>
        <h2 class="sg-h2" id="ipsWhoTitle">Er uddannelsen til IPS-konsulent noget for dig?</h2>
        <p class="sg-gk3-band__intro">Uddannelsen er for dig, der:</p>
        <ul class="sg-gk3-band__list">
          <li><?php echo sg_check_svg(); ?><span>ønsker at kunne arbejde selvstændigt med IPS-opgaver i hverdagen</span></li>
          <li><?php echo sg_check_svg(); ?><span>er kreativ og vedholdende i din problemløsning og ser muligheder – uanset borgerens forudsætninger</span></li>
          <li><?php echo sg_check_svg(); ?><span>vil have indgående viden om IPS-metoden og tilgangen til jobskabelse</span></li>
          <li><?php echo sg_check_svg(); ?><span>vil oplæres i metoder som den motiverende samtale, den værdsættende samtale og andre relevante tilgange</span></li>
          <li><?php echo sg_check_svg(); ?><span>allerede arbejder med borgerrettede eller virksomhedsrettede aktiviteter i et jobcenter</span></li>
        </ul>
      </div>
      <div>
        <p class="sg-gk3-band__label">Afslutning</p>
        <h2 class="sg-h2" id="ipsValueTitle">Afslut med Fidelity og bliv Advanced Practitioner</h2>
        <p class="sg-gk3-band__intro">Som afsluttende led kan der gennemføres en Fidelity-evaluering, udført af vores egne IPS-konsulenter – jeres blåstempling af, at I udfører IPS-indsatsen korrekt og effektivt.</p>
        <ol class="sg-gk3-band__gain">
          <li><span>01</span>Jeres indsats vurderes ud fra Fidelity-skalaen</li>
          <li><span>02</span>I får en mundtlig tilbagemelding og en skriftlig rapport med score</li>
          <li><span>03</span>Du opnår titlen Certificeret Advanced Practitioner</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 6. Praktisk information -->
<section class="sg-gk3-price" aria-labelledby="ipsInfoTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-price__head">
      <h2 class="sg-h2" id="ipsInfoTitle">Praktisk information</h2>
      <div>
        <p>Uddannelsen planlægges i samarbejde med jer. Ring for en drøftelse af indhold og pris, eller hent folderen med alle detaljer.</p>
      </div>
    </div>
    <ul class="sg-gk3-info">
      <li><span class="sg-gk-ico"><?php echo sg_icon('calendar'); ?></span><small>Varighed</small><strong>Typisk 54 uger med 15 kursusdage</strong></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('tag'); ?></span><small>Pris</small><strong>Ring for en drøftelse af indhold og pris</strong></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('card'); ?></span><small>Betaling</small><strong>Almindelig faktura eller EAN-nummer</strong></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('phone'); ?></span><small>Booking</small><strong>Ring eller skriv til os</strong></li>
    </ul>
    <div class="sg-gk3-cta">
      <span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span>
      <div class="sg-gk3-cta__txt">
        <h3>Vil du vide mere om uddannelsen?</h3>
        <p>Hent folderen med alle detaljer, eller ring på 26 34 44 54 for en drøftelse af indhold og pris.</p>
      </div>
      <div class="sg-gk3-cta__btns">
        <a class="sg-btn sg-btn--lg sg-btn--outline" href="<?php echo esc_url($folder); ?>" target="_blank" rel="noopener">Hent folder (PDF)</a>
        <a class="sg-btn sg-btn--lg" href="/kontakt/">Kontakt os</a>
      </div>
    </div>
  </div>
</section>
