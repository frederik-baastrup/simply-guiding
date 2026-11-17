<?php
/* Grundkursus i IPS – sidens indhold (bruges af page-grundkursus-i-ips.php) */
$u = get_template_directory_uri();
$faq = require get_template_directory() . '/content/course-faq.php';

get_template_part('template-parts/page-hero', null, [
  'label' => 'Academy', 'title' => 'Grundkursus i IPS',
  'lead'  => 'Et praksisnært grundkursus, der giver dig et solidt og anvendeligt fundament i IPS-metoden. Du bliver klædt på til at omsætte metoden direkte i praksis.',
  'img' => 'mindset.jpg', 'img_w' => 840, 'img_h' => 1050, 'alt' => 'Undervisning hos Simply Guiding',
  'btn1' => 'Tilmeld dig kurset', 'btn1_href' => '#tilmelding', 'btn2' => 'Se indhold', 'btn2_href' => '#om-kurset',
]);
?>
<div id="info"></div>
<div id="indhold"></div>

<!-- Nøglefakta -->
<section class="sg-gk-facts" aria-label="Kurset kort fortalt">
  <div class="sg-wrap">
    <ul class="sg-gk-facts__list">
      <li><?php echo sg_icon('calendar'); ?><span><small>Dato</small>1.–2. september 2026</span></li>
      <li><?php echo sg_icon('clock'); ?><span><small>Omfang</small>2 dage · 12 timers undervisning</span></li>
      <li><?php echo sg_icon('pin'); ?><span><small>Sted</small>Simply Guidings faciliteter i Odense</span></li>
      <li><?php echo sg_icon('tag'); ?><span><small>Pris</small>Fra 4.900 kr. ekskl. moms</span></li>
    </ul>
  </div>
</section>

<!-- Om kurset -->
<section class="sg-gk-intro" id="om-kurset" aria-labelledby="gkIntroTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">Om kurset</p>
      <h2 class="sg-h2" id="gkIntroTitle">Et praksisnært kompetenceløft i IPS-metoden</h2>
    </div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-lead">I 2026 udbyder Simply Guiding et grundkursus i IPS (Individual Placement and Support) for fagprofessionelle, der arbejder – eller ønsker at arbejde – med beskæftigelse, mental sundhed og recovery.</p>
      <p>Du får et solidt, fagligt funderet og anvendeligt kendskab til IPS-metoden og dens centrale redskaber. Undervisningen tager afsæt i konkrete cases fra hverdagen og i Simply Guidings mangeårige erfaring med IPS og Supported Employment.</p>
      <p>Kurset er for praktikere og andre fagprofessionelle, der vil opbygge eller styrke deres IPS-kompetencer – du behøver ikke være ansat i et jobcenter.</p>
    </div>
  </div>
</section>

<!-- Indhold -->
<section class="sg-gk-topics" aria-labelledby="gkTopicsTitle">
  <div class="sg-wrap">
    <div class="sg-headline"><h2 class="sg-h2" id="gkTopicsTitle">Det arbejder vi med på kurset</h2></div>
    <ul class="sg-gk-topics__grid">
      <li><span class="sg-gk-ico"><?php echo sg_icon('bookopen'); ?></span><h3>IPS-mindset og de 8 principper bag metoden</h3></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('heart'); ?></span><h3>Recovery og beskæftigelse i IPS-perspektiv</h3></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('handshake'); ?></span><h3>Job development og samarbejde med virksomheder</h3></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('briefcase'); ?></span><h3>Konkrete redskaber til borgere og deltagere</h3></li>
      <li><span class="sg-gk-ico"><?php echo sg_icon('puzzle'); ?></span><h3>IPS i organisatoriske og faglige sammenhænge</h3></li>
      <li class="sg-gk-topics__quote"><p>Fokus er på, hvordan IPS omsættes til praksis – ikke kun hvad metoden er i teorien.</p></li>
    </ul>
  </div>
</section>

<!-- Sådan foregår kurset -->
<section class="sg-gk-format" aria-labelledby="gkFormatTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media">
    <div class="sg-gk-split__media"><img src="<?php echo esc_url($u); ?>/assets/kursus-lbi.jpg" alt="Deltagere på kursus hos Simply Guiding" loading="lazy"></div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-label">Sådan foregår det</p>
      <h2 class="sg-h2" id="gkFormatTitle">To intensive dage tæt på praksis</h2>
      <p>Kurset består af to sammenhængende kursusdage med i alt 12 timers undervisning på Simply Guidings faciliteter i Odense.</p>
      <ul class="sg-gk-chips"><li>Oplæg</li><li>Dialog</li><li>Øvelser</li><li>Praksisnære cases</li></ul>
      <p>Du kan arbejde med dine egne cases eller med cases, der afspejler virkelige IPS-forløb i både kommunale og private sammenhænge.</p>
    </div>
  </div>
</section>

<!-- Målgruppe -->
<section class="sg-gk-who" aria-labelledby="gkWhoTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side">
      <p class="sg-gk-label">Målgruppe</p>
      <h2 class="sg-h2" id="gkWhoTitle">Er kurset noget for dig?</h2>
      <p>Der stilles ingen formelle forudsætninger for at deltage. Er du i tvivl, er du altid velkommen til at kontakte os for en kort rådgivning om, hvordan kurset matcher dine behov.</p>
      <p class="sg-textlink"><a href="/kontakt/">Kontakt os <?php echo sg_arrow(); ?></a></p>
    </div>
    <div class="sg-gk-split__main">
      <p class="sg-gk-sub">Kurset er relevant for dig, der:</p>
      <ul class="sg-gk-who__list">
        <li><?php echo sg_check_svg(); ?><span>arbejder med beskæftigelsesrettede indsatser – eller ønsker at arbejde med IPS og Supported Employment</span></li>
        <li><?php echo sg_check_svg(); ?><span>arbejder med mennesker med psykiske vanskeligheder</span></li>
        <li><?php echo sg_check_svg(); ?><span>arbejder inden for social-, sundheds- eller beskæftigelsesområdet eller med mental sundhed</span></li>
        <li><?php echo sg_check_svg(); ?><span>vil kvalificere dig til en IPS- eller Supported Employment-stilling</span></li>
        <li><?php echo sg_check_svg(); ?><span>er ledig eller selvbetaler og vil opkvalificere dig med henblik på beskæftigelse</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- Udbytte og pris -->
<section class="sg-gk-value" aria-labelledby="gkValueTitle">
  <div class="sg-wrap sg-gk-split">
    <div class="sg-gk-split__side sg-gk-value__gain">
      <p class="sg-gk-label">Udbytte</p>
      <h2 class="sg-h2" id="gkValueTitle">Det tager du med hjem</h2>
      <ol class="sg-gk-gain">
        <li><span>01</span>Grundlæggende viden om IPS-metoden og dens principper</li>
        <li><span>02</span>Indsigt i IPS-mindset og metodens praksis</li>
        <li><span>03</span>Konkrete redskaber, du kan bruge direkte i dit arbejde</li>
        <li><span>04</span>Forståelse for, hvordan IPS kan anvendes i forskellige organisatoriske rammer</li>
      </ol>
      <p class="sg-gk-note"><?php echo sg_icon('shield'); ?>Alle deltagere får et kursusbevis, der beskriver de opnåede kompetencer.</p>
    </div>
    <div class="sg-gk-split__main">
      <div class="sg-gk-price">
        <p class="sg-gk-price__title">Pris og tilmelding</p>
        <p class="sg-gk-price__sub">Reservér din plads på kurset 1.–2. september 2026.</p>
        <div class="sg-gk-price__tiers">
          <div><span>Offentlige og private arbejdsgivere</span><strong>6.900 kr.<small>ekskl. moms</small></strong></div>
          <div><span>Ledige og selvbetalere</span><strong>4.900 kr.<small>ekskl. moms</small></strong></div>
        </div>
        <p class="sg-gk-price__incl-title">Prisen inkluderer</p>
        <ul class="sg-gk-price__incl">
          <li><?php echo sg_check_svg(); ?>12 timers praksisnær undervisning</li>
          <li><?php echo sg_check_svg(); ?>Forplejning begge kursusdage</li>
          <li><?php echo sg_check_svg(); ?>Kursusbevis</li>
        </ul>
        <a class="sg-btn sg-btn--lg sg-gk-price__btn" href="#tilmelding">Gå til tilmelding</a>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/more', null, [
  'title' => 'Ønsker I et skræddersyet forløb?',
  'text' => 'Grundkurset er et åbent kursus med fokus på individuel kompetenceudvikling. Ønsker I et IPS-oplæg, en temadag eller et skræddersyet forløb målrettet jeres organisation, tilbyder Simply Guiding også organisationsspecifikke ydelser. Kontakt Marlene Mohn Ishøi på tlf. 51 90 96 03 for at høre mere.',
  'btn1' => 'Ring på 51 90 96 03', 'btn1_href' => 'tel:+4551909603', 'btn2' => 'Gå til tilmelding', 'btn2_href' => '#tilmelding',
]); ?>

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

<?php get_template_part('template-parts/course-signup'); ?>
