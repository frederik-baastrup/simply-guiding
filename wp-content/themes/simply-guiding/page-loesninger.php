<?php
/* Løsninger (/loesninger/) – samme adresse, tekst og ankre som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$checks = function ($items) use ($check) { echo '<ul class="sg-principles">'; foreach ($items as $i) echo '<li>' . $check . esc_html($i) . '</li>'; echo '</ul>'; };
get_template_part('template-parts/page-hero', null, [
  'label' => 'Løsninger', 'title' => 'Se vores løsninger',
  'lead'  => 'Simply Guiding tilbyder en række løsninger der er skræddersyet til specifikke målgrupper. Her kan du læse mere om de forskellige modeller og indholdet af de konkrete indsatser og metoder som vi praktiserer.',
  'img' => 'loesninger-hero.jpg', 'img_w' => 1600, 'img_h' => 1067, 'alt' => 'Kandidatsamtale hos Simply Guiding',
]);
$sol = [
  ['beskaeftigelsesindsatser', 'Beskæftigelsesindsatser', 'Simply Guiding leverer beskæftigelsesindsatser til ledige på alle forsørgelsesgrundlag. Forløbet er altid individuelt tilrettelagt, håndholdt og skræddersyet til borgerens behov.'],
  ['ungeindsatser', 'Ungeindsatser', 'I vores indsatser for unge, 18-29 år, tager vi udgangspunkt i hver enkelte unges drømme og ønsker for et liv med uddannelse eller arbejde og under hensyn til den støtte, som de har brug for i deres arbejdsliv.'],
  ['forsikrings-og-pensionsindsatser', 'Forsikrings- og pensionsindsatser', 'Vi samarbejder med danske pensions- og forsikringsselskaber for at tilbyde evidensbaserede og metodiske løsninger målrettet sygemeldte med psykiske eller fysiske lidelser.'],
  ['boern-unge-og-familieindsatser', 'Børne-, unge- og familieindsatser', 'Børn og unge i alderen 12-17 år med svær mistrivsel får en tilgang, der fokuserer på deres individuelle behov for personlig og faglig støtte samt inklusion i fællesskaber, fritids- og jobaktiviteter.'],
  ['academy', 'Academy', 'Vi er Danmarks største private udbyder af IPS-kurser med stor erfaring i at uddanne kommunale teams og har bidraget til dannelsen af de mest velfungerende IPS-teams i landet.'],
];
?>

<div id="indhold"></div>

<section class="sg-projects sg-projects--five" aria-label="Løsninger">
  <div class="sg-wrap">
    <div class="sg-projects__grid">
      <?php foreach ($sol as $i => $s) : ?>
      <article class="sg-project<?php echo $i === 0 ? ' sg-project--active' : ''; ?>">
        <h2 class="sg-project__title" style="margin-top:0"><?php echo esc_html($s[1]); ?></h2>
        <p class="sg-project__text"><?php echo esc_html($s[2]); ?></p>
        <a class="sg-project__link" href="#<?php echo esc_attr($s[0]); ?>">Klik for at læse mere <span aria-hidden="true">→</span></a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sg-sol-intro" aria-labelledby="sgSolTitle"><div class="sg-wrap"><h2 class="sg-h2" id="sgSolTitle">Aktuelle løsninger</h2></div></section>

<section class="sg-sol" id="beskaeftigelsesindsatser" aria-labelledby="sgSol1">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/loesninger-beskaeftigelse.jpg" alt="Beskæftigelsesindsats hos Simply Guiding" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h3 class="sg-h2" id="sgSol1">Beskæftigelsesindsatser</h3>
      <p>Vores indsatser fokuserer på, hvordan borgerens motivation og ønske om deltagelse på arbejdsmarkedet, eller i uddannelse kan realiseres. Vores samarbejde med en borger er altid baseret på et gensidigt engagement i det fælles mål, der skal opnås.</p>
      <p>Vi arbejder ud fra en metodisk tilgang, der sikrer fremdrift og fokus på drømme, jobdevelopment, det ordinære arbejdsmarked, udvikling af kompetencer og altid med fokus på bæredygtig beskæftigelse for den enkelte borger. Vi anvender efterværn, hvor det er muligt, da det mindsker risiko for gentagen ledighed.</p>
      <p>Vores beskæftigelsesindsatser målrettet mennesker, der står uden for et arbejdsfællesskab, og som har brug for en støttende indsats for at finde en ny vej i tilværelse mod selvforsørgelse. Vi arbejder dagligt for at skabe et inkluderende arbejdsmarked, og vi har stor viden og erfaring med at samarbejde med lokale virksomheder om at åbne deres arbejdspladser for mennesker, der har behov for inklusion i arbejdsfællesskabet. Vi har oparbejdet en særlig viden om at støtte mennesker med psykisk sårbarhed og psykiske lidelser, da vi har arbejdet med IPS-metoden siden virksomhedens start i 2015.</p>
      <p>Vores indsatser tager derfor udgangspunkt i den metodiske tilgang fra IPS, herunder mindset og principper. Overordnet set er det dog vigtigst for os, når vi støtter mennesker på deres vej, at det er kandidatens motivation for at komme i arbejde eller i uddannelse, der danner udgangspunktet, men hvor der kræves en individuel, håndholdt og tværfaglig indsats for at opnå målet. Vi kortlægger kandidatens muligheder og drømme, så der kan igangsættes en ambitiøs og realistisk jobplan, som sætter retning og mål. Målet er beskæftigelse på det ordinære arbejdsmarked eller uddannelse, så der opnås hel eller delvis selvforsørgelse.</p>
    </div>
  </div>
</section>

<section class="sg-sol sg-sol--flip" id="ungeindsatser" aria-labelledby="sgSol2">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/loesninger-unge.jpg" alt="Ung i praktik" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h3 class="sg-h2" id="sgSol2">Ungeindsatser</h3>
      <p>Simply Guidings ungeindsatser er inspireret af flere forskellige traditioner og grundtanker, som fx det narrative, det systemiske, det kognitive og recovery-tilgangen. Tilgange som hviler på mindset og principper fra IPS-metoden, hvor det mest centrale princip i arbejdet med de unge er; ’At samarbejde med afsæt i de unges drømme, erfaringer, ressourcer, behov og tempo’.</p>
      <p>Målgruppen er unge i alderen 18-29 år, der lever med en psykisk sygdom (fx skizofreni, bipolar, autisme) eller psykisk sårbarhed (fx depression, angst, stress). Udover at leve med en psykisk lidelse eller psykisk sårbarhed spænder de unges baggrund og livsvilkår vidt. Det primære mål med vores ungeindsatser er at de unge starter og fastholdes i ordinær beskæftigelse eller uddannelse.</p>
      <h4 class="sg-mind3__h3">Her er nogle af de pejlemærker, der guider vores ungevejledere i arbejdet med de unge:</h4>
      <?php $checks(['Vi lader den unge være ekspert på eget liv.', 'Vi er nysgerrige på den unges liv og relationer til andre – uden at konkludere på deres vegne (`parkere` vores forforståelser).', 'Selvfølgelige positive forventninger og `vikariende håb`.', 'At vi bruger de unges egne ord for det de oplever, frem for at kategorisere og diagnosticere.', 'At arbejde ud fra en `ikke-diagnostiks tilgang` og en mere dynamisk og eksplorativ forståelse af diagnoser.']); ?>
      <p>Der arbejdes med individuelt tilrettelagte forløb, hvor den unges ønsker og behov sææter retningen for indsatsen. Samtidig samler vi de unge i netværksgrupper, hvor de mødes ugentligt for at dele erfaringer og oplevelser med hinanden. Som en rød tråd i indsatsen arbejder vi med at inddrage den unge i alle faser af forløbet.</p>
    </div>
  </div>
</section>

<section class="sg-sol" id="forsikrings-og-pensionsindsatser" aria-labelledby="sgSol3">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/loesninger-forsikring.jpg" alt="Forsikrings- og pensionsindsats" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h3 class="sg-h2" id="sgSol3">Forsikrings- og pensionsindsatser</h3>
      <p>Simply Guiding samarbejder med flere af landets forsikrings- og pensionsselskaber med det formål at understøtte processen fra sygemeldt til rask for deres kunder.</p>
      <p>Simply Guiding er en landsdækkende konsulentvirksomhed, hvor målsætningen er at hjælpe forsikringskunder med at fastholde kontakten til arbejdsmarkedet efter helbredsmæssige problemer. Vi er specialiseret i at støtte sygemeldte med psykiske helbredsmæssige problemer, det kan være stress, angst, depression eller mere alvorlige psykiske lidelser.</p>
      <p>Når vi tilbyder en indsats til en kunde fra et pensions- eller forsikringsselskab, er formålet at tilbyde et skræddersyet forløb, der centrerer sig omkring individuel sparring og coaching, jobdevelopment/jobstøtte og en koordinerende funktion, som hjælper kunden i en udfordrende periode.</p>
      <h4 class="sg-mind3__h3">Vi kan eksempelvis hjælpe med:</h4>
      <?php $checks(['Planlægning af din tilbagevenden, enten til kendt arbejde eller understøtte orientering mod ny beskæftigelse', 'Hvordan du passer på dig selv og dine ressourcer, herunder fx psykoedukation og mestringsstrategier', 'Dialog med arbejdsgiver for at tilrettelægge en god plan for at genoptage dit arbejde helt eller delvist', 'Kontakt til kommune og jobcenter for at være tovholder på din proces', 'Dialog med behandler/læge']); ?>
      <p>Vores konsulenter har alle stor erfaring med at støtte mennesker, der har brug for afklaring og udvikling af deres ressourcer. Vi er vant til at indgå i dialog med relevante samarbejdspartnere, fx: Virksomhed, a-kasse, jobcenter, praktiserende læge/speciallæge, psykiater, psykolog, fysioterapeut m.fl.</p>
    </div>
  </div>
</section>

<section class="sg-sol sg-sol--flip" id="boern-unge-og-familieindsatser" aria-labelledby="sgSol4">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/loesninger-boern-unge.jpg" alt="Børne-, unge- og familieindsats" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h3 class="sg-h2" id="sgSol4">Børne-, unge- og familieindsatser</h3>
      <p>Vores indsatser er for børn og unge i aldersgruppen 12-17 år, hvor kommunens familieforvaltning vurderer, at de eksisterende tilbud efter Barnets Lov ikke er tilstrækkelige til at hjælpe den unge med at komme i gang med uddannelse eller job. Det er unge der ikke modtager tilbud i det almindelige skolesystem eller er i stor risiko for at falde ud, ofte lever de med social marginalisering og psykisk mistrivsel, og nogle af de unge kæmper med misbrug og en opvækst med mange svigt og brud.</p>
      <h4 class="sg-mind3__h3">Ved opstart på et ungeforløb laver vi sammen med den unge, forældre og kommunens ungerådgiver en handleplan, der sætter retning og mål for samarbejdet, der kan omfatte et eller flere af følgende aktiviteter:</h4>
      <?php $checks(['Arbejdserfaringer fra fritidsjob eller virksomhedspraktik.', 'Kobling til fællesskaber og fritidsaktiviteter.', 'Læringsforløb og pædagogisk støtte.', 'Støtte til uddannelsesvalg og opstart på uddannelse.', 'Støtte til personlig udvikling og håndtering af psykiske symptomer.']); ?>
      <p>Vores ungevejledere tilrettelægger et individuelt forløb, der støtter op om de unges psykiske udfordringer og behov for særlig tilrettelagt støtte. Alt efter den unges situation og støttebehov kan et forløb omfatte få timers konfrontationstid om ugen med sparring til at starte og fastholdes i et fritidsjob, over et mere omfattende forløb med støtte til skole- og fritidsaktiviteter, til en intensiv indsats hvor den unge modtager et særligt tilrettelagt undervisningsforløb.</p>
    </div>
  </div>
</section>

<section class="sg-sol" id="academy" aria-labelledby="sgSol5">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/mindset.jpg" alt="Undervisning i Simply Guiding Academy" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h3 class="sg-h2" id="sgSol5">Academy</h3>
      <p>Simply Guiding har som den eneste private aktør i Danmark uddannet kommunale IPS-teams i landets jobcentre. Vores uddannelsesforløb spænder bredt, og giver mulighed for særligt tilrettelagte uddannelsesforløb, uanset om det er målrettet en enkelt konsulent eller et samlet IPS-team.</p>
      <p>Vores certificerede supervisorteam tilbyder også supervision i IPS. Dette kan både forgå individuelt for IPS-konsulenten, IPS-lederen eller for hele teamet.</p>
      <p>Derudover har vi mulighed for at afholde kurser, hvor hele teamet får et boost for at opnå bedre resultater eller performance.</p>
      <p>Vores kurser og uddannelsesforløb kan sammensættes efter jeres behov, så kontakt os på tlf. 26 34 44 54, hvis du vil høre nærmere.</p>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/quote', null, [
  'label' => 'Det siger vores samarbejdspartnere',
  'quote' => '"Simply Guiding har haft en professionel tilgang til opgaven, og med den kontinuerlige opfølgning og supervision, er vi hele tiden blevet skubbet tilbage på sporet, i den svære omstilling til et nyt mindset."',
  'name' => 'Heidi Iversen', 'role' => 'Faglig koordinator hos Ringkøbing-Skjern Jobcenter', 'photo' => 'heidi-iversen.jpg',
  'btn_text' => 'Se vores cases her', 'btn_href' => '/cases/',
]); ?>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/more'); ?>
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
