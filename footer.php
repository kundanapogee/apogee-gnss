

<footer>
   <div class="footerTop">
      <div class="overlay sectionPadding1 pt-3 pb-4">
         <div class="bottomTopBtn" id="bottomTopBtn">
            <a href="#topWeb">
            <img src="assets/images/mouse.webp" width="45" alt="Back to Top">
            </a>
         </div>
         <div class="container">
            <div class="row d-flex">
               <div class="col-md-6 col-4">
                  <div class="footerLogo">
                     <!-- <img src="assets/images/logo_white.webp" alt="APOGEE GNSS PVT LTD (APGL)"> -->
                     <img src="assets/images/logo.webp" alt="APOGEE GNSS PVT LTD (APGL)">
                  </div>
               </div>
               <div class="col-md-6 col-8">
                  <div class="isoWrap">
                     <p class="text-white1 text-right mb-0">
                        <img src="assets/images/iso.webp" alt="ISO Certified"> <strong>ISO 9001: 2015 Certified</strong>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <hr style="background-color:#999;">
         </div>
         <div class="container mt-2 pt-2">
            <div class="row">
               <div class="col-md-2 col-12">
                  <div>
                     <div class="row">
                        <div class="col-md-12">
                           <div>
                              <ul class="firstfootList">
                                 <li><a href="contact.php">Contact</a></li>
                                 <li><a href="download.php">Downloads</a></li>
                                 <!-- <li><a href="download.php#software">Software</a></li> -->
                                 <li><a href="become-a-dealer.php">Dealers</a></li>
                              </ul>
                           </div>
                        </div>
                        <!--  <div class="col-md-6">
                           <div>
                           
                              <ul class="footList">
                           
                                 <li class="text-right1"><a href="#">GNSS</a></li>
                           
                                 <li class="text-right1"><a href="#">Receiver</a></li>
                           
                                 <li class="text-right1"><a href="#">Transmeter</a></li>
                           
                                 <li class="text-right1"><a href="#">GNSS</a></li>
                           
                              </ul>
                           
                           </div>
                           
                           </div> -->
                     </div>
                     <!-- <div>
                        <p class="text-white mb-0">To be a leading provider of Technology, Expertise and Solutions for the converging world of information, media and communication. Our offerings across products & projects span various industries and business segments, bringing to each a high level of customer focus and innovation. </p>
                        
                        </div> -->
                  </div>
               </div>
               <div class="col-md-4 col-12">                  
                  <div class="row">
                     <div class="col-md-6 col-6">
                        <div>
                           <h3 class="footHeader">About Us</h3>
                        </div>
                        <div>
                           <ul class="footList">
                              <li><a href="about.php"><i class="fas fa-angle-double-right"></i> Our Story</a></li>
                              <li><a href="career.php"><i class="fas fa-angle-double-right"></i> Career</a></li>
                              <li><a href="article.php"><i class="fas fa-angle-double-right"></i> What's New</a></li>
                              <li><a href="maintainance.php"><i class="fas fa-angle-double-right"></i> Faq’s</a></li>
                              <li class="text-right1"><a href="privacy-policy.php"><i class="fas fa-angle-double-right"></i> Privacy & Policy</a></li>
                           </ul>
                        </div>
                     </div>
                      <div class="col-md-6 col-6">
                        <div>
                           <h3 class="footHeader">Product </h3>
                        </div>
                        <div>                        
                           <ul class="footList">  
                           <?php
                              $main_menu_id = 2;
                              $is_active = 1;
                              $query = $conn->prepare("SELECT * From product_type where main_menu_id = :main_menu_id && is_active = :is_active limit 5");
                              $query->bindParam(':main_menu_id',$main_menu_id);
                              $query->bindParam(':is_active',$is_active);
                              $query->execute();
                              $product_result = $query->fetchAll();
                              $product_row = count($product_result);
                              if ($product_row>0) {
                                 foreach ($product_result as $value) {
                                    $product_type_id = $value['id'];
                                    $img_icon = $value['img_icon'];
                                    $alt = $value['alt'];
                                    $productTypeURL = $value['page_url'];
                                    $product_type_name = $value['product_type_name'];
                                    ?>
                                    <li class="text-right1"><a href="product.php?protypeurl=<?php echo $productTypeURL; ?>"> <i class="fas fa-angle-double-right"></i> <?php if(!empty($product_type_name)){ echo $product_type_name; } ?></a></li>
                                    <?php
                                 }
                              }
                           ?>                                   
                        
                              <!-- <li class="text-right1"><a href="#">Receiver</a></li>
                        
                              <li class="text-right1"><a href="#">Transmeter</a></li>
                        
                              <li class="text-right1"><a href="#">GNSS</a></li> -->
                        
                           </ul>
                        
                        </div>
                        
                        </div>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div>
                     <h3 class="footHeader">Industries </h3>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div>
                           <ul class="footList">
                              <?php
                                 $main_menu_id = 1;
                                 $is_active = 1;
                                 $query = $conn->prepare("SELECT * From industries_type where main_menu_id = :main_menu_id && is_active = :is_active limit 5");
                                 $query->bindParam(':main_menu_id',$main_menu_id);
                                 $query->bindParam(':is_active',$is_active);
                                 $query->execute();
                                 $industries_result = $query->fetchAll();
                                 $industries_row = count($industries_result);
                                 if ($industries_row>0) {
                                 foreach ($industries_result as $value) {
                                    $industries_type_id = $value['id'];
                                    $img_icon = $value['img_icon'];
                                    $alt = $value['alt'];
                                    $indTypeURL = $value['page_url'];
                                    $industries_type_name = $value['industries_type_name'];                                 
                                    ?>

                              <li><a href="industries.php?indtypeurl=<?php echo $indTypeURL; ?>"><i class="fas fa-angle-double-right"></i> <?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></a></li>

                                 <?php
                                 }
                              }
                           ?>
                           </ul>
                        </div>
                     </div>
                     <!-- <div class="col-md-6">
                        <div>
                        
                           <ul class="footList">
                        
                              <li class="text-right1"><a href="#">GNSS</a></li>
                        
                              <li class="text-right1"><a href="#">Receiver</a></li>
                        
                              <li class="text-right1"><a href="#">Transmeter</a></li>
                        
                              <li class="text-right1"><a href="#">GNSS</a></li>
                        
                           </ul>
                        
                        </div>
                        
                        </div> -->
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div>
                     <div>
                        <h3 class="footHeader">Get in Touch</h3>
                     </div>
                     <div>
                        <ul class="footList">
                           <li class="mb-1"><strong>Uttar Pradesh</strong></li>
                           <li class="mb-1"><a href="tel:+91-76240 02254"><i class="fas fa-mobile-alt"></i> +91 76240 02254</a></li>
                           <li class="mb-1"><a href="mailto:sales@apogeegnss.com" class="breakAll"><i class="far fa-envelope"></i> sales@apogeegnss.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="container">
      <hr style="background-color:#999;">
      
      </div> -->
   <div class="footerBottom" style="background-color: #000;">
      <div class="container pb-3">
         <hr class="mt-0" style="background-color:#999;">
         <div class="row">
            <div class="col-sm-6">
               <p class="mb-0 textGrey">2023 © APOGEE GNSS. All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right">
               <p class="mb-0 textGrey pull-right">Designed and Managed by <a href="index.php" target="_blank">APOGEE GNSS</a> </p>
            </div>
         </div>
      </div>
   </div>
</footer>


<?php
ob_end_flush();
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>  -->
<script src="assets/js/script.js"></script>
<script src="assets/js/owl.carousel.js"></script>




<!-- 03AD1IbLDPYSWUHLqEFfOoIXLVDTwoqG-VMDOnG15VAY57ooJycnJvieqp2ZwXJmwtI9q3zZqKrOT9MzjfAQbHEemFySi2G7H18zZrAOFx1cdhWCjlhjkVRsAPBMUeg67lSa27ihNd1WKg-sfv5M9w2GsK62WkCG-am8qGG-rSpz7sXmoEruW5xi0jTGILCjoyUxaT-BvePYrVHCdsdOl9WNgx9xBUTQuS-aNwFsW51fGF0_Xyf_zLsBltLggB_Ki42rYyViucbLjYx38jeV30AdSCn4f79OlQeolUd9CADhzXA1eA-kkNUcM97SGJc63e0B1iJFDdHJMu2uKxyfC01Kx7feMpxr_CS-LaCfuQTTcgxldXr6Aiazm1r8D2c-8z3di03lHA8cwJ-_jSjTLOPcossh4XHmK_o-_qikGUlyM4Dk1j_VtscS7tkh9kPxv06ydj1nYKBtjKBgt9VFVNbd3op_chOwVKWasSDJYA5pncdWJLfpA7fy4-j1VgSGogQmbhWOI8hQAjnAoVDIgll1OdzdGi6xrMLmP1CBxZ_IJDIIQyrt9QzSYKeD7_O46eXSr7mPWHqEqAG2OAoDAWRk85XgRACLuybgObzOSOJV5s13OnKz91fvqmmHkgHR_KU0xruAvnvOvL5fKeijKKpWAoekZkxRgWkHMOjUSbo6SiOdi9ji3yljohVTKW-FNlrBLpLqZgBDF7MS0fRZ66ViRS0MIbtax3Bu2i_a8uRZw2cvDZrbGr5de_92CeE7XzLBHY-UAQ2NTP55y-kd7Q44e8bKFlKkYQyA4CN--ablmr0AnJA4N8CUp-vFORHHHvsvtfr5bLYRVOZM0he6vsx1_1dERbDC0IN143iUUZglp8MUle-ZdbGktLYI7RvodpDTDbt29diGPEDzz54sfIfIgr0W5BZB0kUY6OKAmMCbq0VwmFMIwNk6FNSwk47ucptHJnlKa0jRv4yhCMiEXNB92cR-sGPUNcTAAhQ8oIOwc9kgcu0ydE9_V0yX3A9HTq-oa42XceW4mhyGJVPwnQScBaV4zis1LaPJIJyydceDzHiwCWfruA2ApJd1xQKfzZ8VVBk4U7JF0AFeXpxRJ68FWiJm67_OwY-8HOu9Wz7HoiQZrYcHI3J9A -->

<!--<br><br><br><br><br><br><br>-->

</body>
</html>

<script>
   // $(document).ready(function() {   
   // setTimeout(function() {   
   //    $('#ctn-preloader').addClass('loaded');
   //         $('body').removeClass('no-scroll-y');   
   //      if ($('#ctn-preloader').hasClass('loaded')) {   
   //        $('#preloader').delay(1000).queue(function() {   
   //          $(this).remove();   
   //        });
   //      }   
   //    }, 3000);   
   // });
</script>



<script>
   $('#play-video').on('click', function(e){   
   e.preventDefault();   
   $('#video-overlay').addClass('open');   
   $("#video-overlay").append('<iframe class="youtubeVideo" src="https://www.youtube.com/embed/zqUBQ8HfbGY" title="NAVIK 200  GNSS Receiver Architecture | APOGEE GNSS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');   
   }); 
   $('.video-overlay, .video-overlay-close').on('click', function(e){   
   e.preventDefault();   
   close_video();   
   }); 
   $(document).keyup(function(e){   
   if(e.keyCode === 27) { close_video(); }   
   });
   function close_video() {   
   $('.video-overlay.open').removeClass('open').find('iframe').remove();
   };
   
</script>




