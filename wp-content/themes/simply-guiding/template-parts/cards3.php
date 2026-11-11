<?php
/* Tre (eller fire) kort med ikon, titel og tekst. Args: title, text, items = [[ikon, titel, tekst], ...], id, tone ('light'|'white') */
$c3 = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['title' => '', 'text' => '', 'items' => [], 'id' => '', 'tone' => 'light', 'numbered' => false]);
$hid = 'sgC3' . substr(md5($c3['title']), 0, 6);
?>
<section class="sg-cards3 sg-cards3--<?php echo esc_attr($c3['tone']); ?>"<?php echo $c3['id'] ? ' id="' . esc_attr($c3['id']) . '"' : ''; ?> aria-labelledby="<?php echo $hid; ?>">
  <div class="sg-wrap">
    <div class="sg-sechead">
      <h2 class="sg-h2" id="<?php echo $hid; ?>"><?php echo esc_html($c3['title']); ?></h2>
      <?php if ($c3['text']) : ?><p><?php echo esc_html($c3['text']); ?></p><?php endif; ?>
    </div>
    <div class="sg-cards3__grid sg-cards3__grid--<?php echo count($c3['items']); ?>">
      <?php foreach ($c3['items'] as $i => $it) : ?>
      <div class="sg-card3">
        <?php if ($c3['numbered']) : ?><span class="sg-card3__num"><?php echo sprintf('%02d', $i + 1); ?></span><?php else : ?><span class="sg-card3__ico"><?php echo sg_icon($it[0]); ?></span><?php endif; ?>
        <h3><?php echo esc_html($it[1]); ?></h3>
        <p><?php echo esc_html($it[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
