<?php
session_start();
   include 'header.php';
?>


<section class="breadCrumbHead">
   <div class="overlayBlack">
         <div class="px-0 textwrap">
            <h1>Become a Dealer</h1>
            <ul class="d-flex align-items-center justify-content-center">
              <li><a href="index.php" class="text-white">Home</a></li>
              <li class="text-white">&nbsp; / &nbsp;</li>
              <li><span class="text-white">Become a Dealer</span></li>
            </ul>
         </div>
   </div>
</section>



 <section class="becomeDealerSectionFirst">
   <div class="sectionPadding overlay">
      <div class="container">
         <div class="headerText text-center">
            <p class="mb-2">Apply Now</p>
            <h2>Sign up with our dealer program</h2>
         </div>
         <div class="mainBox d-flex position-relative" id="scroll-to">                  
            <div id="leftSide" class="orderTwo">
               <div class="leftSideInner">
                  <div>
                     <h2 class="font-weight-bold">Become an APOGEE GNSS Dealer</h2>
                     <p>Thanks for applying to APOGEE’s become a dealer program. Here, we welcome you with warm hearts in our APOGEE GNSS family and look forward to building trustable and long term relationship with you.</p>
                     <div>
                        <a href="#dealerFormSection" class="btn">Join Today</a>
                     </div>
                  </div>
               </div>                     
            </div>
            <div class="rightSide mb-4">
               <div class="">
                  <img src="assets/images/become-a-dealer.webp" id="rightImg" alt="Become a Dealer">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>










<section class="dealerFormSection" id="dealerFormSection">
   <div class="sectionPadding overlay">
      <div class="container">
         <div class="headerText text-center">
            <!-- <h2>Apply Now</h2> -->   
         </div><br>
         <div class="row">
            <div class="col-md-6">
               <?php 
                  if (isset($_SESSION['msg'])) {
                     echo $_SESSION['msg'];
                     unset($_SESSION['msg']);
                  }
               ?>
            </div>
            <form action="backend/becomeDealerForm.php" method="post" class="myForm becomeDealerForm mt-3" id="becomeDealerForm">
               <div class="col-md-12">
                  <div class="">
                     <div class="formHeader">
                        <h4>Company Information</h4>
                     </div>
                     <div class="">
                        <div class="dealerFormWrap mt-3 w-100">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Company:<sup class="text-danger">*</sup></label>
                                    <input type="text" name="company" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>State:<sup class="text-danger">*</sup></label>
                                    <input type="text" name="state" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>City:<sup class="text-danger">*</sup></label>
                                    <input type="text" name="city" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>Street:<sup class="text-danger">*</sup></label>
                                    <input type="text" name="street" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>Telephone:</label>
                                    <input type="text" name="telephone" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>Mobile Phone:<sup class="text-danger">*</sup></label>
                                    <input type="text" name="mobile" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group text-field">
                                    <label>Web:</label>
                                    <input type="url" name="web" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-4" >
                     <div class="formHeader">
                        <h4>Contact Person</h4>
                     </div>
                     <div class="">
                        <div class="dealerFormWrap mt-3 w-100">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                   <label>First Name:<sup class="text-danger">*</sup></label>
                                   <input type="text" class="form-control" name="fname">
                                 </div>                                 
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control" name="lname" >
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Email:<sup class="text-danger">*</sup></label>
                                    <input type="email" class="form-control" name="email" >
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="formHeader">
                        <h4>Your Message:</h4>
                     </div>
                     <div class="">
                        <div class="dealerFormWrap mt-3 w-100">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Addition Information</label>
                                    <textarea class="form-control" name="message"></textarea>
                                 </div>
                              </div>                         
                              <div class="col-md-12 mt-2 ml-1">
                                 <div id="html_element"></div>
      <br>
      <input type="submit" value="Submit" class="btn contactBtn text-center">
                                 <!-- <div id="html_element"></div>
                                 <br>
                                 <button type="submit" class="btn contactBtn text-center" name="submitBtn">Submit &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>         
</section>








<br>

<?php
   include 'footer.php';
?>


<script>



var width = $(window).width();
if (width >= 620) {
   $(window).scroll(function() {
      var hT = $('#scroll-to').offset().top,
          hH = $('#scroll-to').outerHeight(),
          wH = $(window).height(),
          wS = $(this).scrollTop();
       if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
          document.getElementById("leftSide").style.cssText = "transition:all 3s ease;left:0";
         document.getElementById("rightImg").style.cssText = "transition:all 3s ease;width:100%";
      }else{
         document.getElementById("leftSide").style.cssText = "transition:all 3s ease;left:5%";
         document.getElementById("rightImg").style.cssText = "transition:all 3s ease;width:80%";
      }
   });
}










</script>

