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
                              <h4 style="text-align:center;">Add New Residential Post</h4>
                              <hr>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <?php echo validation_errors();?>
                              <?php echo form_open_multipart('residentials/update_residential'); ?>
                               <input type="hidden" value="<?php echo $item['id']; ?>" name="id">
                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Title</label> 
                                      <div class="col-8">
                                        <input name="title" placeholder="Title"  value="<?php echo $item['title'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">City</label> 
                                      <div class="col-8">
                                        <select id="district" name="city" class="custom-select">
                                          <option value="<?php echo $item['city'];?>"><?php echo $item['city'];?></option>
                                            <?php foreach($districts as $district):?>
                                              <option value="<?php echo $district['name'];?>"><?php echo $district['name'];?></option>
                                            <?php endforeach;?>                                      
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Area</label> 
                                        <div class="col-8">
                                        <input name="area" placeholder="Area Name" value="<?php echo $item['area'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Address</label> 
                                      <div class="col-8">
                                        <input name="address" value="<?php echo $item['address'];?>" placeholder="Location" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Rent</label> 
                                      <div class="col-8">
                                        <input name="rent" value="<?php echo $item['rent'];?>" placeholder="Rent in Taka" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Category</label>
                                       <div class="col-8">
                                        <select name="category"  class="custom-select">
                                          <option value="<?php echo $item['category'];?>"><?php echo $item['category'];?></option>
                                          <option>Family</option>
                                          <option>Bachelor</option>
                                          <option>Sublet</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Total Size</label> 
                                      <div class="col-8">
                                        <input name="size" value="<?php echo $item['size'];?>" placeholder="Size in SqFt" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>


                                  

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">No Of Rooms</label>
                                       <div class="col-8">
                                        <select name="rooms" class="custom-select">
                                          <option value="<?php echo $item['rooms'];?>"><?php echo $item['rooms'];?></option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">No Of Washrooms</label>
                                       <div class="col-8">
                                      <select name="washrooms" class="custom-select" id="exampleFormControlSelect1">
                                        <option value="<?php echo $item['washrooms'];?>"><?php echo $item['washrooms'];?></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>                                      
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="exampleFormControlSelect1" class="col-4 col-form-label">No Of Veranda</label>
                                       <div class="col-8">
                                      <select name="veranda" class="custom-select">
                                        <option value="<?php echo $item['veranda'];?>"><?php echo $item['veranda'];?></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>                                      
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Parking</label>
                                       <div class="col-8">
                                          <select name="parking" class="custom-select" >
                                            <OPTION value="<?php echo $item['parking'];?>"><?php echo $item['parking'];?></OPTION>
                                            <option>Available</option>
                                            <option>Not Available</option>                                     
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Lift</label>
                                       <div class="col-8">
                                          <select name="lift" class="custom-select">
                                            <OPTION value="<?php echo $item['lift'];?>"><?php echo $item['lift'];?></OPTION>
                                            <option>Available</option>
                                            <option>Not Available</option>                                     
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Gas</label>
                                       <div class="col-8">
                                      <select name="gas"  class="custom-select" >
                                        <OPTION value="<?php echo $item['gas'];?>"><?php echo $item['gas'];?></OPTION>
                                        <option>Available</option>
                                        <option>Not Available</option>                                     
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Floor No</label>
                                       <div class="col-8">
                                        <input name="floor"  value="<?php echo $item['floor'];?>" placeholder="Floor no" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Service Charge</label>
                                       <div class="col-8">
                                        <select name="bills" class="custom-select" >
                                        <OPTION value="<?php echo $item['bills'];?>"><?php echo $item['bills'];?></OPTION>

                                          <option>Included</option>
                                          <option>Not Included</option>                                     
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label  class="col-4 col-form-label">Smoking</label>
                                       <div class="col-8">
                                      <select name="smoking"  class="custom-select" >
                                        <OPTION value="<?php echo $item['smoking'];?>"><?php echo $item['smoking'];?></OPTION>

                                        <option>Allowed</option>
                                        <option>Not Allowed</option>                                     
                                      </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Bachelor</label>
                                      <div class="col-8">
                                        <select name="bachelor" class="custom-select">
                                        <OPTION value="<?php echo $item['bachelor'];?>"><?php echo $item['bachelor'];?></OPTION>                            
                                          <option>Allowed Male Only</option>
                                          <option>Allowed Female Only</option>
                                          <option>Allowed Both Male & Female</option>
                                          <option>Not Allowed</option>                                     
                                        </select>
                                      </div>
                                    </div>

                                     <div class="form-group row">
                                      <label class="col-4 col-form-label">Minimum Contact Period</label> 
                                      <div class="col-8">
                                        <input name="time_period" value="<?php echo $item['time_period'];?>" type="text" placeholder="1week/1month/..etc." class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-4 col-form-label">Contact</label> 
                                        <div class="col-8">
                                          <input name="contact" value="<?php echo $item['contact'];?>" type="number" placeholder="Contact Number" class="form-control here" required="required" type="text">
                                        </div>
                                      </div>                                

                                  
                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Short Description</label> 
                                      <div class="col-8">
                                        <textarea name="short_note" cols="40" rows="4" class="form-control here"><?php echo $item['short_note'];?></textarea>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                      <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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