<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Request a Custom Quote</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<style>
body {
  font-family: Arial, sans-serif;
  background: #f5f7fa;
  color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.quote-container {
  background: white;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 14px;
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
  padding: 40px;
  width: 100%;
  max-width: 820px; /* limit the width so the form sits centered */
  margin: 0 auto; /* center the container */
  box-sizing: border-box;
}

.quote-title {
  text-align: center;
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 25px;
  color: #015790;
}

.quote-form {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 16px;
  width: 100%;
}

.quote-form input,
.quote-form select,
.quote-form textarea {
  padding: 12px 14px;
  border-radius: 8px;
  border: 1px solid #ccc;
  background: #fff;
  font-size: 15px;
  color: #333;
  transition: all 0.2s ease;
  width: 100%;
  box-sizing: border-box; /* ensure padding doesn't break width */
}

.quote-form input:focus,
.quote-form select:focus,
.quote-form textarea:focus {
  outline: none;
  border-color: #015790;
  box-shadow: 0 0 4px rgba(1, 87, 144, 0.3);
}

.captcha-box {
  grid-column: 1 / -1;
  transform: scale(0.95);
  transform-origin: top left;
}

#submitBtn {
  grid-column: 1 / -1; /* occupy its own row */
  justify-self: center; /* center the button horizontally in the grid area */
  background: #015790;
  color: white;
  font-weight: 600;
  border: none;
  border-radius: 50px;
  padding: 12px 28px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s, box-shadow 0.3s;
  width: auto; /* let button size to its content */
  max-width: 360px;
}

#submitBtn:hover {
  background: #01406a;
  box-shadow: 0 4px 12px rgba(1, 87, 144, 0.3);
}

#submitBtn:disabled {
  background: #7daac8;
  cursor: not-allowed;
}

.note-text {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
  color: #555;
}

/* --- Side by side layout for contact + form --- */
.side-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr; /* two columns: left contact, right form */
  gap: 28px;
  width: 100%;
  max-width: 1100px;
  margin: 36px auto; /* center the combined block */
  box-sizing: border-box;
}

@media (max-width: 900px) {
  .side-wrapper {
    grid-template-columns: 1fr; /* stack on smaller screens */
    padding: 0 18px;
  }
}

</style>

<style>
    /* --- Contact Grid Layout (single horizontal row) --- */
    .contact-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 20px;
      overflow-x: auto; /* allow horizontal scroll if it doesn't fit */
      padding-bottom: 8px; /* give space for scrollbar */
      -webkit-overflow-scrolling: touch;
    }

    .contact-grid::-webkit-scrollbar {
      height: 8px;
    }
    .contact-grid::-webkit-scrollbar-thumb {
      background: rgba(0,0,0,0.12);
      border-radius: 6px;
    }

/* --- Each Card --- */
.contact-card {
  background: white;
  border-radius: 16px;
  padding: 51px 15px;
  text-align: center;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
  min-width: 220px; /* keep cards on a single line */
  flex: 0 0 auto;
}

/* --- Hover Effect --- */
.contact-card:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: translateY(-4px);
  box-shadow: 0 10px 18px rgba(0, 0, 0, 0.1);
}

/* --- Icon --- */
.contact-icon {
  font-size: 36px;
  margin-bottom: 10px;
}

/* --- Title --- */
.contact-title {
  font-weight: 700;
  font-size: 18px;
  color: #1f2937; /* dark gray */
  margin-bottom: 6px;
}

/* --- Detail --- */
.contact-detail {
  font-size: 16px;
  color: #1f2937;
  opacity: 0.9;
}

/* --- Responsive --- */
@media (max-width: 480px) {
  .contact-card {
    padding: 18px;
  }

  .contact-icon {
    font-size: 30px;
  }

  .contact-title {
    font-size: 16px;
  }

  .contact-detail {
    font-size: 14px;
  }
}

</style>

<body>
  <div class="side-wrapper">
    <div class="left-panel">
      <div class="contact-grid">
  <div class="contact-card">
    <div class="contact-icon">📞</div>
    <div class="contact-title">Call Us</div>
    <div class="contact-detail">+91 9212378780</div>
  </div>

  <div class="contact-card">
    <div class="contact-icon">📧</div>
    <div class="contact-title">Email Us</div>
    <div class="contact-detail">sales@skynetiks.com</div>
  </div>

  <div class="contact-card">
    <div class="contact-icon">💬</div>
    <div class="contact-title">Live Chat</div>
    <div class="contact-detail">Available 24/7</div>
  </div>

  <!-- Optional: uncomment if needed
  <div class="contact-card">
    <div class="contact-icon">📅</div>
    <div class="contact-title">Schedule Call</div>
    <div class="contact-detail">Pick your time</div>
  </div>
  -->
      </div>
    </div>

    <div class="right-panel">
      <div class="quote-container">
    <h3 class="quote-title">Request a Custom Quote</h3>

    <form id="quoteForm" class="quote-form">
        <div class='d-flex  gap-6'>
            <input type="text" name="name" placeholder="Full Name *" required />
      <input type="email" name="email" placeholder="Email Address *" required />
        </div>
        <div class='d-flex gap-2'>
           <input type="tel" name="phone" placeholder="Phone Number" />
      <input type="text" name="company" placeholder="Company Name *" required />
        </div>
        <div class='d-flex '>
           <select name="users" required>
        <option value="">Number of Users *</option>
        <option value="1-50">1–50 users</option>
        <option value="51-250">51–250 users</option>
        <option value="251-1000">251–1000 users</option>
        <option value="1000+">1000+ users</option>
      </select>

      <select name="services" required>
        <option value="">Services *</option>
        <option value="Zoho workplace">Zoho workplace</option>
        <option value="Google workspace">Google workspace</option>
        <option value="Microsoft 365">Microsoft 365</option>
        <option value="Others">Others</option>
      </select>
        </div>
      
      

     

      <textarea name="message" placeholder="Additional Information (Optional)" rows="4"></textarea>

      <div class="captcha-box">
        <div class="g-recaptcha" data-sitekey="6Lca8t0rAAAAAGfVdWPGZee3EM3rIu1ZmRghw6Mw" data-callback="onCaptchaChange"></div>
      </div>

      <button type="submit" id="submitBtn">🚀 Get Your Custom Quote</button>
    </form>

    
      </div>
    </div>
  </div>

  <script>
    let captchaToken = "";

    function onCaptchaChange(token) {
      console.log("Captcha verified:", token);
      captchaToken = token;
    }

    const form = document.getElementById("quoteForm");
    const submitBtn = document.getElementById("submitBtn");

    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      if (!captchaToken) {
        alert("Please complete the reCAPTCHA verification.");
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = "Sending...";

      const formData = Object.fromEntries(new FormData(form).entries());
      formData.pageUrl = window.location.href;

      try {
        const response = await fetch("https://nextjs-queryform.vercel.app/api/sendEmail", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData),
        });

        const data = await response.json();

        if (response.ok && data.success !== false) {
          alert("Request sent successfully!");
          form.reset();
          captchaToken = "";
          if (window.grecaptcha) window.grecaptcha.reset();
        } else {
          alert(data.message || "Failed to send message. Please try again.");
        }
      } catch (error) {
        console.error("Error sending request:", error);
        alert("Something went wrong. Please try again.");
      }

      submitBtn.disabled = false;
      submitBtn.textContent = "🚀 Get Your Custom Quote";
    });
  </script>
</body>
</html>
