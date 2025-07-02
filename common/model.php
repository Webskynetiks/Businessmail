
<!-- SMTP-Connected Forms -->



<div class="modal fade" id="consultationform">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Please Fill all details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

      <div class="modal-body">
        <div class="form">
          <form id="callbackForm">
            <div class="col-md-12" id="hide_cd">
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Name:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name" id="callback_name"  
                    placeholder="Enter Your name" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" id="callback_phone"  
                    placeholder="Enter Your Phone No" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="callback_email"  
                    placeholder="Enter Your Email Address" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Message:</label>
                </div>
                <div class="col-md-9">
                  <textarea maxlength="5000" rows="3" class="form-control" name="message"
                    placeholder="Please enter your message." id="callback_message" required></textarea>
                </div>
              </div>

             


               <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" id="callbackSuccess" style="display:none">Thank You <span id="submitterName"></span> Your request has been received. Meanwhile You may connect to us immediately on +91 92 123 78780 or write to us on sales@skynetiks.com</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 


<!-- Free Demo Modal -->
<div class="modal fade" id="free_demo">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">It is good to try before you buy!
          <p style="font-size: 15px;">Fill in your details to setup a DEMO account for your organization in 24 hours</p>
        </h4>
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form">
          <form id="leadForm">
            <div class="form-group row">
              <div class="col-md-3">
                <label>Domain Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="website" id="website"
                  placeholder="Domain name is an internet identity of your organization i.e www.tatamotors.com" required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Email:</label>
              </div>
              <div class="col-md-9">
                <input type="email" class="form-control" name="email" id="email"
                  placeholder="Please fill in your direct email you always access" required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Phone No:</label>
              </div>
              <div class="col-md-9">
                <input type="tel" class="form-control" name="phone" id="phone"
                  placeholder="Thanks for sharing your direct number." required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="name" id="name"
                  placeholder="How would you want us to call you?" required>
              </div>
            </div>


            <!--<div class="form-group row">-->
            <!--  <div class="col-md-10">-->
            <!--    <div class="g-recaptcha brochure__form__captcha recap" data-sitekey="6LdT_JgcAAAAAHXnZ9-hnbyoMgiWLuvOS0-zv9hS"></div>-->
            <!--  </div>-->
            <!--</div>-->


            <div class="form-group row">
              <button class="btn btn-primary hgh" type="submit">Submit</button>
            </div>
          </form>


          <div class="alert alert-success" role="alert" id="leadSuccess" style="display:none">Your request has been received.</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Workspace Signup Modal -->
<div class="modal fade" id="workspace_signup">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Want to Start With Google Workspace!
          <p style="font-size: 15px;">Fill in your details to setup a DEMO account for your organization in 24 hours</p>
        </h4>
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="workspaceForm">
          <div class="form">
            <div class="form-group row">
              <div class="col-md-3">
                <label>Domain Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="website" id="workspace_website"
                  placeholder="Domain name is an internet identity of your organization i.e www.tatamotors.com" required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Email:</label>
              </div>
              <div class="col-md-9">
                <input type="email" class="form-control" name="email" id="workspace_email"  
                  placeholder="Please fill in your direct email you always access" required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Phone No:</label>
              </div>
              <div class="col-md-9">
                <input type="tel" class="form-control" name="phone" id="workspace_phone"  
                  placeholder="Thanks for sharing your direct number." required>
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label>Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="name" id="workspace_name"  
                  placeholder="How would you want us to call you?" required>
              </div>
            </div>


            <!--<div class="form-group row">-->
            <!--  <div class="col-md-10">-->
            <!--    <div class="g-recaptcha brochure__form__captcha recap" data-sitekey="6LdT_JgcAAAAAHXnZ9-hnbyoMgiWLuvOS0-zv9hS"></div>-->
            <!--  </div>-->
            <!--</div>-->


            <div class="form-group row">
              <button class="btn btn-primary hgh" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="alert alert-success" role="alert" id="workspaceSuccess" style="display:none">Your request has been received.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Free Consultation Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Get A Free Consultation</h4>
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form">
          <form id="consultationForm">
            <div class="col-md-12" id="hide_cd">
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Name:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name" id="consultation_name"  
                    placeholder="How would you want us to call you?" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" id="consultation_phone"  
                    placeholder="Thanks for sharing your direct number or mobile number." required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="consultation_email"  
                    placeholder="Please fill in your direct email you always access" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Company:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="company" id="consultation_company"
                    placeholder="Your Company Name" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Website:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="website" id="consultation_website"
                    placeholder="Domain name is an internet identity of your organization i.e www.domain.com" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Message:</label>
                </div>
                <div class="col-md-9">
                  <textarea maxlength="5000" rows="3" class="form-control" name="message"
                    placeholder="Please enter your message." id="consultation_message" required></textarea>
                </div>
              </div>


              <!--<div class="form-group row">-->
              <!--  <div class="col-md-10">-->
              <!--    <div class="g-recaptcha brochure__form__captcha recap" data-sitekey="6LdT_JgcAAAAAHXnZ9-hnbyoMgiWLuvOS0-zv9hS"></div>-->
              <!--  </div>-->
              <!--</div>-->
             
              <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" id="consultationSuccess" style="display:none">Your request has been received.</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Callback Modal -->
<div class="modal fade" id="callback">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex flex-column align-items-start">
        <div class="d-flex w-100 align-items-center">
          <!-- <h4 class="modal-title text-center">Get A Call Back</h4> -->
          <button type="button" class="close btn-danger ml-2" data-dismiss="modal" style="position: absolute; top: 15px; right: 15px;">&times;</button>
        </div>
        <div class="modal-subcontent">
          <h4 class="mt-2">Thank you for your interest in our services.</h4>
          <p id="callback_heading" class="mt-2">Skynetiks Technologies, a trusted Google Workspace Partner in India, will support you with a full range of Google Workspace services, including:</p>
          <div class="modal-support mt-1">
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Google Workspace Technical Support,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Google Workspace Renewal Assistance/Support,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Google Workspace Trial Sign Up - Setup,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Google Workspace Billing and Subscription Help,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Any other technical or product-related queries.</span></div>
          </div>
          <p class="modal-fill">Please fill out the form below, and a member of our team will get back to you as soon as possible.</p>
          <p class="modal-contact"><i class="fas fa-phone-alt"></i><span class="modal-inner">For immediate assistance, feel free to call us at +91 92 123 78780.</span></p>
        </div>
      </div>

      <div class="modal-body">
        <div class="form">
          <form id="callbackForm">
            <div class="col-md-12" id="hide_cd">
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Name:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name" id="callback_name"  
                    placeholder="How would you want us to call you?" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" id="callback_phone"  
                    placeholder="Thanks for sharing your direct number or mobile number." required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="callback_email"  
                    placeholder="Please fill in your direct email you always access" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Message:</label>
                </div>
                <div class="col-md-9">
                  <textarea maxlength="5000" rows="3" class="form-control" name="message"
                    placeholder="Please enter your message." id="callback_message" required></textarea>
                </div>
              </div>

              <!-- <div class="form-group row">-->
              <!--  <div class="col-md-10">-->
              <!--    <div class="g-recaptcha brochure__form__captcha recaps" data-sitekey="6LdT_JgcAAAAAHXnZ9-hnbyoMgiWLuvOS0-zv9hS"></div>-->
              <!--  </div>-->
              <!--</div>-->


               <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" id="callbackSuccess" style="display:none">Thank You <span id="submitterName"></span> Your request has been received. Meanwhile You may connect to us immediately on +91 92 123 78780 or write to us on googlesupport@skynetiks.com</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 







<script>
  document.getElementById('callbackForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('callback_name').value.trim();
    document.getElementById('submitterName').textContent = name;
    document.getElementById('callbackSuccess').style.display = 'block';
    document.getElementById('hide_cd').style.display = 'none';
  });
</script>


<!-- Pricing Signup Modal -->
<div class="modal fade" id="signup_pricing">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign Up</h4>
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form">
          <form id="signupForm">
            <div class="col-md-12" id="hide_cd">
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Name:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name" id="signup_name"  
                    placeholder="How would you want us to call you?" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" id="signup_phone"  
                    placeholder="Thanks for sharing your direct number or mobile number." required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="signup_email"  
                    placeholder="Please fill in your direct email address" required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-3">
                  <label>Password:</label>
                </div>
                <div class="col-md-9">
                  <input type="password" class="form-control" name="password" id="signup_password"  
                    placeholder="Password" required>
                </div>
              </div>


              <!--<div class="form-group row">-->
              <!--  <div class="col-md-10">-->
              <!--    <div class="g-recaptcha brochure__form__captcha recaps" data-sitekey="6LdT_JgcAAAAAHXnZ9-hnbyoMgiWLuvOS0-zv9hS"></div>-->
              <!--  </div>-->
              <!--</div>-->


              <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" id="signupSuccess" style="display:none">Your request has been received.</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Required Scripts -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  // SMTP Configuration
  const smtpConfig = {
    Host: "smtp.elasticemail.com",
    Port: 2525,
    Username: "sales@skynetiks.com",
    Password: "A67B232604CAF3ECE4584F9DE30A17054104", // ⚠️ Use a backend in production
    To: "sales@skynetiks.com",
    From: "sales@skynetiks.com"
  };


  // Generic function to handle form submissions
  function handleFormSubmit(formId, successId, formTitle) {
    document.getElementById(formId).addEventListener("submit", function(e) {
      e.preventDefault();
     
      // Get all form inputs
      const form = document.getElementById(formId);
      const formData = {};
     
      // Collect all input values
      const inputs = form.querySelectorAll('input, textarea');
      inputs.forEach(input => {
        if (input.name) {
          formData[input.name] = input.value;
        }
      });
     
      // Add page URL
      formData.pageUrl = window.location.href;
     
      // Create email body HTML
      let emailBody = `<h2>${formTitle} Form From BusinessMail</h2>`;
     
      // Add each form field to the email body
      for (const [key, value] of Object.entries(formData)) {
        if (key !== 'pageUrl' && key !== 'password') {
          emailBody += `<b>${key.charAt(0).toUpperCase() + key.slice(1)}:</b> ${value}<br/>`;
        }
      }
     
      // Add submission source URL
      emailBody += `<br/><b>Submitted from:</b><br/><a href="${formData.pageUrl}" target="_blank">${formData.pageUrl}</a>`;
     
      // Send email using SMTP.js
      Email.send({
        ...smtpConfig,
        Subject: `New ${formTitle} Submission${formData.website ? ' from ' + formData.website : ''}`,
        Body: emailBody
      }).then(message => {
        if (message === "OK") {
          document.getElementById(successId).style.display = "block";
          form.reset();
        } else {
          alert("Submission failed. Please try again.");
        }
      }).catch(error => {
        console.error("SMTP error:", error);
        alert("Something went wrong. Try again later.");
      });
    });
  }


  // Initialize all forms
  document.addEventListener("DOMContentLoaded", function() {
    // Free Demo Form
    handleFormSubmit("leadForm", "leadSuccess", "Free Demo");
   
    // Workspace Form
    handleFormSubmit("workspaceForm", "workspaceSuccess", "Google Workspace");
   
    // Consultation Form
    handleFormSubmit("consultationForm", "consultationSuccess", "Free Consultation");
   
    // Callback Form
    handleFormSubmit("callbackForm", "callbackSuccess", "Call Back Request");
   
    // Signup Form
    handleFormSubmit("signupForm", "signupSuccess", "Sign Up");
  });
</script>

