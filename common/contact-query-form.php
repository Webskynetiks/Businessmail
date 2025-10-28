<style>
  .sponsor-carousel.owl-carousel .owl-item img {
    width: 51% !important;
    margin-left: 58px;
    padding: 13px;
    margin-top: 0px;
  }
</style>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="container">
  <div class="row" style="padding-top:25px;">
    <div class="col-md-9">
      <form id="enquiryForm">
        <div class="form">

          <!-- Domain Name -->
          <div class="form-group row">
            <div class="col-md-3">
              <label>Domain Name:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="website" placeholder="e.g. www.tatamotors.com" required>
            </div>
          </div>

          <!-- Email -->
          <div class="form-group row">
            <div class="col-md-3">
              <label>Email:</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" name="email" placeholder="Your direct email" required>
            </div>
          </div>

          <!-- Phone -->
          <div class="form-group row">
            <div class="col-md-3">
              <label>Phone No:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="phone" placeholder="Your direct phone number" pattern="[1-9]{1}[0-9]{9}" required>
            </div>
          </div>

          <!-- Name -->
          <div class="form-group row">
            <div class="col-md-3">
              <label>Name:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="name" placeholder="What should we call you?" required>
            </div>
          </div>

          <!-- Message -->
          <div class="form-group row">
            <div class="col-md-3">
              <label>Message:</label>
            </div>
            <div class="col-md-9">
              <textarea class="form-control" name="message" rows="4" placeholder="Your message" required></textarea>
            </div>
          </div>

          <!-- ✅ Google reCAPTCHA -->
          <div class="form-group row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="g-recaptcha" data-sitekey="6Lca8t0rAAAAAGfVdWPGZee3EM3rIu1ZmRghw6Mw"></div>
              <small id="captchaError" style="color:red; display:none;">Please verify the reCAPTCHA before submitting.</small>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            </div>
          </div>

          <!-- Success Message -->
          <div class="alert alert-success" role="alert" id="enquirySuccess" style="display:none;">
            ✅ Your request has been received. We’ll contact you soon.
          </div>

        </div>
      </form>
    </div>

    <!-- Right Column -->
    <div class="col-md-3">
      <div class="text-center logo-image-slider">
        <img src="images/google-workspace-support-partner-india.webp" alt="sign up for google for workspace free trial"
          style="width: 100%; margin-bottom: 10px; background: #d2ecfa; padding: 22px;">
        <h5 style="color: red;font-weight: 700;">
          <img src="images/google-workspace-technical-support-india.png" alt="Manage Free Account GSuite Google Workspace">
        </h5>
        <h5><marquee>Authorize Reseller partner</marquee></h5>
        <div class="outer-container text-center">
          <div class="carousel-outer">
            <ul class="sponsor-carousel owl-carousel owl-theme">
              <li><div class="text-center"><a href="#"><img src="images/google-workspace-data-migration-services.png" alt="Google Workspace"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/zoho-workplace-secure-email-hosting.png" alt="Zoho Mail"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/rcmail-domain-setup-and-configuration.png" alt="ResellerClub"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/zimbra-mail-user-migration-services.png" alt="Zimbra"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/microsoft-365-to-zimbra-migration.png" alt="Microsoft 365"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/hosted-exchange-admin-support-services.png" alt="Hosted Exchange"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/rediffmail-to-custom-mail-migration.png" alt="Rediffmail"></a></div></li>
              <li><div class="text-center"><a href="#"><img src="images/google-workspace-alternative-india.png" alt="Custom email domain"></a></div></li>
            </ul>
          </div>
          <div class="phone">
            <a href="tel:+91-9212378780"><i class="fa fa-phone"></i><span> +91-9212378780</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<!-- ✅ Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', async function(e) {
    e.preventDefault();

    const captchaResponse = grecaptcha.getResponse();
    const captchaError = form.querySelector('#captchaError') || document.getElementById('captchaError');

    if (!captchaResponse) {
      if (captchaError) captchaError.style.display = 'block';
      return;
    } else {
      if (captchaError) captchaError.style.display = 'none';
    }

    // collect form data dynamically
    const formData = {};
    form.querySelectorAll('input, textarea, select').forEach(field => {
      if (field.name) formData[field.name] = field.value;
    });
    formData["g-recaptcha-response"] = captchaResponse;

    try {
      const response = await fetch('https://nextjs-queryform-ri3l.vercel.app/api/sendEmail', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
      });

      const result = await response.json();

      if (response.ok && result.success) {
        alert("✅ Your message has been sent successfully!");
        form.reset();
        grecaptcha.reset();
      } else {
        alert("⚠️ Error: " + (result.message || "Something went wrong."));
        grecaptcha.reset();
      }
    } catch (error) {
      console.error('Error:', error);
      alert("❌ Server error. Please try again later.");
      grecaptcha.reset();
    }
  });
});
</script>



