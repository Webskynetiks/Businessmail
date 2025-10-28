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
            <div class="col-md-12">
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
                  <label>Phone No:</label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" name="phone" placeholder="Thanks for sharing your direct number or mobile number." required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label>Email Address:</label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" placeholder="Please fill in your direct email address" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label>message:</label>
                </div>
                <div class="col-md-9">
                  <input type="message" class="form-control" name="message" placeholder="message" required>
                </div>
              </div>

       

              <div class="form-group row">
                <button class="btn btn-primary hgh" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <div class="alert alert-success" role="alert" style="display:none">Your request has been received.</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>