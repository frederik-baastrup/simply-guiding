<?php
/*
 * "Dokument-layout": lodret, tekstbaseret side med sidebar, der følger med ned (faktaboks + indholdsfortegnelse).
 * Genbrugelig: indholdet ligger som et array i content/doc/<slug>.php, og sg_doc() tegner det.
 *
 * $doc = [
 *   'aside'    => ['label','title','text','facts' => [[label, værdi]], 'buttons' => [[tekst, href, 'outline'|'' , ny fane?]], 'note' => html],
 *   'toc'      => 'På siden',
 *   'sections' => [[ 'id', 'nav' (kort navn i fortegnelsen), 'title', 'blocks' => [...] ]],
 * ]
 *
 * Blokke (hver er ['type', ...]):
 *   p        'text' (html tilladt)            lead     'text'
 *   h3       'text'                          img      'src' (fil i assets/), 'alt', 'caption'
 *   checks   'items'                         summary  'boxes' => [['title', 'items', 'tone' => 'green'|'sand']]
 *   steps    'items' => [[tag, titel, tekst, ikon]]           (lodret tidslinje)
 *   callout  'icon', 'title', 'text'          (mørkegrøn fremhævning)
 *   facts    'items' => [[ikon, label, tekst]]                (praktisk info som rækker)
 *   buttons  'items' => [[tekst, href, 'outline'|'', ny fane?]]
 *   quote    'text', 'name', 'role'
 */

function sg_doc_buttons($items, $class = 'sg-doc__btns') {
    echo '<p class="' . esc_attr($class) . '">';
    foreach ($items as $b) {
        $cls = 'sg-btn sg-btn--lg' . (!empty($b[2]) ? ' sg-btn--' . $b[2] : '');
        $tgt = !empty($b[3]) ? ' target="_blank" rel="noopener"' : '';
        echo '<a class="' . esc_attr($cls) . '" href="' . esc_url($b[1]) . '"' . $tgt . '>' . esc_html($b[0]) . '</a>';
    }
    echo '</p>';
}

function sg_doc_block($b) {
    $u = get_template_directory_uri();
    switch ($b['type']) {
        case 'p':
            echo '<p>' . wp_kses_post($b['text']) . '</p>';
            break;
        case 'lead':
            echo '<p class="sg-doc__lead">' . wp_kses_post($b['text']) . '</p>';
            break;
        case 'h3':
            echo '<h3 class="sg-doc__h3">' . esc_html($b['text']) . '</h3>';
            break;
        case 'img':
            echo '<figure class="sg-doc__fig"><img src="' . esc_url($u . '/assets/' . $b['src']) . '" alt="' . esc_attr($b['alt'] ?? '') . '" loading="lazy">';
            if (!empty($b['caption'])) echo '<figcaption>' . esc_html($b['caption']) . '</figcaption>';
            echo '</figure>';
            break;
        case 'checks':
            sg_checks($b['items'], 'sg-doc__checks');
            break;
        case 'summary':
            echo '<div class="sg-doc__summary">';
            foreach ($b['boxes'] as $box) {
                echo '<div class="sg-doc__sbox sg-doc__sbox--' . esc_attr($box['tone'] ?? 'green') . '"><h3>' . esc_html($box['title']) . '</h3>';
                sg_checks($box['items'], 'sg-doc__checks sg-doc__checks--sm');
                echo '</div>';
            }
            echo '</div>';
            break;
        case 'steps':
            echo '<ol class="sg-doc__steps">';
            foreach ($b['items'] as $s) {
                echo '<li><span class="sg-doc__tag">' . esc_html($s[0]) . '</span><div><h3>' . (!empty($s[3]) ? sg_icon($s[3]) : '') . esc_html($s[1]) . '</h3><p>' . wp_kses_post($s[2]) . '</p></div></li>';
            }
            echo '</ol>';
            break;
        case 'callout':
            echo '<div class="sg-doc__callout">' . sg_icon($b['icon'] ?? 'shield') . '<div><h3>' . esc_html($b['title']) . '</h3><p>' . wp_kses_post($b['text']) . '</p></div></div>';
            break;
        case 'facts':
            echo '<dl class="sg-doc__facts">';
            foreach ($b['items'] as $f) {
                echo '<div><dt>' . sg_icon($f[0]) . esc_html($f[1]) . '</dt><dd>' . wp_kses_post($f[2]) . '</dd></div>';
            }
            echo '</dl>';
            break;
        case 'buttons':
            sg_doc_buttons($b['items']);
            break;
        case 'quote':
            echo '<blockquote class="sg-doc__quote"><p>' . esc_html($b['text']) . '</p>';
            if (!empty($b['name'])) echo '<footer><strong>' . esc_html($b['name']) . '</strong>' . (!empty($b['role']) ? ' · ' . esc_html($b['role']) : '') . '</footer>';
            echo '</blockquote>';
            break;
    }
}

function sg_doc($doc) {
    $a = $doc['aside'] ?? [];
    ?>
<section class="sg-doc">
  <div class="sg-wrap sg-doc__grid">
    <div class="sg-doc__main">
      <?php foreach ($doc['sections'] as $s) : ?>
      <section class="sg-doc__sec" id="<?php echo esc_attr($s['id']); ?>" aria-labelledby="<?php echo esc_attr($s['id']); ?>-t">
        <h2 class="sg-h2 sg-doc__h2" id="<?php echo esc_attr($s['id']); ?>-t"><?php echo esc_html($s['title']); ?></h2>
        <?php foreach ($s['blocks'] as $b) sg_doc_block($b); ?>
      </section>
      <?php endforeach; ?>
    </div>
    <aside class="sg-doc__aside" aria-label="Overblik">
      <div class="sg-doc__sticky">
        <?php if ($a) : ?>
        <div class="sg-doc__card">
          <?php if (!empty($a['label'])) : ?><p class="sg-doc__label"><?php echo esc_html($a['label']); ?></p><?php endif; ?>
          <p class="sg-doc__ctitle"><?php echo esc_html($a['title']); ?></p>
          <?php if (!empty($a['text'])) : ?><p class="sg-doc__ctext"><?php echo esc_html($a['text']); ?></p><?php endif; ?>
          <?php if (!empty($a['facts'])) : ?>
          <dl class="sg-doc__kv"><?php foreach ($a['facts'] as $f) echo '<div><dt>' . esc_html($f[0]) . '</dt><dd>' . esc_html($f[1]) . '</dd></div>'; ?></dl>
          <?php endif; ?>
          <?php if (!empty($a['buttons'])) sg_doc_buttons($a['buttons'], 'sg-doc__cbtns'); ?>
          <?php if (!empty($a['note'])) : ?><p class="sg-doc__note"><?php echo wp_kses_post($a['note']); ?></p><?php endif; ?>
        </div>
        <?php endif; ?>
        <nav class="sg-doc__toc" aria-label="<?php echo esc_attr($doc['toc'] ?? 'På siden'); ?>">
          <p class="sg-doc__label"><?php echo esc_html($doc['toc'] ?? 'På siden'); ?></p>
          <ol><?php foreach ($doc['sections'] as $s) echo '<li><a href="#' . esc_attr($s['id']) . '">' . esc_html($s['nav'] ?? $s['title']) . '</a></li>'; ?></ol>
        </nav>
      </div>
    </aside>
  </div>
</section>
<?php
}
