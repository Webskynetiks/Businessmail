<style>
  .sponsor-carousel.owl-carousel .owl-item img {
    width: 51% !important;
    margin-left: 58px;
    padding: 13px;
    margin-top: 0px;
  }
</style>


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

          <!-- Submit Button -->
          <div class="form-group row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            </div>
          </div>

          <!-- Success Alert -->
          <div class="alert alert-success" role="alert" style="display:none">Your request has been received.</div>
        </div>
      </form>
    </div>

    <!-- Right Column (Logos / Carousel) -->
    <div class="col-md-3">
      <div class="text-center logo-image-slider">
        <img src="images/google-workspace-support-partner-india.webp" alt="sign up for google for workspace free trial" style="width: 100%; margin-bottom: 10px; background: #d2ecfa; padding: 22px;">
        <h5 style="color: red;font-weight: 700;">
          <img src="images/google-workspace-technical-support-india.png" alt="Manage Free Account GSuite Google Workspace">
        </h5>
        <h5>
          <marquee>Authorize Reseller partner</marquee>
        </h5>
        <div class="outer-container text-center">
          <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsor-carousel owl-carousel owl-theme">
              <li>
                <div class="text-center"><a href="#"><img src="images/google-workspace-data-migration-services.png" alt="Google Workspace, formerly known as G Suite"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/zoho-workplace-secure-email-hosting.png" alt="Zoho Mail is a secure and reliable business email solution"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/rcmail-domain-setup-and-configuration.png" alt="ResellerClub's Business Email Services"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/zimbra-mail-user-migration-services.png" alt="Zimbra Collaboration Suite (ZCS) is an enterprise-grade mailing solution"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/microsoft-365-to-zimbra-migration.png" alt="Microsoft 365 is our cloud-powered productivity platform"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/hosted-exchange-admin-support-services.png" alt="Hosted Exchange is a version of Microsoft Exchange Server "></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/rediffmail-to-custom-mail-migration.png" alt="Rediffmail Pro is a comprehensive business email solution"></a></div>
              </li>
              <li>
                <div class="text-center"><a href="#"><img src="images/google-workspace-alternative-india.png" alt="Custom email domain is the name of your brand "></a></div>
              </li>
            </ul>
          </div>
          <div class="phone"><a href="tel:+91-9212378780"> <i class="fa fa-phone"></i><span> +91-9212378780</span></a></div>
        </div>
      </div>
    </div>

  </div>
</div>




<script>
document.getElementById('enquiryForm').addEventListener('submit', async function(e) {
    e.preventDefault(); // prevent page reload

    // Collect form data
    const formData = {
        name: document.getElementById('name2').value,
        email: document.getElementById('email2').value,
        phone: document.getElementById('phone2').value,
        package: document.getElementById('package').value,
        message: document.getElementById('message2').value,
		pageUrl: window.location.href // <-- captures full page URL
	
    };

    try {
        const response = await fetch('https://nextjs-queryform-ri3l.vercel.app/api/sendEmail', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const result = await response.json();

        if(response.ok){
            alert('Your message has been sent successfully!');
            document.getElementById('enquiryForm').reset(); // clear form
        } else {
            alert('Error sending message: ' + result.error);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Something went wrong. Please try again later.');
    }
});
</script>