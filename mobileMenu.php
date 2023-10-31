<div class="container d-block  d-lg-none d-xl-none mobileMenu">
     <nav class="navbar navbar-expand-sm navbar-dark">
      <a class="navbar-brand" href="index.php">
         <img src="assets/images/logo.webp" alt="APOGEE GNSS">
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
                  $productTypeURL = $value['page_url'];
                                    // $alt = $value['alt'];
                                    // $main_menu_id = $value['main_menu_id'];
                  ?>
                  <a class="dropdown-item" href="product.php?protypeurl=<?php echo $productTypeURL; ?>"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></a>
                  <?php
               }
            }
            ?>
                          <!-- <a class="dropdown-item" href="gnss.php">GNSS RTK</a>
                          <a class="dropdown-item" href="gis.php">GIS Handheld</a>
                          <a class="dropdown-item" href="cors.php">CORS & Precise Positioning</a>
                          <a class="dropdown-item" href="uav.php">UAV</a>
                          <a class="dropdown-item" href="radio.php">Radio</a> -->
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
                           $indTypeURL = $value['page_url'];
                                    // $main_menu_id = $value['main_menu_id'];
                           ?>
                           <a class="dropdown-item" href="industries.php?indtypeurl=<?php echo $indTypeURL; ?>"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></a>
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
   </div>