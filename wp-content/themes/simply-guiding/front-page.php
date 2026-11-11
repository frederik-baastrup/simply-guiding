<?php get_header(); ?>

<?php get_template_part('template-parts/site-header'); ?>

<div class="sg-hero-wrap">
  <section class="sg-hero" aria-label="Introduktion">
    <video class="sg-hero__video" src="<?php echo get_template_directory_uri(); ?>/assets/hero.mp4" autoplay muted loop playsinline preload="auto" aria-hidden="true"></video>
    <div class="sg-hero__inner">
      <h1>Et nyt ståsted<br> i livet til mennesket<br> bag borgeren</h1>
      <p class="sg-hero__lead">Simply Guiding hjælper mennesker i en sårbar situation tilbage til fællesskabet, til jobbet eller i uddannelse.</p>
      <div class="sg-hero__actions">
        <a class="sg-btn sg-btn--lg" href="/kontakt">Book et uforpligtende møde</a>
        <a class="sg-btn sg-btn--lg sg-btn--ghost" href="/om-os">Lær os at kende</a>
      </div>
    </div>
    <div class="sg-hero-bottom">
      <div class="sg-hero__notch">
        <div class="sg-hero__notch-inner">
          <div class="sg-logos" aria-label="Kommuner vi har samarbejdet med">
            <div class="sg-logos__track"><ul class="sg-logos__list"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/aalborg.png" alt="Aalborg Kommune"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/varde.png" alt="Varde Kommune"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/svendborg.png" alt="Svendborg Kommune"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/soenderborg.png" alt="Sønderborg Kommune"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/koege.png" alt="Køge Kommune"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/faaborg-midtfyn.png" alt="Faaborg-Midtfyn Kommune" class="is-tall"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/gladsaxe.png" alt="Gladsaxe Kommune"></li></ul><ul class="sg-logos__list" aria-hidden="true"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/aalborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/varde.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/svendborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/soenderborg.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/koege.png" alt=""></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/faaborg-midtfyn.png" alt="" class="is-tall"></li><li><img src="<?php echo get_template_directory_uri(); ?>/assets/gladsaxe.png" alt=""></li></ul></div>
          </div>
        </div>
        <svg class="sg-hero__curve" viewBox="0 0 200 64" preserveAspectRatio="none" aria-hidden="true"><path d="M0 0 C100 0 100 64 200 64 L0 64 Z" fill="#fff"/></svg>
      </div>
      <p class="sg-hero__stat">Vi har samarbejdet med 25+ kommuner</p>
    </div>
  </section>
</div>
<section class="sg-ind" aria-labelledby="sgIndTitle">
  <div class="sg-ind__inner">
    <div class="sg-ind__head">
      <h2 class="sg-ind__title" id="sgIndTitle">Indsatser, der gør en forskel for dit område</h2>
    </div>
    <div class="sg-cards" id="sgCards">
      <article class="sg-card is-active">
        <div class="sg-card__media"><img class="sg-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/indsats-jobcenter.jpg" alt="" style="object-position:center 40%" loading="lazy"><span class="sg-card__tag">Kommuner</span></div>
        <a class="sg-card__link" href="/indsatser/jobcentre" aria-label="Læs om indsatsen: Jobcentre"></a>
        <div class="sg-card__body">
          <div class="sg-card__copy">
            <h3 class="sg-card__title">Jobcentre</h3>
            <p class="sg-card__text">Målrettede forløb for borgere, som har brug for et nyt ståsted i livet.</p>
          </div>
          <div class="sg-card__foot" aria-hidden="true"><span class="sg-card__cta">Læs om indsatsen</span><span class="sg-card__arrow"><svg viewBox="-1 -1 39 27" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg></span></div>
        </div>
      </article>
      <article class="sg-card">
        <div class="sg-card__media"><img class="sg-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/indsats-unge.jpg" alt="" style="object-position:center 45%" loading="lazy"><span class="sg-card__tag">Familier</span></div>
        <a class="sg-card__link" href="/indsatser/boern-unge-familier" aria-label="Læs om indsatsen: Børn, unge og familier"></a>
        <div class="sg-card__body">
          <div class="sg-card__copy">
            <h3 class="sg-card__title">Børn, unge og familier</h3>
            <p class="sg-card__text">Forløb og forebyggende indsatser, som skaber ro, trivsel og nye muligheder.</p>
          </div>
          <div class="sg-card__foot" aria-hidden="true"><span class="sg-card__cta">Læs om indsatsen</span><span class="sg-card__arrow"><svg viewBox="-1 -1 39 27" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg></span></div>
        </div>
      </article>
      <article class="sg-card">
        <div class="sg-card__media"><img class="sg-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/indsats-forsikring.jpg" alt="" style="object-position:35% center" loading="lazy"><span class="sg-card__tag">Forsikring</span></div>
        <a class="sg-card__link" href="/indsatser/forsikring-pension" aria-label="Læs om indsatsen: Forsikring og pension"></a>
        <div class="sg-card__body">
          <div class="sg-card__copy">
            <h3 class="sg-card__title">Forsikring og pension</h3>
            <p class="sg-card__text">Målrettede forløb for sygemeldte, der hurtigt og trygt skal tilbage i job.</p>
          </div>
          <div class="sg-card__foot" aria-hidden="true"><span class="sg-card__cta">Læs om indsatsen</span><span class="sg-card__arrow"><svg viewBox="-1 -1 39 27" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg></span></div>
        </div>
      </article>
      <article class="sg-card">
        <div class="sg-card__media"><img class="sg-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/indsats-academy.jpg" alt="" style="object-position:center 40%" loading="lazy"><span class="sg-card__tag">Uddannelse</span></div>
        <a class="sg-card__link" href="/academy" aria-label="Læs om Academy"></a>
        <div class="sg-card__body">
          <div class="sg-card__copy">
            <h3 class="sg-card__title">Academy</h3>
            <p class="sg-card__text">Uddannelse og kurser, der klæder konsulenter og samarbejdspartnere på til IPS.</p>
          </div>
          <div class="sg-card__foot" aria-hidden="true"><span class="sg-card__cta">Læs om Academy</span><span class="sg-card__arrow"><svg viewBox="-1 -1 39 27" aria-hidden="true"><path d="M36.0685 24.4063H28.8548V12.3145L26.3312 14.8382C20.2048 20.9646 11.8956 24.4063 3.2316 24.4063H0V17.1926H0.243599C8.9076 17.1926 17.2168 13.7509 23.3432 7.62446L23.754 7.21366H11.7824V0L36.0685 9.53674e-06V24.4063Z"/></svg></span></div>
        </div>
      </article>
    </div>
    <div class="sg-cards__dots" id="sgCardsDots" aria-hidden="true">
      <span class="is-active"></span><span></span><span></span><span></span>
    </div>
  </div>
</section>
<section class="sg-quote" aria-labelledby="sgQuoteTitle">
  <div class="sg-quote__inner">
    <div class="sg-quote__card">
      <figure class="sg-quote__main">
        <span class="sg-quote__tag" id="sgQuoteTitle">Det siger vores kunder</span>
        <blockquote class="sg-quote__text">“Vi oplever, at Simply Guiding har investeret både tid og ressourcer i at bygge et fornuftigt samarbejde op, og der er generelt <em>stor tillid til fagligheden</em> mellem os i Gladsaxe Kommune og IPS UNG-indsatsen.”</blockquote>
        <figcaption class="sg-quote__by">
          <span class="sg-quote__who"><span class="sg-quote__name">Anne Madsen</span><span class="sg-quote__role">Leder for Ungeenheden</span></span>
          <span class="sg-quote__divider" aria-hidden="true"></span>
          <img class="sg-quote__org" src="<?php echo get_template_directory_uri(); ?>/assets/gladsaxe.png" alt="Gladsaxe Kommune">
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<div class="sg-method-wrap">
  <section class="sg-method" aria-labelledby="sgMethodTitle">
    <div class="sg-method__inner">
      <div class="sg-method__content">
        <span class="sg-method__label">Metode</span>
        <h2 class="sg-method__title" id="sgMethodTitle">Sådan går vi til alle opgaver</h2>
        <ol class="sg-steps">
          <li class="sg-step"><span class="sg-step__num">1</span><div><h3 class="sg-step__title">Vi møder mennesker, hvor de er</h3><p class="sg-step__text">Vi møder det enkelte menneske med summen af sin datid, sin nutid og sine drømme om fremtiden.</p></div></li>
          <li class="sg-step"><span class="sg-step__num">2</span><div><h3 class="sg-step__title">Vi tror på, at alle kan rykke sig</h3><p class="sg-step__text">Tro kan ikke flytte bjerge alene, hvis den ikke følges af handling. Intet sker af sig selv, og vi venter ikke på, at tiden heler alle sår.</p></div></li>
          <li class="sg-step"><span class="sg-step__num">3</span><div><h3 class="sg-step__title">Vi skaber holdbare løsninger</h3><p class="sg-step__text">Vi går aldrig efter et quickfix på en kompleks problemstilling. Målet er altid et varigt, nyt ståsted i livet.</p></div></li>
        </ol>
      </div>
      <div class="sg-method__media"><img src="<?php echo get_template_directory_uri(); ?>/assets/metode.jpg" alt="To kvinder i samtale på et lager" loading="lazy"></div>
    </div>
  </section>
</div>
<section class="sg-about" aria-labelledby="sgAboutTitle">
  <div class="sg-about__inner">
    <div class="sg-about__media"><img src="<?php echo get_template_directory_uri(); ?>/assets/samarbejde.jpg" alt="To kolleger i fortrolig samtale" loading="lazy"></div>
    <div class="sg-about__copy">
      <h2 class="sg-about__title" id="sgAboutTitle">Vores samarbejde bygger på forståelse, faglighed og erfaring</h2>
      <p>Bag vores indsatser ligger mere end 10 års erfaring, dyb metodefidelitet og en solid beskæftigelsesfaglighed inden for IPS og Supported Employment.</p>
      <p>Vi kombinerer høj faglighed med en dyb forståelse for de kommunale og samfundsmæssige rammer. Det gør os til en stærk, resultatskabende og troværdig partner for både borgere, jobcentre, virksomheder og uddannelsesinstitutioner.</p>
      <a class="sg-tlink" href="/saadan-arbejder-vi">Læs mere om, hvordan vi arbejder</a>
    </div>
  </div>
</section>
<section class="sg-figures" aria-labelledby="sgFiguresTitle">
  <div class="sg-figures__inner">
    <h3 class="sg-figures__title" id="sgFiguresTitle">Tallene fortæller en tydelig historie</h3>
    <div class="sg-stats">
      <div class="sg-stat">
        <span class="sg-stat__num" aria-hidden="true">+25</span>
        <div><p class="sg-stat__title">Samarbejde med +25 kommuner</p><p class="sg-stat__text">Vi har samarbejdet med flere end 25 kommuner landet over om at løfte beskæftigelses- og ungeindsatsen.</p></div>
      </div>
      <div class="sg-stat">
        <span class="sg-stat__num" aria-hidden="true">+1.500</span>
        <div><p class="sg-stat__title">Individuel støtte til +1.500 mennesker</p><p class="sg-stat__text">Vi har hjulpet flere end 1.500 mennesker med at finde vej tilbage til fællesskabet, til jobbet eller i uddannelse.</p></div>
      </div>
      <div class="sg-stat">
        <span class="sg-stat__num" aria-hidden="true">+10</span>
        <div><p class="sg-stat__title">+10 års erfaring</p><p class="sg-stat__text">Siden 2015 har vi leveret evidensbaserede beskæftigelsesindsatser til kommuner, jobcentre og virksomheder.</p></div>
      </div>
    </div>
  </div>
</section>
<div class="sg-wrap"><hr class="sg-divider"></div>
<section class="sg-duo" aria-label="Nyhedsbrev og Academy">
  <div class="sg-wrap sg-duo__grid">
    <article class="sg-tile sg-tile--light">
      <div class="sg-tile__body">
        <svg class="sg-tile__icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true"><path d="M24 10 4 19l20 9 20-9-20-9Z"/><path d="M12 23.5V32c0 2.6 5.4 5 12 5s12-2.4 12-5v-8.5"/><path d="M44 19v10"/><circle cx="44" cy="31" r="1.4"/></svg>
        <h2 class="sg-tile__title">Simply Guiding Academy</h2>
        <p class="sg-tile__text">Styrk fagligheden og skab endnu bedre resultater. Vores Academy bygger bro mellem viden og virkelighed. Vi uddanner og sparrer med kommunale teams, ledere og beskæftigelsesaktører med afsæt i IPS, Supported Employment og pædagogiske virkemidler.</p>
      </div>
      <a class="sg-btn sg-btn--lg sg-tile__btn" href="/academy">Læs mere om Academy</a>
    </article>
    <article class="sg-tile sg-tile--dark">
      <div class="sg-tile__body">
        <svg class="sg-tile__icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true"><rect x="5" y="11" width="38" height="27" rx="4"/><path d="m6 13 18 13 18-13"/><path d="M6 37l13-12M42 37 29 25"/></svg>
        <h2 class="sg-tile__title">Praksis &amp; Perspektiv</h2>
        <p class="sg-tile__text">I vores nyhedsbrev, Praksis &amp; Perspektiv, tager vi dig med helt ind i maskinrummet og deler ud af vores erfaringer, metoder og historier fra hverdagen.</p>
      </div>
      <form class="sg-signup sg-signup--dark" id="sgSignup" novalidate>
        <p class="sg-signup__label" id="sgSignupLabel">Få vores perspektiver direkte i din indbakke</p>
        <div class="sg-signup__fields" role="group" aria-labelledby="sgSignupLabel">
          <input class="sg-signup__field" id="sgSignupName" name="name" type="text" autocomplete="given-name" placeholder="Dit navn" aria-label="Dit navn">
          <input class="sg-signup__field" id="sgSignupEmail" name="email" type="email" inputmode="email" autocomplete="email" placeholder="Din e-mail" aria-label="Din e-mail" required>
          <button class="sg-signup__btn" type="submit">Tilmeld</button>
        </div>
        <p class="sg-signup__msg" id="sgSignupMsg" role="status" hidden></p>
        <p class="sg-signup__note">Vi bruger kun din e-mail til nyhedsbrevet, og du kan altid afmelde dig. Læs vores <a href="/cookies-og-privatlivspolitik">privatlivspolitik</a>.</p>
      </form>
    </article>
  </div>
</section>


<?php get_template_part('template-parts/final-cta'); ?>
<section class="sg-faq" aria-labelledby="sgFaqTitle">
  <div class="sg-wrap sg-faq__grid">
    <h2 class="sg-faq__title" id="sgFaqTitle">FAQ - ofte stillede spørgsmål</h2>
    <ul class="sg-faq__list">
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q0" aria-expanded="false" aria-controls="faq-a0">Hvem henvender Simply Guidings indsatser sig til?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a0" role="region" aria-labelledby="faq-q0"><div><p>Vi samarbejder med kommunale jobcentre, børn- og familieafdelinger, ungeenheder samt forsikrings- og pensionsselskaber. Vores forløb er skræddersyet til borgere og sygemeldte i sårbare positioner, som har brug for en helhedsorienteret indsats for at opnå et nyt ståsted i livet - om det er et nyt job, tilbage i job eller begynde på en uddannelse.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q1" aria-expanded="false" aria-controls="faq-a1">Hvilke faglige metoder arbejder I ud fra?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a1" role="region" aria-labelledby="faq-q1"><div><p>Vores arbejde bygger på evidensbaserede beskæftigelses- og socialfaglige metoder, herunder IPS (Individual Placement and Support) og Supported Employment.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q2" aria-expanded="false" aria-controls="faq-a2">Hvordan adskiller Simply Guiding sig fra andre eksterne aktører?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a2" role="region" aria-labelledby="faq-q2"><div><p>Vi tror på holdbare løsninger frem for quickfixes. Vi møder ikke borgeren som en sag, en paragraf eller en diagnose, men som et helt menneske med en datid, nutid og drømme for fremtiden. Samtidig arbejder vi tæt sammen med det kommunale system og virksomhederne for at skabe reelle og varige resultater.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q3" aria-expanded="false" aria-controls="faq-a3">Hvad er Simply Guiding Academy, og hvem er det for?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a3" role="region" aria-labelledby="faq-q3"><div><p>Academy er jeres eksterne kompetence- og uddannelsesafdeling. Vi tilbyder opkvalificering, kurser, sparring og implementeringsstøtte til kommunale teams, sagsbehandlere og ledere. Vi hjælper med at forankre ny viden, styrke den faglige praksis og skabe et fælles metodisk sprog i organisationen.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q4" aria-expanded="false" aria-controls="faq-a4">Kan I hjælpe i komplekse sager, som går tværs af forvaltninger?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a4" role="region" aria-labelledby="faq-q4"><div><p>Ja. Vi har erfaring med tværgående og komplekse forløb, for eksempel hvor der både er beskæftigelses-, social- og familierelaterede udfordringer. Vores konsulenter fungerer som tovholdere, der skaber fremdrift og sammenhæng for både borgeren og de involverede afdelinger.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q5" aria-expanded="false" aria-controls="faq-a5">Hvordan måler og dokumenterer I effekten af jeres indsatser?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a5" role="region" aria-labelledby="faq-q5"><div><p>Vi lægger stor vægt på gennemsigtighed og faglig dokumentation. Vi følger udviklingen tæt ud fra klare, aftalte mål og rapporterer løbende i overensstemmelse med de gældende kommunale rammer og metodekrav.</p></div></div>
          </li>
          <li class="sg-faq__item">
            <button class="sg-faq__q" id="faq-q6" aria-expanded="false" aria-controls="faq-a6">Hvordan kommer vi i gang med et samarbejde?<span class="sg-faq__icon" aria-hidden="true"></span></button>
            <div class="sg-faq__a" id="faq-a6" role="region" aria-labelledby="faq-q6"><div><p>I starter med at tage fat i os til en uforpligtende snak. Vi afdækker jeres behov og rammer, hvorefter vi sammensætter et målrettet forløb, uanset om der er tale om enkeltsager, gruppeforløb eller opkvalificering, kurser, sparring og implementeringsstøtte via Simply Guiding Academy.</p></div></div>
          </li>
    </ul>
  </div>
</section>
<?php get_template_part('template-parts/site-footer'); ?>


<?php get_footer(); ?>
