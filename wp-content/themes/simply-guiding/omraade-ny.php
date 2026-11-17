<?php
/* Områdeside – ny version (vises på /omraade/<slug>/?ny=1). Samme tekst og rækkefølge; nyt layout i samme stil som Academy-siderne og Om os. Kræver $c og $u fra omraade-side.php */
$odd = count($c['why_items']) % 2;
?>
<!-- Hvornår ringer man til os -->
<section class="sg-gk-intro sg-ar-why" aria-labelledby="sgWhyTitle">
  <div class="sg-wrap sg-ar-why__grid">
    <div class="sg-ar-why__card">
      <img src="<?php echo esc_url($u . '/assets/' . $c['why_img']); ?>" alt="" loading="lazy">
      <h2 class="sg-h2" id="sgWhyTitle"><?php echo esc_html($c['why_title']); ?></h2>
      <p><?php echo esc_html($c['why_intro']); ?></p>
    </div>
    <div class="sg-ar-why__main">
      <p class="sg-gk-sub"><?php echo esc_html($c['why_lead']); ?></p>
      <ol class="sg-ar-reasons<?php echo $odd ? ' sg-ar-reasons--odd' : ''; ?>">
        <?php foreach ($c['why_items'] as $i => $it) : ?>
        <li><span><?php echo sprintf('%02d', $i + 1); ?></span><p><?php echo esc_html($it); ?></p></li>
        <?php endforeach; ?>
        <?php if ($odd) : ?>
        <li class="sg-ar-reasons__cta"><span class="sg-gk-ico"><?php echo sg_icon('phone'); ?></span><p><strong>Genkender I situationen?</strong>Ring på <a href="tel:+4526344454">26 34 44 54</a>, så tager vi en snak om, hvordan vi kan hjælpe.</p></li>
        <?php endif; ?>
      </ol>
    </div>
  </div>
</section>

<!-- Mennesket bag -->
<section class="sg-gk-format sg-ar-meet" aria-labelledby="sgMeetTitle">
  <div class="sg-wrap sg-gk-split sg-gk-split--media sg-gk-split--flip">
    <div class="sg-gk-split__media sg-os-tall"><img src="<?php echo esc_url($u . '/assets/' . $c['meet_img']); ?>" alt="<?php echo esc_attr($c['meet_alt']); ?>" loading="lazy"></div>
    <div class="sg-gk-split__main">
      <h2 class="sg-h2" id="sgMeetTitle"><?php echo esc_html($c['meet_title']); ?></h2>
      <p class="sg-gk-lead"><?php echo esc_html(implode(' ', $c['meet_text'])); ?></p>
      <ul class="sg-ar-points">
        <?php foreach ($c['meet_points'] as $pt) : ?>
        <li><span class="sg-gk-ico"><?php echo sg_icon($pt[0]); ?></span><div><h3><?php echo esc_html($pt[1]); ?></h3><p><?php echo esc_html($pt[2]); ?></p></div></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/stats', null, ['title' => $c['stats_title'], 'items' => $c['stats']]); ?>

<!-- Forløb -->
<section class="sg-tablesec sg-forloeb" id="forloeb" aria-labelledby="sgForTitle">
  <div class="sg-wrap">
    <div class="sg-sechead"><h2 class="sg-h2" id="sgForTitle"><?php echo esc_html($c['table_title']); ?></h2></div>
    <?php sg_forloeb_cards($c['table']); ?>
  </div>
</section>

<!-- Sådan går vi til opgaverne -->
<section class="sg-gk-topics sg-ar-how" aria-labelledby="sgHowTitle">
  <div class="sg-wrap">
    <div class="sg-headline"><h2 class="sg-h2" id="sgHowTitle"><?php echo esc_html($c['how_title']); ?></h2></div>
    <ul class="sg-gk-topics__grid sg-gk-topics__grid--text">
      <?php foreach ($c['how'] as $h) : ?>
      <li><span class="sg-gk-ico"><?php echo sg_icon($h[0] === 'book' ? 'bookopen' : $h[0]); ?></span><h3><?php echo esc_html($h[1]); ?></h3><p><?php echo esc_html($h[2]); ?></p></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
