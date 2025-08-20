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

/* Service Card Layout */
.service-card {
  background-color: #fff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 24px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);

  /* Equal height + button at bottom */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Service Image */
.service-img {
  height: 60px;          /* fixed height */
  width: auto;           /* keep aspect ratio */
  object-fit: contain;   /* prevent stretching */
  display: block;
  margin: 0 auto 16px;   /* center + spacing */
  max-width: 100%;       /* responsive */
}

/* Service Title */
.service-title {
  font-size: 20px;
  font-weight: 600;
  color: #2d3748;
  margin-bottom: 12px;
  text-align: center;
}

/* Service Description */
.service-card p {
  flex-grow: 1; /* pushes button to bottom */
  margin-bottom: 20px;
  font-size: 1rem;
  line-height: 1.5;
  color: #555;
  text-align: center;
}

/* Buttons */
.btn-primary {
  display: inline-flex;
  justify-content: center;
  align-items: center;

  background-color: #1a73e8;
  color: white;
  text-decoration: none;
  padding: 12px 20px;
  border-radius: 6px;
  font-size: 1rem;
  font-weight: 500;

  height: 44px;        /* fixed button height */
  min-width: 140px;    /* consistent button width */
  margin: 0 auto;      /* center align */
}

.btn-primary:hover {
  background-color: #1558b0;
}

</style>

<div class="page-bg" style="padding: 60px 20px;">
  <h2 style="text-align: center; font-size: 32px; font-weight: 700; margin-bottom: 40px; color: #1a202c;">
    Our Email Solutions
    <span style="display: block; font-size: 16px; font-weight: 400; color: #4a5568;">
      Choose the best business email hosting service in India
    </span>
  </h2>

  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">

    <!-- Google Workspace -->
    <div class="service-card">
      <img src="images/partners/google-workspace-icon.webp" alt="Google Workspace Email India" class="service-img">
      <h3 class="service-title">Google Workspace</h3>
      <p>Business-grade Gmail, Google Drive, Calendar, Meet & Docs with advanced security and 24/7 admin support. Ideal for companies seeking a reliable cloud email solution for enterprises in India.</p>
      <a href="google-workspace-gsuite-pricing-trail-renewal-setup-plan-reseller-partner-india.php" class="btn-primary" >Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Zoho Mail -->
    <div class="service-card">
      <img src="images/partners/zoho-mail-secure-adfree-business-email-provider-india.webp" alt="Zoho Mail Hosting India" class="service-img">
      <h3 class="service-title">Zoho Mail</h3>
      <p>Secure, ad-free business email hosting in India with calendar, contacts & tasks. Best for SMEs seeking privacy-focused, affordable custom domain email hosting.</p>
      <a href="zoho-workplace-best-google-workspace-alternative-india.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Microsoft 365 -->
    <div class="service-card">
      <img src="images/partners/microsoft-365-outlook-email-hosting-cloud-solution-india.webp" alt="Microsoft 365 Outlook Hosting India" class="service-img">
      <h3 class="service-title">Microsoft 365</h3>
      <p>Enterprise-class cloud email solution with Outlook, OneDrive, Teams & Office apps. Perfect for remote collaboration and professional-grade productivity tools.</p>
      <a href="google-workspace-data-migration-microsoft365-india.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- RC Mail -->
    <div class="service-card">
      <img src="images/partners/resellerclub-rc-mail-email-solution-for-startups-resellers.webp" alt="RC Mail Startup Email India" class="service-img">
      <h3 class="service-title">RC Mail</h3>
      <p>Budget-friendly email solution for resellers, freelancers & startups. Easy to manage webmail platform with spam filters and responsive support.</p>
      <a href="economical-business-email-solution-hosting-india.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Rediffmail Pro -->
    <div class="service-card">
      <img src="images/partners/rediffmail-pro-business-email-hosting-india.webp" alt="Rediffmail Pro India" class="service-img">
      <h3 class="service-title">Rediffmail Pro</h3>
      <p>Trusted Indian email hosting provider with real-time backup, anti-virus protection, and excellent uptime. Best for local businesses seeking economical email hosting in India.</p>
      <a href="Redffmail-Partner-skynetiks-technologies-most-economical-and-affordable-email-solution-in-noida-gurugram-India.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Zimbra Mail -->
    <div class="service-card">
      <img src="images/partners/zimbra-open-source-mail-server-business-hosting-india.jpg" alt="Zimbra Mail Hosting India" class="service-img">
      <h3 class="service-title">Zimbra Mail</h3>
      <p>Open-source enterprise email server with calendar, tasks, and file sharing. Designed for industries with strict compliance needs like healthcare, finance, and government.</p>
      <a href="customized-businessmail-solution-zimbra-alternative-google-workspace-skynetiks-technologies-google-workspace-partner-in-Noida-Gurugram-Delhi.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Hosted Exchange -->
    <div class="service-card">
      <img src="images/partners/hosted-microsoft-exchange-enterprise-email-hosting-india.webp" alt="Hosted Exchange India" class="service-img">
      <h3 class="service-title">Hosted Exchange</h3>
      <p>Fully managed Microsoft Exchange hosting with secure Outlook access, shared calendars, contacts, and mailbox control for enterprises in India.</p>
      <a href="hosted-exchange-email-services-skynetiks-technologies-partner-with-google-workspace-Noida-gurugram-delhi-India.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

    <!-- Custom Mail -->
    <div class="service-card">
      <img src="images/partners/custom-domain-business-email-brand-identity-hosting-india.webp" alt="Custom Email Hosting India" class="service-img">
      <h3 class="service-title">Custom Mail</h3>
      <p>Personalized business email with your domain name to build brand identity, enhance trust, and improve professional communication. Scalable & cost-effective.</p>
      <a href="custom-domain-based-email-for-organiztion-brand-identity.php" class="btn-primary">Read More <i class="fa fa-angle-double-right text-white" aria-hidden="true"></i></a>
    </div>

  </div>
</div>
