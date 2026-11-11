<?php
/* Seneste nyheder (de 3 nyeste indlæg). Vises kun, når der er indlæg i WordPress. */
$q = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => true]);
if (!$q->have_posts()) return;
?>
<section class="sg-latest" aria-labelledby="sgLatestTitle">
  <div class="sg-wrap">
    <div class="sg-latest__head">
      <h2 class="sg-h2" id="sgLatestTitle">Seneste nyheder fra Simply Guiding</h2>
      <span class="sg-latest__rule" aria-hidden="true"></span>
      <a class="sg-btn sg-btn--lg sg-btn--outline" href="/blog/">Se alle artikler</a>
    </div>
    <div class="sg-posts">
      <?php while ($q->have_posts()) : $q->the_post(); get_template_part('template-parts/post-card'); endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
