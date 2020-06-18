 <div class="main-container section-padding" style="background-image: url(<?php echo base_url();?>assets/img/body1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-xs-12" style="margin-bottom:10px;">
            <div class="sidebar sticky right" style="padding:15px;">
              <div class="list-group ">
                <a href="<?php echo base_url();?>dashboard" class="list-group-item list-group-item-action active" style="text-align:center;">Dashboard</a>
                <a href="<?php echo base_url();?>users/profile" class="list-group-item list-group-item-action">Profile</a>                                
                <a href="<?php echo base_url();?>posts/add_commercial" class="list-group-item list-group-item-action">Add Commercial Post</a>                                  
                <a href="<?php echo base_url();?>posts/view_all_commercial_for_user" class="list-group-item list-group-item-action">View Commercial Post</a>
                <a href="<?php echo base_url();?>residentials/add_residential" class="list-group-item list-group-item-action">Add Residental Post</a>
                <a href="<?php echo base_url();?>residentials/view_all_residential_for_user" class="list-group-item list-group-item-action">View Residental Post</a>                                    
              </div> 
          </div>
        </div>
          <div class="col-lg-8 col-md-12 col-xs-12">
              <div class="card">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <h4 style="text-align:center;">Your Profile</h4>
                              <h4 style="text-align:center;"><?php echo 'Welcome - '.$this->session->userdata('name').'';?></h4>
                              <hr>
                            </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <?php echo validation_errors();?>
                             <?php echo form_open('users/profile');?>
                             <input type="hidden" value="<?= $this->session->userdata('id') ?>" name="id">
                                <div class="form-group row">
                                  <label class="col-4 col-form-label">Name* :</label> 
                                  <div class="col-8">
                                    <input name="name" type="text" value="<?= $this->session->userdata('name') ?>" class="form-control here">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-4 col-form-label">Email* :</label> 
                                  <div class="col-8">
                                    <input name="email" type="email" value="<?= $this->session->userdata('email') ?>" class="form-control here">
                                  </div>
                                </div>

                               

                                <div class="form-group row">
                                  <label class="col-4 col-form-label">Contact No* :</label> 
                                  <div class="col-8">
                                    <input name="contact" type="number" value="<?= $this->session->userdata('contact') ?>" class="form-control here">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-4 col-form-label">Change Password</label> 
                                  <div class="col-8">
                                    <input name="password" type="password" value="" placeholder="Type new password" class="form-control here">
                                  </div>
                                </div>  
                                <div class="form-group row">
                                  <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                  </div>
                                </div>
                              <?php echo form_close();?>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
        </div>
      </div>  
    </div> 
