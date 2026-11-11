<?php
/* Undersidehero: tekst på grønt mønster + billede, med logo-bar under. Args: label, title, lead, img, img_w, img_h, alt */
$a = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['label' => '', 'title' => '', 'lead' => '', 'img' => '', 'img_w' => 1600, 'img_h' => 1054, 'alt' => '']);
$u = get_template_directory_uri();
$logos = [
  ['aalborg', 'Aalborg Kommune'], ['varde', 'Varde Kommune'], ['svendborg', 'Svendborg Kommune'], ['soenderborg', 'Sønderborg Kommune'],
  ['koege', 'Køge Kommune'], ['faaborg-midtfyn', 'Faaborg-Midtfyn Kommune', 'is-tall'], ['gladsaxe', 'Gladsaxe Kommune'],
];
$logo_list = function ($hidden) use ($u, $logos) {
  echo '<ul class="sg-logos__list"' . ($hidden ? ' aria-hidden="true"' : '') . '>';
  foreach ($logos as $l) {
    printf('<li><img src="%s/assets/%s.png" alt="%s"%s></li>', esc_url($u), $l[0], $hidden ? '' : esc_attr($l[1]), isset($l[2]) ? ' class="' . $l[2] . '"' : '');
  }
  echo '</ul>';
};
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split<?php echo $a['img'] ? '' : ' sg-hero--noimg'; ?>" aria-labelledby="sgPageTitle">
    <div class="sg-split">
      <div class="sg-split__copy">
        <p class="sg-pill"><?php echo esc_html($a['label']); ?></p>
        <h1 id="sgPageTitle"><?php echo esc_html($a['title']); ?></h1>
        <p class="sg-hero__lead"><?php echo esc_html($a['lead']); ?></p>
        <div class="sg-hero__actions">
          <a class="sg-btn sg-btn--lg" href="/kontakt">Kontakt os og hør mere</a>
          <a class="sg-btn sg-btn--lg sg-btn--ghost" href="#indhold">Læs mere</a>
        </div>
      </div>
      <?php if ($a['img']) : ?>
      <div class="sg-split__media">
        <img src="<?php echo esc_url($u . '/assets/' . $a['img']); ?>" alt="<?php echo esc_attr($a['alt']); ?>" width="<?php echo (int) $a['img_w']; ?>" height="<?php echo (int) $a['img_h']; ?>" fetchpriority="high">
      </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Logo-bar som på det gamle site: hvid fane med skrå sider op i hero'en, label + streg + logo-slider -->
  <div class="sg-logobar">
    <div class="sg-logobar__tab" aria-hidden="true"></div>
    <div class="sg-logobar__inner">
      <p class="sg-logobar__label">Vi har bl.a. samarbejdet med</p>
      <div class="sg-logos" aria-label="Kommuner vi har samarbejdet med">
        <div class="sg-logos__track"><?php $logo_list(false); $logo_list(true); ?></div>
      </div>
    </div>
  </div>
</div>

