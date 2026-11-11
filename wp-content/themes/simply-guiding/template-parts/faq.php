<?php
/* FAQ (samme opbygning og script som på forsiden). Args: title, items = [[spørgsmål, svar], ...] */
$fq = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['title' => 'FAQ - ofte stillede spørgsmål', 'items' => []]);
?>
<section class="sg-faq" aria-labelledby="sgFaqTitle">
  <div class="sg-wrap sg-faq__grid">
    <h2 class="sg-faq__title" id="sgFaqTitle"><?php echo esc_html($fq['title']); ?></h2>
    <ul class="sg-faq__list">
      <?php foreach ($fq['items'] as $i => $q) : ?>
      <li class="sg-faq__item">
        <button class="sg-faq__q" id="faq-q<?php echo $i; ?>" aria-expanded="false" aria-controls="faq-a<?php echo $i; ?>"><?php echo esc_html($q[0]); ?><span class="sg-faq__icon" aria-hidden="true"></span></button>
        <div class="sg-faq__a" id="faq-a<?php echo $i; ?>" role="region" aria-labelledby="faq-q<?php echo $i; ?>"><div><p><?php echo esc_html($q[1]); ?></p></div></div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
