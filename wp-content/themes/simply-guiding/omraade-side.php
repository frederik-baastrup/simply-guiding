<?php
/* Områdeside (/omraade/<slug>/): indhold fra content/omraade/<slug>.php */
$slug = get_post_field('post_name', get_queried_object_id());
$file = get_template_directory() . '/content/omraade/' . $slug . '.php';
if (!file_exists($file)) { status_header(404); get_template_part('404'); return; }
$c = require $file;
$u = get_template_directory_uri();
get_header();
get_template_part('template-parts/site-header');
get_template_part('template-parts/page-hero', null, [
  'label' => $c['label'], 'title' => $c['title'], 'lead' => $c['lead'], 'img' => $c['hero_img'], 'alt' => $c['hero_alt'],
  'btn1' => $c['btn1'], 'btn1_href' => '#formular', 'btn2' => $c['btn2'], 'btn2_href' => '#forloeb',
]);
?>
<div id="indhold"></div>

<!-- Hvornår ringer man til os -->
<section class="sg-why" aria-labelledby="sgWhyTitle">
  <div class="sg-wrap sg-why__grid">
    <div>
      <h2 class="sg-h2" id="sgWhyTitle"><?php echo esc_html($c['why_title']); ?></h2>
      <p class="sg-why__intro"><?php echo esc_html($c['why_intro']); ?></p>
    </div>
    <div>
      <p class="sg-why__lead"><?php echo esc_html($c['why_lead']); ?></p>
      <?php sg_checks($c['why_items']); ?>
    </div>
  </div>
</section>

<!-- Mennesket bag: billede + tekst + tre kort -->
<section class="sg-mind3 sg-meet" aria-labelledby="sgMeetTitle">
  <div class="sg-wrap sg-mind3__grid">
    <div class="sg-mind3__media"><img src="<?php echo esc_url($u . '/assets/' . $c['meet_img']); ?>" alt="<?php echo esc_attr($c['meet_alt']); ?>" loading="lazy"></div>
    <div class="sg-mind3__copy">
      <h2 class="sg-h2" id="sgMeetTitle"><?php echo esc_html($c['meet_title']); ?></h2>
      <p class="sg-mind3__lead"><?php echo esc_html(implode(' ', $c['meet_text'])); ?></p>
      <p class="sg-textlink"><a href="/saadan-arbejder-vi/">Læs mere om vores mindset <?php echo sg_arrow(); ?></a></p>
      <div class="sg-mv__list sg-meet__list">
        <?php foreach ($c['meet_points'] as $pt) : ?>
        <div><span class="sg-mv__ico"><?php echo sg_icon($pt[0]); ?></span><h3 class="sg-meet__h"><?php echo esc_html($pt[1]); ?></h3><p class="sg-meet__t"><?php echo esc_html($pt[2]); ?></p></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/stats', null, ['title' => $c['stats_title'], 'items' => $c['stats']]); ?>

<!-- Forløb -->
<section class="sg-tablesec sg-forloeb" id="forloeb" aria-labelledby="sgForTitle">
  <div class="sg-wrap">
    <div class="sg-sechead"><h2 class="sg-h2" id="sgForTitle"><?php echo esc_html($c['table_title']); ?></h2></div>
    <?php sg_table(array_merge([['Forløb', 'Målgruppe', 'Indsats']], $c['table'])); ?>
  </div>
</section>

<?php
get_template_part('template-parts/cards3', null, ['title' => $c['how_title'], 'items' => $c['how']]);
get_template_part('template-parts/team', null, ['title' => 'Holdet bag Simply Guiding']);
get_template_part('template-parts/contact-form', null, ['title' => $c['form_title'], 'text' => $c['form_text']]);
get_template_part('template-parts/site-footer');
get_footer();
