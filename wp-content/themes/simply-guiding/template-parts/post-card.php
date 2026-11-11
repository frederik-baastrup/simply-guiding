<?php $cat = get_the_category(); ?>
<article class="sg-post-card">
  <a class="sg-post-card__link" href="<?php the_permalink(); ?>">
    <div class="sg-post-card__img"><?php $th = get_the_post_thumbnail(null, 'large', ['loading' => 'lazy']); if ($th) { echo $th; } elseif ($fb = sg_post_fallback_img()) { echo '<img src="' . esc_url($fb) . '" alt="" loading="lazy">'; } ?></div>
    <p class="sg-post-card__meta"><?php if ($cat) : ?><span class="sg-pill"><?php echo esc_html($cat[0]->name); ?></span><?php endif; ?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(sg_date_da()); ?></time></p>
    <h3 class="sg-post-card__title"><?php the_title(); ?></h3>
  </a>
</article>
