<?php
/* Hvad er IPS? (/hvad-er-ips/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$checks = function ($items) use ($check) { echo '<ul class="sg-principles">'; foreach ($items as $i) echo '<li>' . $check . esc_html($i) . '</li>'; echo '</ul>'; };
get_template_part('template-parts/page-hero', null, [
  'label' => 'IPS-metoden', 'title' => 'Hvad er IPS?',
  'lead'  => 'IPS står for Individuelt Planlagt job eller uddannelse med Støtte. Det er en beskæftigelsesindsats, som er målrettet mennesker med en psykisk lidelse eller psykisk sårbarhed, og som er motiverede for at komme i job eller uddannelse. Læs mere om IPS her.',
  'img' => 'ips-maal.jpg', 'img_w' => 1200, 'img_h' => 800, 'alt' => 'Samtale mellem to personer ved et bord',
]);
$principles = [
  'Målet med IPS-indsatsen er at få kandidaten i beskæftigelse på det ordinære jobmarked.',
  'Alle, der har behov for det, har mulighed for at deltage. Ingen bliver ekskluderet.',
  'Jobsøgning starter så hurtigt, som det er muligt, efter kandidaten er inkluderet i IPS-forløbet.',
  'IPS-forløbet foregår som en integreret del af den psykiatriske behandling.',
  'Indsatsen er baseret på IPS-kandidatens egne præferencer og valg i forhold til uddannelse og job.',
  'Støtten under beskæftigelse er ikke bare midlertidig, men varer så længe der er behov for det.',
  'Under IPS-forløbet får kandidaten konkret vejledning omkring sociale ydelser og arbejde.',
  'IPS-konsulenterne opbygger relationer til arbejdsgivere i lokalområdet, baseret på kandidaternes ønsker.',
];
?>
<div id="indhold"></div>

<section class="sg-pdetail sg-intro" aria-labelledby="sgGoalTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side"><h2 class="sg-h2" id="sgGoalTitle">Målet er uddannelse eller beskæftigelse</h2></div>
    <div class="sg-pdetail__body">
      <p class="sg-intro__lead">Det er målet, at mennesker, der deltager i IPS-indsatsen, starter og fastholdes i ordinær beskæftigelse eller uddannelse. Det er IPS-kandidatens motivation for at komme i job og ønsker for fremtiden, der sætter retningen for kandidatens vej tilbage i arbejde.</p>
      <?php $checks(['IPS er en virksomhedsrettet indsats med fokus på ’Job Development’', 'IPS-konsulenten samarbejder tæt med det kommunale jobcenter', 'IPS er en tværfaglig indsats der samarbejder med en række fagpersoner som psykiater, misbrugsbehandler og mentor.']); ?>
    </div>
  </div>
</section>

<div class="sg-band-wrap">
  <section class="sg-band2 sg-principles8" aria-labelledby="sgPrinTitle">
    <div class="sg-wrap">
      <div class="sg-band2__head">
        <h2 class="sg-h2 sg-h2--light" id="sgPrinTitle">Principperne bag IPS-metoden</h2>
        <p class="sg-principles8__intro">IPS er forankret i 8 principper, der sætter rammen og retningen for indsatsen. De 8 IPS-principper guider IPS-konsulenten i implementeringen af indsatsen. Sammen med indsatsmanualer og værktøjer udgør principperne metodegrundlaget for det systematiske arbejde med at støtte og vejlede IPS-kandidaten på vejen mod job eller uddannelse.</p>
      </div>
      <ol class="sg-principles8__grid">
        <?php foreach ($principles as $i => $p) : ?>
        <li><span class="sg-principles8__num"><?php echo $i + 1; ?></span><p><?php echo esc_html($p); ?></p></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>
</div>

<section class="sg-sol" aria-labelledby="sgMatchTitle">
  <div class="sg-wrap sg-sol__grid">
    <div class="sg-sol__media"><img src="<?php echo esc_url($u); ?>/assets/ips-match.jpg" alt="Kandidatsamtale med en ung" loading="lazy"></div>
    <div class="sg-sol__copy">
      <h2 class="sg-h2" id="sgMatchTitle">Matcher mennesker og virksomheder</h2>
      <p>IPS matcher mennesker med en psykisk lidelse eller psykisk sårbarhed, der står uden for arbejdsmarkedet, med virksomhedernes behov for arbejdskraft eller støtter mennesker i at starte og fastholde en uddannelse.</p>
      <?php $checks(['Samarbejdet mellem IPS-konsulenten og IPS-kandidaten beror på en tæt relation, tillid og individuel støtte.', 'Samarbejdet tager udgangspunkt i kandidatens egne præferencer og valg, og bygger på kandidatens erfaringer, styrker og ressourcer.', 'Samarbejdet omfatter en tæt dialog mellem IPS-konsulenten, IPS-kandidaten og virksomheden, og der sker en løbende opfølgning hvor kandidaten og virksomheden modtager støtte efter behov.']); ?>
    </div>
  </div>
</section>

<section class="sg-tiles2" aria-labelledby="sgStartTitle">
  <div class="sg-wrap">
    <div class="sg-tablesec__head">
      <h2 class="sg-h2" id="sgStartTitle">Kom i gang med IPS</h2>
      <p>Simply Guiding er specialiseret i IPS-metoden. Vi tilbyder IPS-forløb til psykisk syge eller psykisk sårbare mennesker i tæt samarbejde med landets jobcentre og det psykiatriske behandlingssystem. Med IPS-metodens principper og værktøjer gennemfører vi forløb, der er skræddersyet til det enkelte menneske, så det matcher deres ønsker og drømme for et liv med arbejde. Udover at gennemføre enkeltpladsforløb, der udføres af egne IPS-konsulenter, tilbyder vi kurser og uddannelser i IPS-metoden.</p>
    </div>
    <div class="sg-tiles2__grid">
      <div class="sg-tile2"><h3>Jobcenter:</h3><p>Kontakt os for at høre nærmere om IPS-indsatsen, eller book et uforpligtende møde, hvor vi præsenterer IPS og mulighederne for at implementere IPS i din kommune.</p></div>
      <div class="sg-tile2"><h3>Borger:</h3><p>Hvis du er interesseret i at deltage i et IPS-forløb, så kontakt os for mere information om IPS, og hør om mulighederne for at komme i et forløb hos os.</p></div>
      <div class="sg-tile2"><h3>Virksomhed:</h3><p>Er du arbejdsgiver, og har du lyst til at give et menneske, der står i en udsat position, en chance på arbejdsmarkedet, så kontakt os.</p></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/more', null, ['text' => 'Har du spørgsmål angående vores løsninger og indsatser? Så er vores konsulenter altid klar til at hjælpe. Du kan altid kontakte os på 26 34 44 54 eller skrive til os via nedenstående kontaktformular. Vi sidder klar til at hjælpe dig til at finde den perfekte løsning.']); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
