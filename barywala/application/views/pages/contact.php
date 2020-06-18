<section id="contact-section" class="section-padding" style="background-image: url(assets/img/body1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="contact-right-area">
              <h3 class="title-">Get In Touch</h3><br>
              <p>If you are interested in working with us, <br />
                please get in touch.
              </p>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon"><i class="lni-map-marker"></i></div>
                  <p>Dhanmondi, Dhaka, BD</p>
                </div>
                <div class="single-contact">
                  <a href="mailto:>info@barywala.com">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i></div>
                  <p>info@barywala.com</p></a>
                </div>
                <div class="single-contact">
                <a href="tel:>02-59846">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p>02-59846</p></a>
                </div>
              </div>
              <div class="social-icon">
                <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 form-line">
            <h3 style="text-align: center;">FeedBack</h3><br>
            <form method="post" action="<?php echo base_url();?>email/send" enctype="multipart/form-data">
              <div class="span2">
                <label for="name">Your Name <span>*</span> </label>
              </div>
              <div class="span6">
                <input type="text" name="name" id="name" class="form-control required input-xlarge" placeholder="Enter your name" required>
              </div>

              <div class="span2">
                <label for="email">Your Email <span>*</span></label>
              </div>
              <div class="span6">
                <input type="email" name="email" id="email" class="form-control email required input-xlarge" placeholder="example@mail.com" required>
              </div>

              <div class="span2">
                <label for="reason">Subject </label>
              </div>
              <div class="span6">
                <input type="text" name="subject" id="reason" class="form-control input-xlarge" placeholder="Subject" required>
              </div>

              <div class="span2">
                <label for="message">Your Message <span>*</span> </label>
              </div>
              <div class="span6">
                <textarea name="message" id="message" class="form-control required span6" rows="6" placeholder="Write your message here" required></textarea>
              </div>
              <div class="span2">
                <label></label>
              </div>
              <div class="span6 offset2 bm30">
                <input type="submit" name="submit" value="Send Message" class="btn btn-inverse"> 
              </div>
            </form>
          </div>
        </div>
      </div><br><br>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1661105291246!2d90.37829061490207!3d23.741455195034973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b6668968b9%3A0x67cfe9e31d427063!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_IOCmruCmruCmpOCmvuCmnCDgpqrgp43gprLgpr7gppzgpr4!5e0!3m2!1sbn!2sbd!4v1521531051239" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
        </div>
      </div>
    </section>

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
                  <button type="submit"name="subscribe" class="btn btn-common sub-btn">
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
