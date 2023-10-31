<?php
   include 'header.php';
?>

<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1>Article</h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white">Article</span></li>
         </ul>
      </div>
   </div>
</section>


<?php
$is_active = 1;
$article_category_id = 2;
$query = $conn->prepare("SELECT * From article where is_active = :is_active && article_category_id = :article_category_id order by id desc");
$query->bindParam('is_active',$is_active);
$query->bindParam('article_category_id',$article_category_id);
$query->execute();
$result = $query->fetchAll();
$eventRow = count($result);
if ($eventRow>0) {
?>
<section class="blogSection sectionPadding pb-4">
   <div class="container">
      <div class="headerText text-center">
         <!-- <p class="mb-2">Our Blog</p> -->
         <h2 sty>Our Event</h2>
      </div>
      <div class="row">
         <div class="col-md-12 text-right mb-3">
            <a class="fontFourteen" href="article_all.php?article_category_id=<?php echo $article_category_id; ?>">View All</a>
         </div>
         <div class="owl-carousel owl-theme articleSlider">
            <?php             
            if ($eventRow>0) {
               foreach ($result as $value) {
                  $article_id = $value['id'];
                  $img = $value['img'];
                  $video_link = $value['video_link'];
                  $type = $value['type'];
                  $title = $value['title'];
                  $description = $value['description'];
                  ?>
                  <div class="item marginBottom30">
                     <div class="blogCard">
                        <div class="blogCardImage">
                           <?php 
                              if ($type==1) {
                                 ?>
                                 <a href="article-details.php?article_id=<?php echo $article_id; ?>">
                                 <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>" class="w-100">
                                 </a>
                                 <?php
                              }
                              if ($type==2) {
                                 ?>
                                 <iframe width="100%" height="200px" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 <?php
                              }
                           ?>                           
                        </div>
                        <div class="blogCardContent">
                           <div class="textContent">
                              <a href="article-details.php?article_id=<?php echo $article_id; ?>"><h3><?php if(!empty($title)){ echo $title; } ?></h3></a>
                              <p><?php if(!empty($description)){ echo substr($description, 0,100); } ?></p>
                           </div>
                           <div class="clearfix"></div>
                           <div class="mt-3">
                             <a href="article-details.php?article_id=<?php echo $article_id; ?>" class="textGreen blogReadMore">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  }
               }else{
               echo "<h6>No event available</h6>";
            }
            ?>          
         </div>
      </div>
      <!-- <div class="text-center more-btn__box">
         <a href="#" class="thm-btn">Load More</a>
      </div> -->
   </div>
</section>
<?php
}
?>





<?php
$is_active = 1;
$article_category_id = 1;
$query = $conn->prepare("SELECT * From article where is_active = :is_active && article_category_id = :article_category_id order by id desc");
$query->bindParam('is_active',$is_active);
$query->bindParam('article_category_id',$article_category_id);
$query->execute();
$result = $query->fetchAll();
$blogRow = count($result);
if ($blogRow>0) {
?>
<section class="blogSection sectionPadding pb-4">
   <div class="container">
      <div class="headerText text-center">
         <!-- <p class="mb-2">Our Blog</p> -->
         <h2 sty>Our Blog</h2>
      </div>
      <div class="row">
         <div class="col-md-12 text-right mb-3">
            <a class="fontFourteen" href="article_all.php?article_category_id=<?php echo $article_category_id; ?>">View All</a>
         </div>
         <div class="owl-carousel owl-theme articleSlider">
            <?php 
            if ($blogRow>0) {
               foreach ($result as $value) {
                  $article_id = $value['id'];
                  $img = $value['img'];
                  $video_link = $value['video_link'];
                  $type = $value['type'];
                  $title = $value['title'];
                  $description = $value['description'];
                  ?>
                  <div class="item marginBottom30">
                     <div class="blogCard">
                        <div class="blogCardImage">
                           <?php 
                              if ($type==1) {
                                 ?>
                                 <a href="article-details.php?article_id=<?php echo $article_id; ?>">
                                 <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>" class="w-100">
                                 </a>
                                 <?php
                              }
                              if ($type==2) {
                                 ?>
                                 <iframe width="100%" height="200px" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 <?php
                              }
                           ?>
                        </div>
                        <div class="blogCardContent">
                           <div class="textContent">
                              <a href="article-details.php?article_id=<?php echo $article_id; ?>"><h3><?php if(!empty($title)){ echo $title; } ?></h3></a>
                              <p><?php if(!empty($description)){ echo substr($description, 0,100); } ?></p>
                           </div>
                           <div class="clearfix"></div>
                           <div class="mt-3">
                             <a href="article-details.php?article_id=<?php echo $article_id; ?>" class="textGreen blogReadMore">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  }
            }else{
               echo "<h6>No blog available</h6>";
            }
            ?>          
         </div>
      </div>
      <!-- <div class="text-center more-btn__box">
         <a href="#" class="thm-btn">Load More</a>
      </div> -->
   </div>
</section>
<?php
}
?>





<?php
   include 'footer.php';
?>
