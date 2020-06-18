 <div class="main-container section-padding"  style="background-image: url(<?php echo base_url();?>assets/img/body1.jpg)">
    <h5 class="sidebar-title" style="text-align:center; font-size:20px;"><strong><?=$title;?> </strong></h5>
   <div class="container" style="background: #ffffffe6; padding-top:30px; padding-right: 30px; padding-left: 30px ;">
      <div class="row">
         <div class="col-lg-4 col-md-12 col-xs-12">
          <div class="sidebar sticky right">
            <div class="widget">
              <h3 class="sidebar-title" style="text-align:center;">Find New Home</h3> 
              <?php echo form_open('residentials/get_all_filtered')?>

              <!--  <?php echo form_open('posts/get_post_by_city')?> onchange="this.form.submit()-->
              <div class="row with-forms">
                <div class="col-md-12">
                 <select id="selectCity" name="city" class="classic" >
                  <option value="">Select City</option>
                    <?php foreach($city as $item):?>
                      <option value="<?php echo $item['city'];?>"><?php echo $item['city'];?></option>
                    <?php endforeach;?>                                     
                  </select>
                </div>
              </div>
              <!--  <?php echo form_close();?>  -->

              <!--  <?php echo form_open('posts/get_post_by_area')?> -->
              <div class="row with-forms">
                <div class="col-md-12">
                  <select name="area" class="classic">
                      <option value="">Select Location</option>
                       <?php foreach($areas as $item):?>
                          <option value="<?php echo $item['area'];?>"><?php echo $item['area'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
              </div>
              <!--  <?php echo form_close();?> -->

              <!--  <?php echo form_open('posts/get_post_by_rooms')?> -->
              <div class="row with-forms">
                <div class="col-md-12">
                  <select name="rooms" class="classic">
                      <option value="">Select Rooms</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6+">6+</option>
                  </select>
                </div>
              </div>
              <!--  <?php echo form_close();?> -->

              <!--  <?php echo form_open('posts/get_post_by_size')?> -->
             <div class="row with-forms">
                <div class="col-md-12">
                  Area Range (Sq.Ft)
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <select name="minimum_size" class="classic" >
                        <option value="">Min Area</option>
                        <option value="0">0</option>
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="3000">3000</option>
                        <option value="4000">4000</option>      
                        <option value="5000">5000</option>     
                        <option value="10000">10000</option>     
                    </select>
                  </div>
                   <div class="form-group col-md-6">
                    <select name="maximum_size" class="classic"> <!-- required="required" -->
                        <option value="">Max Area</option>
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="3000">3000</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>           
                        <option value="100000">100000</option>           
                    </select>
                  </div>
                </div>
                </div>
              </div>
              <!--  <?php echo form_close();?> -->       

              <!--   <?php echo form_open('posts/get_post_by_rent')?> -->
              <div class="row with-forms">
                <div class="col-md-12">
                  Price Range (BDT)
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <select name="minimum_rent" class="classic">
                        <option value="">Min Rent</option>
                        <option value="0">0</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>      
                        <option value="30000">30000</option>      
                        <option value="40000">40000</option>      
                        <option value="50000">50000</option>      
                        <option value="80000">80000</option>      
                        <option value="100000">100000</option>      
                    </select>
                  </div>
                   <div class="form-group col-md-6">
                    <select name="maximum_rent" class="classic">
                        <option value="">Max Rent</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                        <option value="30000">30000</option>
                        <option value="40000">40000</option>      
                        <option value="50000">50000</option>      
                        <option value="800000">800000</option>      
                        <option value="100000">100000</option>      
                        <option value="500000">500000</option>      
                    </select>
                  </div>
                </div>
                </div>
              </div>
              <!--   <?php echo form_close();?>  -->

              <!--  <?php echo form_open('posts/get_post')?>  -->
               <div class="row with-forms">
                <div class="col-md-12">
                  <input style="border-radius: 25px; background-color:#fff;" class="form-control" type="text" name="search"  placeholder="Type to search here"/>
                </div>
                </div><br>
               <button type="submit" class="fullwidth btn btn-common">Search</button>
              <!-- <?php echo form_close();?> <br> -->
              <?php echo form_close();?> 
            </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-md-12 col-xs-12">
               <div class="row with-forms">
                <div class="col-md-6 col-xs-6" style="padding: 10px;"> 
                   <?php echo form_open('residentials/get_post_by_high_rent')?>
                      <button class="fullwidth btn btn-common" type="submit">Highest Price First</button>
                    <?php echo form_close();?> 

                </div>
                <div class="col-md-6 col-xs-6" style="padding: 10px;"> 
                    <?php echo form_open('residentials/get_post_by_low_rent')?>
                      <button class="fullwidth btn btn-common" type="submit">Lowest Price First</button>
                    <?php echo form_close();?>    
                </div>
              </div>

            <div class="listing-container list-layout">
               <?php foreach($residential as $item):?>
              <div class="property-main">
                <div class="property-wrap">
                  <div class="property-item">
                    <div class="item-thumb">
                      <a class="hover-effect" href="<?php echo site_url('/residentials/'.$item['slug']);?>">
                        <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/residential/<?= $item['image'];?>"  alt=""/>
                      <!--  <div class="content" style="position: absolute;  bottom: 0;  background: rgb(0, 0, 0);  background: rgba(0, 0, 0, 0);">-->
                      <!--  <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/feature/logo.png" alt="">                        -->
                      <!--</div>-->
                      </a>
                    </div>
                    <div class="item-body">
                      <h3 class="property-title">
                        <a href="<?php echo site_url('/residentials/'.$item['slug']);?>"><?= $item['title'];?></a>
                      </h3>
                      <div class="adderess">
                        <i class="lni-map-marker"></i><?= $item['address']; ?>
                      </div>
                      <div class="pricin-list">
                        <div class="property-price"><span>BDT <?= $item['rent']; ?>/=</span></div>
                        <p>
                          <span><?= $item['rooms'];?> Bed</span> . <span><?= $item['washrooms'];?> Bath</span> .
                          <span><?= $item['size'];?>  Sqft</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <?php endforeach ?>              
            </div>

          <div class="col-12">
            <div class="text-center">
            <div class='pagination-links'>
              <?php echo $this->pagination->create_links(); ?>    
            </div>            
            </div>
          </div>
          <center>
             <?php
             if(count($residential) == 0) {
              echo '<h2 style="color: #ed5437;">No Records Found</h2>';
             }             
            ?>
          </center>

        </div>          
      </div><br>
  </div>
</div>
