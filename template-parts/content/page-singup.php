
  <div class="login-page-wrapper">
    <a href="#" class="login-nav-link">Login</a>
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" method="get" data-ms-form="signup" class="signup-form" data-wf-page-id="662795343cd40bf561aea78e" data-wf-element-id="818f0d9a-4fc7-f868-4629-24858141c8e7" data-ajax-action="contact">
        <label for="contact[email]">Email</label>
        <input type="email" name="contact[email]" class="w-input" required="">
        <h1 class="form-heading">Create an account</h1>
        <div class="field-wrap">
          <label for="Name" class="field-label">First Name</label>
          <div class="form-column">
            <input class="form-field w-input" maxlength="256" name="contact[first-name]" data-name="First Name" placeholder="e.g. John" type="text" id="First-Name" data-ms-member="first-name" required=""></div>
          <div class="form-column"><label for="contact[last-name]" class="field-label">Last Name</label>
          <input class="form-field last-name w-input" maxlength="256" name="contact[last-name]" data-name="Last Name" placeholder="e.g. Smith" type="text" id="Last-Name" data-ms-member="last-name" required=""></div>
        </div>
        <div class="field-wrap">
          <label for="email" class="field-label">Email</label>
          <input class="form-field w-input" maxlength="256" name="contact[email-]" data-name="Email 2" placeholder="e.g. your@email.com" type="text" id="email-2" data-ms-member="email" required=""></div>
        <div class="field-wrap"><label for="contact[password]" class="field-label">Password</label>
        <input class="form-field w-input" maxlength="256" name="contact[password]" data-name="Password" placeholder="*******************" type="password" id="password" data-ms-member="password" required=""></div>
        <label class="w-checkbox gdpr-checkbox"><input id="checkbox" type="checkbox" name="contact[checkbox]" data-name="Checkbox" required="" data-ms-member="gdpr" class="w-checkbox-input"><span for="checkbox" class="terms-text w-form-label"> I agree to the <a href="#" class="login-page-link">Terms</a> and <a href="#" class="login-page-link">Privacy Policy</a></span>
      </label>
      <input type="submit" data-wait="Please wait..." class="submit-button-2 w-button" value="Create an Account">
      <?php udesly_honeypot_field() ?></form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  
  