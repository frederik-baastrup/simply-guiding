<?php
/* Om os – ny opbygning (vises på /om-os/?ny=1). Teksten er uændret; kun rækkefølge og layout er nyt. */
$u = get_template_directory_uri();
?>

<!-- Hvem er Simply Guiding? -->
<section class="sg-gk-intro sg-os-who" aria-labelledby="sgWhoTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <h2 class="sg-h2" id="sgWhoTitle">Hvem er Simply Guiding?</h2>
      <p class="sg-gk-lead">Simply Guiding er en specialiseret beskæftigelsesaktør. Vi kombinerer høj faglighed med en dyb forståelse for de kommunale og samfundsmæssige rammer med fokus på det enkelte menneske.</p>
    </div>
    <div class="sg-gk-split__main">
      <ul class="sg-os-cells">
      <?php foreach ([
        ['heart', 'Vores opgave', 'Vi hjælper mennesker i en sårbar position tilbage til fællesskabet, til jobbet eller i uddannelse.'],
        ['people', 'Brobygger', 'Vi bygger bro mellem det kommunale system, erhvervslivet og det enkelte menneske.'],
        ['bookopen', 'Evidensbaseret', 'Vores arbejde bygger på en evidensbaseret tilgang med fokus på IPS og Supported Employment.'],
        ['shield', 'Holdbare løsninger', 'Vi tror på holdbare løsninger frem for hurtige quickfixes.'],
      ] as $c) : ?>
        <li><span class="sg-gk-ico"><?php echo sg_icon($c[0]); ?></span><h3><?php echo esc_html($c[1]); ?></h3><p><?php echo esc_html($c[2]); ?></p></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/stats', null, ['title' => 'En stærk og erfaren aktør', 'items' => [
  ['25+', 'kommuner', 'Tæt og tillidsfuldt samarbejde om at løfte beskæftigelses- og ungeindsatsen.'],
  ['1.500+', 'mennesker', 'Individuel støtte tilbage til job, uddannelse eller fællesskab.'],
  ['10+', 'år i branchen', 'Siden 2015 har vi fungeret som en specialiseret og resultatskabende ekstern aktør.'],
]]);
?>

<!-- Når gulvet vipper -->
<section class="sg-gk-format sg-os-floor" aria-labelledby="sgFloorTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media">
    <div class="sg-gk-split__media sg-os-tall"><img src="<?php echo esc_url($u); ?>/assets/om-os-mission-v2.jpg" alt="Samtale i et træværksted" width="1200" height="1800" loading="lazy"></div>
    <div class="sg-gk-split__main">
      <h2 class="sg-h2" id="sgFloorTitle">Når gulvet vipper, griber vi dig</h2>
      <p class="sg-gk-lead">Når et menneske mister fodfæstet, omdannes den personlige historie alt for ofte til en sag, en paragraf og en diagnose. Det er ikke af ond vilje.</p>
      <p>Hos Simply Guiding tror vi på, at mennesker udvikler sig, når de mødes som dem, de er – summen af datid, nutid og drømme for fremtiden. Vi er optaget af den enkeltes situation, muligheder og ønsker. Det betyder, at vi for mange er den vejleder og guide, man kan læne sig op ad, når gulvet vipper.</p>
      <p>Vi er dem, man kan komme til og spørge til råds, når tvivlen melder sig – og vi er dem, der hjælper mennesker i en sårbar situation tilbage til fællesskabet, til jobbet eller i uddannelse.</p>
    </div>
  </div>
</section>

<!-- Tro kan ikke flytte bjerge alene -->
<section class="sg-os-belief" aria-labelledby="sgBeliefTitle">
  <svg class="sg-os-belief__mark" viewBox="0 0 37 25" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg>
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <h2 class="sg-os-belief__title" id="sgBeliefTitle">Tro kan ikke flytte bjerge alene</h2>
      <ol class="sg-os-belief__chain" aria-label="Tro, handling og faglighed"><li>Tro</li><li>Handling</li><li>Faglighed</li></ol>
    </div>
    <div class="sg-gk-split__main">
      <p>Vi tror på, at alle mennesker har muligheder og potentiale. Vi begrænser os ikke af kassetænkning eller diagnoser. Vi tror også på, at det enkelte menneske nogle gange skal have et kærligt skub i den rigtige retning.</p>
      <p>Men tro kan ikke flytte bjerge eller mennesker alene, og heldigvis for det. Troen skal ledsages af handling og faglighed. Intet sker af sig selv, og vi venter heller ikke på, at tiden heler alle sår.</p>
    </div>
  </div>
</section>

<!-- Hvorfor vælge Simply Guiding? -->
<section class="sg-gk-topics sg-os-why" aria-labelledby="sgWhyTitle">
  <div class="sg-wrap">
    <div class="sg-os-head">
      <h2 class="sg-h2" id="sgWhyTitle">Hvorfor vælge Simply Guiding?</h2>
      <p>Udvikling gennem stærke relationer og troen på det enkelte menneske. Så kort kan det siges, men der er heldigvis mere til historien.</p>
    </div>
    <ul class="sg-gk-topics__grid sg-gk-topics__grid--text">
      <li><span class="sg-gk-ico"><?php echo sg_icon('user'); ?></span><h3>Det enkelte menneske</h3><p>Vores fokus er at opbygge en tillidsfuld relation, der giver det enkelte menneske modet og redskaberne til at genvinde fodfæstet og opnå et nyt ståsted i livet.</p></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('puzzle'); ?></span><h3>Indsatser, der passer</h3><p>Du kan ikke købe en hyldevare hos Simply Guiding. Når vi møder et menneske, hvor det er, giver det ikke mening at putte vedkommende i en bås.</p></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('shield'); ?></span><h3>Dokumenteret faglighed</h3><p>Vores tværfaglige konsulenter kombinerer empati med beskæftigelsesfaglighed og evidensbaserede metoder som IPS og Supported Employment.</p></li>
    </ul>
  </div>
</section>

<!-- Vores værdier: 2×2 til venstre, billede til højre -->
<section class="sg-os-values sg-os-values--v2" aria-labelledby="sgValuesTitle">
  <div class="sg-wrap sg-os-values__layout">
    <div class="sg-os-values__main">
      <svg class="sg-os-values__mark" viewBox="0 0 37 25" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg>
      <h2 class="sg-h2" id="sgValuesTitle">Vores værdier</h2>
      <ul class="sg-os-values__grid">
        <li><div class="sg-os-values__top"><span class="sg-os-values__n">01</span><span class="sg-os-values__ico"><?php echo sg_icon('heart'); ?></span></div><h3>Tro</h3><p>Vi tror på mennesket og fremtiden.</p></li>
        <li><div class="sg-os-values__top"><span class="sg-os-values__n">02</span><span class="sg-os-values__ico"><?php echo sg_icon('bookopen'); ?></span></div><h3>Faglighed</h3><p>Vi bygger vores indsatser på evidens og erfaring.</p></li>
        <li><div class="sg-os-values__top"><span class="sg-os-values__n">03</span><span class="sg-os-values__ico"><?php echo sg_icon('bolt'); ?></span></div><h3>Handling</h3><p>Vi sætter mennesker i bevægelse.</p></li>
        <li><div class="sg-os-values__top"><span class="sg-os-values__n">04</span><span class="sg-os-values__ico"><?php echo sg_icon('user'); ?></span></div><h3>Autenticitet</h3><p>Vi kommer med, hvad og hvem vi er.</p></li>
      </ul>
    </div>
    <figure class="sg-os-values__media">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/metode-samtale-v2.jpg" alt="" loading="lazy">
      <span class="sg-os-values__badge" aria-hidden="true"><svg viewBox="0 0 37 25"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg></span>
    </figure>
  </div>
</section>

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
      <div class="sg-band2__media"><img src="<?php echo esc_url($u); ?>/assets/akademi-gruppe.jpg" alt="Undervisning i Simply Guiding Academy" loading="lazy"></div>
    </div>
  </section>
</div>


<?php
get_template_part('template-parts/team', null, ['title' => 'Mød holdet bag Simply Guiding']);
get_template_part('template-parts/faq', null, ['title' => 'FAQ - Ofte stillede spørgsmål om Simply Guiding', 'items' => [
  ['Hvad er historien bag Simply Guiding?', 'Siden 2015 har vi arbejdet som ekstern aktør og samarbejdspartner på beskæftigelses- og socialområdet. Vi startede med et ønske om at skabe reelle, varige forandringer for mennesker i sårbare positioner. Vores navn, organisation og forretningsområder har udviklet sig over mere end ti år, men vores grundlæggende DNA er uændret: Vi ser mennesket før sagsnummeret.'],
  ['Hvad betyder "Et nyt ståsted i livet" i praksis?', 'Et nyt ståsted betyder, at vi ikke arbejder med quickfixes eller symptombehandling. Vi hjælper det enkelte menneske med at opbygge et stabilt og holdbart fundament, uanset om det handler om at vende tilbage til arbejdsmarkedet, komme i uddannelse, genvinde trivslen i familien eller finde tilbage til fællesskabet.'],
  ['Hvilket menneskesyn arbejder Simply Guiding ud fra?', 'Vi møder det enkelte menneske med summen af sin datid, sin nutid og sine drømme for fremtiden. Vi tror på, at alle har ressourcer og potentiale til at udvikle sig, når de mødes med tro, empati og en fordomsfri tilgang frem for at blive defineret af diagnoser, paragraffer eller tidligere nederlag.'],
  ['Hvordan samarbejder I med kommuner og sagsbehandlere?', 'Vi ser os selv som en tæt og troværdig medspiller for kommunerne. Vi har stor forståelse for de administrative rammer og komplekse sagsgange, sagsbehandlere navigerer i. Vores rolle er at lette presset, skabe fremdrift og fungere som en håndholdt brobygger mellem borger, forvaltning og arbejdsmarked.'],
  ['Hvem er medarbejderne hos Simply Guiding?', 'Vores hold består af erfarne faglige profiler med baggrund i blandt andet beskæftigelsesindsatsen, socialpædagogik, socialpsykiatri og kommunal sagsbehandling. Fælles for alle er en dyb metodisk forankring i IPS og Supported Employment samt evnen til at skabe den tillidsfulde relation, der muliggør forandring.'],
]]);
get_template_part('template-parts/latest-news');
