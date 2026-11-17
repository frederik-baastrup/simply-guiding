<?php
/* Grundkursus i IPS – v3 (live 17. nov. 2026).
   Struktur: overblik (intro + nøglefakta) → program → sådan foregår det → for hvem / udbytte (mørkt bånd) → pris → tilmelding → FAQ → skræddersyet forløb.
   Samme tekst og fakta som nu; kun opbygning og små forkortelser. */
$u = get_template_directory_uri();
$faq = require get_template_directory() . '/content/course-faq.php';

get_template_part('template-parts/page-hero', null, [
  'label' => 'Academy', 'title' => 'Grundkursus i IPS',
  'lead'  => 'Et praksisnært grundkursus, der giver dig et solidt og anvendeligt fundament i IPS-metoden. Du bliver klædt på til at omsætte metoden direkte i praksis.',
  'img' => 'mindset.jpg', 'img_w' => 840, 'img_h' => 1050, 'alt' => 'Undervisning hos Simply Guiding',
  'btn1' => 'Tilmeld dig kurset', 'btn1_href' => '#tilmelding', 'btn2' => 'Se indhold', 'btn2_href' => '#om-kurset',
]);
$topics = [
  ['IPS-mindset og de 8 principper', 'Fundamentet i metoden og det mindset, den bygger på.'],
  ['Recovery og beskæftigelse', 'Recovery- og beskæftigelsesperspektivet i IPS.'],
  ['Job development', 'Samarbejde med virksomheder om job og praktik.'],
  ['Konkrete redskaber', 'Redskaber i arbejdet med borgere og deltagere.'],
  ['IPS i jeres sammenhæng', 'Overførsel til forskellige organisatoriske og faglige rammer.'],
];
?>
<div id="info"></div>
<div id="indhold"></div>

<!-- 1. Overblik -->
<section class="sg-gk3-intro" id="om-kurset" aria-labelledby="gkIntroTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-intro__grid">
      <div>
        <p class="sg-gk-label">Om kurset</p>
        <h2 class="sg-h2" id="gkIntroTitle">Et praksisnært kompetenceløft i IPS-metoden</h2>
      </div>
      <div class="sg-gk3-intro__txt">
        <p class="sg-gk-lead">I 2026 udbyder Simply Guiding et grundkursus i IPS (Individual Placement and Support) for fagprofessionelle, der arbejder – eller ønsker at arbejde – med beskæftigelse, mental sundhed og recovery.</p>
        <p>Du får et solidt, fagligt funderet og anvendeligt kendskab til IPS-metoden og dens centrale redskaber. Undervisningen tager afsæt i konkrete cases fra hverdagen og i Simply Guidings mangeårige erfaring med IPS og Supported Employment.</p>
      </div>
    </div>
    <ul class="sg-gk3-facts" aria-label="Kurset kort fortalt">
      <li><span class="sg-gk-ico"><?php echo sg_icon('calendar'); ?></span><span><small>Dato</small>1.–2. september 2026</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('clock'); ?></span><span><small>Omfang</small>2 dage · 12 timer</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('pin'); ?></span><span><small>Sted</small>Simply Guiding, Odense</span></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('tag'); ?></span><span><small>Pris</small>Fra 4.900 kr. ekskl. moms</span></li>
    </ul>
  </div>
</section>

<!-- 2. Program -->
<section class="sg-gk3-prog" aria-labelledby="gkTopicsTitle">
  <div class="sg-wrap sg-gk3-prog__grid">
    <div class="sg-gk3-prog__side">
      <h2 class="sg-h2" id="gkTopicsTitle">Det arbejder vi med på kurset</h2>
      <p class="sg-gk3-prog__claim">Fokus er på, hvordan IPS omsættes til praksis – ikke kun hvad metoden er i teorien.</p>
      <a class="sg-btn sg-btn--lg" href="#tilmelding">Tilmeld dig kurset</a>
    </div>
    <ol class="sg-gk3-prog__list">
      <?php foreach ($topics as $i => $t) : ?>
      <li><span class="sg-gk3-prog__ico"><?php echo sg_icon(['bookopen', 'spark', 'briefcase', 'puzzle', 'building'][$i] ?? 'spark'); ?></span><div><h3><?php echo esc_html($t[0]); ?></h3><p><?php echo esc_html($t[1]); ?></p></div></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- 3. Sådan foregår det -->
<section class="sg-gk3-format" aria-labelledby="gkFormatTitle">
  <div class="sg-wrap sg-gk3-format__grid">
    <div class="sg-gk3-format__txt">
      <p class="sg-gk-label">Sådan foregår det</p>
      <h2 class="sg-h2" id="gkFormatTitle">To intensive dage tæt på praksis</h2>
      <p>Kurset består af to sammenhængende kursusdage med i alt 12 timers undervisning på Simply Guidings faciliteter i Odense.</p>
      <ul class="sg-gk3-chips"><li>Oplæg</li><li>Dialog</li><li>Øvelser</li><li>Praksisnære cases</li></ul>
      <p>Du kan arbejde med dine egne cases eller med cases, der afspejler virkelige IPS-forløb i både kommunale og private sammenhænge.</p>
    </div>
    <figure class="sg-gk3-format__img"><img src="<?php echo esc_url($u); ?>/assets/kursus-lbi.jpg" alt="Deltagere på kursus hos Simply Guiding" loading="lazy"></figure>
  </div>
</section>

<!-- 4. For hvem + udbytte -->
<section class="sg-gk3-band" aria-labelledby="gkWhoTitle">
  <div class="sg-gk3-band__box">
    <div class="sg-gk3-band__grid">
      <div>
        <p class="sg-gk3-band__label">Målgruppe</p>
        <h2 class="sg-h2" id="gkWhoTitle">Er kurset noget for dig?</h2>
        <p class="sg-gk3-band__intro">Kurset er relevant for dig, der:</p>
        <ul class="sg-gk3-band__list">
          <li><?php echo sg_check_svg(); ?><span>arbejder med beskæftigelsesrettede indsatser – eller ønsker at arbejde med IPS og Supported Employment</span></li>
          <li><?php echo sg_check_svg(); ?><span>arbejder med mennesker med psykiske vanskeligheder</span></li>
          <li><?php echo sg_check_svg(); ?><span>arbejder inden for social-, sundheds- eller beskæftigelsesområdet eller med mental sundhed</span></li>
          <li><?php echo sg_check_svg(); ?><span>vil kvalificere dig til en IPS- eller Supported Employment-stilling</span></li>
          <li><?php echo sg_check_svg(); ?><span>er ledig eller selvbetaler og vil opkvalificere dig med henblik på beskæftigelse</span></li>
        </ul>
        <p class="sg-gk3-band__note">Der stilles ingen formelle forudsætninger, og du behøver ikke være ansat i et jobcenter.</p>
      </div>
      <div>
        <p class="sg-gk3-band__label">Udbytte</p>
        <h2 class="sg-h2" id="gkValueTitle">Det tager du med hjem</h2>
        <ol class="sg-gk3-band__gain">
          <li><span>01</span>Grundlæggende viden om IPS-metoden og dens principper</li>
          <li><span>02</span>Indsigt i IPS-mindset og metodens praksis</li>
          <li><span>03</span>Konkrete redskaber, du kan bruge direkte i dit arbejde</li>
          <li><span>04</span>Forståelse for, hvordan IPS kan anvendes i forskellige organisatoriske rammer</li>
        </ol>
        <p class="sg-gk3-band__note"><?php echo sg_icon('shield'); ?>Alle deltagere får et kursusbevis, der beskriver de opnåede kompetencer.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. Pris -->
<section class="sg-gk3-price" aria-labelledby="gkPriceTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-price__head">
      <h2 class="sg-h2" id="gkPriceTitle">Pris</h2>
      <p>Reservér din plads på kurset 1.–2. september 2026. Prisen inkluderer 12 timers praksisnær undervisning, forplejning begge kursusdage og kursusbevis.</p>
    </div>
    <div class="sg-gk3-price__cards">
      <div class="sg-gk3-price__card"><p class="sg-gk3-price__who">Offentlige og private arbejdsgivere</p><p class="sg-gk3-price__amt">6.900 kr.</p><p class="sg-gk3-price__vat">ekskl. moms</p><a class="sg-btn sg-btn--lg sg-btn--outline" href="#tilmelding">Tilmeld</a></div>
      <div class="sg-gk3-price__card"><p class="sg-gk3-price__who">Ledige og selvbetalere</p><p class="sg-gk3-price__amt">4.900 kr.</p><p class="sg-gk3-price__vat">ekskl. moms</p><a class="sg-btn sg-btn--lg sg-btn--outline" href="#tilmelding">Tilmeld</a></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/course-signup'); ?>

<section class="sg-faq" aria-labelledby="sgFaqTitle">
  <div class="sg-wrap sg-faq__grid">
    <div>
      <h2 class="sg-faq__title" id="sgFaqTitle">Ofte stillede spørgsmål</h2>
      <p class="sg-faq__intro">Her finder du svar på de mest almindelige spørgsmål om grundkurset. Finder du ikke svaret, er du altid velkommen til at kontakte os.</p>
    </div>
    <ul class="sg-faq__list">
      <?php foreach ($faq as $i => $f) : ?>
      <li class="sg-faq__item">
        <button class="sg-faq__q" id="faq-q<?php echo $i; ?>" aria-expanded="false" aria-controls="faq-a<?php echo $i; ?>"><?php echo esc_html($f[0]); ?><span class="sg-faq__icon" aria-hidden="true"></span></button>
        <div class="sg-faq__a" id="faq-a<?php echo $i; ?>" role="region" aria-labelledby="faq-q<?php echo $i; ?>"><div><?php echo wp_kses_post($f[1]); ?></div></div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- Skræddersyet forløb -->
<section class="sg-gk3-custom" aria-labelledby="gkCustomTitle">
  <div class="sg-wrap">
    <div class="sg-gk3-custom__box">
      <div>
        <h2 class="sg-h2" id="gkCustomTitle">Ønsker I et skræddersyet forløb?</h2>
        <p>Grundkurset er et åbent kursus med fokus på individuel kompetenceudvikling. Ønsker I et IPS-oplæg, en temadag eller et skræddersyet forløb målrettet jeres organisation, kan I kontakte Marlene Mohn Ishøi.</p>
      </div>
      <a class="sg-btn sg-btn--lg" href="tel:+4551909603">Ring på 51 90 96 03</a>
    </div>
  </div>
</section>
