<?php
/* Tal på mørkt bånd. Args: title, items = [[tal, overskrift, tekst], ...] */
$st = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['title' => '', 'items' => []]);
?>
<div class="sg-band-wrap">
  <section class="sg-kpis" aria-labelledby="sgStatsTitle">
    <div class="sg-wrap">
      <h2 class="sg-h2 sg-h2--light sg-kpis__title" id="sgStatsTitle"><?php echo esc_html($st['title']); ?></h2>
      <div class="sg-kpis__grid">
        <?php foreach ($st['items'] as $it) : ?>
        <div class="sg-kpi">
          <p class="sg-kpi__num"><?php echo esc_html($it[0]); ?></p>
          <h3 class="sg-kpi__label"><?php echo esc_html($it[1]); ?></h3>
          <p class="sg-kpi__text"><?php echo esc_html($it[2]); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>
