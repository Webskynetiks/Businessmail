<?php include_once "common/header.php" ?>
<style>
  body {
    background: #f4f8fb;
    font-family: 'Segoe UI', sans-serif;
  }

  .partner-container {
    margin-top: 22vh;
    margin-bottom: 50px;
    padding: 40px 30px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
  }

  .section-title {
    font-weight: 700;
    color: #333;
    margin-bottom: 30px;
    border-left: 4px solid #007bff;
    padding-left: 12px;
    font-size: 24px;
  }

  .form-group label {
    font-weight: 600;
    color: #444;
    font-size: 14px;
  }

  .form-control {
    border-radius: 6px;
    font-size: 14px;
  }

  .submit-btn {
    background-color: #007bff;
    color: #fff;
    font-weight: 600;
    border-radius: 6px;
    padding: 10px 24px;
    transition: all 0.3s ease;
    font-size: 15px;
  }

  .submit-btn:hover {
    background-color: #0056b3;
  }

  .office-box {
    background: #f8f9fa;
    border-left: 4px solid #007bff;
    padding: 20px 25px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  }

  .office-box i {
    font-size: 18px;
    color: #007bff;
    margin-right: 10px;
  }

  .office-box strong {
    font-size: 16px;
    display: inline-block;
    margin-bottom: 6px;
    color: #222;
  }

  /* Responsive Tweaks */
  @media (max-width: 991.98px) {
    .partner-container {
      margin-top: 10vh;
      padding: 30px 20px;
    }
  }

  @media (max-width: 767.98px) {
    .partner-container {
      padding: 25px 15px;
    }

    .section-title {
      font-size: 20px;
    }

    .submit-btn {
      width: 100%;
    }
  }

  @media (max-width: 575.98px) {
    .form-group label {
      font-size: 13px;
    }

    .form-control {
      font-size: 13px;
    }

    .office-box {
      padding: 15px 18px;
    }

    .office-box p {
      font-size: 13px;
    }
  }
</style>

<div class="container partner-container">
  <div class="row">
    <!-- Form Section -->
    <div class="col-lg-6 col-md-12 mb-4">
      <h2 class="section-title">Become a Partner</h2>
      <form id="partnerForm">
        <div class="form-group">
          <label><i class="fas fa-user"></i> Full Name *</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
          <label><i class="fas fa-envelope"></i> Email Address *</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label><i class="fas fa-phone"></i> Phone Number *</label>
          <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
          <label><i class="fas fa-comment-dots"></i> Your Message *</label>
          <textarea class="form-control" name="message" rows="4" placeholder="Tell us more about your business" required></textarea>
        </div>
        <button type="submit" class="btn submit-btn"><i class="fas fa-paper-plane"></i> Submit</button>

        <!-- Success Alert -->
        <div class="alert alert-success" role="alert" style="display:none; margin-top:15px;">
          Thank you! Your request has been received.
        </div>
      </form>
    </div>

    <!-- Office Section -->
    <div class="col-lg-6 col-md-12">
      <h2 class="section-title">Our Offices</h2>

      <div class="office-box">
        <i class="fas fa-map-marker-alt"></i><strong>India Office</strong>
        <p>B-609, 610 Logix Technova, Sector-132<br>Noida, UP 201304, India</p>
      </div>

      <div class="office-box">
        <i class="fas fa-map-marker-alt"></i><strong>USA Office</strong>
        <p>456 Digital Avenue, Tech Park<br>San Francisco, CA 94103</p>
      </div>

      <div class="office-box">
        <i class="fas fa-map-marker-alt"></i><strong>Dubai Office</strong>
        <p>DSO-IFZA-19577, IFZA Properties<br>Dubai Silicon Oasis, Dubai, UAE</p>
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

<?php include_once "common/footer.php" ?>
