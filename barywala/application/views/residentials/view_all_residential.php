<div class="main-container section-padding"  style="background-image: url(<?php echo base_url();?>assets/img/b.jpg)">
  <div class="search-container">
    <div class="container">
       <section class="search-sec">
           <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <div class="row">                            
                  <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                      <?php echo form_open('residentials/get_post_by_city')?>
                        <select class="form-control search-slt" name="city" onchange="this.form.submit()">
                          <option value="">Select City</option>
                          <?php foreach($city as $item):?>
                            <option value="<?php echo $item['city'];?>"><?php echo $item['city'];?></option>
                          <?php endforeach;?>                                     
                        </select>
                      <?php echo form_close();?>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                      <?php echo form_open('residentials/get_post_by_area')?>
                        <select class="form-control search-slt" name="area" onchange="this.form.submit()">
                          <option value="">Select Area</option>
                          <?php foreach($areas as $item):?>
                            <option value="<?php echo $item['area'];?>"><?php echo $item['area'];?></option>
                          <?php endforeach;?>                                     
                        </select>
                      <?php echo form_close();?>
                  </div> 

                   <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                     <?php echo form_open('residentials/get_post')?>  
                      <input  type="text" name="search"  placeholder="Type to search here" class="form-control search-slt">
                  </div>
                        
                  <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                      <button type="submit" class="btn btn-danger wrn-btn"><i class="lni-search"></i>FIND</button>
                       <?php echo form_close();?>
                  </div>
                 
                  
                   <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                     <?php echo form_open('residentials/get_post_by_rooms')?>
                      <select name="rooms" class="form-control search-slt" onchange="this.form.submit()">
                          <option value="">Select No of Rooms</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6+">6+</option>
                        </select>
                        <?php echo form_close();?>
                    </div>

                     <div class="dropdown col-lg-4 col-md-4 col-sm-12 p-2">
                      <button class="form-control search-slt dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                      Area Range(Sq.Ft)</button>                    

                    <div class="dropdown-menu">
                     <?php echo form_open('residentials/get_post_by_size')?>
                       <div class="row" style="margin-right: -6px; margin-left: -6px;">
                          <div class="col-md-6">
                              <select name="minimum_size" class="form-control search-slt" required="required">
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
                           <div class="col-md-6">
                            <select name="maximum_size" class="form-control search-slt"  required="required" onchange="this.form.submit()">
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
                       <?php echo form_close();?>                      
                      </div>
                    </div>

                     <div class="dropdown col-lg-4 col-md-4 col-sm-12 p-2">
                    <button class="form-control search-slt dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Price Range(BDT)</button>                    

                      <div class="dropdown-menu">
                        <?php echo form_open('residentials/get_post_by_rent')?>
                       <div class="row" style="margin-right: -6px; margin-left: -6px;">
                            <div class="col-md-6">
                              <select name="minimum_rent" class="form-control search-slt" required="required">
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
                             <div class="col-md-6">
                              <select name="maximum_rent" class="form-control search-slt"  required="required" onchange="this.form.submit()">
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
                       <?php echo form_close();?>                      
                      </div>
                    </div>           
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

 <div class="container-fluid" style="background:#f3f3f3;">
      <div class="container">
        <div class="row" >
          <div class="col-md-2">
              <a href="<?php echo base_url();?>residentials/get_post_by_dhanmondi" class="fullwidth btn1"><b>Dhanmondi</b></a>
          </div>
          <div class="col-md-2">
            <a href="<?php echo base_url();?>residentials/get_post_by_banani" class="fullwidth btn1"><b>Banani</b></a>
          </div>
          <div class="col-md-2">
            <a href="<?php echo base_url();?>residentials/get_post_by_baridhara" class="fullwidth btn1"><b>Baridhara DOHS</b></a>
          </div>
          <div class="col-md-2">
            <a href="<?php echo base_url();?>residentials/get_post_by_basundhara" class="fullwidth btn1"><b>Basundhara</b></a>
          </div>
          <div class="col-md-2">
            <a href="<?php echo base_url();?>residentials/get_post_by_gulshan1" class="fullwidth btn1"><b>Gulshan 1</b></a> 
          </div>
          <div class="col-md-2">
            <a href="<?php echo base_url();?>residentials/get_post_by_gulshan2" class="fullwidth btn1"><b>Gulshan 2</b></a>
          </div>        
        </div>    
      </div>
    </div>



<div class="container property">
  <div class="row" style="margin: 10px; padding: 20px;">
    <div class="col-12">
        <div class="section-title-header text-center">
        <h2 class="section-title" style="color: #ed5437;">Latest Listings</h2>
        </div>
      </div>

       <?php foreach($residential as $item):?>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="property-main">
            <div class="property-wrap">
              <div class="property-item">
                <div class="item-thumb">
                  <a class="hover-effect" href="<?php echo site_url('/residentials/'.$item['slug']);?>">
                  <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/residential/<?= $item['image'];?>" alt="">
                  </a>
                  
                </div>
                <div class="item-body">
                  <h3 class="property-title"><a href="<?php echo site_url('/residentials/'.$item['slug']);?>"><?= $item['title'];?></a></h3>
                  <div class="adderess"><i class="lni-map-marker"></i><?= $item['address']; ?></div>
                  <div class="pricin-list">
                    <div class="property-price">
                      <span>BDT <?= $item['rent']; ?>/=</span>
                    </div>
                    <p><span><?= $item['rooms']; ?></span> . <span><?= $item['washrooms'];?>Ba</span> . <span><?= $item['size'];?>SqFt</span></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php endforeach ?>

     <div class="col-12">
        <div class="text-center">
     <!--   <div class='pagination-links'>-->
     <!--     <?php echo $this->pagination->create_links(); ?>    -->
     <!--   </div>               -->
          <a href="<?php echo base_url();?>residentials/all_residential_list" class="btn btn-common">Browse All</a>
        </div>
      </div>
  </div>
</div>


