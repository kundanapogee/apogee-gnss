<?php
   include 'header.php';
   
   if((!empty($_GET['article_id']))&&(isset($_GET['article_id']))) {
      $article_id = $_GET['article_id'];
      if ($article_id==1) {
         $article_category_name = "Blogs";
      }
      if ($article_id==2) {
         $article_category_name = "Event";
      }
   }else{
      die();
   }
   
   
   $is_active = 1;
   $article_id = $_GET['article_id'];
   $query = $conn->prepare("SELECT * From article where is_active = :is_active && id = :article_id");
   $query->bindParam('is_active',$is_active);
   $query->bindParam('article_id',$article_id);
   $query->execute();
   $result = $query->fetchAll();
   $article_id = $result[0]['id'];
   $img = $result[0]['img'];
   $title = $result[0]['title'];
   $video_link = $result[0]['video_link'];
   $type = $result[0]['type'];
   $description = $result[0]['description'];
      // $row = count($result);
   
   ?>
<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1>Blogs Detail</h1>
         <ul class="d-flex align-items-center justify-content-center">
            <li><a href="index.php" class="text-white">Home</a></li>
            <li class="text-white">&nbsp; / &nbsp;</li>
            <li><span class="text-white">Blogs Detail</span></li>
         </ul>
      </div>
   </div>
</section>
<section class="blogSection sectionPadding">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-lg-8 marginBottom30">
            <div class="blogCard blogDetail">
               <div class="blogCardImage">
                  <?php 
                     if ($type==1) {
                        ?>
                  <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>" class="w-100" style="height: 300px;object-fit: cover;">
                  <?php
                     }
                     if ($type==2) {
                        ?>
                  <iframe width="100%" height="200px" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <?php
                     }
                     ?>     
               </div>
               <div class="blogCardContent px-0 bg-white pb-0 border-0">
                  <div>
                     <div class="blogDate" style="font-size: 17px;">28 Jul</div>
                  </div>
                  <div class="blogMeta">
                     <a href="index.php"><i class="far fa-user-circle"></i> by: APOGEE GNSS</a>
                  </div>
                  <div class="textContent">
                     <h3><?php if(!empty($title)){ echo $title; } ?></h3>
                     <p class="mt-3 mb-0"><?php if(!empty($description)){ echo $description; } ?></p>
                  </div>
               </div>
            </div>
            <hr>
               <!-- <div class="blogTags">
                  <div>
                     <strong>Tags:</strong> <span>GNSS</span> <span>GIS</span> <span>CORS</span> <span>UAV</span> <span>RADIO</span>
                  </div>                     
               </div> -->
         </div>
         <div class="col-md-4 col-lg-4 marginBottom30">
               <div class="recentPostBox mb-3 orderTow">
               <h3 class="headText">Event</h3>
               <hr>
               <div class="w-100">
               <?php
                  $is_active = 1;
                  $article_category_id = 2;
                  $query = $conn->prepare("SELECT * From article where is_active = :is_active && article_category_id = :article_category_id order by id desc");
                  $query->bindParam('is_active',$is_active);
                  $query->bindParam('article_category_id',$article_category_id);
                  $query->execute();
                  $result = $query->fetchAll();
                  $row = count($result);
                     if($row>0) {
                        foreach ($result as $value) {
                           $article_id = $value['id'];
                           $img = $value['img'];
                           $title = $value['title'];
                           $description = $value['description'];
                           ?>
                        <div class="w-100 d-flex recentBlogSingle py-2">
                           <div class="mr-2">
                           <?php 
                              if ($type==1) {
                              ?>
                                 <a href="article-details.php?article_id=<?php echo $article_id; ?>">
                                 <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>">
                              </a>
                              <?php
                              }
                              if ($type==2) {
                                 ?>
                                 <iframe width="50" height="45px" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 <?php
                              }
                              ?>                               
                           </div>
                           <div>
                              <a href="article-details.php?article_id=<?php echo $article_id; ?>"><h3 class="textGreen mb-1"><?php if(!empty($title)){ echo $title; } ?></h3></a>
                              <p class="mb-0"><?php if(!empty($description)){ echo substr($description, 0,65); } ?> </p>
                           </div>
                        </div>
                        <hr>
                        <?php
                  }
                  }
                  ?>
               </div>
               </div> 
               <?php
               $is_active = 1;
               $article_category_id = 1;
               $query = $conn->prepare("SELECT * From article where is_active = :is_active && article_category_id = :article_category_id order by id desc");
               $query->bindParam('is_active',$is_active);
               $query->bindParam('article_category_id',$article_category_id);
               $query->execute();
               $result = $query->fetchAll();
               $row = count($result);
               ?>
               <div class="recentPostBox mb-3 orderTow">
                  <h3 class="headText">Blogs</h3>
                  <hr>
                  <div class="w-100" >
                     <?php
                        if($row>0) {
                           foreach ($result as $value) {
                              $article_id = $value['id'];
                              $img = $value['img'];
                              $title = $value['title'];
                              $description = $value['description'];
                              ?>
                     <div class="d-flex recentBlogSingle py-2">
                        <div class="mr-2">
                           <?php 
                              if ($type==1) {
                                 ?>
                           <a href="article-details.php?article_id=<?php echo $article_id; ?>">
                           <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>">
                           </a>
                           <?php
                              }
                              if ($type==2) {
                                 ?>
                           <iframe width="50" height="45px" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                           <?php
                              }
                              ?>                   
                        </div>
                        <div>
                           <a href="article-details.php?article_id=<?php echo $article_id; ?>">
                              <h3 class="textGreen mb-1"><?php if(!empty($title)){ echo $title; } ?></h3>
                           </a>
                           <!-- <p class="mb-0"><?php if(!empty($description)){ echo substr($description, 0,65); } ?></p> -->
                        </div>
                     </div>
                     <hr>
                     <?php
                        }
                        }
                        ?>
                  </div>
               </div>


               <div class="recentPostBox orderOne">
                  <h3 class="headText">Social Share</h3>
                  <hr>               
                  <div class="blogSocialShare">
                     <ul class="ml-auto">
                        <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>                  
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                        <li>
                           <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=titleToBeReplaced&amp;url=http://localhost/APOGEE%20GNSS/article-details.php?article_id=5#" target="_blank" aria-label="">
                              <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                                 <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                                    <i class="fab fa-twitter"></i>
                                 </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>


         </div>
      </div>
   </div>
</section>
<?php
   include 'footer.php';
   ?>