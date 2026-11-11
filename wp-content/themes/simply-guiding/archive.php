<?php
/* Kategori- og arkivsider for nyheder (samme layout som /blog/) */
get_header();
get_template_part('template-parts/site-header');
$title = is_home() ? 'Nyheder' : wp_strip_all_tags(get_the_archive_title());
?>
<div class="sg-hero-wrap">
  <section class="sg-hero sg-hero--split sg-hero--noimg sg-hero--blog" aria-labelledby="sgPageTitle">
    <div class="sg-split"><div class="sg-split__copy">
      <p class="sg-pill">Nyheder</p>
      <h1 id="sgPageTitle"><?php echo esc_html($title); ?></h1>
    </div></div>
  </section>
</div>
<section class="sg-latest sg-bloglist">
  <div class="sg-wrap">
    <?php
    $cats = get_categories(['hide_empty' => true]);
    if ($cats && count($cats) > 1) : ?>
    <nav class="sg-catnav" aria-label="Kategorier">
      <a href="/blog/"<?php echo is_home() ? ' aria-current="page"' : ''; ?>>Alle</a>
      <?php foreach ($cats as $c) : ?><a href="<?php echo esc_url(get_category_link($c)); ?>"<?php echo is_category($c->term_id) ? ' aria-current="page"' : ''; ?>><?php echo esc_html($c->name); ?></a><?php endforeach; ?>
    </nav>
    <?php endif; ?>
    <?php if (have_posts()) : ?>
    <div class="sg-posts">
      <?php while (have_posts()) : the_post(); get_template_part('template-parts/post-card'); endwhile; ?>
    </div>
    <div class="sg-pagination"><?php echo paginate_links(['prev_text' => '←', 'next_text' => '→']); ?></div>
    <?php else : ?>
    <p>Der er ingen indlæg endnu.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
