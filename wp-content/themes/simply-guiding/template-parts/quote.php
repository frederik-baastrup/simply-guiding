<?php
/* Citat i Lora på ternet baggrund (som forsidens kundecitat). Args: label, quote, name, role, photo, btn_text, btn_href */
$q = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['label' => '', 'quote' => '', 'name' => '', 'role' => '', 'photo' => '', 'btn_text' => '', 'btn_href' => '']);
$u = get_template_directory_uri();
?>
<section class="sg-quote" aria-label="<?php echo esc_attr($q['label']); ?>">
  <div class="sg-quote__inner">
    <div class="sg-quote__card">
      <figure class="sg-quote__main">
        <span class="sg-quote__tag"><?php echo esc_html($q['label']); ?></span>
        <blockquote class="sg-quote__text"><?php echo esc_html($q['quote']); ?></blockquote>
        <figcaption class="sg-quote__by sg-quote__by--stack">
          <?php if ($q['photo']) : ?><img class="sg-quote__photo" src="<?php echo esc_url($u . '/assets/' . $q['photo']); ?>" alt="" width="72" height="72" loading="lazy"><?php endif; ?>
          <span class="sg-quote__who"><span class="sg-quote__name"><?php echo esc_html($q['name']); ?></span><span class="sg-quote__role"><?php echo esc_html($q['role']); ?></span></span>
        </figcaption>
        <?php if ($q['btn_text']) : ?><p class="sg-quote__cta"><a class="sg-btn sg-btn--lg sg-btn--outline" href="<?php echo esc_url($q['btn_href']); ?>"><?php echo esc_html($q['btn_text']); ?></a></p><?php endif; ?>
      </figure>
    </div>
  </div>
</section>
