<?php
$meta_title = "Sign Up for Google Workspace, Microsoft 365 & Zoho Mail | Skynetiks Email Services India";
$meta_description = "Get started with business email solutions from Skynetiks Technologies. Sign up for Google Workspace, Microsoft 365, Zoho Mail & more with expert onboarding, free setup, and technical support in India.";
$meta_keywords = "Google Workspace Signup, Microsoft 365 Sign Up India, Zoho Mail Trial, Business Email Signup India, Email Solutions Noida, Email Product Registration, Skynetiks Technologies Signup";
$meta_canonical = "https://businessmail.co.in/signup-google-workspace-microsoft-O365-zoho-workplace-30days-moneyback-guarantee-skynetiks-technologies-partner-Noida-Gurugram-India.php";
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
  .page-bg {
    background-color: #f6f9fc;
    font-family: 'Segoe UI', sans-serif;
    color: #333;
    margin: 0;
    padding: 0;
  }

  .main-title {
    font-size: 2rem;
    color: black;
    margin-bottom: 20px;
    text-align: center;
  }

  .desc {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: center;
  }

  .service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
  }

  .service-card {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
  }

  .service-img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
    object-fit: contain;
  }

  .service-title {
    color: black;
    font-size: 1.2rem;
    margin-bottom: 10px;
  }

  .btn-primary {
    display: inline-block;
    margin-top: 40px;
    background-color: #1a73e8;
    color: white;
    text-decoration: none;
    padding: 14px 30px;
    border-radius: 4px;
    font-size: 1rem;
    text-align: center;
  }

  .btn-primary:hover {
    background-color: #1558b0;
  }

  .contact-note {
    margin-top: 15px;
    color: #555;
    text-align: center;
  }

  section.contact-form {
    padding: 0px 0px;
}
</style>



<!-- Hero Image Section -->
<section>
  <img src="images/free-google-workspace-microsoft-365-zoho-mail-signup.jpg"
    style="width:100%; height:auto;">
</section>

<!-- About Section -->
<div class="container">
  <h1 class="main-title mt-5">Choose the Right Email Solution for Your Business</h1>
  <p class="desc" style="text-align: justify;">
    Skynetiks Technologies Pvt. Ltd. is a leading provider of certified business email hosting solutions in India, trusted by startups, SMEs, and enterprises across Noida, Gurugram, Delhi NCR, and beyond. We specialize in deploying, managing, and supporting cloud-based email platforms including Google Workspace (formerly G Suite), Zoho Mail, Microsoft Office 365, Rediffmail Pro, Zimbra Mail, Hosted Exchange, and custom domain mail solutions.
  </p>
</div>












<!-- Contact Form Section -->
<section class="contact-form">
  <div class="sec-title centered">
    <h2 style="">Product <span>Sign Up</span></h2>
  </div>
</section>
  <?php include_once "common/contact-query-form.php" ?>

<!-- SMTP.js Script -->
<script src="https://smtpjs.com/v3/smtp.js"></script>

<!-- Form Submission Script -->
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
      Password: "A67B232604CAF3ECE4584F9DE30A17054104", // ⚠️ Public, not secure
      To: "sales@skynetiks.com",
      From: "sales@skynetiks.com",
      Subject: `New Enquiry from ${formData.name}`,
      Body: `
                <b>Name:</b> ${formData.name}<br/>
                <b>Email:</b> ${formData.email}<br/>
                <b>Phone:</b> ${formData.phone}<br/>
                <b>Website:</b> ${formData.website}<br/>
                <b>Message:</b><br/>${formData.message}<br/><br/>
                <h4>Page URL:</h4><a href="${formData.pageUrl}" target="_blank">${formData.pageUrl}</a>
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

<?php include_once "common/footer.php" ?>