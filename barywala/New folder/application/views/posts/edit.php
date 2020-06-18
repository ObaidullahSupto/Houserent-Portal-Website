
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
                              <h4 style="text-align:center;"><?php echo $title;?></h4>
                              <hr>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <?php echo validation_errors();?>
                              <?php echo form_open('posts/update'); ?>
                              <input type="hidden" value="<?php echo $item['id']; ?>" name="id">
                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Title</label> 
                                      <div class="col-8">
                                        <input name="title" placeholder="Title" class="form-control here" value="<?php echo $item['title'];?>" required="required" type="text">
                                      </div>
                                    </div>

                                   <div class="form-group row">
                                      <label class="col-4 col-form-label">City</label> 
                                      <div class="col-8">
                                        <select id="district" name="city" class="custom-select">
                                          <option value="<?php echo $item['city'];?>"><?php echo $item['city'];?></option>
                                           <!-- <?php if(count($districts)):?> -->
                                            <?php foreach($districts as $district):?>
                                              <option value="<?php echo $district['name'];?>"><?php echo $district['name'];?></option>
                                            <?php endforeach;?>
                                          <!-- <?php endif;?>   -->                                        
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
                                        <input name="address" placeholder="Full Address" value="<?php echo $item['address'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Rent</label> 
                                      <div class="col-8">
                                        <input name="rent" placeholder="Rent in Taka" value="<?php echo $item['rent'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div> 

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">Total Size</label> 
                                      <div class="col-8">
                                        <input name="size" placeholder="Size in SqFt" value="<?php echo $item['size'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">No Of Rooms</label>
                                       <div class="col-8">
                                        <select name="rooms" class="custom-select" >
                                          <option value="<?php echo $item['rooms'];?>"><?php echo $item['rooms'];?></option>                                          
                                          <option>01</option>
                                          <option>02</option>
                                          <option>03</option>
                                          <option>04</option>
                                          <option>05</option>
                                          <option>Open Space</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-4 col-form-label">No Of Washrooms</label>
                                       <div class="col-8">
                                        <select name="washrooms" class="custom-select" >
                                          <option value="<?php echo $item['washrooms'];?>"><?php echo $item['washrooms'];?></option>                                          
                                          <option>01</option>
                                          <option>02</option>
                                          <option>03</option>
                                        </select>
                                      </div>
                                    </div>


                                  

                                    

                                     <div class="form-group row">
                                      <label class="col-4 col-form-label">Minimum Contact Period</label> 
                                      <div class="col-8">
                                        <input name="time_period" type="text" placeholder="1week/1month/..etc." value="<?php echo $item['time_period'];?>" class="form-control here" required="required" type="text">
                                      </div>
                                    </div>

                                      <div class="form-group row">
                                      <label class="col-4 col-form-label">Contact</label> 
                                      <div class="col-8">
                                        <input name="contact" type="number" placeholder="Contact Number" value="<?php echo $item['contact'];?>" class="form-control here" required="required" type="text">
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