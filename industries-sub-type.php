<?php
if ((isset($_GET['indsubtypeurl'])) && (!empty($_GET['indsubtypeurl']))) {
  include 'header.php';
  $indSubTypeURL = $_GET['indsubtypeurl'];

  $query = $conn->prepare("SELECT * From industries_sub_type where page_url = :indSubTypeURL");
  $query->bindParam(':indSubTypeURL',$indSubTypeURL);
  $query->execute();
  $result = $query->fetchAll();
  // print_r($result);
  $row = count($result);
    if ($row>0) {
        foreach ($result as $value) {
          $industries_sub_type_id = $value['id'];
          $industries_sub_type_name = $value['industries_sub_type_name'];
      }
    }else{
   header("location:page-not-found.html");
  }
}else{
    header("location:page-not-found.html");
}

?>


<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
         <h1><?php if(!empty($industries_sub_type_name)){ echo $industries_sub_type_name; } ?></h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white"><?php if(!empty($industries_sub_type_name)){ echo $industries_sub_type_name; } ?></span></li>
         </ul>
      </div>
   </div>
</section>


<?php
  $is_active = 1;
  $query = $conn->prepare("SELECT * From industries_page_content where industries_sub_type_id = :industries_sub_type_id && is_active = :is_active");
  $query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
  $query->bindParam(':is_active',$is_active);
  $query->execute();
  $page_body_content_result = $query->fetchAll();
  $page_body_content_row = count($page_body_content_result);
  if(isset($page_body_content_row)) {
    if($page_body_content_row>0) {
        $sr_no = 1;
        foreach($page_body_content_result as $value) {
          $page_body_content_id = $value['id'];
          $img = $value['img'];
          $alt = $value['alt'];
          $title = $value['title'];
          $description = $value['description'];
          // $industries_type_id = $value['industries_type_id'];
          $is_active = $value['is_active'];
          // $even = $sr_no%2;
          if ($sr_no % 2 == 0){
            ?>
            <section class="sectionPadding sectionHead sectionBgColor">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="text-left">
                           <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/industries/<?php if(!empty($img)){ echo $img; } ?>">
                        </div>
                     </div>
                     <div class="col-md-6 position-relative">
                        <div class="contentWrap">
                           <div>
                              <?php if(!empty($title)){ echo "<h2>".$title."</h2>"; } ?>
                           </div>  
                           <div class="textWrap">
                              <p><?php if(!empty($description)){ echo $description; } ?></p>
                           </div> 
                        </div>
                     </div>
                  </div>
               </div>
            </section>              
            <?php
          }else{
            ?>
            <section class="sectionPadding pb-0 sectionHead">
               <div class="fullProductDet m-0">
                  <div class="container productBox">
                     <div class="row bgOverLay1">
                        <div class="col-md-6 orderTwo">
                           <div class="productBoxInner mt-0 pl-0 contentWrap">
                              <?php if(!empty($title)){ echo "<h2>".$title."</h2>"; } ?>
                              <div class="textWrap">
                                 <p class="mb-1"><?php if(!empty($description)){ echo $description; } ?></p>  
                              </div>                 
                           </div>
                        </div>
                         <div class="col-md-6 mb-4">
                           <div class="text-right">
                              <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/industries/<?php if(!empty($img)){ echo $img; } ?>" class="w-100">
                           </div>
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
include "ask-our-team-form.php";
?>




<?php
   include 'footer.php';
?>
