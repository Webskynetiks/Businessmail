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
              <label for="website">Domain Name:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="website" name="website" placeholder="e.g. www.tatamotors.com" required>
            </div>
          </div>

          <!-- Email -->
          <div class="form-group row">
            <div class="col-md-3">
              <label for="email">Email:</label>
            </div>
            <div class="col-md-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your direct email" required>
            </div>
          </div>

          <!-- Phone -->
          <div class="form-group row">
            <div class="col-md-3">
              <label for="phone">Phone No:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Your direct phone number" pattern="[1-9]{1}[0-9]{9}" required>
            </div>
          </div>

          <!-- Name -->
          <div class="form-group row">
            <div class="col-md-3">
              <label for="name">Name:</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="name" name="name" placeholder="What should we call you?" required>
            </div>
          </div>

          <!-- Message -->
          <div class="form-group row">
            <div class="col-md-3">
              <label for="message">Message:</label>
            </div>
            <div class="col-md-9">
              <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message" required></textarea>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>

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
                  <div class="text-center"><a href="google-workspace-gsuite-pricing-trail-renewal-setup-plan-reseller-partner-india.php "><img src="images/google-workspace-data-migration-services.png" alt="Google Workspace, formerly known as G Suite"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="zoho-workplace-best-google-workspace-alternative-india.php"><img src="images/zoho-workplace-secure-email-hosting.png" alt="Zoho Mail is a secure and reliable business email solution"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="economical-business-email-solution-hosting-india.php"><img src="images/rcmail-domain-setup-and-configuration.png" alt="ResellerClub's Business Email Services"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="customized-businessmail-solution-zimbra-alternative-google-workspace-skynetiks-technologies-google-workspace-partner-in-Noida-Gurugram-Delhi.php"><img src="images/zimbra-mail-user-migration-services.png" alt="Zimbra Collaboration Suite (ZCS) is an enterprise-grade mailing solution"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="google-workspace-data-migration-microsoft365-india.php"><img src="images/microsoft-365-to-zimbra-migration.png" alt="Microsoft 365 is our cloud-powered productivity platform"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="hosted-exchange-email-services-skynetiks-technologies-partner-with-google-workspace-Noida-gurugram-delhi-India.php"><img src="images/hosted-exchange-admin-support-services.png" alt="Hosted Exchange is a version of Microsoft Exchange Server "></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="Redffmail-Partner-skynetiks-technologies-most-economical-and-affordable-email-solution-in-noida-gurugram-India.php"><img src="images/rediffmail-to-custom-mail-migration.png" alt="Rediffmail Pro is a comprehensive business email solution"></a></div>
                </li>
                <li>
                  <div class="text-center"><a href="custom-domain-based-email-for-organiztion-brand-identity.php"><img src="images/google-workspace-alternative-india.png" alt="Custom email domain is the name of your brand "></a></div>
                </li>
              </ul>
            </div>
            <div class="phone"><a href="tel:+91-9212378780"> <i class="fa fa-phone"></i><span> +91-9212378780</span></a></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




<script>
  document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();


    const formData = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      phone: document.getElementById("phone").value,
      website: document.getElementById("website").value,
      message: document.getElementById("message").value,
      pageUrl: window.location.href
    };


    Email.send({
      Host: "smtp.elasticemail.com",
      Port: 2525,
      Username: "sales@skynetiks.com",
      Password: "A67B232604CAF3ECE4584F9DE30A17054104", // ⚠️ Public, not secure for production
      To: "sales@skynetiks.com",
      From: "sales@skynetiks.com",
      Subject: `New Enquiry from ${formData.name}`,
      Body: `
          <b>Name:</b> ${formData.name}<br/>
          <b>Email:</b> ${formData.email}<br/>
          <b>Phone:</b> ${formData.phone}<br/>
          <b>Website:</b> ${formData.website}<br/>
          <b>Message:</b><br/>${formData.message}<br/><br/>
          <h4>Page URL:</h4>
          <a href="${formData.pageUrl}" target="_blank">${formData.pageUrl}</a>
        `
    }).then(message => {
      if (message === "OK") {
        alert("Your enquiry has been sent successfully!");
        document.getElementById("enquiryForm").reset();
      } else {
        alert("Failed to send your enquiry. Please try again.");
      }
    }).catch(error => {
      console.error("Email sending error:", error);
      alert("Something went wrong while sending the email.");
    });
  });
</script>


<script src="https://smtpjs.com/v3/smtp.js"></script>