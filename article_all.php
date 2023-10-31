<?php
include 'header.php';
if((!empty($_GET['bid']))&&(isset($_GET['bid']))) {
   $bid = $_GET['bid'];
   if ($bid==1) {
      $article_category_name = "Blogs";
   }
   if ($bid==2) {
      $article_category_name = "Event";
   }
}else{
   die();
}

$is_active = 1;
$query = $conn->prepare("SELECT * From article where is_active = :is_active && article_category_id = :article_category_id order by id desc");
$query->bindParam('is_active',$is_active);
$query->bindParam('article_category_id',$article_category_id);
$query->execute();
$result = $query->fetchAll();
$articleRow = count($result);

?>

<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1><?php if(!empty($article_category_name)){ echo $article_category_name; } ?></h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white"><?php if(!empty($article_category_name)){ echo $article_category_name; } ?></span></li>
         </ul>
      </div>
   </div>
</section>



<section class="blogSection sectionPadding pb-4">
   <div class="container">
      <div class="row">
         <?php 
            if ($articleRow>0) {
               foreach ($result as $value) {
                  $bid = $value['id'];
                  $img = $value['img'];
                  $title = $value['title'];
                  $description = $value['description'];
                  ?>
                  <div class="col-md-6 col-lg-4 marginBottom30">
                     <div class="blogCard">
                        <div class="blogCardImage">
                           <a href="article-details.php?bid=<?php echo $bid; ?>">
                           <img src="<?php if(!empty($img)){ echo "assets/images/article/".$img; } ?>" class="w-100">
                           </a>
                        </div>
                        <div class="blogCardContent">
                           <div class="textContent">
                              <a href="article-details.php?bid=<?php echo $bid; ?>"><h3><?php if(!empty($title)){ echo $title; } ?></h3></a>
                              <p><?php if(!empty($description)){ echo substr($description, 0,100); } ?></p>
                           </div>
                           <div class="clearfix"></div>
                           <div class="mt-3">
                             <a href="article-details.php?bid=<?php echo $bid; ?>" class="textGreen blogReadMore">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
               }
            }
         ?>
         
      </div>
      <!-- <div class="text-center more-btn__box">
         <a href="#" class="thm-btn">Load More</a>
      </div> -->
   </div>
</section>





<?php
   include 'footer.php';
?>
