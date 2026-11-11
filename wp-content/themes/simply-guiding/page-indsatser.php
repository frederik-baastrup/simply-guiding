<?php
/* Indsatser (/indsatser/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
get_template_part('template-parts/page-hero', null, [
  'label' => 'Indsatser', 'title' => 'Overblik over indsatser',
  'lead'  => 'Med afsæt i dokumenterede metoder som Supported Employment og IPS skaber vi inkluderende forløb, der bygger på håb, drømme og individuelle styrker. Se vores indsatser her.',
]);
?>

<div id="indhold"></div>

<section class="sg-pdetail sg-intro" aria-labelledby="sgTailorTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side"><h2 class="sg-h2" id="sgTailorTitle">Skræddersyede indsatser</h2></div>
    <div class="sg-pdetail__body">
      <p class="sg-intro__lead">Hos Simply Guiding omsætter vi potentiale til konkrete resultater. Vi tror på, at alle mennesker kan udvikle sig og finde vej til fællesskab, uddannelse og arbejdsmarkedet.</p>
      <p>Siden 2015 har vi hjulpet kommuner og beskæftigelsesaktører med at skabe målbare resultater for borgere i sårbare situationer.</p>
      <p>Vores tilgang er recoveryorienteret, værdibaseret og ressourcefokuseret – altid med udgangspunkt i det enkelte menneskes håb og drømme for et godt liv.</p>
      <p>Vores faglighed bygger på Supported Employment og IPS-metoden (Individual Placement and Support), som er dokumenteret effektive til at skabe inklusion på arbejdsmarkedet. Grundprincipperne er, at ingen bliver ekskluderet, og alle kan nå deres mål.</p>
    </div>
  </div>
</section>

<section class="sg-tablesec" aria-labelledby="sgIndTableTitle">
  <div class="sg-wrap">
    <div class="sg-tablesec__head">
      <h2 class="sg-h2" id="sgIndTableTitle">Indsatser</h2>
      <p>Her kan du få et overblik over de aktuelle indsatser, vi tilbyder. Tabellen viser målgrupper, formål, indsatsbeskrivelser og metoder – så du nemt kan finde den løsning, der passer bedst til jeres behov.</p>
    </div>
    <?php sg_table([
      ['Indsats', 'Målgruppe', 'Formål', 'Indsats', 'Metode'],
      ['Job & Trivsel:Fra sygemelding til beskæftigelse', 'Sygedagpengemodtagere', 'Hurtigere tilbagevenden til arbejdsmarkedet, styrket arbejdsevne og trivsel', 'Behovsafklaring, handlingsplan, jobmatch, virksomhedsrelationer, fastholdelsesstøtte', 'Supported Employment, tværfagligt samarbejde, individuel jobmatching'],
      ['Klar til Fremtiden: Vejen til arbejdsmarkedet', 'Aktivitetsparate ledige', 'Øget selvhjulpenhed og progression mod job eller uddannelse', 'Motivation, mestringsstrategier, kompetenceudvikling, virksomhedspraktik', 'Individuel støtte, mentorordning, praktikforløb'],
      ['Potentiale i Fokus: Udvikling mod job', 'Ressourceforløbsmodtagere', 'Afklaring af fremtidigt forsørgelsesgrundlag og progression mod arbejdsmarkedet', 'Individuelle forløb, arbejdsevnetræning, koordinering med sundheds- og sociale aktører', 'Tværfaglig afklaring, Supported Employment, social- og sundhedskoordination'],
      ['Bro til Job: Fra ledighedsydelse til beskæftigelse', 'Borgere på ledighedsydelse', 'Øget jobdeltagelse og fleksibel arbejdsmarkedstilknytning', 'Arbejdsevneafklaring, jobmatch, virksomhedsinddragelse, fastholdelse', 'Jobskabelse, mentorstøtte, tæt virksomhedssamarbejde'],
      ['Direkte i Job: Hurtig vej til arbejdsmarkedet', 'Jobparate ledige', 'Hurtig overgang til beskæftigelse', 'CV-optimering, jobsøgningsstrategi, jobsamtaletræning, opstartsstøtte', 'Direkte jobformidling, netværksaktivering, intensive jobsøgningsforløb'],
      ['Vendepunktet', 'Kontanthjælpsmodtagere uden plan eller motivation', 'Øget motivation og afklaring af beskæftigelsesmuligheder', 'Samarbejde med borgeren om en bæredygtig vej mod arbejde eller uddannelse', 'Motiverende samtaler, positivt mindset, fremtidsvisualisering, elementer fra SE-metoden'],
      ['Effekt', 'Borgere med behov for bred funktionsafklaring', 'Afklaring af forsørgelsesgrundlag og plan for videre indsats', 'Virksomhedsforløb med tæt mentoropfølgning på arbejdspladsen', 'Screening, netværksarbejde, samarbejde med sundhedsaktører'],
      ['LifeByInvitation – Employment', 'Borgere langt fra arbejdsmarkedet', 'Styrkelse af personlige og beskæftigelsesrettede ressourcer', 'Modulopbygget program (16 moduler), styrkebaseret udvikling, hurtig jobsøgningsstrategi', 'Styrkebaseret SE-tilgang, refleksionsopgaver, opgaveløsning'],
      ['IPS Ung', 'Unge (18–29 år) med psykisk sårbarhed', 'Fastholdelse i job eller uddannelse', 'Individuelt tilpasset støtte, netværk og håbsskabende tilgang', 'IPS-metoden, suppleret med gruppeforløb'],
      ['Recharge', 'Børn og unge (12–17 år) i svær mistrivsel', 'Skabe trivsel og støtte til skole, fritid og uddannelsesretning', 'Individuel plan, joberfaring, fællesskaber, pædagogisk støtte', 'IPS-metoden, SE UNG'],
      ['Forsikrings- og pensionsindsats', 'Sygemeldte forsikrings- og pensionskunder', 'Tilbagevenden til job eller ny beskæftigelse', 'Coaching, psykoedukation, jobudvikling, tovholderfunktion', 'IPS-metoden, suppleret med SE'],
    ]); ?>
  </div>
</section>

<section class="sg-tablesec" aria-labelledby="sgAcadTableTitle">
  <div class="sg-wrap">
    <div class="sg-tablesec__head">
      <h2 class="sg-h2" id="sgAcadTableTitle">Academy &amp; Uddannelser</h2>
      <p>Vi tilbyder målrettede uddannelser og kurser, der styrker kompetencer og faglighed hos kommunale teams og beskæftigelsesaktører. Vi leverer certificeringer, træning og supervision, som hjælper jer med at opnå bedre resultater og varig effekt i jeres arbejde.</p>
    </div>
    <?php sg_table([
      ['Indsats', 'Målgruppe', 'Formål', 'Indsats', 'Metode'],
      ['Simply Guiding Academy', 'Kommunale teams og beskæftigelsesaktører', 'Faglig opkvalificering og metodeudvikling inden for IPS og beskæftigelse', 'Supervision, undervisning, on-location træning, caseload-gennemgang, resultatbaseret performance', 'IPS-certificering, teamtræning, praksisnære kurser'],
      ['IPS Konsulentuddannelsen', 'IPS-teams i jobcentre', 'Høj performance målt på kvalitet og resultater – med certificering som Advanced Practitioner', '90–100 timers intensiv undervisning, supervision og træning i IPS', 'Undervisning, supervision, sagssparring, evaluering, fidelitetsmåling'],
      ['Job Development-træning', 'Kommunale teams', 'Træning i jobudvikling og virksomhedskontakt', 'On-location træning, pitch, samkørsel, erfaringsopsamling', 'Aktionslæring'],
      ['IPS-teamleder supervision', 'Kommunale IPS-ledere/fagkoordinatorer', 'Udvikling af IPS-teamlederkompetencer', '1:1 sparring, praksisobservation, feedback, introduktion til resultatbaseret ledelse', 'IPS-metoden'],
      ['Interim-teamleder', 'Kommunale IPS-teams', 'Styrke teamets resultater og metodefidelitet', 'Undervisning, teamlederfunktion leveret af IPS-certificeret supervisor', 'IPS-metoden'],
      ['Ungeløftet', 'Kommunale Ungeteams', 'Faglig opkvalificering i IPS for unge', 'Træning i IPS-tilgang, gruppeforløb og pædagogiske metoder', 'IPS-metoden, SE UNG'],
    ]); ?>
  </div>
</section>

<section class="sg-tiles2" aria-labelledby="sgCoopTitle">
  <div class="sg-wrap">
    <div class="sg-tablesec__head">
      <h2 class="sg-h2" id="sgCoopTitle">Sådan samarbejder vi</h2>
      <p>Hos Simply Guiding lægger vi vægt på et tæt og fleksibelt samarbejde, hvor vi tilpasser indsatsen præcis efter jeres behov. Vi fungerer som en helhedsleverandør, der tager ansvar for hele processen – fra den indledende afdækning til implementering og løbende evaluering. Gennem strategisk dialog, fælles udvikling og kapacitetsopbygning sikrer vi, at I får bæredygtige løsninger, som skaber målbare resultater og styrker jeres organisation på lang sigt.</p>
    </div>
    <div class="sg-tiles2__grid">
      <?php foreach ([
        ['Turnkey-løsninger fra A til Z', 'Vi håndterer hele forløbet som “anden aktør” – fra behovsafdækning til implementering og evaluering – med løbende fokus på indslusning på arbejdsmarkedet.'],
        ['Strategisk dialog', 'Vi rådgiver om modeller som no cure – no pay og samarbejder med Den Sociale Investeringsfond og Den Sociale Kapitalfond.'],
        ['Fondsmidler og projektansøgninger', 'Vi hjælper med hele ansøgningsprocessen – fra idé til færdig ansøgning – så vi sammen kan skabe innovative indsatser.'],
        ['Simply Guiding Academy', 'Som Danmarks største private IPS-udbyder tilbyder vi uddannelser, certificerede kurser og workshops for at styrke jeres medarbejdere.'],
        ['Co-creation af jobcenterløsninger', 'Vi udvikler skræddersyede indsatser i tæt dialog med jer, så løsningerne passer til lokale rammer og borgersammensætning.'],
        ['Tæt, agilt partnerskab', 'Vi holder faste driftsmøder, deler data og justerer indsatsen løbende – altid med gennemsigtighed og mulighed for indflydelse.'],
      ] as $t) : ?>
      <div class="sg-tile2"><h3><?php echo esc_html($t[0]); ?></h3><p><?php echo esc_html($t[1]); ?></p></div>
      <?php endforeach; ?>
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
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
