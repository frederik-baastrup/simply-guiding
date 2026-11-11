<?php /* Nyhedsbrevstilmelding (Mailchimp via MC4WP, se functions.php) */ ?>
      <form class="sg-signup sg-signup--dark" id="sgSignup" method="post" action="#sgSignup" novalidate<?php if (sg_mc4wp_form_id()) echo ' data-mc4wp="1"'; ?>>
        <p class="sg-signup__label" id="sgSignupLabel">Få vores perspektiver direkte i din indbakke</p>
        <div class="sg-signup__fields" role="group" aria-labelledby="sgSignupLabel">
          <input class="sg-signup__field" id="sgSignupName" name="FNAME" type="text" autocomplete="given-name" placeholder="Dit navn" aria-label="Dit navn">
          <input class="sg-signup__field" id="sgSignupEmail" name="EMAIL" type="email" inputmode="email" autocomplete="email" placeholder="Din e-mail" aria-label="Din e-mail" required>
          <button class="sg-signup__btn" type="submit">Tilmeld</button>
        </div>
        <?php sg_signup_fields(); $sg_resp = sg_signup_response(); ?>
        <p class="sg-signup__msg" id="sgSignupMsg" role="status"<?php echo $sg_resp ? '' : ' hidden'; ?>><?php echo esc_html($sg_resp); ?></p>
        <p class="sg-signup__note">Vi bruger kun din e-mail til nyhedsbrevet, og du kan altid afmelde dig. Læs vores <a href="/cookies-og-privatlivspolitik">privatlivspolitik</a>.</p>
      </form>
