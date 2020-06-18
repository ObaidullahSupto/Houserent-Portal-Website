
    
    <section id="content" class="section-padding" style="background-image: url(<?php echo base_url();?>assets/img/body1.jpg)">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box">
              <h3>Create Your account</h3>               
             
                  <?php echo form_open('users/signup');?>
                  <?php echo validation_errors();?>
                   <div class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-user"></i>
                    <input type="text" class="form-control" name="name" placeholder="Full Name"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-envelope"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email Address"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-lock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-unlock"></i>
                    <input type="password" class="form-control" name="password2" placeholder="Retype Password"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-phone"></i>
                    <input type="number" class="form-control" name="contact" placeholder="Contact No"/>
                  </div>
                </div>
                <button class="btn btn-common log-btn mt-3">Register</button>
                <p class="text-center">
                  Already have an account?<a href="<?php echo base_url();?>users/login"> Sign In</a>
                </p>
              </div>
              <?php echo form_close();?>
            </div>
          </div>
        </div>
      </div>
    </section>