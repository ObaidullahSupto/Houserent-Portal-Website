<div class="main-container section-padding"  style="background-image: url(<?php echo base_url();?>assets/img/body1.jpg)">
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
          <div class="listing-container list-layout">

            <?php foreach($commercial as $item):?>
              <div class="property-main">
                <div class="property-wrap">
                  <div class="property-item">
                    <div class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/posts/commercial/<?= $item['image'];?>"  alt=""/>
                        <!-- <div class="content" style="position: absolute;  bottom: 0;  background: rgb(0, 0, 0);  background: rgba(0, 0, 0, 0);">
                          <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/feature/logo.png" alt="">                        
                        </div> -->
                      </a>
                    </div>
                    <div class="item-body">
                      <h3 class="property-title">
                         <a href="<?php echo site_url('/posts/'.$item['slug']);?>"> <?= $item['title'];?></a>
                      </h3>
                      <div class="adderess">
                        <i class="lni-map-marker"></i><?= $item['address']; ?>
                      </div>
                      <div class="pricin-list">
                        <div class="property-price"><span>BDT <?= $item['rent']; ?>/=</span></div>
                        <p>
                          <span><?= $item['rooms']; ?>Rooms</span>, <span><?= $item['washrooms'];?>Bath</span>, <span><?= $item['size'];?>SqFt</span>
                        </p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div> 
          <?php endforeach ?>

          
         <div class="container">             
            <div class='pagination-links'>
              <?php echo $this->pagination->create_links(); ?>    
            </div>
         </div>


        </div>          
      </div>
    </div>
  </div>
</div>

