<?php
/* Afsluttende CTA-boks med kontaktperson. Standard er Marlene; en side kan give en anden person med som $args. */
$p = wp_parse_args(isset($args) && is_array($args) ? $args : [], [
  'name' => 'Marlene Mohn Ishøi', 'role' => 'Driftsdirektør', 'img' => 'kontakt-marlene.webp',
  'tel' => '+4551909603', 'tel_txt' => '51 90 96 03', 'mail' => 'marlene@simplyguiding.dk',
]);
?>
<section class="sg-final" aria-labelledby="sgFinalTitle">
  <div class="sg-final__stage">
  <div class="sg-final__box">
    <div class="sg-final__notch">
      <div class="sg-final__notch-inner">
        <div class="sg-logos" aria-hidden="true">
            <div class="sg-logos__track"><ul class="sg-logos__list"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/aalborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/varde.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/svendborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/soenderborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/koege.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/faaborg-midtfyn.png" alt="" class="is-tall"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/gladsaxe.png" alt=""></li></ul><ul class="sg-logos__list" aria-hidden="true"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/aalborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/varde.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/svendborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/soenderborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/koege.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/faaborg-midtfyn.png" alt="" class="is-tall"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/gladsaxe.png" alt=""></li></ul></div>
          </div>
      </div>
      <svg class="sg-final__curve" viewBox="0 0 200 64" preserveAspectRatio="none" aria-hidden="true"><path d="M0 0 C100 0 100 64 200 64 L0 64 Z" fill="#fff"/></svg>
    </div>
    <div class="sg-final__inner">
      <h2 class="sg-final__title" id="sgFinalTitle">Skal vi skabe det næste<br> ståsted sammen?</h2>
      <div class="sg-final__actions">
        <a class="sg-final__btn" href="/kontakt">Kontakt os for en uforpligtende snak</a>
      </div>
    </div>
  </div>
  <img class="sg-final__person" src="<?php echo esc_url(get_template_directory_uri() . '/assets/' . $p['img']); ?>" alt="<?php echo esc_attr($p['name'] . ', ' . $p['role'] . ', Simply Guiding'); ?>" loading="lazy">
  <p class="sg-final__name"><b><?php echo esc_html($p['name']); ?></b><span><?php echo esc_html($p['role']); ?>, Simply Guiding</span>
    <span class="sg-final__name-contact">
      <a href="tel:<?php echo esc_attr($p['tel']); ?>"><svg viewBox="0 0 512 512" aria-hidden="true"><path d="M497.4 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.7 370.7 0 0 1 130.6 204.1l60.6-49.6a23.9 23.9 0 0 0 6.9-28l-48-112A24.2 24.2 0 0 0 122.6.6l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.3 24.3 0 0 0-14-27.6z"/></svg><?php echo esc_html($p['tel_txt']); ?></a>
      <a href="mailto:<?php echo esc_attr($p['mail']); ?>"><svg viewBox="0 0 512 512" aria-hidden="true"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg><?php echo esc_html($p['mail']); ?></a>
    </span>
  </p>
  </div>
</section>
