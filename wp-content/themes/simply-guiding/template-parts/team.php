<?php
/* Holdet bag Simply Guiding. Args: title, text, id */
$tm = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['title' => 'Holdet bag Simply Guiding', 'text' => '', 'id' => 'holdet']);
$u = get_template_directory_uri();
?>
<section class="sg-team" id="<?php echo esc_attr($tm['id']); ?>" aria-labelledby="sgTeamTitle">
  <div class="sg-wrap">
    <div class="sg-sechead">
      <h2 class="sg-h2" id="sgTeamTitle"><?php echo esc_html($tm['title']); ?></h2>
      <?php if ($tm['text']) : ?><p><?php echo esc_html($tm['text']); ?></p><?php endif; ?>
    </div>
    <div class="sg-team__grid">
      <?php foreach (sg_team_members() as $t) : ?>
      <article class="sg-person">
        <div class="sg-person__img"><img src="<?php echo esc_url($u . '/assets/' . $t[0]); ?>" alt="<?php echo esc_attr($t[1]); ?>" loading="lazy"></div>
        <h3 class="sg-person__name"><?php echo esc_html($t[1]); ?></h3>
        <p class="sg-person__role"><?php echo esc_html($t[2]); ?></p>
        <p class="sg-person__contact"><a href="tel:<?php echo esc_attr($t[3]); ?>"><?php echo esc_html($t[4]); ?></a><a href="mailto:<?php echo esc_attr($t[5]); ?>"><?php echo esc_html($t[5]); ?></a></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
