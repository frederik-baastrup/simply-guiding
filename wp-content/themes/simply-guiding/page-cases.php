<?php
/* Cases (/cases/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
get_template_part('template-parts/page-hero', null, [
  'label' => 'Cases', 'title' => 'Se vores cases her',
  'lead'  => 'Her har vi samlet en række historier om kandidater, der har været gennem et forløb hos os. Der er forskellige vinkler på historierne, og det vil sige, at det enten er kandidaten, virksomheden eller Simply Guiding, der fortæller om forløbet.',
  'img' => 'cases-hero.jpg', 'img_w' => 1422, 'img_h' => 1067, 'alt' => 'Samtale i et jobcenter', 'btn2_href' => '#cases',
]);
$cases = [
  ['sannes-historie', 'Sannes historie', 'Min IPS-konsulent troede på mig', 'Da Sanne startede i sit IPS-forløb havde hun været uden job i 7 år. Og selv om hun altid havde sagt til sig selv, at hun nok skulle komme tilbage på arbejdsmarkedet, var hun for alvor begyndt at tvivle. Læs historien om, hvordan vi med IPS-metoden hjalp Sanne i job.', 'Læs Sannes historie'],
  ['kadans-historie', 'Kadans historie', 'Mistro spærrede for drømmen om job', 'Her kan du læse om syriske Kadans vej til job som maler efter 1½ år i Danmark. Kadans IPS integrationskonsulent ved Simply Guiding er selv et eksempel på en IPS-succeshistorie. IPS-konsulenten hjalp Kadan i en periode på 6 måneder.', 'Læs Kadans historie'],
  ['sofies-historie', 'Sofies historie', 'Fra patient til studerende', '“Det var et personligt forløb og jeg følte ikke, at jeg var et nummer i rækken. Efter nogle møder gik det op for mig, at den altså var god nok, hun var der rent faktisk for at støtte mig og i mit tempo. Det betød, at jeg kunne knytte mig til IPS-konsulenten.”', 'Læs Sofies historie'],
  ['martins-historie', 'Martins historie', 'Martins drømmejob opstod uventet', 'På grund af sin ADHD havde han svært ved at fastholde et job og var nu på et ressourceforløb med udsigt til førtidspension. Et fremtidsscenarie han bestemt ikke var glad for, for han ville gerne have et arbejde. Her fortæller Martin og virksomheden deres IPS-historie.', 'Læs Martins historie'],
  ['annas-historie', 'Annas historie', '"Nu er jeg igen én, der kan noget"', 'Efter blot 5 måneders forløb hos Simply Guiding blev 41-årige Anna selvforsørgende. Hun bevægede sig fra en 18 måneder lang sygemelding pga. stress til at åbne et bed & breakfast. I dag oplever Anna, at hun er en, der kan noget igen. Her fortæller hun sin historie.', 'Læs Annas historie'],
  ['gunhilds-historie', 'Gunhilds historie', 'Vejen tilbage til arbejdsmarkedet', 'Efter flere års kamp med sine psykiske lidelser endte Gunhild i et ressourceforløb, hvor hun fik tildelt en mentor og en sagsbehandler fra Stevns Kommune, som satte hende i kontakt med en IPS-konsulent fra Simply Guiding. Det blev starten på Gunhilds rejse til et bedre arbejdsliv.', 'Læs Gunhilds historie'],
];
?>
<div id="indhold"></div>

<section class="sg-mind3" aria-labelledby="sgSuccessTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><video src="<?php echo esc_url($u); ?>/assets/projekter-anja.mp4" poster="<?php echo esc_url($u); ?>/assets/projekter-anja.jpg" autoplay muted loop playsinline preload="metadata" aria-hidden="true"></video></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgSuccessTitle">Succeshistorier fra vores kandidater</h2>
      <p class="sg-mind3__lead">Vi har eksisteret siden 2015, og siden starten har vi hjulpet flere end 1500 mennesker med at finde retning mod job eller uddannelse gennem individuelle forløb, der tager højde for den enkelte borgers særlige behov. Du kan læse nogle af vores succeshistorier og få indblik i vores metoder her.</p>
    </div>
  </div>
</section>

<section class="sg-projects" id="cases" aria-label="Succeshistorier" style="scroll-margin-top:90px">
  <div class="sg-wrap">
    <div class="sg-projects__grid">
      <?php foreach ($cases as $i => $c) : ?>
      <article class="sg-project<?php echo $i === 0 ? ' sg-project--active' : ''; ?>">
        <p class="sg-pill"><?php echo esc_html($c[1]); ?></p>
        <h2 class="sg-project__title"><?php echo esc_html($c[2]); ?></h2>
        <p class="sg-project__text"><?php echo esc_html($c[3]); ?></p>
        <a class="sg-project__link" href="/cases/<?php echo esc_attr($c[0]); ?>/"><?php echo esc_html($c[4]); ?> <?php echo sg_arrow(); ?></a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/quote', null, [
  'label' => 'Gunhilds historie',
  'quote' => '"Min IPS-konsulent spurgte mig, hvad jeg ønskede at få ud af at arbejde, og hvad jeg drømte om. Jeg havde slet ikke tænkt på mit arbejdsliv på den måde. Jeg havde nærmere tænkt på, hvad jeg som lærer burde give mine elever i stedet for at fokusere på, hvad jeg selv ville have ud af undervisningen og jobbet."',
  'name' => 'Gunhild', 'role' => 'Deltager på IPS-forløb',
]); ?>

<section class="sg-tiles2" aria-label="Simply Guiding i tal">
  <div class="sg-wrap">
    <div class="sg-tiles2__grid">
      <div class="sg-tile2"><h3>Individuel støtte til over 1500 mennesker</h3><p>Vi har hjulpet flere end 1500 mennesker med at finde retning mod job eller uddannelse gennem individuelle forløb, der tager højde for den enkelte borgers særlige behov.</p></div>
      <div class="sg-tile2"><h3>Simply Guiding har eksisteret siden 2015</h3><p>I de sidste 10 år har Simply Guiding leveret ydelser til kommuner og jobcentre, gennem evidensbaserede metoder med det mål at hjælpe ledige borgere tilbage i arbejdslivet.</p></div>
      <div class="sg-tile2"><h3>Samarbejde med +25 kommuner</h3><p>Vi har samarbejdet med flere end 25 kommuner i hele landet. Det har givet os en indsigt i kommunernes organisering og forståelse for de lokale forhold, herunder samarbejdet med det lokale erhvervsliv.</p></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
