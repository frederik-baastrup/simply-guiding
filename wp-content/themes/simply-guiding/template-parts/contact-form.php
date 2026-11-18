<?php /* Kontaktformular "Skal vi tage en snak?" (samme felter som på det gamle site). Args: title, text */
$cf = wp_parse_args(isset($args) && is_array($args) ? $args : [], ['title' => 'Skal vi tage en snak?', 'text' => 'Hvis du er nysgerrig på at høre nærmere om vores indsatser, eller har brug for at vide hvordan du kommer i gang, så send os en besked. Vi vender hurtigst muligt tilbage.']);
?>
<section class="sg-cform sg-cform--v3" id="formular" aria-labelledby="sgCformTitle">
  <div class="sg-wrap sg-cform__grid">
    <div class="sg-cform__intro">
      <h2 class="sg-h2" id="sgCformTitle"><?php echo esc_html($cf['title']); ?></h2>
      <p><?php echo esc_html($cf['text']); ?></p>
      <ul class="sg-cform__direct">
        <li><a href="tel:+4526344454"><span class="sg-cform__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/></svg></span><span><small>Ring til os</small>26 34 44 54</span></a></li>
        <li><a href="mailto:kontakt@simplyguiding.dk"><span class="sg-cform__ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></span><span><small>Skriv til os</small>kontakt@simplyguiding.dk</span></a></li>
      </ul>
      <svg class="sg-cform__mark" viewBox="0 0 37 25" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg>
    </div>
    <div class="sg-cform__box">
      <?php if (isset($_GET['sg_fejl'])) : ?><p class="sg-form__error" role="alert">Udfyld venligst navn og en gyldig e-mail.</p><?php endif; ?>
      <?php sg_form_open('kontakt'); ?>
        <div class="sg-form__grid">
          <label class="sg-field"><span class="sg-sr">Navn</span><input type="text" name="navn" placeholder="Indtast dit navn" autocomplete="name" required></label>
          <label class="sg-field"><span class="sg-sr">Lokation</span><input type="text" name="lokation" placeholder="Indtast evt. lokation"></label>
          <label class="sg-field"><span class="sg-sr">E-mail</span><input type="email" name="email" placeholder="Indtast din e-mail" autocomplete="email" required></label>
          <label class="sg-field"><span class="sg-sr">Telefon</span><input type="tel" name="telefon" placeholder="Indtast evt. telefonnummer" autocomplete="tel"></label>
          <label class="sg-field sg-field--full"><span class="sg-sr">Besked</span><textarea name="besked" rows="6" placeholder="Hvad drejer henvendelsen sig om?" required></textarea></label>
        </div>
        <button class="sg-btn sg-btn--lg sg-form__submit" type="submit">Send besked</button>
      </form>
    </div>
  </div>
</section>
