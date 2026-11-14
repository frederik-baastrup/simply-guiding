<?php
/* IPS-konsulentuddannelse – nyt bud (vises på /ips-konsulentuddannelse/?ny=1). Samme oplysninger som siden, stillet op som Grundkursus (sg-gk-*). */
$u = get_template_directory_uri();
$folder = $u . '/assets/ips-konsulentuddannelse-folder.pdf';
?>
<div id="info"></div>

<!-- Nøglefakta -->
<section class="sg-gk-facts" aria-label="Uddannelsen kort fortalt">
  <div class="sg-wrap">
    <ul class="sg-gk-facts__list">
      <li><?php echo sg_icon('calendar'); ?><span><small>Varighed</small>Typisk 54 uger · 15 kursusdage</span></li>
      <li><?php echo sg_icon('people'); ?><span><small>Form</small>Teori, praktiske øvelser og rollespil</span></li>
      <li><?php echo sg_icon('shield'); ?><span><small>Afslutning</small>Fidelity og titlen Advanced Practitioner</span></li>
      <li><?php echo sg_icon('tag'); ?><span><small>Pris</small>Efter aftale – ring og hør nærmere</span></li>
    </ul>
  </div>
</section>

<!-- Om uddannelsen -->
<section class="sg-gk-intro" id="om-uddannelsen" aria-labelledby="ipsIntroTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">Om uddannelsen</p>
      <h2 class="sg-h2" id="ipsIntroTitle">Bliv uddannet til IPS-konsulent hos Simply Guiding</h2>
    </div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-lead">Med uddannelsen til IPS-konsulent får du indgående viden om metoden og bliver klædt på til at praktisere alle dens elementer – fra on-boarding af kandidater, virksomhedsmatch og opstart af et arbejdsrettet forløb til tværfagligt samarbejde og fastholdelse i job eller uddannelse.</p>
      <p>Du og dine kolleger får løbende supervision af jeres praksis med vejledning på jeres kandidatforløb. I jobcentre, der vil introducere IPS som ny praksis, uddannes typisk flere medarbejdere, så de sammen udgør et IPS-team.</p>
      <p class="sg-gk-note"><?php echo sg_icon('shield'); ?>Simply Guiding er den førende leverandør af den evidensbaserede IPS-metode, som hjælper psykisk sårbare tilbage til et stabilt og givende arbejdsliv.</p>
    </div>
  </div>
</section>

<!-- Det lærer du -->
<section class="sg-gk-topics" aria-labelledby="ipsTopicsTitle">
  <div class="sg-wrap">
    <div class="sg-headline"><h2 class="sg-h2" id="ipsTopicsTitle">Det lærer du på uddannelsen</h2></div>
    <ul class="sg-gk-topics__grid sg-gk-topics__grid--text">
      <li><span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span><h3>Metoden og de otte principper</h3><p>Du bliver undervist i IPS-metoden og de otte principper, den bygger på. Du lærer at screene kandidater til IPS-forløb og at arbejde tværfagligt med kandidaten i centrum.</p></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('briefcase'); ?></span><h3>Værktøjer til jobskabelse</h3><p>Du får konkrete værktøjer til at støtte psykisk sårbare i at opnå job eller uddannelse – herunder virksomhedskontakt, etablering af praktikker og jobmatch.</p></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('map'); ?></span><h3>Kortlægning og en realistisk plan</h3><p>Du lærer at kortlægge kandidatens muligheder og lægge en ambitiøs og realistisk plan med fokus på det ordinære arbejdsmarked eller adgang til uddannelse.</p></li>
    </ul>
  </div>
</section>

<!-- Sådan foregår uddannelsen -->
<section class="sg-gk-format" aria-labelledby="ipsFormatTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media">
    <div class="sg-gk-split__media"><img src="<?php echo esc_url($u); ?>/assets/kursus-tilmeld.jpg" alt="Kursusdeltagere hos Simply Guiding" loading="lazy"></div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-label">Sådan foregår det</p>
      <h2 class="sg-h2" id="ipsFormatTitle">Tre måder at lære på</h2>
      <ol class="sg-gk-steps">
        <li><span>01</span><div><h3>Teoretisk viden</h3><p>Principperne bag IPS, IPS-manualen og komplementære teorier – og hvordan du bruger dem med kandidater og virksomheder.</p></div></li>
        <li><span>02</span><div><h3>Praktiske øvelser</h3><p>Du arbejder med dine egne kandidater, vi gennemgår cases i dybden, og du får løbende feedback, så dine sager ikke går i stå.</p></div></li>
        <li><span>03</span><div><h3>Rollespil</h3><p>Du trænes i de situationer, der kan opstå i et IPS-forløb – fx at screene kandidater og arbejde tværfagligt med kandidaten i fokus.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<!-- IPS i arbejdsdagen -->
<section class="sg-gk-intro sg-gk-daily" aria-labelledby="ipsDailyTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">I praksis</p>
      <h2 class="sg-h2" id="ipsDailyTitle">IPS bliver en integreret del af din arbejdsdag</h2>
      <p>IPS er en beskæftigelsesindsats for mennesker med psykiske diagnoser eller psykisk sårbarhed, som ønsker – og er motiverede for – at komme i arbejde eller uddannelse.</p>
    </div>
    <div class="sg-gk-split__main">
      <p>Med IPS-indsatsens principper og værktøjer lærer du at følge borgerens vej og sætte deres ønsker og drømme i centrum. Du afdækker, hvad der interesserer den enkelte, og kortlægger og beskriver deres kompetencer – så du kan give den rette støtte og finde det bedst mulige jobmatch.</p>
      <p>IPS-opgaverne er ofte mere omfattende end i en traditionel jobindsats. De spænder fra jobafklaring til konkrete udfordringer i borgerens hverdag, og arbejdet koordineres, hvor det er relevant, med fx bostøtte, sociale mentorer eller psykiatriske behandlere.</p>
      <p>Du arbejder aktivt med dine kandidater – uanset sygdomsstatus – så længe de er motiverede for job eller uddannelse. Deres motivation og fremtidsønsker er omdrejningspunktet, og målet er job, uddannelse og hel eller delvis selvforsørgelse. Metoden læner sig op ad principperne om empowerment og mestring af eget liv.</p>
    </div>
  </div>
</section>

<!-- Målgruppe -->
<section class="sg-gk-who" aria-labelledby="ipsWhoTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">Målgruppe</p>
      <h2 class="sg-h2" id="ipsWhoTitle">Er uddannelsen noget for dig?</h2>
      <p>Vores kurser og uddannelser er rettet mod dig, der arbejder i en kommune eller et jobcenter og ønsker mere erfaringsbaseret og praksisnær viden om IPS – eller vil uddanne dig til at arbejde med metoden.</p>
      <p class="sg-textlink"><a href="/kontakt/">Kontakt os <?php echo sg_arrow(); ?></a></p>
    </div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-sub">Uddannelsen er for dig, der:</p>
      <ul class="sg-gk-who__list">
        <li><?php echo sg_check_svg(); ?><span>ønsker at kunne arbejde selvstændigt med IPS-opgaver i hverdagen</span></li>
        <li><?php echo sg_check_svg(); ?><span>er kreativ og vedholdende i din problemløsning og ser muligheder – uanset borgerens forudsætninger</span></li>
        <li><?php echo sg_check_svg(); ?><span>vil have indgående viden om IPS-metoden og tilgangen til jobskabelse</span></li>
        <li><?php echo sg_check_svg(); ?><span>vil oplæres i metoder som den motiverende samtale, den værdsættende samtale og andre relevante tilgange</span></li>
        <li><?php echo sg_check_svg(); ?><span>allerede arbejder med borgerrettede eller virksomhedsrettede aktiviteter i et jobcenter</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- Fidelity + praktisk information -->
<section class="sg-gk-value" aria-labelledby="ipsValueTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">Afslutning</p>
      <h2 class="sg-h2" id="ipsValueTitle">Afslut med Fidelity og bliv Advanced Practitioner</h2>
      <p>Som afsluttende led kan der gennemføres en Fidelity-evaluering, udført af vores egne IPS-konsulenter. Fidelity er jeres blåstempling af, at I udfører IPS-indsatsen korrekt og effektivt i overensstemmelse med metoden.</p>
      <ol class="sg-gk-gain">
        <li><span>01</span>Jeres indsats vurderes ud fra Fidelity-skalaen</li>
        <li><span>02</span>I får en mundtlig tilbagemelding og en skriftlig rapport med score</li>
        <li><span>03</span>Du opnår titlen Certificeret Advanced Practitioner</li>
      </ol>
    </div>
    <div class="sg-gk-split__main">
      <div class="sg-gk-price">
        <p class="sg-gk-price__title">Praktisk information</p>
        <p class="sg-gk-price__sub">Uddannelsen planlægges i samarbejde med jer.</p>
        <dl class="sg-gk-price__rows">
          <div><dt>Varighed</dt><dd>Typisk 54 uger med 15 kursusdage</dd></div>
          <div><dt>Pris</dt><dd>Ring for en drøftelse af indhold og pris</dd></div>
          <div><dt>Betaling</dt><dd>Almindelig faktura eller EAN-nummer</dd></div>
          <div><dt>Booking</dt><dd>Ring eller skriv til os</dd></div>
        </dl>
        <div class="sg-gk-price__btns">
          <a class="sg-btn sg-btn--lg sg-gk-price__btn" href="/kontakt/">Kontakt os</a>
          <a class="sg-btn sg-btn--lg sg-btn--outline sg-gk-price__btn sg-gk-price__btn--ghost" href="<?php echo esc_url($folder); ?>" target="_blank" rel="noopener">Se folder</a>
        </div>
      </div>
    </div>
  </div>
</section>
