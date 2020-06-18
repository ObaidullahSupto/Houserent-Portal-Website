<footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Site <span>Map</span></h3>
              <ul class="footer-link">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h3 class="footer-titel">Social <span>Media</span></h3>
                <div class="social-icon">
                    <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                    <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                    <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                    <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Subscribe <span>on Our News</span></h3>
              <form method="post"id="subscribe-form"name="subscribe-form"class="validate">
                <div class="form-group is-empty">
                  <input type="email"value=""name="Email"class="form-control"id="EMAIL"placeholder="Email address"required="" />
                  <button type="submit"name="subscribe"id="subscribes"class="btn btn-common sub-btn"style="color: #a83d00">
                    Submit
                  </button>
                  <div class="clearfix"></div>
                </div>
              </form>              
            </div>
            
          </div>
        </div>
      </div>
    </footer>

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
    <!-- SLider -->
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
    <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
    <script >new Vue({
      el: '#carousel3d',
      data: {
        slides: 7
      },
      components: {
        'carousel-3d': Carousel3d.Carousel3d,
        'slide': Carousel3d.Slide
      }
    })
    //# sourceURL=pen.js
    </script>
<!-- Slider End -->
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
