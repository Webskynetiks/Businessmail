<?php
$meta_title = "24x7 Business Email Support | Request a Call Back for Google Workspace & Zoho Mail Help";
$meta_description = "Need urgent help with Google Workspace, Zoho Mail, or Microsoft 365? Request a free call back from Skynetiks Technologies. Get expert support, migration assistance, and account help 24x7 across India.";
$meta_keywords = "24x7 Email Support India, Google Workspace Help, Request Call Back Email, Business Mail Support, Zoho Mail Support India, Microsoft 365 Email Issues, Skynetiks Technologies Support, Email Migration Assistance";
$meta_canonical = "https://businessmail.co.in/google-technical-support-contact-mail-gsuite-workspace-partner-reseller-trial-signup-renewal-india.php";
$meta_robots = "index, follow";

include_once "common/header.php";
?>

<style type="text/css">
  .link-contact {
    color: #015790 !important;
    font-weight: 600 !important;
  }
</style>

<style>
  .support-section {
    background-color: #f9f9f9;
    padding: 60px 20px;
    font-family: 'Segoe UI', sans-serif;
  }

  .support-container {
    max-width: 1140px;
    margin: auto;
  }

  .support-title {
    font-size: 2rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 20px;
    text-align: center;
  }

  .support-text {
    font-size: 1.05rem;
    color: #444;
    line-height: 1.8;
    text-align: justify;
    margin-bottom: 20px;
  }

  /* Highlighted list style */
  .support-list {
    list-style: none;
    padding: 0;
    margin: 25px 0;
  }

  .support-list li {
    font-size: 1.05rem;
    margin-bottom: 14px;
    padding-left: 28px;
    position: relative;
    line-height: 1.6;
    color: #444;
  }

  .support-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #1a73e8;
    font-weight: bold;
  }

  /* CTA at the end */
  .support-cta {
    margin-top: 30px;
    text-align: center;
  }

  .support-button {
    display: inline-block;
    background-color: #1a73e8;
    color: #fff;
    padding: 14px 32px;
    text-decoration: none;
    border-radius: 6px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .support-button:hover {
    background-color: #1558b0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  .support-contact {
    margin-top: 15px;
    font-size: 1rem;
    color: #555;
    text-align: center;
  }
 /* #callback_heading{
  padding: 20px;
 } */

  section.contact-form {
    padding: 0px 0px;
}

</style>
<section>
  <img src="images/contact-google-workspace-microsoft-zoho-reseller-india.png" style="width:100%;height: auto;">
</section>







<section class="support-section">
  <div class="support-container">
    <h1 class="support-title">
      24x7 Support for All Business Email Services
    </h1>

    <p class="support-text">
      At <strong>Skynetiks Technologies</strong>, we offer <strong>round-the-clock support</strong> for all major business email platforms. Whether you're using <strong>Google Workspace (formerly G Suite)</strong>, <strong>Microsoft 365</strong>, <strong>Zimbra Mail</strong>, <strong>cPanel Email</strong>, or any <strong>custom domain email service</strong>, our team is ready to help you resolve issues quickly and professionally.
    </p>

    <p class="support-text">
      If your email isn't working, you're having trouble renewing your subscription, or facing login or domain configuration issues — <strong>call us first</strong>. We’re available <strong>24x7, 365 days a year</strong> to provide real-time support with no waiting and no bots.
    </p>

    <ul class="support-list">
      <li>Email migration & data transfer</li>
      <li>Admin console & user management</li>
      <li>MX/DNS record fixing</li>
      <li>Mail delivery error troubleshooting</li>
      <li>Desktop & mobile email setup</li>
    </ul>

    <p class="support-text">
      To get help now, call us at <strong>+91-9212378780</strong> or email us at 
      <a href="mailto:sales@skynetiks.com">sales@skynetiks.com</a>. We serve clients across <strong>Delhi, Noida, NCR, Mumbai, Bangalore, Chennai, Hyderabad, Pune</strong> and all over India.
    </p>

    <p class="support-text">
      Join 500+ businesses that trust Skynetiks for reliable, expert email support. Let us keep your communication seamless and secure — anytime you need us.
    </p>

   
  </div>
</section>









<section class="contact-form">
  <div class="sec-title centered">
    <h2  >Get a <span>Call Back</span></h2>
  </div>
</section>
   <?php include_once "common/contact-query-form.php" ?>





<script>
  document.getElementById("callbackForm").addEventListener("submit", function(e) {
    e.preventDefault();


    const form = e.target;
    const name = form.name.value;
    const email = form.email.value;
    const phone = form.phone.value;
    const message = form.message.value;


    Email.send({
      SecureToken: "YOUR_SECURE_TOKEN_HERE",
      To: "you@example.com", // Change to your receiving email
      From: "you@example.com",
      Subject: "New Callback Form Submission",
      Body: `
        <h3>Callback Request</h3>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Message:</strong> ${message}</p>
      `
    }).then(function(response) {
      alert("Mail sent successfully!");
      form.reset();
    }).catch(function(error) {
      alert("Error sending mail: " + error);
    });
  });
</script>

<?php include_once "common/footer.php" ?>