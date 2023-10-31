<?php
if ((isset($_GET['product_url'])) && (!empty($_GET['product_url']))) {
  include 'header.php';
  $page_url = $_GET['product_url'];
  $is_active = 1;
  $query = $conn->prepare("SELECT * From product_sub_type where page_url = :page_url && is_active = :is_active");
  $query->bindParam(':page_url',$page_url);
  $query->bindParam(':is_active',$is_active);
  $query->execute();
  $result = $query->fetchAll();
  // print_r($result);
  $row = count($result);

    if ($row>0) {
        foreach ($result as $value) {
         $product_sub_type_id = $value['id'];
         $product_sub_type_name = $value['product_sub_type_name'];
      }
    }else{
   header("Location:page-not-found.html");
  }
}else{
    header("Location:page-not-found.html");
}


 $query = $conn->prepare("SELECT * From product_page_content_new where product_sub_type_id = :product_sub_type_id && product_sub_type_id = :product_sub_type_id && is_active = :is_active order by sequence_no asc");
 $query->bindParam(':product_sub_type_id',$product_sub_type_id);
 $query->bindParam(':is_active',$is_active);
 $query->execute();
 $product_page_content_result = $query->fetchAll();
 $product_page_content_row = count($product_page_content_result);

?>


<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white"><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></span></li>
         </ul>
      </div>
   </div>
</section>



<?php

// print_r( $product_page_content_result);

   if (isset($product_page_content_row)) {
      if ($product_page_content_row>0) {
         $sr_no = 1;
         foreach ($product_page_content_result as $value) {

           $content_format_id = $value['content_format_id'];
           $full_size_img = $value['full_size_img'];
           $full_size_img_alt = $value['full_size_img_alt'];
           $full_size_img_title = $value['full_size_img_title'];   
           $full_size_img_description = $value['full_size_img_description'];
           $full_size_text_title = $value['full_size_text_title'];
           $full_size_text_description = $value['full_size_text_description'];
           $half_img_half_text_img = $value['half_img_half_text_img'];
           $half_img_half_text_img_alt = $value['half_img_half_text_img_alt'];
           $half_img_half_text_title = $value['half_img_half_text_title'];
           $half_img_half_text_description = $value['half_img_half_text_description'];
           $both_side_left_img = $value['both_side_left_img'];
           $both_side_left_img_alt = $value['both_side_left_img_alt'];
           $both_side_left_img_title = $value['both_side_left_img_title'];
           $both_side_left_img_description = $value['both_side_left_img_description'];
           $both_side_right_img = $value['both_side_right_img'];
           $both_side_right_img_alt = $value['both_side_right_img_alt'];
           $both_side_right_img_title = $value['full_size_text_title'];
           $both_side_right_img_description = $value['full_size_text_title'];
           $both_side_left_text_title = $value['both_side_left_text_title'];
           $both_side_left_text_description = $value['both_side_left_text_description'];
           $full_video = $value['full_video'];
           $both_side_left_video = $value['both_side_left_video'];
           $both_side_right_video = $value['both_side_right_video'];
           $half_video_half_text_video = $value['half_video_half_text_video'];
           $half_video_half_text_title = $value['half_video_half_text_title'];
           $half_video_half_text_description = $value['half_video_half_text_description'];
           $both_side_right_text_title = $value['both_side_right_text_title'];
           $both_side_right_text_description = $value['both_side_right_text_description'];
           $half_text_half_img_img = $value['half_text_half_img_img'];
           $half_text_half_img_img_alt = $value['half_text_half_img_img_alt'];
           $half_text_half_img_title = $value['half_text_half_img_title'];
           $half_text_half_img_description = $value['half_text_half_img_description'];
           $half_text_half_video_video = $value['half_text_half_video_video'];
           $half_text_half_video_title = $value['half_text_half_video_title'];
           $half_text_half_video_description = $value['half_text_half_video_description'];

           $product_type_id = $value['product_type_id'];
           $product_sub_type_id = $value['product_sub_type_id'];
           $is_active = $value['is_active'];
           $created_at = $value['created_at'];
           $updated_at = $value['updated_at'];


// ******************************************************************************************************************************************************************************* FULL SIZE IMAGE CODE START*******************************************************************************************************************************************************************************************
           
                  if ($content_format_id==1){
                     ?>               
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="text-center">
                                    <img alt="<?php if(!empty($full_size_img_alt)){ echo $full_size_img_alt; } ?>" src="assets/images/product/<?php if(!empty($full_size_img)){ echo $full_size_img; } ?>" alt="Navik 100 Receiver">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>               
                     <?php
                  }elseif($content_format_id==2){

//********************************************************************************************************************************************************************************** FULL SIZE TEXT CODE START*******************************************************************************************************************************************************************************************               
                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="text-left">
                                    <p class="productPara"><?php if(!empty($full_size_text_description)){ echo $full_size_text_description; } ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==3){

//**********************************************************************************************************************************************************************************HALF IMAGE HALF TEXT CODE START**************************************************************************************************************************************************************************************    
                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text-left">
                                    <img alt="<?php if(!empty($half_img_half_text_img_alt)){ echo $half_img_half_text_img_alt; } ?>" src="assets/images/product/<?php if(!empty($half_img_half_text_img)){ echo $half_img_half_text_img; } ?>">
                                 </div>
                              </div>
                              <div class="col-md-6 position-relative">
                                 <div class="contentWrap">
                                    <div>
                                       <h2><?php if(!empty($half_img_half_text_title)){ echo $half_img_half_text_title; } ?></h2>
                                    </div>  
                                    <div class="textWrap">
                                       <p><?php if(!empty($half_img_half_text_description)){ echo $half_img_half_text_description; } ?></p>
                                    </div> 
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==4){

      //**********************************************************************************************************************************************************************************HALF IMAGE HALF TEXT CODE START**************************************************************************************************************************************************************************************
                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text-left">
                                    <img alt="<?php if(!empty($both_side_left_img_alt)){ echo $both_side_left_img_alt; } ?>" src="assets/images/product/<?php if(!empty($both_side_left_img)){ echo $both_side_left_img; } ?>">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left">
                                    <img alt="<?php if(!empty($both_side_right_img_alt)){ echo $both_side_right_img_alt; } ?>" src="assets/images/product/<?php if(!empty($both_side_right_img)){ echo $both_side_right_img; } ?>" >
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==5){

//**********************************************************************************************************************************************************************************HALF IMAGE HALF TEXT CODE START**************************************************************************************************************************************************************************************
                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text-left">
                                   <p class="productPara"><?php if(!empty($both_side_left_text_description)){ echo $both_side_left_text_description; } ?></p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left">
                                    <p class="productPara"><?php if(!empty($both_side_right_text_description)){ echo $both_side_right_text_description; } ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==6){

//***************************************************************************************************************************************************************************************FULL VIDEO CODE START*******************************************************************************************************************************************************************************************


                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="text-left">                                    
                                    <iframe width="100%" height="450" src="<?php if(!empty($full_video)){ echo $full_video; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==7){

//************************************************************************************************************************************************************************************************ BOTH SIDE VIDEO CODE START *****************************************************************************************************************************************************************************************************

                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text-left">                                    
                                    <iframe width="100%" height="450" src="<?php if(!empty($both_side_left_video)){ echo $both_side_left_video; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left">                                    
                                    <iframe width="100%" height="450" src="<?php if(!empty($both_side_right_video)){ echo $both_side_right_video; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==8){

//************************************************************************************************************************************************************************************************ HALF VIDEO HALF TEXT CODE START ************************************************************************************************************************************************************************************************

                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="text-left">                                    
                                    <iframe width="100%" height="450" src="<?php if(!empty($half_video_half_text_video)){ echo $half_video_half_text_video; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left contentWrap"> 
                                    <?php 
                                       if (!empty($half_video_half_text_title)) {
                                          ?>
                                             <h2><?php echo $half_video_half_text_title; ?></h2>
                                          <?php
                                       }
                                    ?>  
                                    <div class="textWrap">
                                       <p class="productPara"><?php if(!empty($half_video_half_text_description)){ echo $half_video_half_text_description; } ?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==9){

//***************************************************************************************************************************************************************************************************** HALF TEXT HALF IMAGE CODE START *******************************************************************************************************************************************************************************************    
                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">                              
                              <div class="col-md-6 position-relative">
                                 <div class="contentWrap">
                                    <div>
                                       <h2><?php if(!empty($half_text_half_img_title)){ echo $half_text_half_img_title; } ?></h2>
                                    </div>  
                                    <div class="textWrap">
                                       <p><?php if(!empty($half_text_half_img_description)){ echo $half_text_half_img_description; } ?></p>
                                    </div> 
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left">
                                    <img alt="<?php if(!empty($half_text_half_img_img_alt)){ echo $half_text_half_img_img_alt; } ?>"  src="assets/images/product/<?php if(!empty($half_text_half_img_img)){ echo $half_text_half_img_img; } ?>" >
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }elseif($content_format_id==10){

//************************************************************************************************************************************************************************************************ HALF TEXT HALF VIDEO CODE START ************************************************************************************************************************************************************************************************

                     ?>
                     <section class="sectionPadding sectionHead <?php if ($sr_no % 2 == 0){ echo 'sectionBgColor'; }?>">
                        <div class="container">
                           <div class="row">                              
                              <div class="col-md-6">
                                 <div class="text-left contentWrap"> 
                                    <?php 
                                       if (!empty($half_text_half_video_title)) {
                                          ?>
                                             <h2><?php echo $half_text_half_video_title; ?></h2>
                                          <?php
                                       }
                                    ?>  
                                    <div class="textWrap">
                                       <p class="productPara"><?php if(!empty($half_text_half_video_description)){ echo $half_text_half_video_description; } ?></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="text-left">                                    
                                    <iframe width="100%" height="450" src="<?php if(!empty($half_text_half_video_video)){ echo $half_text_half_video_video; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <?php
                  }
            $sr_no = $sr_no+1;
         }
      }
   }
?>


<?php 
   $query = $conn->prepare("SELECT * from product_parameter where product_sub_type_id = :product_sub_type_id");
   $query->bindParam(':product_sub_type_id',$page_url);
   $query->execute();
   $parameter_result = $query->fetchAll();
   $parameter_row = count($parameter_result);
   if ($parameter_row>0) {
?>
   <section class="sectionPadding parameterSection sectionHead sectionBgColor">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <h2>Product Parameters</h2>
            </div> 
         </div> 
         <div class="row mt-3">         
            <div class="col-md-6">        
               <div class="mt-3">
                  <table class="table">
                   <tbody>
                     <?php                   
                        foreach($parameter_result as $value){
                           $key_point = $value['key_point'];
                           $key_value = $value['key_value'];
                           ?>
                           <tr>
                             <td><?php echo $key_point; ?></td>
                             <td><?php echo $key_value; ?></td>
                           </tr>
                           <?php
                        }
                     ?>           
                   </tbody>
                 </table>
               </div>
            </div>         
         </div>
      </div>
   </section>
<?php
   }
?>




<?php
   if (isset($result[0]['download_center_id'])) {
      if (!empty($result[0]['download_center_id'])){
         $download_center_id = $result[0]['download_center_id'];
         $query = $conn->prepare("SELECT * from download_center where id = :download_center_id");
         $query->bindParam(':download_center_id',$download_center_id);
         $query->execute();
         $download_center_result = $query->fetchAll();
         $download_center_row = count($download_center_result);
         if ($download_center_row>0) {
            $name = $download_center_result[0]['name'];
            $file_name = $download_center_result[0]['file_name'];
         ?>
            <section class="specificationSection sectionPadding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div>
                           <h2 class="text-white">Specifications</h2>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="text-md-right mt-2 downloadBrochure">
                           <a href="assets/document/<?php echo $file_name; ?>" target="_blank">Download Brochure &nbsp<i class="fas fa-cloud-download-alt text-white"></i></a>               
                        </div>
                     </div>
                  </div>
               </div>
            </section>  
         <?php
         }
      }
   }
?>
                   

<!-- <section class="sectionPadding pb-0 sectionHead">
   <div class="fullProductDet m-0">
      <div class="container productBox">
         <div class="row bgOverLay1">
            <div class="col-md-6 orderTwo">
               <div class="productBoxInner mt-0 pl-0 contentWrap">
                  <h3>Navik 100</h3>
                  <h2>An Advanced and Reliable Surveying Solution</h2>
                  <div class="textWrap">
                     <p class="mb-1">The Navik 100 receiver has a compact design, rugged form, and is easy to use with its small volume (850 gm). It is powered by a high capacity (6800 mAh) Li-ion single battery to ensure continuous operation. Build-in 4G modem makes sure Navik-100 flawlessly works with every type of cors.</p>
                     <div class="mt-3 pt-2">
                        <a href="#" class="buyBtn fontFourteen">Buy &nbsp <i class="fas fa-cart-plus"></i></a>
                     </div>
                  </div>                 
               </div>
            </div>
             <div class="col-md-6">
               <div class="text-center text-md-right ">
                  <img src="assets/images/product/navik100/navik-100-gnss-receiver.png" alt="Navik 100 Receiver">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sectionPadding sectionHead sectionBgColor">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="text-left">
               <img src="assets/images/product/navik100/navik-100-gnss-receiver.png" alt="Navik 100 Receiver">
            </div>
         </div>
         <div class="col-md-6 position-relative">
            <div class="contentWrap">
               <div>
                  <h2>Greater efficiency with enhanced UHF </h2>
               </div>  
               <div class="textWrap">
                  <p>Up to 4 km range with 1W power consumption, Tx/Rx with a full frequency range from 866 MHz.</p>
               </div> 
            </div>
         </div>
         
      </div>
   </div>
</section>
<section class="sectionPadding sectionHead">
   <div class="container">
      <div class="row">         
         <div class="col-md-6 position-relative orderTwo">
            <div class="contentWrap">
               <div>
                  <h2>High level accuracy </h2>
               </div>  
               <div class="textWrap">
                  <p>Navik 100 receiver brings both centimeter and millimeter level accuracy no matter where you are.</p>
               </div> 
            </div>
         </div>
         <div class="col-md-6">
            <div class="text-left">
               <img src="assets/images/product/navik100/navik-100-3-gnss-receiver.png" alt="Navik 100 Receiver">
            </div>
         </div>         
      </div>
   </div>
</section>
<section class="sectionPadding sectionHead sectionBgColor">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="text-left">
               <img src="assets/images/product/navik100/navik-100-2-gnss-receiver.png" alt="Navik 100 Receiver">
            </div>
         </div>
         <div class="col-md-6 position-relative">
            <div class="contentWrap">
               <div>
                  <h2>Extensive range of Applications </h2>
               </div>  
               <div class="textWrap">
                  <p>Navik 100 Receiver can be paired with ranges of GIS handhelds and data collectors to provide easy to use solution for surveying, mapping and navigation, etc.</p>
               </div> 
            </div>
         </div>
         
      </div>
   </div>
</section>
 -->
<!-- <section class="specificationSection sectionPadding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div>
               <h2 class="text-white">Specifications</h2>
            </div>
         </div>
         <div class="col-md-6">
            <div class="text-md-right mt-2 downloadBrochure">
               <a href="assets/document/Navik-100-GNSS-Receiver.pdf" target="_blank">Download Brochure &nbsp<i class="fas fa-cloud-download-alt text-white"></i></a>               
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Signal Tracking</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                     <td colspan="2">184 channels for simultaneously tracking satellite signals</td>
                  </tr>
                  <tr>
                    <td>GPS</td>
                    <td>L1, L2</td>
                  </tr>
                  <tr>
                    <td>BeiDou</td>
                    <td>B1, B2</td>
                  </tr>                 
                  <tr>
                    <td>GLONASS</td>
                    <td>L1, L2</td>
                  </tr>
                  <tr>
                    <td>Galileo</td>
                    <td>E1, E5</td>
                  </tr>
                </tbody>
              </table>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Environmental </h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                     <td>Operating temperature</td>
                     <td>0 °C to + 50 °C</td>
                  </tr>
                  <tr>
                    <td>Storage temperature</td>
                    <td>-10 °C to + 60 °C</td>
                  </tr>
                  <tr>
                    <td>Humidity</td>
                    <td>90%</td>
                  </tr>
                  <tr>
                    <td>Waterproof and dustproof</td>
                    <td>IP67</td>
                  </tr>
                   <tr>
                    <td>Shock</td>
                    <td>Designed to withstand upto 2 m drop</td>
                  </tr>
                </tbody>
              </table>
            </div>
         </div>         
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Positioning Specifications</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                    <td>Static</td>
                    <td>8 mm + 0.5 ppm Horizontal <br>
                     12 mm + 0.5 ppm Vertical</td>
                  </tr>
                  <tr>
                    <td>Real Time Kinematic</td>
                    <td>15 mm + 1 ppm Horizontal <br> 20 mm + 1 ppm Vertical</td>
                  </tr>
                  <tr>
                    <td>Frequency</td>
                    <td>Up to 10 Hz</td>
                  </tr>
                </tbody>
              </table>
            </div>
         </div>         
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Data and Communication</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                    <td>Protocols</td>
                    <td>NTRIP, VRS, RTCM 3.x </td>
                  </tr>
                  <tr>
                    <td>Position Output</td>
                    <td>NMEA Output</td>
                  </tr>
                  <tr>
                    <td>Position data output</td>
                    <td>1 Hz, 2 Hz, 5 Hz, 10 Hz</td>
                  </tr>
                </tbody>
              </table>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Physical</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                    <td>Size(L × W × H)</td>
                    <td>140 mm × 99 mm</td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>850 g</td>
                  </tr>  
                  <tr>
                    <td>LEDs</td>
                    <td>Satellite Tracking RTCM In/Out Radio Status Bluetooth Status GSM Signal Strength</td>
                  </tr>                  
                </tbody>
              </table>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Communications</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                    <td>UHF Radio: </td>
                    <td>Tx/Rx 865-867 MHz </td>
                  </tr>
                  <tr>
                    <td>Transmit power: </td>
                    <td>Upto 1 W (Adjustable)</td>
                  </tr>
                  <tr>
                    <td colspan="2"><strong>4G modem</strong> </td>
                  </tr>    
                  <tr>
                    <td>4G Bands: </td>
                    <td>800/850/1800/2100 MHz </td>
                  </tr>  
                  <tr>
                    <td>Bluetooth® : </td>
                    <td>V5.0 protocol</td>
                  </tr> 
                </tbody>
              </table>
            </div>
         </div>   
         <div class="col-md-4 mb-4">
            <div class="tableHead">
               <h3 >Software</h3>
            </div>
            <div class="mt-3">
               <table class="table">
                <tbody>
                  <tr>
                    <td colspan="2">Android-based data collection software</td>
                  </tr>              
                </tbody>
              </table>
            </div>
         </div>         
      </div>
   </div>
</section> -->










<section class="sectionPadding relatedProduct">
   <div class="headerText text-center">
      <p class="mb-2">Our Models</p>
      <!-- <h2>Reach in the Apogee Store</h2> -->
      <h2>Related Products</h2>
   </div>
   <div class="container po">
      <div class="row1 mx-0">
         <div class="owl-carousel owl-theme relatedProductSlider position-relative">
         <?php  
            $is_active = 1;
            $is_featured = 1;
            $query = $conn->prepare("SELECT * From product_sub_type where is_active = :is_active && is_featured = :is_featured");
            $query->bindParam(':is_active',$is_active);
            $query->bindParam(':is_featured',$is_featured);
            $query->execute();
            $result = $query->fetchAll();
            $row = count($result);
            if ($row>0) {      
               foreach ($result as $value) {
                  $product_sub_type_id = $value['id'];
                  $img_icon = $value['img_icon'];
                  $alt = $value['alt'];
                  $page_url = $value['page_url'];
                  $product_sub_type_name = $value['product_sub_type_name'];
                  $product_type_id = $value['product_type_id'];
                  $front_title = $value['front_title'];
                  $short_description = $value['short_description'];
            ?>      
            <div class="item">
               <div class="boxWrap">
                  <div class="row">
                     <div class="col-md-6">               
                        <div class="">
                           <div>
                              <h2><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></h2>
                              <p><?php if(!empty($short_description)){ echo $short_description; } ?></p>
                              <!-- <h4>$4398</h4> -->
                              <div class="mt-3 pt-2">
                                 <a href="product-sub-type.php?product_url=<?php echo $page_url; ?>" class="buyBtn customBtn fontFourteen">Check Detail <i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                           </div>
                        </div>               
                     </div>
                     <div class="col-md-6">
                        <!-- <img src="assets/images/product/gnssTransparent.png"> -->
                        <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/product/<?php if(!empty($img_icon)){ echo $img_icon; } ?>"  style="width: 100%;height: 180px;object-fit: cover;">
                     </div>
                  </div>
               </div>
            </div>
            <?php
                  }
               }
            ?>
         </div>
      </div>
   </div>
</section> 







<div class="container">
   <hr class="my-0">
</div>




<?php 
include "ask-our-team-form.php";
?>






<?php
   include 'footer.php';
?>




<script>
   $('.relatedProductSlider').owlCarousel({   
     loop:true,   
     margin:10,   
     dots:false,   
     nav:true,   
     responsiveClass:true,   
     navText : ["<i class='fas fa-arrow-alt-circle-left'></i>","<i class='fas fa-arrow-alt-circle-right'></i>"],  
     responsive:{   
         0:{
             items:1,   
             nav:true   
         },   
         600:{   
             items:1,   
             nav:false   
         },   
         1000:{   
             items:2   
         }
      }   
   })
</script>