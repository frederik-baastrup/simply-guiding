<?php
/* IPS-konsulentuddannelse (/ips-konsulentuddannelse/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$checks = function ($items) use ($check) { echo '<ul class="sg-principles">'; foreach ($items as $i) echo '<li>' . $check . esc_html($i) . '</li>'; echo '</ul>'; };
get_template_part('template-parts/page-hero', null, [
  'label' => 'Academy', 'title' => 'IPS-konsulentuddannelse',
  'lead'  => 'Tag Danmarks mest omfattende IPS-uddannelse og bliv klædt på til at arbejde som IPS-konsulent. Her kan du læse mere om, hvad du lærer på kurset.',
  'img' => 'mindset.jpg', 'img_w' => 840, 'img_h' => 1050, 'alt' => 'Undervisning hos Simply Guiding', 'img_pos' => '50% 0%',
]);
?>
<div id="indhold"></div>

<section class="sg-mind3" aria-labelledby="sgEduTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><img src="<?php echo esc_url($u); ?>/assets/kursus-tilmeld.jpg" alt="Kursusdeltagere hos Simply Guiding" loading="lazy"></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgEduTitle">Bliv uddannet til IPS-konsulent hos Simply Guiding</h2>
      <p class="sg-mind3__lead">Med uddannelsen til IPS-konsulent, får du indgående viden om metoden og bliver klædt på til at praktisere alle elementer i metoden. Lær om on-boarding af kandidater, at virksomhedsmatche og at opstarte et arbejdsrettet forløb, samt tværfagligt samarbejde og fastholdelse af kandidaten i job eller uddannelse.</p>
      <p>Du og dine kolleger får løbende supervision af din praksis som IPS-konsulent med vejledning på dine kandidatforløb. I jobcentre, der ønsker at introducere IPS som ny praksis, uddannes typisk flere medarbejdere til rollen som IPS-konsulent, så de sammen udgør et IPS-team.</p>
    </div>
  </div>
</section>

<section class="sg-steps" aria-labelledby="sgStepsTitle">
  <img class="sg-steps__bg" src="<?php echo esc_url($u); ?>/assets/indsats-academy.jpg" alt="" loading="lazy">
  <div class="sg-wrap sg-steps__in">
    <p class="sg-pill">Forløbet</p>
    <h2 class="sg-steps__title" id="sgStepsTitle">Fra teori til <span>certificeret praksis</span></h2>
    <ol class="sg-steps__list">
      <li><small>01</small><h3>Teoretisk viden</h3><p>Principperne og metoden bag IPS, IPS-manualen og værktøjerne.</p></li>
      <li><small>02</small><h3>Praktiske øvelser</h3><p>Du arbejder med dine egne kandidater og får løbende feedback.</p></li>
      <li><small>03</small><h3>Rollespil</h3><p>Du trænes i de situationer, der kan opstå i et IPS-forløb.</p></li>
      <li><small>04</small><h3>Fidelity</h3><p>Evaluering med mundtlig tilbagemelding og skriftlig rapport med score.</p></li>
    </ol>
  </div>
</section>

<section class="sg-sol sg-sol--flip sg-sol--plain" aria-labelledby="sgLearnTitle">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/uddannelse-forskning.jpg" alt="Undervisning i IPS-metoden" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h2 class="sg-h2" id="sgLearnTitle">Hvad lærer du på konsulentuddannelsen?</h2>
      <p>På konsulentuddannelsen bliver du undervist i IPS-metoden og de otte principper, som metoden bygger på. Du lærer at screene kandidater til IPS-forløb og at arbejde tværfagligt med IPS-kandidaten i centrum.</p>
      <p>Uddannelsen giver dig desuden konkrete værktøjer til arbejdet med at støtte psykisk sårbare i at opnå job eller uddannelse, herunder virksomhedskontakt, etablering af praktikker og jobmatch.</p>
      <p>Du lærer at kortlægge dine kandidaters muligheder på arbejdsmarkedet og at udarbejde en ambitiøs og realistisk plan med fokus på beskæftigelse på det ordinære arbejdsmarked eller adgang til uddannelse.</p>
    </div>
  </div>
</section>

<section class="sg-sol sg-sol--plain" aria-labelledby="sgFidTitle">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/uddannelse-fidelity.jpg" alt="IPS-team til evaluering" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h2 class="sg-h2" id="sgFidTitle">Afslut med Fidelity og bliv Advanced Practitioner</h2>
      <p>Som det afsluttende led i konsulentuddannelsen kan der gennemføres en Fidelity-evaluering, udført af vores egne IPS-konsulenter. Fidelity er din blåstempling af, at du – sammen med dine kollegaer – udfører IPS-indsatsen korrekt og effektivt i overensstemmelse med metoden.</p>
      <p>Jeres indsats bliver vurderet ud fra Fidelity-skalaen, og I modtager både en mundtlig tilbagemelding og en skriftlig rapport med score. Når du har gennemført en Fidelity, opnår du titlen Certificeret Advanced Practitioner.</p>
    </div>
  </div>
</section>

<div class="sg-band-wrap" style="margin-top:56px">
  <section class="sg-band2 sg-principles8" aria-labelledby="sgContentTitle">
    <div class="sg-wrap">
      <div class="sg-band2__head">
        <div><p class="sg-pill">Indhold</p><h2 class="sg-h2 sg-h2--light" id="sgContentTitle" style="margin-top:20px">Hvad indeholder IPS-kurset?</h2></div>
        <p class="sg-principles8__intro">Med IPS-konsulentuddannelsen vil du være i stand til selv at drive forløbene fra den indledende visitation og screening til den afsluttende rapportering. Her får du et kort overblik over de i alt 15 kursusdages indhold, samt praktisk information.</p>
      </div>
      <div class="sg-cols3">
        <div><h3>Teoretisk viden</h3><p>På IPS-konsulentuddannelsen vil du – til at begynde med – få en indgående forståelse for principperne og metoden bag IPS, samt hvordan du omsætter metodens mål og midler i det praktiske arbejde med kandidater, virksomheder og øvrige samarbejdspartnere.</p><p>Du vil blive undervist i IPS-manualen, de værktøjer der understøtter dine IPS-arbejdsopgaver, samt andet relevant undervisningsmateriale.</p><p>Derudover vil du få undervisning i komplementære teorier, der understøtter IPS-metoden.</p></div>
        <div><h3>Praktiske øvelser</h3><p>Når teoridagene er gennemført, begynder du at arbejde med dine egne kandidater i din hverdag.</p><p>På de efterfølgende undervisningsdage vil vi gennemgå cases, der går i dybden med borgerforløb, så du nemmere kan omsætte din viden til praksis i dit arbejde som IPS-konsulent.</p><p>Du vil også løbende få feedback og konkrete råd til dine egne cases, så dine sager ikke går i stå.</p></div>
        <div><h3>Rollespil</h3><p>Jo tættere vi kommer på virkeligheden, desto bedre rustet er du til opgaverne.</p><p>Derfor arbejder vi også med øvelser og rollespil, så du bliver trænet i de mange forskellige situationer, der kan opstå i et IPS-forløb.</p><p>Du lærer at screene potentielle kandidater til indsatsen og at arbejde tværfagligt med fokus på IPS-kandidaten.</p></div>
      </div>
    </div>
  </section>
</div>

<section class="sg-pdetail sg-intro sg-intro--roomy" aria-labelledby="sgWhyTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side"><h2 class="sg-h2" id="sgWhyTitle">Hvorfor Simply Guiding?</h2>
      <p class="sg-pdetail__sidetext">Ønsker du, eller dit team at blive uddannede inden for IPS-metoden og kunne praktisere dette i jeres arbejde med borgere, kan I altid kontakte os for mere information.</p>
      <p class="sg-pdetail__actions" style="display:flex;gap:14px;flex-wrap:wrap"><a class="sg-btn sg-btn--lg" href="/kontakt/">Kontakt os</a><a class="sg-btn sg-btn--lg sg-btn--outline" href="<?php echo esc_url($u); ?>/assets/ips-konsulentuddannelse-folder.pdf" target="_blank" rel="noopener">Se folder</a></p>
    </div>
    <div class="sg-pdetail__body">
      <p class="sg-intro__lead">Vi er den førende leverandør af den evidensbaserede IPS-metode, som hjælper psykisk sårbare tilbage til et stabilt og givende arbejdsliv. Vores kurser og uddannelser er rettet mod dig som arbejder i en kommune eller et jobcenter, der ønsker mere erfaringsbaseret og praksisnær viden om IPS eller vil uddanne dig til at arbejde med metoden.</p>
      <h3 class="sg-mind3__h3">Vores IPS-uddannelse er for dig, der:</h3>
      <?php $checks(['Ønsker at kunne arbejde selvstændigt med IPS-opgaver i hverdagen', 'Er kreativ og vedholdende i din problemløsning og ser muligheder – uanset borgerens forudsætninger', 'Har et ønske om at opnå indgående viden om IPS-metoden og tilgangen til jobskabelse', 'Vil oplæres i metoder som den motiverende samtale, den værdsættende samtale og andre relevante tilgange', 'Allerede arbejder med borgerrettede eller virksomhedsrettede aktiviteter i et jobcenter']); ?>
    </div>
  </div>
</section>

<section class="sg-sol sg-sol--flip" aria-labelledby="sgDailyTitle">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/uddannelse-integreret.jpg" alt="IPS-konsulent i samtale" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h2 class="sg-h2" id="sgDailyTitle">IPS-metoden bliver en integreret del af din arbejdsdag</h2>
      <p>IPS er en beskæftigelsesindsats målrettet mennesker med psykiske diagnoser eller psykisk sårbarhed, som har et ønske om – og er motiverede for – at komme i arbejde eller uddannelse.</p>
      <p>Med IPS-indsatsens principper og værktøjer lærer du, hvordan du følger borgerens vej og sætter deres ønsker og drømme i centrum. Det sker blandt andet ved at afdække, hvad der interesserer den enkelte, samt at kortlægge og beskrive deres kompetencer. Målet er at give den rette støtte og finde det bedst mulige jobmatch.</p>
      <p>IPS-opgaverne er ofte mere omfattende end i en traditionel jobindsats. De spænder fra jobafklaring til håndtering af konkrete vanskeligheder og udfordringer i borgerens hverdag. Arbejdet koordineres, hvor det er relevant, med andre støttepersoner som fx bostøtte, sociale mentorer eller psykiatriske behandlere.</p>
      <p>Som IPS-konsulent arbejder du aktivt med dine IPS-kandidater – uanset deres sygdomsstatus – så længe de er motiverede for at komme i arbejde eller uddannelse. Det er deres motivation og fremtidsønsker, der er omdrejningspunktet i indsatsen. Det ønskede slutmål for IPS er job, uddannelse og hel eller delvis selvforsørgelse. Metoden læner sig op ad principperne om empowerment og mestring af eget liv.</p>
    </div>
  </div>
</section>

<section class="sg-tiles2" aria-labelledby="sgPracTitle">
  <div class="sg-wrap">
    <div class="sg-headline"><h2 class="sg-h2" id="sgPracTitle">Praktisk information om kurset</h2></div>
    <div class="sg-tiles2__grid sg-tiles2__grid--4">
      <div class="sg-tile2"><svg class="sg-tile2__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 7v5l3 2"/><circle cx="12" cy="12" r="9"/></svg><h3>Varighed</h3><p>Uddannelsen løber typisk over 54 uger og består af i alt 15 undervisnings- og evalueringsdage. Undervisningsdagene planlægges med den enkelte afdeling.</p></div>
      <div class="sg-tile2"><svg class="sg-tile2__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3 10h18M7 15h3"/></svg><h3>Betaling</h3><p>Betaling af kurset kan ske via almindelig fakturering, eller I kan også betale via EAN nummer.</p></div>
      <div class="sg-tile2"><svg class="sg-tile2__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3.5 12.5V4.5a1 1 0 0 1 1-1h8l8 8-9 9-8-8z"/><circle cx="8.5" cy="8.5" r="1.5"/></svg><h3>Pris</h3><p>Ring til os for en nærmere drøftelse af indhold og pris for IPS-konsulentuddannelsen.</p></div>
      <div class="sg-tile2"><svg class="sg-tile2__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3.5" y="5" width="17" height="15" rx="2"/><path d="M3.5 10h17M8 3v4M16 3v4M9 15l2 2 4-4"/></svg><h3>Booking</h3><p>Ring eller skriv til os for at høre nærmere om booking af IPS-konsulentuddannelsen.</p></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
