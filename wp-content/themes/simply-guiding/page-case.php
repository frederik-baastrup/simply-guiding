<?php
/* Succeshistorie (/cases/<slug>/) – indhold fra content/cases/<slug>.json (overført ordret fra det gamle site) */
$slug = get_post_field('post_name', get_queried_object_id());
$file = get_template_directory() . '/content/cases/' . $slug . '.json';
$c = file_exists($file) ? json_decode(file_get_contents($file), true) : null;
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
if (!$c) { echo '<main class="sg-wrap" style="padding:160px 0">Historien findes ikke.</main>'; get_template_part('template-parts/site-footer'); get_footer(); return; }
$img = 'cases-hero.jpg';
foreach ($c['blocks'] as $b) { if ($b['t'] === 'img') { $img = $b['src']; break; } }
get_template_part('template-parts/page-hero', null, [
  'label' => $c['label'], 'title' => $c['title'], 'lead' => $c['lead'], 'img' => $img, 'alt' => '',
]);
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$first_img_used = false;
?>
<div id="indhold"></div>
<article class="sg-story">
  <div class="sg-story__inner">
  <?php foreach ($c['blocks'] as $b) :
    switch ($b['t']) {
      case 'h2': echo '<h2 class="sg-story__h2">' . esc_html($b['text']) . '</h2>'; break;
      case 'p': echo '<p>' . esc_html($b['text']) . '</p>'; break;
      case 'note': echo '<p class="sg-story__note">' . esc_html($b['text']) . '</p>'; break;
      case 'ul': echo '<ul class="sg-principles">'; foreach ($b['items'] as $it) echo '<li>' . $check . esc_html($it) . '</li>'; echo '</ul>'; break;
      case 'img':
        if (!$first_img_used && $b['src'] === $img) { $first_img_used = true; if (!$b['cap']) break; }
        echo '<figure class="sg-story__fig"><img src="' . esc_url($u . '/assets/' . $b['src']) . '" alt="' . esc_attr($b['cap']) . '" loading="lazy">' . ($b['cap'] ? '<figcaption>' . esc_html($b['cap']) . '</figcaption>' : '') . '</figure>';
        break;
      case 'quote':
        echo '<blockquote class="sg-story__quote"><p>' . esc_html($b['text']) . '</p>' . ($b['name'] || $b['role'] ? '<footer><b>' . esc_html($b['name']) . '</b> ' . esc_html($b['role']) . '</footer>' : '') . '</blockquote>';
        break;
      case 'essence':
        echo '<aside class="sg-story__essence"><h2>' . esc_html($b['title']) . '</h2><ul class="sg-principles">'; foreach ($b['items'] as $it) echo '<li>' . $check . esc_html($it) . '</li>'; echo '</ul></aside>';
        break;
    }
  endforeach; ?>
  </div>
</article>
<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
