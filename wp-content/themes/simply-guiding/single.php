<?php
/* Enkelt nyhed/artikel – samme adresse som på det gamle site (/<indlæggets-slug>/) */
get_header();
get_template_part('template-parts/site-header');
while (have_posts()) : the_post();
$cat = get_the_category();
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split sg-hero--noimg sg-hero--blog" aria-labelledby="sgPageTitle">
    <div class="sg-split"><div class="sg-split__copy">
      <p class="sg-post-hero__meta"><?php if ($cat) : ?><a class="sg-pill" href="<?php echo esc_url(get_category_link($cat[0])); ?>"><?php echo esc_html($cat[0]->name); ?></a><?php endif; ?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(sg_date_da()); ?></time></p>
      <h1 id="sgPageTitle"><?php the_title(); ?></h1>
    </div></div>
  </section>
</div>
<article class="sg-story sg-post">
  <div class="sg-story__inner">
    <?php $th = get_the_post_thumbnail(null, 'large'); if ($th) : ?><figure class="sg-story__fig sg-post__thumb"><?php echo $th; ?></figure><?php elseif ($fb = sg_post_fallback_img()) : ?><figure class="sg-story__fig sg-post__thumb"><img src="<?php echo esc_url($fb); ?>" alt=""></figure><?php endif; ?>
    <div class="sg-post__content"><?php the_content(); ?></div>
    <p class="sg-post__back"><a class="sg-btn sg-btn--lg sg-btn--outline" href="/blog/">Se alle nyheder</a></p>
  </div>
</article>
<?php endwhile; ?>
<?php get_template_part('template-parts/latest-news'); ?>
<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
