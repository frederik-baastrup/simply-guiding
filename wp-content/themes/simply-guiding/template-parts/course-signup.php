<?php /* Tilmelding til Grundkursus i IPS: formular + handelsbetingelser (bruges af page-grundkursus-i-ips.php og udkastet ?ny=1) */ ?>
<section class="sg-cform sg-signupform" id="tilmelding" aria-labelledby="sgRegTitle">
  <div class="sg-wrap sg-cform__grid">
    <div class="sg-cform__intro">
      <h2 class="sg-h2" id="sgRegTitle">Tilmelding til kurset</h2>
      <p>Udfyld formularen for at tilmelde dig Grundkursus i IPS hos Simply Guiding. Når vi har modtaget din tilmelding, fremsender vi en bekræftelse samt praktisk information om kurset.</p>
      <div class="sg-terms sg-terms--v3" id="handelsbetingelser">
        <h3 class="sg-terms__title">Handelsbetingelser</h3>
        <p class="sg-terms__intro">Tilmeldingen er bindende. Skal du melde afbud, så skriv til <a href="mailto:kontakt@simplyguiding.dk">kontakt@simplyguiding.dk</a>.</p>
        <dl class="sg-terms__table">
          <div><dt>Afbud senest 14 dage før kursusstart</dt><dd>Gratis</dd></div>
          <div><dt>Afbud 7–13 dage før</dt><dd>50 % af prisen</dd></div>
          <div><dt>Afbud under 7 dage før eller udeblivelse</dt><dd>Fuld pris</dd></div>
        </dl>
        <p class="sg-terms__note">Alle priser er ekskl. moms. Simply Guiding kan aflyse kurset ved for få tilmeldte.</p>
      </div>
    </div>
    <div class="sg-cform__box" id="formular">
      <?php if (isset($_GET['sg_fejl'])) : ?><p class="sg-form__error" role="alert">Udfyld venligst de påkrævede felter.</p><?php endif; ?>
      <?php sg_form_open('grundkursus'); ?>
        <div class="sg-form__grid">
          <label class="sg-field sg-field--full"><span class="sg-field__label">Fulde navn *</span><input type="text" name="navn" placeholder="Indtast dit navn" autocomplete="name" required></label>
          <label class="sg-field"><span class="sg-field__label">E-mail *</span><input type="email" name="email" placeholder="Indtast din e-mail" autocomplete="email" required></label>
          <label class="sg-field"><span class="sg-field__label">Telefon *</span><input type="tel" name="telefon" placeholder="Indtast telefonnummer" autocomplete="tel" required></label>
          <label class="sg-field"><span class="sg-field__label">Organisation / Arbejdssted</span><input type="text" name="organisation" placeholder="Indtast organisation eller arbejdssted"></label>
          <label class="sg-field"><span class="sg-field__label">Nuværende stilling / seneste, hvis ledig pt:</span><input type="text" name="stilling" placeholder="Indtast stilling"></label>
          <label class="sg-field sg-field--full"><span class="sg-field__label">Deltagertype *</span><select name="deltagertype" required><option value="">Vælg</option><option>Offentlig arbejdsgiver</option><option>Privat arbejdsgiver</option><option>Ledig / selvbetaler</option></select></label>
          <label class="sg-check sg-field--full"><input type="checkbox" name="dato[]" value="1-2. september 2026"> 1-2. september 2026</label>
          <label class="sg-field"><span class="sg-field__label">CVR-nummer</span><input type="text" name="cvr" placeholder="Indtast CVR-nummer"></label>
          <label class="sg-field"><span class="sg-field__label">EAN-nummer</span><input type="text" name="ean" placeholder="Indtast EAN-nummer"></label>
          <label class="sg-field sg-field--full"><span class="sg-field__label">Fakturareference:</span><input type="text" name="reference" placeholder="Indtast fakturareference"></label>
          <label class="sg-check sg-field--full"><input type="checkbox" name="selvbetaler" value="Ja"> Selvbetaler (vi fremsender faktura via mail)</label>
          <label class="sg-field sg-field--full"><span class="sg-field__label">Eventuelle kommentarer *</span><textarea name="besked" rows="5" placeholder="Hvis du har nogle kommentarer, kan du skrive dem her ..." required></textarea></label>
          <label class="sg-check sg-field--full"><input type="checkbox" name="betingelser" value="Ja" required> <span>Jeg accepterer Simply Guidings <a href="#handelsbetingelser">handelsbetingelser</a>. *</span></label>
        </div>
        <button class="sg-btn sg-btn--lg sg-form__submit" type="submit">Tilmeld</button>
      </form>
    </div>
  </div>
</section>
