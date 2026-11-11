<?php
/* Projekter (/projekter/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$checks = function ($items) use ($check) {
  echo '<ul class="sg-principles">';
  foreach ($items as $i) echo '<li>' . $check . esc_html($i) . '</li>';
  echo '</ul>';
};
get_template_part('template-parts/page-hero', null, [
  'label' => 'Projekter', 'title' => 'Vores projekter',
  'lead'  => 'Simply Guiding udvikler indsatser, der går nye veje i støtten til mennesker, som har brug for hjælp til at finde deres ståsted i livet. Læs mere om vores projekter her.',
  'img' => 'projekter.jpg', 'img_w' => 1100, 'img_h' => 774, 'alt' => 'Fire unge arbejder sammen med planter i et grønt område',
]);
?>

<div id="indhold"></div>

<!-- Vi udvikler indsatser: video til venstre, tekst til højre (samme opbygning som "Mindset og metoder") -->
<section class="sg-mind3" aria-labelledby="sgDevTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media">
      <video src="<?php echo esc_url($u); ?>/assets/projekter-anja.mp4" poster="<?php echo esc_url($u); ?>/assets/projekter-anja.jpg" autoplay muted loop playsinline preload="metadata" aria-hidden="true"></video>
    </div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgDevTitle">Vi udvikler indsatser</h2>
      <p class="sg-mind3__lead">Simply Guiding udvikler indsatser, der går nye veje i støtten til mennesker, som har brug for hjælp til at finde deres ståsted i livet. Med afsæt i Supported Employment og IPS-metoden tager vi udgangspunkt i hvert enkelt menneskes drømme og ønsker for et liv med arbejde eller uddannelse og under hensyn til de behov, som de har brug for i deres arbejdsliv.</p>
      <p>Det er ud fra det mindset, at vi udvikler indsatser, der afprøver nye metoder, skaber nye samarbejdsformer og inddrager nye målgrupper. I øjeblikket arbejder vi på tre projekter.</p>
    </div>
  </div>
</section>

<!-- Oversigt: igangværende og afsluttede projekter samlet i ét gitter -->
<section class="sg-projects" aria-label="Projekter">
  <div class="sg-wrap">
    <div class="sg-projects__grid">
      <article class="sg-project sg-project--active">
        <p class="sg-pill">Igangværende projekter</p>
        <h2 class="sg-project__title">Recharge</h2>
        <p class="sg-project__text">En voksende gruppe børn og unge mellem 12 og 17 år oplever alvorlig mistrivsel, skoletræthed og manglende tilknytning til fællesskaber. Simply Guiding samarbejder med familieafdelingen i Herlev Kommune om at udvikle og implementere nye tilgange, der hjælper unge med at genfinde tilknytningen til skole, fritidsjob og fællesskaber.</p>
        <a class="sg-project__link" href="#recharge">Læs mere Recharge <?php echo sg_arrow(); ?></a>
      </article>
      <article class="sg-project">
        <p class="sg-pill">Afsluttede projekter</p>
        <h2 class="sg-project__title">IPS UNG</h2>
        <p class="sg-project__text">Simply Guiding arbejder sammen med Ungeenheden i Gladsaxe Kommune og SIND om et ungeprojekt, der bl.a. har fokus på at udvikle nye metoder til at inddrage de unge og give dem større beslutningskraft i forløbet. Der arbejdes også med at gå nye veje i involveringen af virksomheder i indsatsen.</p>
        <a class="sg-project__link" href="#ipsung">Læs mere om IPS Ung <?php echo sg_arrow(); ?></a>
      </article>
      <article class="sg-project">
        <p class="sg-pill">Afsluttede projekter</p>
        <h2 class="sg-project__title">Din vej i job</h2>
        <p class="sg-project__text">Aarhus Jobcenter, SIND Erhverv og Simply Guiding er gået sammen i et nyt socialt investeringsprojekt: ‘Din vej i job’. Målgruppen er borgere over 30 år på kontanthjælp, der lever med en psykisk sygdom. Formålet er, at flere borgere skal skifte en tilværelse på kontanthjælp ud med beskæftigelse eller uddannelse.</p>
        <a class="sg-project__link" href="#dinvejijob">Læs mere Din vej i job <?php echo sg_arrow(); ?></a>
      </article>
    </div>
  </div>
</section>

<!-- Projekterne i detaljer: titel + status til venstre (står stille), tekst til højre -->
<section class="sg-pdetail" id="recharge" aria-labelledby="sgRechargeTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side">
      <h2 class="sg-h2" id="sgRechargeTitle">Recharge</h2>
      <p class="sg-pdetail__status is-active">Projektet er aktivt.</p>
    </div>
    <div class="sg-pdetail__body">
      <p>Simply Guiding har i samarbejde med Børn-, Unge- og Familieafdelingen i Herlev Kommune igangsat et udviklingsprojekt, hvor der afprøves og implementeres en indsats for børn og unge i aldersgruppen 12-17 år, der lever med svær social og psykisk mistrivsel. Projektet startede i foråret 2024 og foreløbig er en håndfuld unge startet i Recharge-indsatsen.</p>
      <p>Formålet med Recharge-indsatsen er bl.a. at give den unge en tilknytning til fritids- og fællesskabende aktiviteter, give den unge arbejdserfaringer fra fritidsjob og praktikker, og fremme den unges personlige og faglige udvikling gennem individuelt tilrettelagt støtte og læring.</p>
      <p>Ved opstart på et forløb laver vi sammen med den unge, forældre og sagsbehandler en handleplan, der sætter retning og mål for samarbejdet, der kan omfatte et eller flere af nedenstående indsatsområder.</p>
      <h3 class="sg-mind3__h3">Indsatsområder:</h3>
      <?php $checks(['Arbejdserfaringer fra fritidsjob/praktikker', 'Tilknytning til fritidsaktiviteter', 'Undervisning og pædagogisk støtte', 'Opstart på uddannelsesforløb', 'Strategier til håndtering af psykiske symptomer']); ?>
      <p>Vores ungevejledere tilrettelægger et individuelt forløb, der støtter op om de unges psykiske udfordringer og behov for særlig tilrettelagt støtte. Alt efter den unges situation og støttebehov kan et forløb omfatte 2-3 timers konfrontationstid om ugen med sparring og støtte til en fritidsjobaktivitet, over et mere omfattende forløb med støtte til skole og fritidsaktiviteter, til en intensiv indsats hvor den unge modtager et særligt tilrettelagt undervisningsforløb.</p>
    </div>
  </div>
</section>

<section class="sg-pdetail" id="ipsung" aria-labelledby="sgIpsTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side">
      <h2 class="sg-h2" id="sgIpsTitle">IPS Ung</h2>
      <p class="sg-pdetail__status">Projektet blev afsluttet i 2025.</p>
    </div>
    <div class="sg-pdetail__body">
      <p>Gladsaxe Kommune indgår partnerskab med SIND Erhverv og Simply Guiding. Sammen vil parterne hjælpe unge, der står på kanten af samfundet uden uddannelse og job, og som kæmper med en psykisk lidelse. Med en donation på 4.5 millioner kr. fra Det Obelske Familiefond går Simply Guiding sammen med SIND Erhverv, EGGS Design, Defactum og Gladsaxe Kommune om at udvikle en ungeindsats, der står på IPS-indsatsens evidensbaserede principper og metoder, og samtidig går nye veje i støtten til psykisk sårbare unge. Det sker bl.a. ved at afsøge mulighederne for en styrket brobygning til psykiatrien, udvikling af nye greb i virksomhedssamarbejdet, involvering af pårørende/frivillige, og gruppeforløb hvor de unge bygger netværk med hinanden.</p>
      <h3 class="sg-mind3__h3">Den faglige praksis i IPS UNG:</h3>
      <?php $checks(['”At (sam)arbejde med afsæt i de unges ønsker, erfaringer, ressourcer, drømme, behov og tempo”', 'Vi lader den unge være ekspert på eget liv.', 'Vi er nysgerrige på den unges liv og relationer til andre – uden at konkludere på deres vegne (‘parkere’ vores forforståelser).', 'Selvfølgelige positive forventninger og ‘vikarierende håb’.', 'At vi bruger de unges egne ord for det de oplever, frem for at kategorisere og diagnosticere.', 'At arbejde ud fra en ‘ikke-diagnostisk tilgang’ og en mere dynamisk og eksplorativ forståelse af diagnoser.']); ?>
      <p>Klik på knappen herunder for at se folder. Virksomhedsfolderen er et eksempel på et redskab der er udviklet til at styrke dialogen med virksomheder og deres engagement i IPS UNG.</p>
      <p class="sg-pdetail__actions"><a class="sg-btn sg-btn--lg" href="<?php echo esc_url($u); ?>/assets/ips-ung-virksomhedsfolder.pdf" target="_blank" rel="noopener">Se folder</a></p>
    </div>
  </div>
</section>

<section class="sg-pdetail" id="dinvejijob" aria-labelledby="sgDinVejTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side">
      <h2 class="sg-h2" id="sgDinVejTitle">Din vej i job</h2>
      <p class="sg-pdetail__status">Projektet blev afsluttet i 2025.</p>
    </div>
    <div class="sg-pdetail__body">
      <p>Aarhus Jobcenter, SIND Erhverv og Simply Guiding er gået sammen i et nyt socialt investeringsprojekt. Rådet for Sociale Investeringer i Aarhus Kommune investerer 3 mio. kr. i projektet der implementeres i perioden 1. januar 2023 til 31. december 2024. Målgruppen er borgere over 30 år på kontanthjælp, der lever med en psykisk sygdom.</p>
      <p>Din vej i job hjælper mennesker i udsatte positioner, ramt af psykiske lidelser eller psykisk sårbarhed, med at starte og fastholdes i job eller uddannelse. Indsatsen står på SIND Erhverv og Simply Guiding erfaringer og IPS metodens evidensbaserede principper og værktøjer. Der er et vedvarende fokus på at gå borgerens vej, hvor borgerens ønsker og drømme for et liv med uddannelse og arbejde er det, der former indsatsen. Det er borgerens styrker og muligheder, der sætter retningen og ikke den psykiske diagnose eller sårbarhed.</p>
      <p>For borgere der deltager i Din vej i job er målet, at de kommer ud af passiv forsørgelse og starter i job eller uddannelse.</p>
      <h3 class="sg-mind3__h3">Pejlemærker for indsatsen:</h3>
      <?php $checks(['Indsatsen er baseret på borgerens drømme, behov og mål', 'Hurtigt i job (eller uddannelse) på almindelige arbejdspladser med løn', 'Indsatsen integrerer mål og aktiviteter fra flere sektorer (beskæftigelse, social, sundhed)', 'En håndholdt indsats med store frihedsgrader i samarbejdet mellem vejleder og borger', 'Indsatsen har et ambitiøst efterværn', 'Indsatsen etablerer partnerskaber med virksomheder der gerne vil tage et ansvar']); ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>

<?php get_footer(); ?>
