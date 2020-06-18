
    <section id="content" class="section-padding" style="background-image: url(<?php echo base_url();?>assets/img/body1.jpg)">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box">
              <h3>Login</h3>
              <div class="login-form">
                 <?php echo form_open('users/login');?>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-envelope"></i>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-lock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <button class="btn btn-common log-btn">Submit</button>
             
               <p class="text-center">
                  Don't Have an account?<a href="<?php echo base_url();?>users/signup"> Signup Now</a>
                </p>

                 <?php echo form_close();?><br>
            </div>
          </div>
        </div>
      </div>
    </section> 