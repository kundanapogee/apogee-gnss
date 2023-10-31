<?php 
include 'admin/include/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7MF3XF');</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' href='assets/images/fevicon.webp' type='image/x-icon' sizes="16x16" />

<meta name="theme-color" content="#0875DC">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
<link rel="stylesheet" href="assets/css/settings.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

<link rel="stylesheet" type="text/css" href="assets/css/slider.css">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/tab_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/mobile_responsive.css">
<?php          
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$query = $conn->prepare("SELECT * From page_header_content where page_url = :page_url");
$query->bindParam(':page_url',$curPageName);
$query->execute();
$headerResult = $query->fetchAll();
$headerRow = count($headerResult);
if (isset($headerRow)) {
  if ($headerRow>0) {
   echo $headerResult[0]['header_content'];
}
}else{
   echo '<title>APOGEE GNSS</title>';
}
?>
</head>
<body>

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7MF3XF"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <!-- <section>
         <div id="preloader">
           <div id="ctn-preloader" class="ctn-preloader">
             <div class="animation-preloader d-flex">
               <div class="pt-1 mr-1">
                 <img src="assets/images/logoIcon.png" class="preloaderImg">
               </div>
                <div class="txt-loading">
                 <span data-text-preloader="A" class="letters-loading">
                   A
                 </span>
                 
                 <span data-text-preloader="P" class="letters-loading">
                   P
                 </span>
                 
                 <span data-text-preloader="O" class="letters-loading">
                   O
                 </span>
                 
                 <span data-text-preloader="G" class="letters-loading">
                   G
                 </span>
                 
                 <span data-text-preloader="E" class="letters-loading">
                   E
                 </span>
                 
                 <span data-text-preloader="E" class="letters-loading">
                   E
                 </span>
               </div>
             </div>  
             <div class="loader-section section-left"></div>
             <div class="loader-section section-right"></div>
           </div>
         </div>
      </section> -->

      <!-- fixSide Icon -->
      <div class="fixedSideWrap">
       <ul>
         <li><a href="index.php"><i class="fas fa-home"></i></a></li>
         <li><a href="https://www.facebook.com/Apogee-GNSS-100362519399974" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
         <li><a href="https://www.instagram.com/apogee_gnss/" target="_blank"><i class="fab fa-instagram"></i></a></li>
         <li><a href="https://www.youtube.com/channel/UCuQXlIfWjpXUGrQ3s2NGdqw" target="_blank"><i class="fab fa-youtube"></i></a></li>
         <li><a href="https://www.linkedin.com/company/apogee-gnss-pvt-ltd" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
         <!-- <li class="textLogin"><a href="#">Login</a></li> -->
      </ul>


   </div>
   <header id="topWeb">            
      <div class="container px-0 mainNav  d-none d-lg-block d-xl-block">
      <?php
         include 'desktopMenu.php';
      ?>
      </div>
      <?php
         include 'mobileMenu.php';
      ?>
   </header>


<!-- <div>
   <div class="tp-banner-container">
      <div class="tp-banner">
         <ul>
            <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
               <img src="assets/images/slider/gnss-receiver.png" data-lazyload="assets/images/slider/gnss-receiver.png" alt="GNSS Receiver">
               <div class="caption lft large-title tp-resizeme slidertext_hover paddingLeft30"  data-x="left" data-y="180" data-speed="600" data-start="1600"><h1 class="slideHeadOne fontSlide">Welcome to APOGEE GNSS</h1></div>
               <div class="caption lft large-title tp-resizeme slidertext2 paddingLeft30" data-x="left" data-y="190" data-speed="600" data-start="2200">Leading in Technology</div>
               <div class="caption lfb large-title tp-resizeme slidertext3 paddingLeft30" data-x="left" data-y="310" data-speed="600" data-start="2800"><p>Transforming the world through its Innovative Solutions <br> and inventing leading-edge technologies</p>
               </div>
               <div class="caption lfb large-title tp-resizeme slidertext4 slider_btn paddingLeft30" data-x="left" data-y="400" data-speed="600" data-start="3500"><a href="contact.php">Explore </a></div>
               <div class="caption lfb large-title tp-resizeme slidertext4 mobileMarginLeft" data-x="240" data-y="400" data-speed="600" data-start="4100"><a href="contact.php">Contact Us </a></div>
            </li>
            <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on">
               <img src="assets/images/slider/handheld-data-collector.png" data-lazyload="assets/images/slider/handheld-data-collector.png" alt="Data Collector">
               <div class="caption lft large-title tp-resizeme slidertext_hover paddingLeft30" data-x="left" data-y="180" data-speed="600" data-start="1600"><h2 class="fontSlide">Welcome to APOGEE GNSS</h2></div>
               <div class="caption lft large-title tp-resizeme slidertext2 paddingLeft30" data-x="left" data-y="190" data-speed="600" data-start="2200">Higher Efficiency</div>
               <div class="caption lfb large-title tp-resizeme slidertext3 paddingLeft30" data-x="left" data-y="310" data-speed="600" data-start="2800"><p>A rugged field controller combined with a GNSS <br> Receiver brings reliable solutions</p>
               </div>
               <div class="caption lfb large-title tp-resizeme slidertext4 slider_btn paddingLeft30" data-x="left" data-y="400" data-speed="600" data-start="3500"><a href="contact.php">Explore </a></div>
               <div class="caption lfb large-title tp-resizeme slidertext4 mobileMarginLeft" data-x="240" data-y="400" data-speed="600" data-start="4100"><a href="contact.php">Contact Us </a></div>
            </li>             
         </ul>
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
</div> -->



<div class="sliderVideoMain position-relative">
   <video autoplay muted loop id="myVideo">
     <source src="assets/images/slider/sliderMain.MP4" type="video/mp4">
   </video>
   <div class="content">
      <div class="container">
         <div class="contentWrap">
            <!-- <h4>Welcome to APOGEE GNSS</h4> -->
            <!-- <h1>Leading in Technology</h1> -->
            <h4>Leading with Technology</h4>
            <h2 class="text-uppercase">Made In India </h2>
            <h1 class="text-uppercase">GNSS Receiver </h1>
            <p class="spsLine text-white">( Completely Engineered and Manufactured by Us )</p>
            <p class="para text-white fontFourteen">Transforming the world through its Innovative Solutions <br> and inventing leading-edge technologies. </p>
         </div>
         <div class="btnWrap">
            <a href="about.php" class="learnMoreBtn">Learn More...</a>
            <a href="contact.php" class="contactBtn">Contact Us </a>
         </div>
      </div>     
   </div>
</div>


 <div class="section aboutSec" id="top_list">
   <div class="inner large_inner">
      <div class="top_list_content">
         <div id="float_particles1" class="float_particles"></div>
         <img src="assets/images/about.webp" class="zoom img-thumbnail" alt="APOGEE GNSS Home Page">
         <div class="top_list_wrap zoom">
            <div class="top_list_inner">
               <div class="heading">
                  <h2>APOGEE at a Glance</h2>
               </div>
               <div class="common_text">
                  <!-- <p>Established in 2022, APOGEE GNSS is a joint venture between APOGEE Precision Lasers & Paragon instrumentation Engineers Pvt. Ltd. Headquartered in Noida, it also has its presence in Roorkee, Gujarat, Hapur. APOGEE’s software, solutions, services are revolutionizing many industries such as agriculture, geospatial, surveying...</p> -->
                  <p>Established in 2022, APOGEE GNSS is a joint venture between APOGEE Precision Lasers & Paragon instrumentation Engineers Pvt. Ltd. Headquartered in Noida.</p>
                  <p>We offer an extensive range of equipment like Differential GPS, CORS, Unmanned systems, GIS Data Collector, Radio, and softwares like VRS, NTRIP.</p>
               </div>
               <div class="btn blu_btn pl-0">
                  <a href="about.php" class="btn_content">
                     <span>Company Profile</span>                          
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>







<!-- <section class="sectionPadding pb-0">
   <div class="fullProduct m-0">
      <div class="headerText text-center">
         <p class="mb-2">Our Products</p>
         <h2>What We Deliver</h2>
      </div>
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
            $product_sub_type_name = $value['product_sub_type_name'];
            $product_type_id = $value['product_type_id'];
            $front_title = $value['front_title'];
            $short_description = $value['short_description'];
            ?>      
            <div class="container productBox sectionHead">
               <div class="row bgOverLay">
                  <div class="col-md-7 orderTwo mt-4 mt-md-0">
                     <div class="productBoxInner contentWrap">
                        <h3><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></h3>
                        <h2 class="yellow"><?php if(!empty($front_title)){ echo $front_title; } ?></h2>
                        <div class="textWrap">
                           <p class="mainPara mt-3"><?php if(!empty($short_description)){ echo $short_description; } ?></p>
                           <div class="mt-3 pt-2">
                              <a href="product-sub-type.php?prosubtype=<?php echo $product_sub_type_id; ?>" class="exploreBtn fontFourteen">Explore &nbsp <i class="fas fa-long-arrow-alt-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="text-center">
                        <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/product/<?php if(!empty($img_icon)){ echo $img_icon; } ?>">
                     </div>
                  </div>
               </div>
            </div>
            <?php
         }
      }
      ?>
   </div>
</section> -->






<section class="productSliderSection">
   <div class="container" >
      <div class="headerText text-center">
         <p class="text-white mb-2">Our Products</p>
         <h2 class="text-white mb-2 mt-3">What We Deliver</h2>
      </div>
      <div class="row" style="margin-top: 45px;">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme homeProductSlider position-relative">
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
                        <div class="cardWrap">
                           <div class="card">
                             <div class="card-header p-0">
                              <div>
                                 <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/product/<?php if(!empty($img_icon)){ echo $img_icon; } ?>">
                              </div>
                             </div>
                             <div class="card-body" style="min-height: 140px;">
                              <h3 class="mb-1 mt-1"><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></h3>
                              <h6 class="mb-0 mt-2"><?php if(!empty($front_title)){ echo $front_title; } ?></h6>
                              <p  class=""><?php if(!empty($short_description)){ echo $short_description; } ?></p>
                             </div>
                             <div class="card-footer p-0 text-center">
                                 <a href="product-sub-type.php?product_url=<?php echo $page_url; ?>"> View Detail</a>
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
   </div>
</section>











<section class="industries sectionPadding">
   <div class="container">
      <div class="headerText text-center">
         <p class="mb-2">Our Industries</p>
         <h2>What We Do</h2>
      </div>
      <div class="row">
         <?php
         $is_active = 1;
         $query = $conn->prepare("SELECT * From industries_type where is_active = :is_active limit 5");
         $query->bindParam('is_active',$is_active);
         $query->execute();
         $result = $query->fetchAll();
         $row = count($result);
         $industries_box = "";
         if($row>0){
            for($i=0;$i<$row;$i++){
               if ($i==0) {  
                  $industries_type_id = $result[$i]['id'];
                  $img_icon = $result[$i]['img_icon'];
                  $alt = $result[$i]['alt'];
                  $indTypeURL = $result[$i]['page_url'];
                  $industries_type_name = $result[$i]['industries_type_name'];
                  $img_icon_white = $result[$i]['img_icon_white'];
                  $page_description = $result[$i]['description'];
                  ?>
                  <div class="col-md-6 pr-0">
                     <div class="box">
                        <div class="top">
                           <div class="text-center">
                              <?php if(!empty($img_icon_white)){ echo '<img alt="';if(!empty($alt)){ echo $alt; } echo '" src="assets/images/menu-category/'.$img_icon_white.'" style="width: 80px;">'; } ?>
                              <h3 class="text-white mt-3"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></h3>
                           </div>
                        </div>
                        <div class="bottom">
                           <div class="text-center">
                              <h2 class="text-white"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></h2>
                              <p class="text-white d-block d-sm-none d-lg-block d-xl-block">
                                 <?php
                                 if (isset($page_description)) {
                                    if(strlen($page_description)>120){
                                       echo substr($page_description,0,120)."...";
                                    }else{
                                       echo substr($page_description,0,120);
                                    }                                  
                                 }
                                 ?>
                                 <!-- With decades of experience in surveying solutions, APOGEE delivers robust and reliable data to the surveyors... -->
                              </p>
                              <div class="mt-3 pt-md-2 pt-lg-2">
                                 <a href="industries.php?indtypeurl=<?php echo $indTypeURL; ?>" class="exploreBtn fontFourteen">Explore &nbsp <i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
               }else{
                  $industries_type_id = $result[$i]['id'];
                  $img_icon = $result[$i]['img_icon'];
                  $alt = $result[$i]['alt'];
                  $indTypeURL = $result[$i]['page_url'];
                  $img_icon_white = $result[$i]['img_icon_white'];
                  $industries_type_name = $result[$i]['industries_type_name'];
                  $page_description = $result[$i]['description'];                     
                  if (isset($page_description)) {
                     if(strlen($page_description)>85){
                        $page_description = substr($page_description,0,85)."...";
                     }else{
                        $page_description = substr($page_description,0,85);
                     }                                  
                  }
                  $industries_box .= '<div class="col-md-6 px-0">
                  <div class="boxRight OneBox boxHover'.$i.'">
                  <div class="topRight">
                  <div class="text-center">
                  <img alt="'.$alt.'" src="assets/images/menu-category/'.$img_icon_white.'" style="width: 50px;">
                  <h3 class="text-white text-uppercase mt-3">'.$industries_type_name.'</h3>
                  </div>
                  </div>
                  <div class="bottomRight">
                  <div class="text-center">
                  <h2 class="text-white text-uppercase">'.$industries_type_name.'</h2>
                  <p class="text-white d-block d-sm-none d-lg-block d-xl-block">'.$page_description.'</p>
                  <a href="industries.php?indtypeurl='.$indTypeURL.'" class="exploreBtn py-1 fontThirteen">Explore &nbsp <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                  </div>
                  </div>
                  </div>';
               }
            }
         }
         ?>
         <div class="col-md-6">
            <div class="row">
               <?php
               if (!empty($industries_box)){ echo $industries_box; } 
               ?>               
            </div>
         </div>
      </div>
   </div>
</section>













<!--<section class="upcomingEventSec">-->
<!--   <div class="container" >-->
<!--      <div class="row">-->
<!--         <div class="col-md-4">-->
<!--            <div class="">-->
<!--               <div class="headText">-->
<!--                  <h2>Upcoming</h2>-->
<!--               </div>-->
<!--               <div class="mt-4">-->
<!--                  <ul>-->
<!--                     <li class="mb-3">-->
<!--                        <a href="#">-->
<!--                           <div class="date">-->
<!--                              <p>October 18-20-2022</p>-->
<!--                           </div>-->
<!--                           <div class="desc">-->
<!--                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
<!--                           </div>-->
<!--                        </a>-->
<!--                     </li>-->
<!--                     <li class="mb-3">-->
<!--                        <a href="#">-->
<!--                           <div class="date">-->
<!--                              <p>October 18-20-2022</p>-->
<!--                           </div>-->
<!--                           <div class="desc">-->
<!--                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
<!--                           </div>-->
<!--                        </a>-->
<!--                     </li>-->
<!--                     <li class="mb-3">-->
<!--                        <a href="#">-->
<!--                           <div class="date">-->
<!--                              <p>October 18-20-2022</p>-->
<!--                           </div>-->
<!--                           <div class="desc">-->
<!--                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
<!--                           </div>-->
<!--                        </a>-->
<!--                     </li>-->
<!--                     <li class="mb-3">-->
<!--                        <a href="#">-->
<!--                           <div class="date">-->
<!--                              <p>October 18-20-2022</p>-->
<!--                           </div>-->
<!--                           <div class="desc">-->
<!--                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
<!--                           </div>-->
<!--                        </a>-->
<!--                     </li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-8">-->
<!--            <div class="row1 owl-carousel owl-theme homeEventSlider position-relative">-->
<!--               <div class="item ">-->
<!--                  <div class="cardWrap">-->
<!--                     <div class="card">-->
<!--                       <div class="card-header p-0">-->
<!--                        <div>-->
<!--                           <img src="assets/images/about.png">-->
<!--                        </div>-->
<!--                       </div>-->
<!--                       <div class="card-body">-->
<!--                        <h3 class="mb-1 mt-1" style="">What is Lorem Ipsum?</h3>-->
<!--                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum has been the industry's standard dummy. </p>-->
<!--                       </div>-->
<!--                       <div class="card-footer p-0 text-center">-->
<!--                           <a href="#"> View Detail</a>-->
<!--                       </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item ">-->
<!--                  <div class="cardWrap">-->
<!--                     <div class="card">-->
<!--                       <div class="card-header p-0">-->
<!--                        <div>-->
<!--                           <img src="assets/images/about.png">-->
<!--                        </div>-->
<!--                       </div>-->
<!--                       <div class="card-body">-->
<!--                        <h3 class="mb-1 mt-1" style="">What is Lorem Ipsum?</h3>-->
<!--                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum has been the industry's standard dummy.</p>-->
<!--                       </div>-->
<!--                       <div class="card-footer p-0 text-center">-->
<!--                           <a href="#"> View Detail</a>-->
<!--                       </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item ">-->
<!--                  <div class="cardWrap">-->
<!--                     <div class="card">-->
<!--                       <div class="card-header p-0">-->
<!--                        <div>-->
<!--                           <img src="assets/images/about.png">-->
<!--                        </div>-->
<!--                       </div>-->
<!--                       <div class="card-body">-->
<!--                        <h3 class="mb-1 mt-1" style="">What is Lorem Ipsum?</h3>-->
<!--                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum has been the industry's standard dummy.</p>-->
<!--                       </div>-->
<!--                       <div class="card-footer p-0 text-center">-->
<!--                           <a href="#"> View Detail</a>-->
<!--                       </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->





<section class="videoSection sectionPadding">
   <div class="container px-0 position-relative">
      <div class="row">         
         <div class="col-md-6 px-3 orderTwo">
            <div class="leftSide">
               <h2>An Indigenous Solution Manufactured by APOGEE GNSS</h2>
               <p class="mb-0">From Surveying to smart city to communication, Apogee‘s this innovative technology opens opportunities in every field to meet your requirements, ahead of time.</p>
            </div>
         </div>
         <div class="col-md-6 px-0 orderOne">
            <div class="bg-video-wrap" >
               <video src="assets/images/apogee-gnss-video.mp4" loop muted autoplay>
               </video>
               <div class="overlay"></div>
               <div >
                  <a id="play-video" class="video-play-button" href="#">
                    <span></span>
                  </a>
                  <div id="video-overlay" class="video-overlay">
                    <a class="video-overlay-close">&times;</a>
                  </div>
               </div>
            </div>
         </div>
      </div>      
   </div>
</section>






<section class="careerSection">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 px-0 orderTwo">
            <div class="leftSide">
               <div class="contentWrap" >
                  <h3 class="text-white">Give your career a new life by bridging with Apogee</h3>
                  <p class="text-white">We are always eager to meet fresh talent. So, be the part of this diverse group that focused on the technology innovation to solve the biggest Challenges, check out our open positions.</p>
                  <div class="btnsWrap">
                     <div class="text-center bg-white exploreBtn">
                        <a class="font-weight-bold" href="career.php">Explore careers &nbsp<i class="fas fa-long-arrow-alt-right"></i></a>
                     </div>
                     <div class="text-center mt-2 ourValuesBtn">
                        <a class="text-white font-weight-bold" href="about.php">Our values &nbsp<i class="fas fa-long-arrow-alt-right"></i></a>
                     </div>
                  </div>
               </div>               
            </div>
         </div>
         <div class="col-md-6 px-0 orderOne" >
            <div class="rightSide position-relative">
               <div class="rightSideInner">
                  <div class="iconWrap">
                     <div>
                        <!-- <i class="fas fa-users"></i> -->
                        <img src="assets/images/icon/innovation.webp" style="width: 80px;height: 80px;">                        
                     </div>
                     <div class="content mt-2">
                        <h4>Innovation </h4>
                        <p class="text-white">Big Idea, New Technology</p>
                     </div>
                  </div>
                  <div class="iconWrap">
                     <div>
                        <!-- <i class="fas fa-users"></i> -->
                        <img src="assets/images/icon/team.webp" style="width: 80px;height: 80px;">                        
                     </div>
                     <div class="content mt-2">
                        <h4>Team </h4>
                        <p class="text-white">Teamwork makes dreams true</p>
                     </div>
                  </div>
                  <div class="iconWrap"> 
                     <div>
                        <!-- <i class="fas fa-users"></i> -->
                        <img src="assets/images/icon/success.webp" style="width: 80px;height: 80px;">
                     </div>
                     <div class="content mt-2">
                        <h4>Success </h4>
                        <p class="text-white">Work Hard, Be Kind</p>
                     </div>
                  </div>
               </div>
               <div>
                  <img src="assets/images/career.webp">
               </div>               
            </div>
         </div>
      </div>
   </div>
</section>




<!-- <section class="countSection sectionPadding pt-3">
   <div class="container position-relative">
      <div class="headerText text-center">
         <h2>Why Us?</h2>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-3">
                  <div class="countBox">
                     <div>
                        <img src="assets/images/icon/calendar.webp" width="50" alt="No. of Years">
                     </div>
                     <div class="mt-2 mb-1">
                        <h2 class="mb-0">10<sup>+</sup></h2>
                     </div>
                     <div>
                        <p class="font-weight-bold">Years</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countBox">
                     <div>
                        <img src="assets/images/icon/office.webp" width="50" alt="No. of Offices">
                     </div>
                     <div class="mt-2 mb-1">
                        <h2 class="mb-0">5<sup>+</sup></h2>
                     </div>
                     <div>
                        <p class="font-weight-bold">Office</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countBox">
                     <div>
                        <img src="assets/images/icon/dealer.webp" width="50" alt="No. of Dealers">
                     </div>
                     <div class="mt-2 mb-1">
                        <h2 class="mb-0">200<sup>+</sup></h2>
                     </div>
                     <div>
                        <p class="font-weight-bold">Dealers</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countBox">
                     <div>
                        <img src="assets/images/icon/customers.webp" width="50" alt="No. of Satisfied Customers">
                     </div>
                     <div class="mt-2 mb-1">
                        <h2 class="mb-0">70,000<sup>+</sup></h2>
                     </div>
                     <div>
                        <p class="font-weight-bold">Customers</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->







<!-- <section class="countSection sectionPadding pt-3">
   <div class="container position-relative">
      <div class="headerText text-center">
         <h2>Social Media</h2>       
      </div>
      <div class="row">
          <div class="col-md-12">
            <div class="row">
               <div class="col-md-6">
                  <div class="">
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="fCBeCvMT"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/ApogeePrecisionLasers" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ApogeePrecisionLasers" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ApogeePrecisionLasers">Apogee Precision Lasers</a></blockquote></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="">
                     <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CmdVlCTJbUP/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CmdVlCTJbUP/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/tv/CmdVlCTJbUP/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Apogee Gnss (@apogee_gnss)</a></p></div></blockquote> <script async src="//https://www.instagram.com/embed.js"></script>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->



<?php
include 'footer.php';
?>

<!-- <i class="fas fa-arrow-alt-circle-right"></i> -->

<script>
   $('.homeProductSlider').owlCarousel({   
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
             items:2,   
             nav:false   
         },   
         1000:{   
             items:4   
         }
      }   
   })
   
</script>

<!-- <i class="fas fa-long-arrow-alt-right"></i> -->

<script>
   $('.homeEventSlider').owlCarousel({   
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

<script>
   $('.articleSlider').owlCarousel({
     autoplay:true,  
     margin:10,   
     dots:false,   
     nav:true,   
     responsiveClass:true,   
     navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],   
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
             items:3.25  
         }
      }   
   })
   
</script>

<script>
   window.onscroll = function() {myFunction()};
   var header = document.getElementById("topWeb");
   var sticky = header.offsetTop;
   function myFunction() {
     if (window.pageYOffset > sticky) {
       header.classList.add("sticky");
     } else {
       header.classList.remove("sticky");
     }
   }
   
</script>


<script>
   // $("#bottomTopBtn").css({'right':'-60px','transition':'all 1s ease'});   
   // $(document).ready(function(){   
   //   $(window).scroll(function(){   
   //     var scroll = $(window).scrollTop();   
   //     if (scroll > 700) {   
   //       $("#bottomTopBtn").css({'right':'30px','transition':'all 1s ease'});   
   //     }   
   //     else{   
   //       $("#bottomTopBtn").css({'right':'-60px','transition':'all 1s ease'});   
   //     }   
   //   })   
   // })   
</script>