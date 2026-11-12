<?php
/* Grundkursus i IPS (/grundkursus-i-ips/) – samme adresse og tekst som på det gamle site */
get_header();
get_template_part('template-parts/site-header');
$u = get_template_directory_uri();
$check = '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$checks = function ($items) use ($check) { echo '<ul class="sg-principles">'; foreach ($items as $i) echo '<li>' . $check . esc_html($i) . '</li>'; echo '</ul>'; };
get_template_part('template-parts/page-hero', null, [
  'label' => 'Academy', 'title' => 'Grundkursus i IPS',
  'lead'  => 'Et praksisnært grundkursus, der giver dig et solidt og anvendeligt fundament i IPS-metoden. Du bliver klædt på til at omsætte metoden direkte i praksis.',
  'img' => 'mindset.jpg', 'img_w' => 840, 'img_h' => 1050, 'alt' => 'Undervisning hos Simply Guiding',
  'btn1' => 'Tilmeld dig kurset', 'btn1_href' => '#tilmelding', 'btn2' => 'Se indhold', 'btn2_href' => '#info',
]);
$faq = [
  ['Hvem kan deltage på kurset?', '<p>Kurset er åbent for alle fagprofessionelle samt ledige og selvbetalere, der ønsker viden om IPS-metoden. Du behøver ikke være ansat i et jobcenter for at deltage.</p>'],
  ['Er kurset relevant, hvis jeg ikke arbejder med IPS i dag?', '<p>Grundkurset er et åbent kursus med fokus på individuel kompetenceudvikling. En IPS-temadag er en skræddersyet ydelse målrettet en konkret organisation og dens praksis.</p>'],
  ['Er prisen inkl. forplejning?', '<p>Ja, prisen inkluderer forplejning begge kursusdage.</p>'],
  ['Hvordan foregår betaling?', '<p>Offentlige og private arbejdsgivere betaler via faktura. Ledige og selvbetalere modtager faktura og skal have betalt inden kursusstart.</p>'],
  ['Hvornår er min tilmelding bindende?', '<p>Tilmelding er bindende, når den er modtaget.</p>'],
  ['Hvad er jeres afbudsregler?', '<p>Afbud skal ske skriftligt.</p><p>Ved afbud:</p><ul><li>Indtil 14 dage før kursusstart: ingen betaling</li><li>7–13 dage før: 50 % af kursusprisen</li><li>Senere end 7 dage før: fuld betaling</li></ul>'],
  ['Hvad sker der, hvis kurset aflyses?', '<p>Simply Guiding forbeholder sig ret til at aflyse kurset ved for få tilmeldte. I så fald tilbydes deltagerne enten en alternativ dato eller fuld tilbagebetaling.</p>'],
  ['Får jeg et kursusbevis?', '<p>Ja, alle deltagere modtager et kursusbevis med beskrivelse af opnåede kompetencer.</p>'],
];
?>
<div id="info"></div>
<div id="indhold"></div>

<section class="sg-course" aria-labelledby="sgCourseTitle">
  <div class="sg-wrap sg-course__grid">
    <div class="sg-course__body">
      <h2 class="sg-h2" id="sgCourseTitle">Et praksisnært kompetenceløft i IPS-metoden</h2>
      <p class="sg-intro__lead">Simply Guiding udbyder i 2026 et grundkursus i IPS (Individual Placement and Support) for fagprofessionelle, der arbejder – eller ønsker at arbejde – med beskæftigelse, mental sundhed og recovery.</p>
      <p>Kurset giver dig et solidt, fagligt funderet og anvendelsesorienteret kendskab til IPS-metoden og dens centrale redskaber. Undervisningen er praksisnær og tager afsæt i konkrete cases fra hverdagen samt Simply Guidings mangeårige erfaring med IPS og Supported Employment.</p>
      <p>Grundkurset henvender sig til praktikere og andre fagprofessionelle, som ikke nødvendigvis er ansat i et jobcenter, men som ønsker at opbygge eller styrke deres IPS-kompetencer.</p>

      <div class="sg-course__box">
      <div class="sg-course__bhead"><span class="sg-course__bico"><?php echo sg_icon('calendar'); ?></span><h3 class="sg-course__h">Kursets opbygning</h3><span class="sg-course__bno">01</span></div>
      <?php $checks(['2 intensive sammenhængende kursusdage', '12 timers undervisning', 'Undervisning på Simply Guidings faciliteter i Odense', 'Undervisningen kombinerer oplæg, dialog, øvelser og praksisnære cases']); ?>
      <p>Du får mulighed for at arbejde med egne cases eller cases, der afspejler virkelige IPS-forløb i både kommunale og private kontekster.</p>
      </div>
      <div class="sg-course__box">
      <div class="sg-course__bhead"><span class="sg-course__bico"><?php echo sg_icon('bookopen'); ?></span><h3 class="sg-course__h">På kurset arbejder vi bl.a. med</h3><span class="sg-course__bno">02</span></div>
      <?php $checks(['IPS-mindset og de 8 principper', 'Recovery- og beskæftigelsesperspektivet i IPS', 'Job development og samarbejde med virksomheder', 'Konkrete redskaber i arbejdet med borgere/deltagere', 'Overførsel af IPS til forskellige organisatoriske og faglige kontekster']); ?>
      <p>Fokus er på, hvordan IPS omsættes til praksis – ikke kun hvad metoden er i teorien.</p>
      </div>
      <div class="sg-course__box">
      <div class="sg-course__bhead"><span class="sg-course__bico"><?php echo sg_icon('people'); ?></span><h3 class="sg-course__h">Målgruppe</h3><span class="sg-course__bno">03</span></div>
      <p>Kurset er relevant for dig, der:</p>
      <?php $checks(['arbejder med beskæftigelsesrettede indsatser.', 'arbejder med mennesker med psykiske vanskeligheder.', 'arbejder inden for social-, sundheds- eller beskæftigelsesområdet.', 'ønsker at kvalificere dig til en IPS- eller Supported Employment-stilling.', 'er ledig eller selvbetaler og ønsker at opkvalificere dig med henblik på beskæftigelse.']); ?>
      <p>Der stilles ingen formelle forudsætninger for deltagelse.</p>
      </div>
      <div class="sg-course__box">
      <div class="sg-course__bhead"><span class="sg-course__bico"><?php echo sg_icon('shield'); ?></span><h3 class="sg-course__h">Udbytte</h3><span class="sg-course__bno">04</span></div>
      <p>Efter kurset har du:</p>
      <?php $checks(['Grundlæggende viden om IPS-metoden og dens principper', 'Indsigt i IPS-mindset og metodens praksis', 'Konkrete redskaber, der kan anvendes direkte i dit arbejde', 'Forståelse for, hvordan IPS kan anvendes i forskellige organisatoriske rammer']); ?>
      <p>Alle deltagere modtager et kursusbevis, der beskriver de opnåede kompetencer.</p>
      </div>
    </div>

    <aside class="sg-course__side">
      <div class="sg-course__card">
        <h2 class="sg-course__cardtitle">Tilmeld dig kurset</h2>
        <p>Reservér din plads på kurset.</p>
        <div class="sg-course__tiers">
          <div class="sg-course__tier"><span class="sg-course__who">Offentlige og private arbejdsgivere</span><span class="sg-course__amount">6.900 kr.<small>ekskl. moms</small></span></div>
          <div class="sg-course__tier"><span class="sg-course__who">Ledige og selvbetalere</span><span class="sg-course__amount">4.900 kr.<small>ekskl. moms</small></span></div>
        </div>
        <ul class="sg-course__incl">
          <li><?php echo sg_check_svg(); ?>Forplejning begge kursusdage</li>
          <li><?php echo sg_check_svg(); ?>Kursusbevis</li>
        </ul>
        <a class="sg-btn sg-btn--lg" href="#tilmelding">Gå til tilmelding</a>
      </div>
    </aside>
  </div>
</section>

<section class="sg-mind3 sg-relevant" aria-labelledby="sgRelTitle">
  <div class="sg-wrap sg-pdetail__grid">
    <div class="sg-pdetail__side"><h2 class="sg-h2" id="sgRelTitle">Er dette kursus relevant for mig?</h2></div>
    <div class="sg-pdetail__body">
      <p>Dette kursus er relevant for dig, der:</p>
      <?php $checks(['Ønsker at arbejde med IPS og Supported Employment', 'Arbejder inden for beskæftigelse, mental sundhed eller socialområdet', 'Vil opbygge kompetencer, der gør dig kvalificeret til IPS-stillinger', 'Er ledig og vil opkvalificere dig til fremtidig beskæftigelse']); ?>
      <p>Hvis du stadig er i tvivl, er du altid velkommen til at kontakte os for en kort rådgivning om, hvordan kurset matcher dine behov.</p>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/more', null, [
  'title' => 'Ønsker I et skræddersyet forløb?',
  'text' => 'Grundkurset udbydes som et åbent kursus med fokus på individuel kompetenceudvikling. Ønsker I et IPS-oplæg, en temadag eller et skræddersyet forløb målrettet jeres organisation, tilbyder Simply Guiding også organisationsspecifikke ydelser. Kontakt Marlene Mohn Ishøi på tlf. 51 90 96 03 for at høre mere',
  'btn1' => 'Ring på 51 90 96 03', 'btn1_href' => 'tel:+4551909603', 'btn2' => 'Gå til tilmelding', 'btn2_href' => '#tilmelding',
]); ?>

<section class="sg-faq" aria-labelledby="sgFaqTitle">
  <div class="sg-wrap sg-faq__grid">
    <div>
      <h2 class="sg-faq__title" id="sgFaqTitle">Ofte stillede spørgsmål</h2>
      <p class="sg-faq__intro">Her finder du svar på de mest almindelige spørgsmål om grundkurset i IPS. Hvis du ikke finder det, du søger, er du altid velkommen til at kontakte os for yderligere information.</p>
    </div>
    <ul class="sg-faq__list">
      <?php foreach ($faq as $i => $f) : ?>
      <li class="sg-faq__item">
        <button class="sg-faq__q" id="faq-q<?php echo $i; ?>" aria-expanded="false" aria-controls="faq-a<?php echo $i; ?>"><?php echo esc_html($f[0]); ?><span class="sg-faq__icon" aria-hidden="true"></span></button>
        <div class="sg-faq__a" id="faq-a<?php echo $i; ?>" role="region" aria-labelledby="faq-q<?php echo $i; ?>"><div><?php echo wp_kses_post($f[1]); ?></div></div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="sg-cform sg-signupform" id="tilmelding" aria-labelledby="sgRegTitle">
  <div class="sg-wrap sg-cform__grid">
    <div class="sg-cform__intro">
      <h2 class="sg-h2" id="sgRegTitle">Tilmelding til kurset</h2>
      <p>Udfyld formularen for at tilmelde dig Grundkursus i IPS hos Simply Guiding. Når vi har modtaget din tilmelding, fremsender vi en bekræftelse samt praktisk information om kurset.</p>
      <div class="sg-terms" id="handelsbetingelser">
        <h3 class="sg-mind3__h3">Handelsbetingelser – Grundkursus i IPS</h3>
        <ul>
          <li>Tilmelding er bindende.</li>
          <li>Afbud skal ske skriftligt til <a href="mailto:kontakt@simplyguiding.dk">kontakt@simplyguiding.dk</a></li>
          <li>Ved afbud: Indtil 14 dage før kursusstart: ingen betaling 7–13 dage før: 50 % af kursusprisen Senere end 7 dage før: fuld betaling</li>
          <li>Ved udeblivelse opkræves fuld kursuspris.</li>
          <li>Simply Guiding forbeholder sig ret til at aflyse kurset ved for få tilmeldte.</li>
          <li>Alle priser er ekskl. moms.</li>
        </ul>
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

<?php get_template_part('template-parts/final-cta'); ?>
<?php get_template_part('template-parts/site-footer'); ?>
<?php get_footer(); ?>
