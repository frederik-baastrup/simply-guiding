<?php
/* Om os (/om-os/) – "Om Simply Guiding" (tekst fra sg-web-om-sg.docx, nov. 2026) */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
get_template_part('template-parts/page-hero', null, [
  'title' => 'Om Simply Guiding',
  'lead'  => 'Hos Simply Guiding sørger vi for, at historien ikke gentager sig. Sammen skaber vi et nyt ståsted i livet for mennesket bag borgeren.',
  'video' => 'om-os-hero.mp4', 'full' => true, 'poster' => 'om-os-hero.jpg',
  'btn1' => 'Kontakt os for en uforpligtende snak', 'btn2' => 'Mød holdet', 'btn2_href' => '#holdet',
]);
?>
<div id="indhold"></div>

<section class="sg-who" aria-labelledby="sgWhoTitle">
  <div class="sg-wrap sg-who__grid">
    <div class="sg-who__side">
      <div>
        <h2 class="sg-h2" id="sgWhoTitle">Hvem er Simply Guiding?</h2>
        <p class="sg-who__lead">Simply Guiding er en specialiseret beskæftigelsesaktør. Vi kombinerer høj faglighed med en dyb forståelse for de kommunale og samfundsmæssige rammer med fokus på det enkelte menneske.</p>
      </div>
      <img class="sg-who__img" src="<?php echo esc_url($u); ?>/assets/vide-mere.jpg" alt="Konsulenter fra Simply Guiding i møde" loading="lazy">
    </div>
    <div class="sg-who__cells">
      <?php foreach ([
        ['heart', 'Vores opgave', 'Vi hjælper mennesker i en sårbar position tilbage til fællesskabet, til jobbet eller i uddannelse.'],
        ['handshake', 'Brobygger', 'Vi bygger bro mellem det kommunale system, erhvervslivet og det enkelte menneske.'],
        ['book', 'Evidensbaseret', 'Vores arbejde bygger på en evidensbaseret tilgang med fokus på IPS og Supported Employment.'],
        ['shield', 'Holdbare løsninger', 'Vi tror på holdbare løsninger frem for hurtige quickfixes.'],
      ] as $c) : ?>
      <div class="sg-who__cell"><span class="sg-who__ico"><?php echo sg_icon($c[0]); ?></span><h3><?php echo esc_html($c[1]); ?></h3><p><?php echo esc_html($c[2]); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sg-mind3" aria-labelledby="sgFloorTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><img src="<?php echo esc_url($u); ?>/assets/om-os-mission.jpg" alt="Medarbejder i arbejde" width="1200" height="1800" loading="lazy"></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgFloorTitle">Når gulvet vipper, griber vi dig</h2>
      <p class="sg-mind3__lead">Når et menneske mister fodfæstet, omdannes den personlige historie alt for ofte til en sag, en paragraf og en diagnose. Det er ikke af ond vilje.</p>
      <p class="sg-meet__p">Hos Simply Guiding tror vi på, at mennesker udvikler sig, når de mødes som dem, de er – summen af datid, nutid og drømme for fremtiden. Vi er optaget af den enkeltes situation, muligheder og ønsker. Det betyder, at vi for mange er den vejleder og guide, man kan læne sig op ad, når gulvet vipper.</p>
      <p class="sg-meet__p">Vi er dem, man kan komme til og spørge til råds, når tvivlen melder sig – og vi er dem, der hjælper mennesker i en sårbar situation tilbage til fællesskabet, til jobbet eller i uddannelse.</p>
      <div class="sg-belief">
        <h3 class="sg-belief__title">Tro kan ikke flytte bjerge alene</h3>
        <p>Vi tror på, at alle mennesker har muligheder og potentiale. Vi begrænser os ikke af kassetænkning eller diagnoser. Vi tror også på, at det enkelte menneske nogle gange skal have et kærligt skub i den rigtige retning.</p>
        <p>Men tro kan ikke flytte bjerge eller mennesker alene, og heldigvis for det. Troen skal ledsages af handling og faglighed. Intet sker af sig selv, og vi venter heller ikke på, at tiden heler alle sår.</p>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/stats', null, ['title' => 'En stærk og erfaren aktør', 'items' => [
  ['25+', 'kommuner', 'Tæt og tillidsfuldt samarbejde om at løfte beskæftigelses- og ungeindsatsen.'],
  ['1.500+', 'mennesker', 'Individuel støtte tilbage til job, uddannelse eller fællesskab.'],
  ['10+', 'år i branchen', 'Siden 2015 har vi fungeret som en specialiseret og resultatskabende ekstern aktør.'],
]]);
get_template_part('template-parts/cards3', null, [
  'title' => 'Hvorfor vælge Simply Guiding?',
  'text'  => 'Udvikling gennem stærke relationer og troen på det enkelte menneske. Så kort kan det siges, men der er heldigvis mere til historien.',
  'items' => [
    ['user', 'Det enkelte menneske', 'Vores fokus er at opbygge en tillidsfuld relation, der giver det enkelte menneske modet og redskaberne til at genvinde fodfæstet og opnå et nyt ståsted i livet.'],
    ['puzzle', 'Indsatser, som passer til situationen', 'Du kan ikke købe en hyldevare hos Simply Guiding. Det ville være mod vores natur. Når vi møder et menneske, hvor det er, giver det ikke mening at putte vedkommende i en bås – og håbe på det bedste.'],
    ['shield', 'Tæt kommunalt samarbejde og dokumenteret faglighed', 'Vores tværfaglige hold af konsulenter kombinerer dyb empati med en stærk beskæftigelsesfaglighed. Med afsæt i evidensbaserede metoder som IPS og Supported Employment er vi en stærk, gennemsigtig og resultatskabende medspiller for både kommuner, jobcentre og virksomheder.'],
  ],
]);
?>

<div class="sg-band-wrap">
  <section class="sg-band2 sg-band2--side" aria-labelledby="sgAcadTitle">
    <div class="sg-wrap sg-band2__side">
      <div class="sg-band2__head">
        <h2 class="sg-h2 sg-h2--light" id="sgAcadTitle">Faglighed, der skaber resultater i praksis</h2>
        <div class="sg-band2__cols">
          <p>Vores viden og erfaring lever ikke kun i vores borgerrettede forløb. Gennem Simply Guiding Academy bygger vi bro mellem viden og virkelighed i den kommunale praksis.</p>
          <p>Vi uddanner, sparrer med og opkvalificerer kommunale teams, ledere og beskæftigelsesaktører med afsæt i IPS, Supported Employment og pædagogiske virkemidler – så den faglige indsats styrkes hele vejen rundt.</p>
        </div>
        <p class="sg-band2__btn"><a class="sg-btn sg-btn--lg" href="/loesninger/#academy">Læs mere om Academy</a></p>
      </div>
      <div class="sg-band2__media"><img src="<?php echo esc_url($u); ?>/assets/indsats-academy.jpg" alt="Undervisning i Simply Guiding Academy" loading="lazy"></div>
    </div>
  </section>
</div>

<?php
get_template_part('template-parts/cards3', null, [
  'title' => 'Vores værdier',
  'items' => [
    ['heart', 'Tro', 'Vi tror på mennesket og fremtiden.'],
    ['book', 'Faglighed', 'Vi bygger vores indsatser på evidens og erfaring.'],
    ['bolt', 'Handling', 'Vi sætter mennesker i bevægelse.'],
    ['user', 'Autenticitet', 'Vi kommer med, hvad og hvem vi er.'],
  ],
]);
get_template_part('template-parts/team', null, ['title' => 'Mød holdet bag Simply Guiding']);
get_template_part('template-parts/faq', null, ['title' => 'FAQ - Ofte stillede spørgsmål om Simply Guiding', 'items' => [
  ['Hvad er historien bag Simply Guiding?', 'Siden 2015 har vi arbejdet som ekstern aktør og samarbejdspartner på beskæftigelses- og socialområdet. Vi startede med et ønske om at skabe reelle, varige forandringer for mennesker i sårbare positioner. Vores navn, organisation og forretningsområder har udviklet sig over mere end ti år, men vores grundlæggende DNA er uændret: Vi ser mennesket før sagsnummeret.'],
  ['Hvad betyder "Et nyt ståsted i livet" i praksis?', 'Et nyt ståsted betyder, at vi ikke arbejder med quickfixes eller symptombehandling. Vi hjælper det enkelte menneske med at opbygge et stabilt og holdbart fundament, uanset om det handler om at vende tilbage til arbejdsmarkedet, komme i uddannelse, genvinde trivslen i familien eller finde tilbage til fællesskabet.'],
  ['Hvilket menneskesyn arbejder Simply Guiding ud fra?', 'Vi møder det enkelte menneske med summen af sin datid, sin nutid og sine drømme for fremtiden. Vi tror på, at alle har ressourcer og potentiale til at udvikle sig, når de mødes med tro, empati og en fordomsfri tilgang frem for at blive defineret af diagnoser, paragraffer eller tidligere nederlag.'],
  ['Hvordan samarbejder I med kommuner og sagsbehandlere?', 'Vi ser os selv som en tæt og troværdig medspiller for kommunerne. Vi har stor forståelse for de administrative rammer og komplekse sagsgange, sagsbehandlere navigerer i. Vores rolle er at lette presset, skabe fremdrift og fungere som en håndholdt brobygger mellem borger, forvaltning og arbejdsmarked.'],
  ['Hvem er medarbejderne hos Simply Guiding?', 'Vores hold består af erfarne faglige profiler med baggrund i blandt andet beskæftigelsesindsatsen, socialpædagogik, socialpsykiatri og kommunal sagsbehandling. Fælles for alle er en dyb metodisk forankring i IPS og Supported Employment samt evnen til at skabe den tillidsfulde relation, der muliggør forandring.'],
]]);
get_template_part('template-parts/latest-news');
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
