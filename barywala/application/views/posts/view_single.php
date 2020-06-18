<div id="content" class="section-padding" style="background-image: url(<?php echo base_url(); ?>assets/img/body1.jpg)">
      <div class="container">

        <div class="property-details">
           <h3 style="font-size: 30px; color: #ed5437; font-weight: 700; line-height: 1;"><?php echo $item['title'];?></h3>
        </div>


        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div id="carousel3d">
              <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="2000">
                <?php
                    if($item['image']!=null){?>
                    <slide :index="0">
                      <a href="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image'];?>">     
                       <img src="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image'];?>" alt="" />
                     </a> 
                    </slide><?php
                    }

                ?>
                
                <?php
                    if($item['image1']!=null){?>
                <slide :index="1">
                  <a href="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image1'];?>">     
                   <img src="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image1'];?>" alt="" />
                 </a>
                </slide><?php
                    }

                ?>
                   <?php
                    if($item['image2']!=null){?>
                <slide :index="2">
                  <a href="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image2'];?>">     
                   <img src="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image2'];?>" alt="" />
                 </a>
                </slide>
                <?php
                    }

                ?>
                 <?php
                    if($item['image3']!=null){?>
                <slide :index="3">
                  <a href="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image3'];?>">     
                   <img src="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image3'];?>" alt="" />
                 </a>
                </slide>
                <?php
                    }

                ?>
                 <?php
                    if($item['image4']!=null){?>
                <slide :index="4">
                  <a href="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image4'];?>">     
                   <img src="<?php echo site_url();?>assets/img/posts/commercial/<?= $item['image4'];?>" alt="" />
                 </a>
                </slide>
                <?php
                    }

                ?>    
              </carousel-3d>
            </div>
            <br>
            <div class="inner-box property-dsc">
              <h2 class="desc-title">Description</h2>
              <p class="para">
                <?php echo $item['short_note'];?>
              </p>           
            </div>

            <div class="inner-box featured">
              <h2 class="desc-title">Details</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                      <p style="color: #000;">Total Size(Sq.ft) : <span><?php echo $item['size'];?></span></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <p style="color: #000;">Rooms : <span><?php echo $item['rooms'];?></span></p> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <p style="color: #000;">Washrooms : <span><?php echo $item['washrooms'];?></span></p> 
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-xs-12">
                        <p style="color: #000;">Rent : <span>BDT <?php echo $item['rent'];?></span></p> 
                    </div>
                </div>

            </div>
          </div>

          <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
            <div class="widget mt3">
              <div class="agent-inner">
                <h2 style="text-align: center;">Contact Details</h2><br>
                <div class="agent-title">                  
                  <div class="agent-details">
                   <p style="color: #a83d00"><i class="lni-home"></i> <?php echo $item['city'];?>, <?php echo $item['area'];?></p>
                   <p style="color: #a83d00"><i class="lni-map-marker"></i> <?php echo $item['address'];?></p>
                   <p style="color: #a83d00"><i class="lni-phone-handset"></i><a style="color: #a83d00;" href="tel:<?php echo $item['contact'];?>"> <?php echo $item['contact'];?></a></p>
                  </div>
                </div>
              </div> 
            </div>
      

             <!-- Delete & Update Block -->
             <?php if($this->session->userdata('logged_in')): ?>          
             <?php if($this->session->userdata('id') == $item['user_id']):?>
             <div class="widget mt3">
              <div class="agent-inner">
                <div class="row">                  
                  <div class="col-6">                    
                     <a class="btn btn-info" href="edit/<?php echo $item['slug'];?>" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a>                  
                  </div>             
                  <div class="col-6" >
                      <?php echo form_open('/posts/delete/'.$item['id']);?>
                        <button name="submit" type="submit" class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                      <?php echo form_close();?>
                  </div>
                </div>
              </div> 
            </div>
             <?php endif; ?>
            <?php endif; ?>

            

           

          </aside>
        </div>
      </div>      
    </div>


