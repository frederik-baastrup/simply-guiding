<?php
$u = get_template_directory_uri();
$m = wp_parse_args(isset($args) && is_array($args) ? $args : [], [
  'title' => 'Vil du vide mere?',
  'text' => 'Har du spørgsmål angående vores løsninger og indsatser? Så er vores konsulenter altid klar til at hjælpe. Du kan kontakte os på 26 34 44 54 eller skrive til os via nedenstående kontaktformular. Vi sidder klar til at hjælpe dig til at finde den perfekte løsning.',
  'btn1' => 'Ring på 26 34 44 54', 'btn1_href' => 'tel:+4526344454', 'btn2' => 'Udfyld vores kontaktformular', 'btn2_href' => '/kontakt/',
]);
?>
<!-- Vil du vide mere? – afslutning: billede + tekst i lys boks -->
<section class="sg-more2" aria-labelledby="sgMoreTitle">
  <div class="sg-wrap">
    <div class="sg-more2__box">
      <div class="sg-more2__media"><img src="<?php echo esc_url($u); ?>/assets/vide-mere.jpg" alt="Møde omkring et bord med tablets og kaffe" width="2000" height="1333" loading="lazy"></div>
      <div class="sg-more2__copy">
        <h2 class="sg-h2" id="sgMoreTitle"><?php echo esc_html($m['title']); ?></h2>
        <p><?php echo esc_html($m['text']); ?></p>
        <div class="sg-more2__actions">
          <a class="sg-btn sg-btn--lg" href="<?php echo esc_url($m['btn1_href'], ['tel', 'https', 'http']); ?>"><?php echo esc_html($m['btn1']); ?></a>
          <a class="sg-btn sg-btn--lg sg-btn--outline" href="<?php echo esc_url($m['btn2_href']); ?>"><?php echo esc_html($m['btn2']); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
