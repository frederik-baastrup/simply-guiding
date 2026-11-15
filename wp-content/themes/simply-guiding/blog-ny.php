<?php
/* Nyheder – nyt bud (vises på /blog/?ny=1). Kompakt hero, fremhævet seneste indlæg, kategorifaner og lige høje kort. */
$cats = get_categories(['hide_empty' => true]);
$paged = max(1, (int) get_query_var('paged'));
$img = function ($size = 'large') { $th = get_the_post_thumbnail(null, $size, ['loading' => 'lazy']); if ($th) return $th; $fb = sg_post_fallback_img(); return $fb ? '<img src="' . esc_url($fb) . '" alt="" loading="lazy">' : ''; };
$excerpt = function ($n = 26) { return wp_trim_words(wp_strip_all_tags(get_the_excerpt()), $n, ' …'); };
?>
<div class="sg-hero-wrap">
  <section class="sg-bl-hero" aria-labelledby="sgPageTitle">
    <div class="sg-wrap">
      <p class="sg-pill">Nyheder</p>
      <h1 id="sgPageTitle"><?php echo esc_html($title); ?></h1>
      <p class="sg-bl-hero__lead">Læs det seneste fra Simply Guiding.</p>
      <?php if ($cats && count($cats) > 1) : ?>
      <nav class="sg-bl-tabs" aria-label="Kategorier">
        <a href="/blog/?ny=1"<?php echo is_home() ? ' aria-current="page"' : ''; ?>>Alle</a>
        <?php foreach ($cats as $c) : ?><a href="<?php echo esc_url(add_query_arg('ny', 1, get_category_link($c))); ?>"<?php echo is_category($c->term_id) ? ' aria-current="page"' : ''; ?>><?php echo esc_html($c->name); ?></a><?php endforeach; ?>
      </nav>
      <?php endif; ?>
    </div>
  </section>
</div>

<section class="sg-bl" aria-label="Indlæg">
  <div class="sg-wrap">
    <?php if (have_posts()) : ?>
      <?php if ($paged === 1) : the_post(); $cat = get_the_category(); ?>
      <article class="sg-bl-feat">
        <a class="sg-bl-feat__img" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php echo $img('large'); ?></a>
        <div class="sg-bl-feat__txt">
          <p class="sg-bl-meta"><?php if ($cat) : ?><span class="sg-pill"><?php echo esc_html($cat[0]->name); ?></span><?php endif; ?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(sg_date_da()); ?></time></p>
          <h2 class="sg-h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="sg-bl-ex"><?php echo esc_html($excerpt(34)); ?></p>
          <a class="sg-btn sg-btn--lg" href="<?php the_permalink(); ?>">Læs indlægget</a>
        </div>
      </article>
      <?php endif; ?>
      <div class="sg-bl-grid">
        <?php while (have_posts()) : the_post(); $cat = get_the_category(); ?>
        <a class="sg-bl-card" href="<?php the_permalink(); ?>">
          <span class="sg-bl-card__img"><?php echo $img('medium_large'); ?></span>
          <span class="sg-bl-card__body">
            <span class="sg-bl-meta"><?php if ($cat) : ?><span class="sg-pill"><?php echo esc_html($cat[0]->name); ?></span><?php endif; ?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(sg_date_da()); ?></time></span>
            <span class="sg-bl-card__title"><?php the_title(); ?></span>
            <span class="sg-bl-card__more">Læs mere <?php echo sg_arrow(); ?></span>
          </span>
        </a>
        <?php endwhile; ?>
      </div>
      <div class="sg-pagination sg-bl-pag"><?php echo paginate_links(['prev_text' => '←', 'next_text' => '→', 'add_args' => ['ny' => 1]]); ?></div>
    <?php else : ?>
      <p>Der er ingen indlæg endnu.</p>
    <?php endif; ?>
  </div>
</section>
<?php
get_template_part('template-parts/final-cta');
get_template_part('template-parts/site-footer');
get_footer();
