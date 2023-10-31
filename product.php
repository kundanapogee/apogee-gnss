<?php
if ((isset($_GET['protypeurl'])) && (!empty($_GET['protypeurl']))) {
  include 'header.php';
  $protypeurl = $_GET['protypeurl'];
  $is_active = 1;
  $query = $conn->prepare("SELECT * From product_type where page_url = :protypeurl && is_active = :is_active");
  $query->bindParam(':protypeurl',$protypeurl);
  $query->bindParam(':is_active',$is_active);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if ($row>0) {
      foreach ($result as $value) {
        $product_type_id = $value['id'];
        $product_type_name = $value['product_type_name'];
      }
   }else{
     header("location:page-not-found.html");
   }

}else{
    header("Location:page-not-found.html");
}

?>





<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></span></li>
         </ul>
      </div>
   </div>
</section>




<section class="sectionPadding pb-0">
   <div class="fullProduct m-0">
      <div class="headerText text-center">
         <p class="mb-2">Our Products</p>
         <h2 sty>What We Deliver</h2>
      </div>
      


<?php  
  $is_active = 1;
  $query = $conn->prepare("SELECT * From product_sub_type where product_type_id = :protypeid && is_active = :is_active order by sequence_no asc");
  $query->bindParam(':protypeid',$product_type_id);
  $query->bindParam(':is_active',$is_active);
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
         <div class="container productBox sectionHead">
            <div class="row bgOverLay">
               <div class="col-md-7 orderTwo">
                  <div class="productBoxInner contentWrap">
                     <h3><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></h3>
                     <h2 class="yellow"><?php if(!empty($front_title)){ echo $front_title; } ?></h2>
                     <div class="textWrap">
                        <p class="mainPara mt-lg-3 "><?php if(!empty($short_description)){ echo $short_description; } ?></p>
                        <div class="exploreBtnWrap">
                           <a href="product-sub-type.php?product_url=<?php echo $page_url; ?>" class="exploreBtn fontFourteen">Explore &nbsp <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="text-center">
                     <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/product/<?php if(!empty($img_icon)){ echo $img_icon; } ?>" >
                  </div>
               </div>
            </div>
         </div>
         <?php
      }
   }
?>
   </div>
</section>





<?php
   include 'footer.php';
?>
