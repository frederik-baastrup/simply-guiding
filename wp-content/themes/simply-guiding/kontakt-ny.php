<?php
/* Kontakt – overhaling (vises på /kontakt/?ny=1): hero med billede, kontaktmuligheder + formular side om side, holdet */
get_template_part('template-parts/page-hero', null, [
  'label' => 'Kontakt os', 'title' => 'Vil du vide mere? Vi er klar til at hjælpe',
  'lead'  => 'Har du spørgsmål, eller ønsker du at indgå et samarbejde med os? Så er vi klar til at hjælpe dig videre. Du kan ringe til os på 26 34 44 54, sende os en mail eller udfylde kontaktformularen herunder.',
  'img' => 'metode-samtale-v2.jpg', 'img_w' => 1600, 'img_h' => 1067, 'alt' => 'Samtale over en kop kaffe på en café',
  'btn1' => 'Ring på 26 34 44 54', 'btn1_href' => 'tel:+4526344454', 'btn2' => 'Skriv til os', 'btn2_href' => '#formular',
]);
?>
<div id="indhold"></div>
<section class="sg-kt" aria-labelledby="sgKtTitle">
  <div class="sg-wrap sg-kt__grid">
    <div class="sg-kt__side">
      <a class="sg-kt__card sg-kt__card--dark" href="tel:+4526344454">
        <span class="sg-kt__ico"><?php echo sg_icon('phone'); ?></span>
        <span class="sg-kt__k">Ring på 26 34 44 54</span>
        <span class="sg-kt__v">Fra 08:00 – 17:00</span>
      </a>
      <a class="sg-kt__card" href="mailto:kontakt@simplyguiding.dk">
        <span class="sg-kt__ico"><?php echo sg_icon('mail'); ?></span>
        <span class="sg-kt__k">kontakt@simplyguiding.dk</span>
        <span class="sg-kt__v">Du kan altid sende os en mail</span>
      </a>
      <div class="sg-kt__card">
        <span class="sg-kt__ico"><?php echo sg_icon('pin'); ?></span>
        <span class="sg-kt__k">Lumbyvej 11</span>
        <span class="sg-kt__v">5000 Odense C</span>
        <span class="sg-kt__cvr">Simply Guiding · CVR: 37319643</span>
      </div>
    </div>
    <div class="sg-kt__form" id="formular">
      <h2 class="sg-h2" id="sgKtTitle">Skal vi tage en snak?</h2>
      <p class="sg-kt__lead">Hvis du er nysgerrig på at høre nærmere om vores indsatser, eller har brug for at vide hvordan du kommer i gang, så send os en besked. Vi vender hurtigst muligt tilbage.</p>
      <?php if (isset($_GET['sg_fejl'])) : ?><p class="sg-form__error" role="alert">Udfyld venligst navn og en gyldig e-mail.</p><?php endif; ?>
      <?php sg_form_open('kontakt'); ?>
        <div class="sg-form__grid">
          <label class="sg-field"><span class="sg-kt__lbl">Navn</span><input type="text" name="navn" placeholder="Indtast dit navn" autocomplete="name" required></label>
          <label class="sg-field"><span class="sg-kt__lbl">Lokation</span><input type="text" name="lokation" placeholder="Indtast evt. lokation"></label>
          <label class="sg-field"><span class="sg-kt__lbl">E-mail</span><input type="email" name="email" placeholder="Indtast din e-mail" autocomplete="email" required></label>
          <label class="sg-field"><span class="sg-kt__lbl">Telefon</span><input type="tel" name="telefon" placeholder="Indtast evt. telefonnummer" autocomplete="tel"></label>
          <label class="sg-field sg-field--full"><span class="sg-kt__lbl">Besked</span><textarea name="besked" rows="6" placeholder="Hvad drejer henvendelsen sig om?" required></textarea></label>
        </div>
        <button class="sg-btn sg-btn--lg sg-form__submit" type="submit">Send besked</button>
      </form>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/team', null, ['title' => 'Holdet bag Simply Guiding']);
