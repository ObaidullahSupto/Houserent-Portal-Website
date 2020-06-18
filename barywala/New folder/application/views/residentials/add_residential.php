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
                              <h4 style="text-align:center;">Add Residential Post</h4>
                              <hr>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <?php echo validation_errors();?>
                              <?php echo form_open_multipart('residentials/add_residential'); ?>
                                    <div class="form-group row">
                                      <label class="col-lg-4 col-md-4 col-xs-12 col-form-label">Title</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="title" placeholder="Title" class="form-control here" required="required" maxlength="30" type="text">
                                      </div>
                                    </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">City</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <select id="district" name="city" class="custom-select"  required="required">
                                          <option value="">Select City</option>
                                            <?php foreach($districts as $district):?>
                                              <option value="<?php echo $district['name'];?>"><?php echo $district['name'];?></option>
                                            <?php endforeach;?>                                      
                                        </select>
                                      </div>
                                    </div>
                                    
                                     <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Area</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="area" placeholder="Area Name" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Address</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="address" placeholder="Location" class="form-control here" required="required" maxlength="30" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Rent</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="rent" placeholder="Rent in Taka" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Category</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                        <select name="category"  class="custom-select"  required="required">
                                          <option>Select Category</option>
                                          <option>Family</option>
                                          <option>Bachelor</option>
                                          <option>Sublet</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Total Size</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="size" placeholder="Size in SqFt" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>


                                  

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">No Of Rooms</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                        <select name="rooms" class="custom-select"  required="required">
                                          <option>Select No Of Rooms</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6+</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">No Of Washrooms</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                      <select name="washrooms" class="custom-select"  required="required">
                                        <option>Select No Of Washrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>                                      
                                        <option>4</option>                                     
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="exampleFormControlSelect1" class="col-lg-4  col-md-4 col-xs-12 col-form-label">No Of Veranda</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                      <select name="veranda" class="custom-select"  required="required">
                                        <option>Select No Of Veranda</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>                                      
                                        <option>4</option>                                      
                                        <option>5+</option>                                      
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Parking</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                          <select name="parking" class="custom-select"  required="required" >
                                            <option>Available</option>
                                            <option>Not Available</option>                                     
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Lift</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                          <select name="lift" class="custom-select"  required="required">
                                            <option>Available</option>
                                            <option>Not Available</option>                                     
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Gas</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                      <select name="gas"  class="custom-select"  required="required" >
                                        <option>Available</option>
                                        <option>Not Available</option>                                     
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Floor No</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="floor" placeholder="Floor no" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Service Charge</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                        <select name="bills" class="custom-select"  required="required" >
                                          <option>Included</option>
                                          <option>Not Included</option>                                     
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label  class="col-lg-4  col-md-4 col-xs-12 col-form-label">Smoking</label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">
                                      <select name="smoking"  class="custom-select"  required="required" >
                                        <option>Allowed</option>
                                        <option>Not Allowed</option>                                     
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Bachelor</label>
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <select name="bachelor" class="custom-select"  required="required">
                                          <option>Select</option>
                                          <option>Allowed Male Only</option>
                                          <option>Allowed Female Only</option>
                                          <option>Allowed Both Male & Female</option>
                                          <option>Not Allowed</option>                                     
                                        </select>
                                      </div>
                                    </div>

                                     <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Minimum Contact Period</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <input name="time_period" type="text" placeholder="1 year and 6 months/6 months/1 month" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Contact</label> 
                                        <div class="col-lg-8  col-md-8 col-xs-12">
                                          <input name="contact" type="number" placeholder="Contact Number" class="form-control here" required="required" type="text">
                                        </div>
                                      </div>

                                    <div class="form-group row">
                                      <label  class="col-lg-4  col-md-4 col-xs-12 col-form-label">Upload Image
                                        <span style="color: red;">(*Upload 5 images(1024*720px) and the size should not exceed 1.5MB)</span></label>
                                       <div class="col-lg-8  col-md-8 col-xs-12">                                      
                                        <input type="file" name="userfile[]" multiple="multiple" id="file" class="form-control-file" size="20" multiple  required="required">
                                      </div>
                                    </div>                                 

                                    <div class="form-group row">
                                      <label class="col-lg-4  col-md-4 col-xs-12 col-form-label">Short Description</label> 
                                      <div class="col-lg-8  col-md-8 col-xs-12">
                                        <textarea name="short_note" placeholder="Add a short description here" cols="40" rows="4" class="form-control"  required="required"></textarea>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                      <div class="offset-4 col-lg-8  col-md-8 col-xs-12">
                                        <input name="submit" type="submit" value="Add Post" class="btn btn-primary">
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