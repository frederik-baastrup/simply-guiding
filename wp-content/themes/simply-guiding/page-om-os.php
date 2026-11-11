<?php
/* Om os (/om-os/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
get_template_part('template-parts/page-hero', null, [
  'title' => 'Vi hjælper mennesker tilbage til arbejdslivet',
  'lead'  => 'Simply Guiding har siden 2015 haft som mission at hjælpe mennesker, der lever med sociale, psykiske og fysiske udfordringer, til et nyt ståsted i tilværelsen med fast grund under fødderne og en vej tilbage til arbejdslivet.',
  'video' => 'om-os-hero.mp4', 'poster' => 'om-os-hero.jpg',
  'btn1' => 'Kontakt os for at høre mere', 'btn2' => 'Læs mere om os', 'btn2_href' => '#info',
]);
$team = [
  ['team-lars.jpg', 'Lars Olaf Nielsen', 'Direktør', '+4551905606', '51 90 56 06', 'lars@simplyguiding.dk'],
  ['team-marlene.jpg', 'Marlene Mohn Ishøi', 'Driftsdirektør', '+4551909603', '51 90 96 03', 'marlene@simplyguiding.dk'],
  ['team-tania.jpg', 'Tania Cortes', 'Økonomiansvarlig', '+4551903726', '51 90 37 26', 'tania@simplyguiding.dk'],
];
?>
<div id="info"></div>

<section class="sg-mind3" aria-labelledby="sgMissionTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><img src="<?php echo esc_url($u); ?>/assets/om-os-mission.jpg" alt="Medarbejdere hos Simply Guiding" width="1200" height="1800" loading="lazy"></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgMissionTitle">Vi hjælper mennesker videre i tilværelsen</h2>
      <p class="sg-mind3__lead">Vi leverer indsatser, der tager afsæt i at skabe gode trygge relationer og understøtte en positiv og optimistisk tro på fremtiden for de mennesker, der for en stund har brug for støtte til at komme videre i tilværelsen. Vi søger konstant at udvikle os gennem partnerskaber og samarbejder, der styrker vores faglighed og daglige mission.</p>
      <div class="sg-mind3__cols">
        <div><p>Vores mission er at støtte mennesker i udsatte positioner til at finde en vej i tilværelsen, som øger deres psykiske trivsel, sundhed og understøtter selvforsørgelse, så de kan opnå en bedre fremtid.</p></div>
        <div><p>Vores vision er at skabe et samfund, hvor alle mennesker – uanset deres udgangspunkt – får mulighed for at finde deres unikke vej til selvforsørgelse, uddannelse og trivsel. Vi stræber efter at være en drivkraft for positiv forandring ved at give mere, end vi modtager, og ved at skabe en kultur baseret på social ansvarlighed. Vi tror på, at vores bidrag gør en forskel, og at vi er sat i verden for at løfte både individer og samfundet som helhed mod en lysere og mere bæredygtig fremtid.</p></div>
      </div>
      <p>Vi arbejder med evidensbaserede metoder, og er stringente i vores metodiske arbejde. Vores værdier er autenticitet, inklusion, nærvær, og en tro på, at alle har værdi.</p>
      <p class="sg-pdetail__actions" style="border:0;padding-top:8px"><a class="sg-btn sg-btn--lg" href="/kontakt/">Kontakt os og hør mere</a></p>
    </div>
  </div>
</section>

<section class="sg-news-signup" aria-labelledby="sgNlTitle">
  <div class="sg-wrap">
    <div class="sg-news-signup__box">
      <h2 class="sg-h2 sg-h2--light" id="sgNlTitle">Tilmeld dig vores nyhedsbrev</h2>
      <?php get_template_part('template-parts/signup-form'); ?>
    </div>
  </div>
</section>

<section class="sg-team" aria-labelledby="sgOrgTitle">
  <div class="sg-wrap">
    <div class="sg-tablesec__head">
      <h2 class="sg-h2" id="sgOrgTitle">Organisation</h2>
      <p>Simply Guidings medarbejdere har et særligt DNA, som vi værner om. De har blik for det unikke i mennesket, de møder borgeren fordomsfrit og med optimisme og de overgår dagligt vores forventninger. Derfor har vi som virksomhed også en særlig forpligtigelse til at skabe et arbejdsmiljø, der fokuserer på fleksibilitet, livsbalance, og anerkendelse.</p>
    </div>
    <div class="sg-team__grid">
      <?php foreach ($team as $t) : ?>
      <article class="sg-person">
        <div class="sg-person__img"><img src="<?php echo esc_url($u . '/assets/' . $t[0]); ?>" alt="<?php echo esc_attr($t[1]); ?>" loading="lazy"></div>
        <h3 class="sg-person__name"><?php echo esc_html($t[1]); ?></h3>
        <p class="sg-person__role"><?php echo esc_html($t[2]); ?></p>
        <p class="sg-person__contact"><a href="tel:<?php echo esc_attr($t[3]); ?>"><?php echo esc_html($t[4]); ?></a><a href="mailto:<?php echo esc_attr($t[5]); ?>"><?php echo esc_html($t[5]); ?></a></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/latest-news'); ?>
<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
