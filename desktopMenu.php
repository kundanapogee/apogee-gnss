<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="index.php">
       <img src="assets/images/logo.webp" alt="APOGEE GNSS PVT LTD">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
       <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown megamenu-li">
             <a class="nav-link dropdown-toggle mainMenu" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
             <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row">
                   <div class="col-sm-6 col-lg-2 borderRight">
                      <a class="dropdown-item" href="about.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/about-apogee.webp" width="45" alt="About APOGEE GNSS">
                            </div>
                            <p class="mt-2 fontSix">About APOGEE</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-2 borderRight">
                      <a class="dropdown-item" href="download.php">
                         <div class="text-center">
                            <div class="text-center mt-1">
                               <img src="assets/images/icon/downloadMenu.webp" width="40" alt="Download Center">
                            </div>
                            <p class="mt-2 fontSix">Download Center</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-2 borderRight">
                      <a class="dropdown-item" href="article.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/whats-new.webp" width="45" alt="Blogs Apogee GNSS ">
                            </div>
                            <p class="mt-2 fontSix">What's New</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-2 borderRight">
                      <a class="dropdown-item" href="career.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/career.webp" width="45" alt="Jobs in APOGEE GNSS">
                            </div>
                            <p class="mt-2 fontSix">Career</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-2 borderRight">
                      <a class="dropdown-item" href="maintainance.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/faq.webp" width="45" alt="Ask questions related to Apogee GNSS products">
                            </div>
                            <p class="mt-2 fontSix">FAQ's</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-2">
                      <div class="mt-4 text-center">
                         <a href="index.php">
                            <img src="assets/images/logo.webp" alt="APOGEE GNSS">
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </li>
          <li class="nav-item dropdown megamenu-li">
             <a class="nav-link dropdown-toggle mainMenu" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
             <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row">
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
                                  <div class="col-sm-6 col-lg-2 borderRight px-0">
                                     <a class="dropdown-item" href="product.php?protypeurl=<?php echo $productTypeURL; ?>">
                                        <div class="text-center">
                                           <div class="text-center">
                                              <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/menu-category/<?php if(!empty($img_icon)){ echo $img_icon; } ?>" width="45">
                                           </div>
                                           <p class="mt-2 fontSix"> <?php if(!empty($product_type_name)){ echo $product_type_name; } ?></p>
                                        </div>
                                     </a>
                                  </div>
                                 <?php
                               }
                            }
                         ?> 
                         <div class="col-sm-6 col-lg-2">
                            <div class="mt-4 text-center">
                               <a href="index.php">
                                  <img src="assets/images/logo.webp" alt="APOGEE GNSS PVT LTD">
                               </a>
                            </div>
                         </div>
                      </div>
             </div>
          </li>
          <li class="nav-item dropdown megamenu-li">
             <a class="nav-link dropdown-toggle mainMenu" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industries</a>
             <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row">
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
                            $industries_type_name = $value['industries_type_name'];
                            $indTypeURL = $value['page_url'];
                            // $main_menu_id = $value['main_menu_id'];
                            ?>
                            <div class="col-sm-6 col-lg-2 borderRight">
                               <a class="dropdown-item" href="industries.php?indtypeurl=<?php echo $indTypeURL; ?>">
                                  <div class="text-center">
                                     <div class="text-center">
                                        <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/menu-category/<?php if(!empty($img_icon)){ echo $img_icon; } ?>" width="45">
                                     </div>
                                     <p class="mt-2 fontSix"> <?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></p>
                                  </div>
                               </a>
                            </div>
                            <?php
                         }
                      }
                   ?>
                   <div class="col-sm-6 col-lg-2">
                      <div class="mt-4 text-center">
                         <a href="index.php">
                            <img src="assets/images/logo.webp" alt="APOGEE GNSS">
                         </a>
                      </div>
                   </div>                                 
                </div>
             </div>
          </li>
          <li class="nav-item dropdown megamenu-li">
             <a class="nav-link dropdown-toggle mainMenu" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
             <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row">
                   <div class="col-sm-6 col-lg-4 borderRight">
                      <a class="dropdown-item" href="contact.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/send-an-enquiry.webp" width="45" alt="Send an Enquiry">
                            </div>
                            <p class="mt-2 fontSix">Send an Enquiry</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-4 borderRight">
                      <a class="dropdown-item" href="become-a-dealer.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/become-dealer.webp" width="45" alt="Become a Dealer">
                            </div>
                            <p class="mt-2 fontSix">Become a Dealer</p>
                         </div>
                      </a>
                   </div>
                   <div class="col-sm-6 col-lg-4">
                      <a class="dropdown-item" href="contact.php">
                         <div class="text-center">
                            <div class="text-center">
                               <img src="assets/images/icon/find-my-friend.webp" width="45" alt="How To Buy">
                            </div>
                            <p class="mt-2 fontSix">How To Buy</p>
                         </div>
                      </a>
                   </div>
                </div>
             </div>
          </li>
         <!--  <li class="nav-item ">
             <div class="searchIconWrap">
                <div class="search">
                   <div class="searchIcon"></div>
                   <div class="input">
                      <input type="text" placeholder="Search..." id="mysearch">
                   </div>
                   <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
                </div>
             </div>
          </li> -->
       </ul>
    </div>
 </nav>






 