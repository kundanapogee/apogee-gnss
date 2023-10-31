<?php 
ob_start();
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
      <meta name="theme-color" content="#0875DC">      
      <link rel="icon" type="image/x-icon" href="assets/images/favicon.webp">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
      <!-- <link rel="stylesheet" href="assets/css/settings.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">  
      <!-- <link rel="stylesheet" type="text/css" href="assets/css/slider.css"> -->
      <link href="assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/tab_responsive.css">
      <link rel="stylesheet" type="text/css" href="assets/css/mobile_responsive.css">

      <?php
         if ((isset($_GET['product_url'])) && (!empty($_GET['product_url']))) {
            $product_url = $_GET['product_url'];
            $is_active = 1;
            $query = $conn->prepare("SELECT * From product_sub_type where page_url = :product_url && is_active = :is_active");
            $query->bindParam(':product_url',$product_url);
            $query->bindParam(':is_active',$is_active);
            $query->execute();
            $headerResult = $query->fetchAll();
            $headerPrSubTypeRow = count($headerResult);
            if (isset($headerPrSubTypeRow)) {
               if ($headerPrSubTypeRow>0) {
                  echo $headerResult[0]['header_content'];
               }
            }
         }         
         elseif((isset($_GET['indtypeurl'])) && (!empty($_GET['indtypeurl']))){
            $indtypeurl = $_GET['indtypeurl'];
            $query = $conn->prepare("SELECT * From industries_type where page_url = :industries_type_id");
            $query->bindParam(':industries_type_id',$indtypeurl);
            $query->execute();
            $headerResult = $query->fetchAll();
            $headerIndTypeUrlRow = count($headerResult);
            if (isset($headerIndTypeUrlRow)) {
               if ($headerIndTypeUrlRow>0) {
                  echo $headerResult[0]['header_content'];
               }
            }
         }
         elseif((isset($_GET['indsubtypeurl'])) && (!empty($_GET['indsubtypeurl']))){
            $indsubtypeurl = $_GET['indsubtypeurl'];
            $query = $conn->prepare("SELECT * From industries_sub_type where page_url = :industries_sub_type_id");
            $query->bindParam(':industries_sub_type_id',$indsubtypeurl);
            $query->execute();
            $headerResult = $query->fetchAll();
            $headerIndSubTypUrlRow = count($headerResult);
            if (isset($headerIndSubTypUrlRow)) {
               if ($headerIndSubTypUrlRow>0) {
                  echo $headerResult[0]['header_content'];
               }
            }
         }
         elseif((isset($_GET['protypeurl'])) && (!empty($_GET['protypeurl']))){
            $protypeurl = $_GET['protypeurl'];
            $is_active = 1;
            $query = $conn->prepare("SELECT * From product_type where page_url = :protypeurl && is_active = :is_active");
            $query->bindParam(':protypeurl',$protypeurl);
            $query->bindParam(':is_active',$is_active);
            $query->execute();
            $headerResult = $query->fetchAll();
            $headerProTypeRow = count($headerResult);
            if (isset($headerProTypeRow)) {
               if($headerProTypeRow>0) {
                  echo $headerResult[0]['header_content'];
               }
            }
         }elseif((isset($_SERVER["SCRIPT_NAME"])) && (!empty($_SERVER["SCRIPT_NAME"]))){
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
                       <img src="assets/images/logoIcon.png" width="85">
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

   <header >
      <div class="container px-0 mainNav1 navRelative d-none d-lg-block d-xl-block">
         
      <?php
         include 'desktopMenu.php';
      ?>
      </div>
      <?php
         include 'mobileMenu.php';
      ?>

      <!-- Mobile Menu code Start -->
      <!-- <div class="container d-block  d-lg-none d-xl-none mobileMenu">
        <nav class="navbar navbar-expand-sm navbar-dark">
         <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.webp" alt="APOGEE GNSS PVT LTD">
         </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse menuListWrap" id="collapsibleNavbar">
            <ul class="navbar-nav position-absolute mobileListWrap">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Company
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About APOGEE</a>
                    <a class="dropdown-item" href="download.php">Download Center</a>
                    <a class="dropdown-item" href="article.php">What's New</a>
                    <a class="dropdown-item" href="maintainance.php">Career</a>
                    <a class="dropdown-item" href="maintainance.php">FAQ's</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Product
                  </a>
                  <div class="dropdown-menu">
                     <?php
                        $main_menu_id = 2;
                        $is_active = 1;
                        $query = $conn->prepare("SELECT * From product_type where main_menu_id = :main_menu_id && is_active = :is_active limit 5");
                        $query->bindParam(':main_menu_id',$main_menu_id);
                        $query->bindParam(':is_active',$is_active);
                        $query->execute();
                        $industries_result = $query->fetchAll();
                        $industries_row = count($industries_result);
                        if ($industries_row>0) {
                           foreach ($industries_result as $value) {
                              $product_type_id = $value['id'];
                              $product_type_name = $value['product_type_name'];
                              // $main_menu_id = $value['main_menu_id'];
                              ?>
                              <a class="dropdown-item" href="product.php?protypeid=<?php echo $product_type_id; ?>"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></a>
                              <?php
                           }
                        }
                     ?>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Industries
                  </a>
                  <div class="dropdown-menu">
                    <?php
                        $main_menu_id = 1;
                        $is_active = 1;
                        $query = $conn->prepare("SELECT * From industries_type where main_menu_id = :main_menu_id && is_active = :is_active limit 6");
                        $query->bindParam(':main_menu_id',$main_menu_id);
                        $query->bindParam(':is_active',$is_active);
                        $query->execute();
                        $industries_result = $query->fetchAll();
                        $industries_row = count($industries_result);
                        if ($industries_row>0) {
                           foreach ($industries_result as $value) {
                              $industries_type_id = $value['id'];
                              $industries_type_name = $value['industries_type_name'];
                              // $main_menu_id = $value['main_menu_id'];
                              ?>
                              <a class="dropdown-item" href="industries.php?indtypeid=<?php echo $industries_type_id; ?>"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></a>
                              <?php
                           }
                        }
                     ?>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Contact
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="contact.php">Send an Enquiry</a>
                    <a class="dropdown-item" href="become-a-dealer.php">Become a Dealer</a>
                    <a class="dropdown-item" href="contact.php">How To Buy</a>
                  </div>
               </li> 
            </ul>
          </div>
        </nav>
      </div> -->
   </header>




