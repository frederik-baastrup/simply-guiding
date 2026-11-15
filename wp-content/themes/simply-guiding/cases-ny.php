<?php
/* Cases – nyt bud (live 15. nov. 2026). Samme tekst; ny opbygning. Bruger $cases og $u fra page-cases.php. */
$feat = $cases[0];
$rest = array_slice($cases, 1);
?>
<!-- Succeshistorier + tal -->
<section class="sg-cs-intro" aria-labelledby="sgSuccessTitle">
  <div class="sg-wrap">
    <div class="sg-sw2-head">
      <h2 class="sg-h2" id="sgSuccessTitle">Succeshistorier fra vores kandidater</h2>
      <div><p class="sg-gk-lead">Vi har eksisteret siden 2015, og siden starten har vi hjulpet flere end 1500 mennesker med at finde retning mod job eller uddannelse gennem individuelle forløb, der tager højde for den enkelte borgers særlige behov. Du kan læse nogle af vores succeshistorier og få indblik i vores metoder her.</p></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/stats', null, ['title' => 'En stærk og erfaren aktør', 'items' => [
  ['25+', 'kommuner', 'Tæt og tillidsfuldt samarbejde om at løfte beskæftigelses- og ungeindsatsen.'],
  ['1.500+', 'mennesker', 'Individuel støtte tilbage til job, uddannelse eller fællesskab.'],
  ['10+', 'år i branchen', 'Siden 2015 har vi fungeret som en specialiseret og resultatskabende ekstern aktør.'],
]]); ?>

<!-- Historierne -->
<section class="sg-cs-list" id="cases" aria-label="Succeshistorier" style="scroll-margin-top:90px">
  <div class="sg-wrap">
    <article class="sg-cs-feat">
      <div class="sg-cs-feat__media"><video src="<?php echo esc_url($u); ?>/assets/projekter-anja.mp4" poster="<?php echo esc_url($u); ?>/assets/projekter-anja.jpg" autoplay muted loop playsinline preload="metadata" aria-hidden="true"></video></div>
      <div class="sg-cs-feat__txt">
        <p class="sg-gk-label">01 · <?php echo esc_html($feat[1]); ?></p>
        <h2 class="sg-h2"><?php echo esc_html($feat[2]); ?></h2>
        <p><?php echo esc_html($feat[3]); ?></p>
        <a class="sg-btn sg-btn--lg" href="/cases/<?php echo esc_attr($feat[0]); ?>/"><?php echo esc_html($feat[4]); ?></a>
      </div>
    </article>
    <div class="sg-cs-grid">
      <?php foreach ($rest as $i => $c) : ?>
      <a class="sg-cs-card" href="/cases/<?php echo esc_attr($c[0]); ?>/">
        <p class="sg-gk-label"><?php echo sprintf('%02d', $i + 2); ?> · <?php echo esc_html($c[1]); ?></p>
        <h3><?php echo esc_html($c[2]); ?></h3>
        <p><?php echo esc_html($c[3]); ?></p>
        <span class="sg-cs-card__link"><?php echo esc_html($c[4]); ?> <?php echo sg_arrow(); ?></span>
      </a>
      <?php endforeach; ?>
      <div class="sg-cs-card sg-cs-card--cta">
        <span class="sg-gk-ico"><?php echo sg_icon('phone'); ?></span>
        <h3>Vil I høre mere om vores forløb?</h3>
        <p>Ring på <a href="tel:+4526344454">26 34 44 54</a>, eller skriv til os, så fortæller vi mere.</p>
        <a class="sg-cs-card__link" href="/kontakt/">Kontakt os <?php echo sg_arrow(); ?></a>
      </div>
    </div>
  </div>
</section>
