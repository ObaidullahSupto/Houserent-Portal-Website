<div class="main-container section-padding" scroll="no" style="margin: 0; height: 100%; overflow: hidden; background-image: url(assets/img/body1.jpg)"><br>
    <div class="container">
         <div class="content" style="background: #e8e8e880; padding-top:30px; padding-right: 30px; padding-left: 30px; margin: 0 20px;">
          <div class="row justify-content-center">                  
            <div class="col-lg-6 col-md-6 col-xs-12" >
              <div class="property-main">
                <div class="property-wrap">
                  <div class="property-item">
                    <div class="item-thumb">
                      <a class="hover-effect" href="<?php echo base_url();?>residentials/view_all_residential">
                      <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/res.jpg" alt="">
                      <div class="content" style="position: absolute;  bottom: 0;  background: rgb(0, 0, 0);  background: rgba(0, 0, 0, 0);">
                        <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/feature/logo.png" alt="">                        
                      </div>
                      </a>
                     
                    </div>
                    <div class="item-body" style="text-align: center;">
                      <h3 class="property-title"><a style="font-size: 30px;  font-weight: 600;" href="<?php echo base_url();?>residentials/view_all_residential">View All Residential List</a></h3>
                      <div class="adderess"><i class="lni-map-marker"></i>All Over Bangladesh</div>
                      <div class="pricin-list">
                        <div class="property-price">
                          <span>Resonable Price</span>
                        </div>
                      </div>
                      <div class="adderess">According to your needs</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>                  
            
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="property-main">
                <div class="property-wrap">
                  <div class="property-item">
                    <div class="item-thumb">
                      <a class="hover-effect" href="<?php echo base_url();?>posts/view_all_commercial">
                      <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/com.jpg" alt="">
                      <div class="content" style="position: absolute;  bottom: 0;  background: rgb(0, 0, 0);  background: rgba(0, 0, 0, 0);">
                        <img class="img-fluid" src="<?php echo site_url(); ?>assets/img/feature/logo.png" alt="">                        
                      </div>
                      </a>
                     
                    </div>
                    <div class="item-body" style="text-align: center;">
                      <h3 class="property-title"><a style="font-size: 30px;  font-weight: 600;" href="<?php echo base_url();?>posts/view_all_commercial">View All Commercial List</a></h3>
                      <div class="adderess" ><i class="lni-map-marker"></i>All Over Bangladesh</div>
                      <div class="pricin-list">
                        <div class="property-price">
                          <span>Resonable Price</span>
                        </div>
                      </div>
                       <div class="adderess">According to your needs</div>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
        </div>                       
      </div>     
    </div><br>
</div>
 <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright © 2018 | <a rel="nofollow" href="#">BaryWala.Com</a> | All Right Reserved | Developed by <a style:"color:#fff;" target="blank" href="http://bimee.com.bd/">BiMee</a></p>
          </div>
        </div>
      </div>
    </section>
    <a href="#" class="back-to-top"> <i class="lni-chevron-up"></i> </a>

    <div id="preloader"><div class="loader" id="loader-1"></div></div>


    <script src="<?php echo base_url();?>/assets/js/jquery-min.js"></script> 
    <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/jquery.mixitup.js"></script>

    <script src="<?php echo base_url();?>/assets/js/jquery.counterup.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/ion.rangeSlider.js"></script>

    <script src="<?php echo base_url();?>/assets/js/jquery.parallax.js"></script>

    <script src="<?php echo base_url();?>/assets/js/waypoints.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/wow.js"></script>

    <script src="<?php echo base_url();?>/assets/js/owl.carousel.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/jquery.slicknav.js"></script>

    <script src="<?php echo base_url();?>/assets/js/main.js"></script>

    <script src="<?php echo base_url();?>/assets/js/form-validator.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/contact-form-script.min.js"></script>
    <script>
      $(function(){
        $('#file').on('change', function(){
            var total = [].slice.call(this.files).map(function(x) {
                return x.size || x.fileSize;
            }).reduce(function(a, b) { return a + b; }, 0);

            if ( total > 1572864 ) {
             
                alert('Warning !!! Total size exceeds 1.5 mb.');
            }

            });
        
    
        $("#file").on("change", function() {
         if($("#file")[0].files.length > 5) {
                   alert("Warning !!! You can't select more than 5 images");
         } else {
               $("#imageUploadForm").submit();
         }
         }); 

         });      
    </script>
  </body>
</html>
