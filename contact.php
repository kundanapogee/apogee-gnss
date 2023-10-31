<?php
   session_start();
   include 'header.php';
?>


<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1>Contact Us</h1>
         <ul class="d-flex align-items-center justify-content-center">
            <li><a href="index.php" class="text-white">Home</a></li>
            <li class="text-white">&nbsp; / &nbsp;</li>
            <li><span class="text-white">Contact</span></li>
         </ul>
      </div>
   </div>
</section>



<div class="container breadBotSec" style="">
   <div class="row">
      <div class="col-md-6">
         <div class="flipWrap otherColor" >
            <a href="#">
               <div class="flip-box">
                  <div class="flip-box-inner">
                     <div class="flip-box-front py-0">
                        <div>
                           <img src="assets/images/icon/find-my-friend.webp" width="40" alt="Find a Dealer">
                        </div>
                        <div class="mt-2">
                           <h2>How to Buy</h2>
                        </div>
                        <p class="">Discover your nearest distributor in just few steps.</p>
                     </div>
                     <div class="flip-box-back">
                        <h2 class="mb-1">How to Buy</h2>
                        <p class=" mb-0"  style="">Discover your nearest distributor in just few steps. </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-md-6">
         <div class="flipWrap">
            <a href="become-a-dealer.php">
               <div class="flip-box">
                  <div class="flip-box-inner">
                     <div class="flip-box-front py-0">
                        <div>
                           <img src="assets/images/icon/become-partner.webp" width="45" alt="Become a Dealer">
                        </div>
                        <div class="mt-2">
                           <h2>Become a Dealer</h2>
                        </div>
                        <p class="">Get partnered with one of the leading technology expertise in the world. </p>
                     </div>
                     <div class="flip-box-back">
                        <h2 class="mb-1">Become a Dealer</h2>
                        <p class=" mb-0"  style="">Get partnered with one of the leading technology expertise in the world.  </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="shapesFlow d-none d-lg-block d-xl-block">
   <div class="shapes float">
      <div class="sqare  spin"></div>
      <div class="circle"></div>
      <svg class="rectangle spin" width="50" height="" xmlns="http://www.w3.org/2000/svg">
         <g>
            <title>Layer 1</title>
            <path stroke="#000" id="svg_8" d="m282.82504,163.9l0,-60.00001l51,60.00001l-51,0z" />
            <polygon fill="none" stroke-width="2px" stroke="#fdc0b6" stroke-linejoin="round" stroke-miterlimit="10" points="14.921,2.27 28.667,25.5 1.175,25.5 "></polygon>
         </g>
      </svg>
      <svg class="triangle spin" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve" style="transform: matrix3d(0.17364, 0.98481, 0, 0, -0.98481, 0.17364, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
         <polygon fill="none" stroke-width="2px" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" points="14.921,2.27 28.667,25.5 1.175,25.5 "></polygon>
      </svg>
   </div>
</div>
<section class="contactPage sectionPadding">
   <div class="container" >
      <!-- <div class="headerText text-center">
         <p class="mb-2">Contact Us</p>
         <h2 sty>Get in Touch</h2>
      </div> -->
      <div class="row">
         <div class="col-md-4 pull-left">
            <div class="imgLeft">
               <img src="assets/images/receiver.webp" class="img-thumbnail1" alt="Navik 100 Apogee GNSS Receiver">
            </div>
         </div>
         <div class="col-md-7 pull-left">
            <div class="rightSide">
               <div class="rightSideInner">
                  <div class="borderBox">
                     <div class="text-center">
                        <!-- <p class="text-uppercase mb-2" style="font-weight:600;">Contact us Today</p> -->
                        <h3 class="font-weight-bold">Get in Touch</h3>
                        <!-- <p class="specialFont" style="font-size: 20px;">There are many variations of passages of Lorem Ipsum available, but the majority have,</p> -->
                     </div>
                     <div class="formWrap mt-3">
                        <?php 
                           if (isset($_SESSION['msg'])) {
                              echo $_SESSION['msg'];
                              unset($_SESSION['msg']);
                           }
                        ?>
                        <form action="backend/contactForm.php" method="post" class="myForm queryForm" id="contactForm" novalidate="novalidate">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group text-field">
                                    <input type="text" required name="name" class="w-100">
                                    <label>Your Name<sup class="text-danger">*</sup></label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group text-field">
                                    <input type="email" required name="email" class="w-100">
                                    <label>Your Email<sup class="text-danger">*</sup></label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group text-field">
                                    <input type="text" required name="mobile" class="w-100">
                                    <label>Your Mobile<sup class="text-danger">*</sup></label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group text-field">
                                    <input type="text" required name="location" class="w-100">
                                    <label>Your Location<sup class="text-danger">*</sup></label>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group text-field">
                                    <textarea class="form-control" required name="message" class="w-100"></textarea>
                                    <label>Type your message</label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div id="myRecaptcha"></div>
                                 <br>
                                 <input type="submit" class="btn contactBtn text-center" name="submitBtn" value="Submit">
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="addressSection sectionPadding pt-0">
   <div class="container">
      <div class="headerText text-center">
         <p class="mb-2">Locations</p>
         <h2 >Our Offices</h2>
      </div>
      <div class="row">
         <div class="col-md-4 mb-4 mainAddress">
            <div class="addressBox">
               <h5>Corporate Office</h5>
               <div class="mt-3">
                  <ul>
                     <li><a><strong>Noida</strong></a> </li>
                     <li><a href="tel:+91 76240 02254"><i class="fas fa-mobile-alt"></i> +91 76240 02254</a></li>
                     <li><a><i class="fas fa-map-marker-alt"></i> A-67, sector 63, Noida, Uttar Pradesh, 201307 </a></li>
                  </ul>
               </div>
               <div class="mt-3">
                  <ul>
                     <li><a><strong>Hapur</strong></a> </li>
                     <li><a href="tel:+91 7624009260"><i class="fas fa-mobile-alt"></i> +91 7624009260</a></li>
                     <li><a><i class="fas fa-map-marker-alt"></i> Garh Rd, near reliance petrol pump, opposite Patna Road, Hapur, Uttar Pradesh, 245201</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-8 mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2082.4806476940507!2d77.38072680811437!3d28.620738865043492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefba49448bdd%3A0xcd4bbbd2231d7ad5!2sApogee%20GNSS%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1656573522363!5m2!1sen!2sin" width="100%" height="265" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="addressBox">
               <ul>
                  <li class="mb-1"><a><strong>Vijaywada </strong></a> </li>
                  <li class="mb-1"><a href="tel:+91 9760091791"><i class="fas fa-mobile-alt"></i> +91 9666314170</a></li>
                  <li class="mb-1"><a><i class="fas fa-map-marker-alt"></i> The Co-Working Space, 4th Floor, Chakrapani Towers Opposite to Durga Mahal, Patamata, Main Road, Vijaywada, 520012</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="addressBox">
               <ul>
                  <li class="mb-1"><a><strong>Uttarakhand </strong></a> </li>
                  <li class="mb-1"><a href="tel:+91 9760091791"><i class="fas fa-mobile-alt"></i> +91 9760091791</a></li>
                  <li class="mb-1"><a><i class="fas fa-map-marker-alt"></i> 200, Station Road, Roorkee, Uttarakhand, 247667</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="addressBox">
               <ul>
                  <li><a><strong>Gujarat</strong></a> </li>
                  <li><a href="tel:+91 7624002261"><i class="fas fa-mobile-alt"></i> +91 7624002261</a></li>
                  <li><a><i class="fas fa-map-marker-alt"></i> First Floor, Shri Ram Complex, #1401, Kailashpati Chokdi, GIDC, Vitthal Udyognagar, Anand (Gujarat), 388121 </a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="addressBox">
               <ul>
                  <li><a ><strong>Madhya Pradesh</strong></a> </li>
                  <li><a ><i class="fas fa-map-marker-alt"></i> Shanti Market, New Bypass Road, Near Imalia, Bhopal (MP) </a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="addressBox">
               <ul>
                  <li><a><strong>Haryana </strong></a> </li>
                  <li><a><i class="fas fa-map-marker-alt"></i> Near Jat Dharamsala, Ladhot Road, Sukhpura Chowk, Rohtak, 124001</a></li>
               </ul>
            </div>
         </div>



      </div>
   </div>
</section>



<?php
include 'footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="assets/js/formValidation.js"></script>