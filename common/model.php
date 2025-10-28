
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
                <label>Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="name" id="name"
                  placeholder="How would you want us to call you?" required>
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
    <label>Message:</label>
  </div>
  <div class="col-md-9">
    <textarea class="form-control" id="message" name="message" placeholder="Optional message"></textarea>
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
<!-- Google Workspace Signup Modal -->
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
                <label>Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="name" placeholder="How would you want us to call you?" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-3">
                <label>Email:</label>
              </div>
              <div class="col-md-9">
                <input type="email" class="form-control" name="email" placeholder="Please fill in your direct email you always access" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-3">
                <label>Phone No:</label>
              </div>
              <div class="col-md-9">
                <input type="tel" class="form-control" name="phone" placeholder="Thanks for sharing your direct number." required>
              </div>
            </div>
             <div class="form-group row">
              <div class="col-md-3">
                <label>Domain Name:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="website" placeholder="Domain name is an internet identity of your organization i.e www.tatamotors.com" required>
              </div>
            </div>

            <!-- Optional: hidden message to satisfy API -->
          <div class="form-group row">
              <div class="col-md-3">
                <label>Message:</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="message" placeholder="message" required>
              </div>
            </div>


            <div class="form-group row">
              <button class="btn btn-primary hgh" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="alert alert-success" role="alert" style="display:none">Your request has been received.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







<!-- Callback Modal -->
<!-- Callback Modal -->
<div class="modal fade" id="callback">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex flex-column align-items-start">
        <div class="d-flex w-100 align-items-center">
          <button type="button" class="close btn-danger ml-2" data-dismiss="modal" style="position: absolute; top: 15px; right: 15px;">&times;</button>
        </div>
        <div class="modal-subcontent">
          <h4 class="mt-2">Thank you for your interest in our services.</h4>
          <p id="callback_heading" class="mt-2">Skynetiks Technologies, a trusted Zoho Workplace,Google Workspace and Microsoft 365 Partner in India, will support you with a full range of Google Workspace services, including:</p>
          <div class="modal-support mt-1">
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Zoho Workplace,Google Workspace and Microsoft 365 Technical Support,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Zoho Workplace,Google Workspace and Microsoft 365 Renewal Assistance/Support,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Zoho Workplace,Google Workspace and Microsoft 365 Trial Sign Up - Setup,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Zoho Workplace,Google Workspace and Microsoft 365 Billing and Subscription Help,</span></div>
            <div class="modal-gw"><i class="fas fa-check-circle"></i><span class="modal-inner">Any other technical or product-related queries.</span></div>
          </div>
          <p class="modal-fill">Please fill out the form below, and a member of our team will get back to you as soon as possible.</p>
          <p class="modal-contact"><i class="fas fa-phone-alt"></i><span class="modal-inner">For immediate assistance, feel free to call us at +91 92 123 78780.</span></p>
        </div>
      </div>

      <div class="modal-body">
        <div class="form">
          <form id="workspaceForm">
            <div class="col-md-12">
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Name:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="name" placeholder="How would you want us to call you?" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" placeholder="Thanks for sharing your direct number or mobile number." required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label>Your Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" placeholder="Please fill in your direct email you always access" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label>Message:</label>
                </div>
                <div class="col-md-9">
                  <textarea maxlength="5000" rows="3" class="form-control" name="message" placeholder="Please enter your message." required></textarea>
                </div>
              </div>
              <div class="form-group row">
  <div class="g-recaptcha" data-sitekey="6Lca8t0rAAAAAGfVdWPGZee3EM3rIu1ZmRghw6Mw"></div>
</div>

              <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" style="display:none">
            Thank You <span class="submitterName"></span>! Your request has been received. Meanwhile, you may connect to us immediately on +91 92 123 78780 or write to us on googlesupport@skynetiks.com
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
