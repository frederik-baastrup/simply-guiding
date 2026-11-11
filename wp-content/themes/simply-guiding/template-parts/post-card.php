<?php $cat = get_the_category(); ?>
<article class="sg-post-card">
  <a class="sg-post-card__link" href="<?php the_permalink(); ?>">
    <div class="sg-post-card__img"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', ['loading' => 'lazy']); } elseif ($fb = sg_post_fallback_img()) { echo '<img src="' . esc_url($fb) . '" alt="" loading="lazy">'; } ?></div>
    <p class="sg-post-card__meta"><?php if ($cat) : ?><span class="sg-pill"><?php echo esc_html($cat[0]->name); ?></span><?php endif; ?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('j. F Y')); ?></time></p>
    <h3 class="sg-post-card__title"><?php the_title(); ?></h3>
  </a>
</article>
