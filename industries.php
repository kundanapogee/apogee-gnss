<?php
if ((isset($_GET['indtypeurl'])) && (!empty($_GET['indtypeurl']))) {     
  include 'header.php';
  $indTypeURL = $_GET['indtypeurl'];
  // $indtypeid = $_GET['indtypeid'];
  $is_active = 1;
  $query = $conn->prepare("SELECT * From industries_type where page_url = :indTypeURL && is_active = :is_active");
  $query->bindParam(':indTypeURL',$indTypeURL);
  $query->bindParam(':is_active',$is_active);
  $query->execute();
  $result = $query->fetchAll();
  // print_r($result);
  $row = count($result);
    if ($row>0) {
      foreach ($result as $value) {
        $industries_type_id = $value['id'];
        $industries_type_name = $value['industries_type_name'];
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
         <h1><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></h1>
         <ul class="d-flex align-items-center justify-content-center">
           <li><a href="index.php" class="text-white">Home</a></li>
           <li class="text-white">&nbsp; / &nbsp;</li>
           <li><span class="text-white"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></span></li>
         </ul>
      </div>
   </div>
</section>





<?php
    $industries_sub_type_id = 0;
    $query = $conn->prepare("SELECT * From industries_page_content where industries_type_id = :industries_type_id and industries_sub_type_id = :industries_sub_type_id ");
    $query->bindParam(':industries_type_id',$industries_type_id);
    $query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
    $query->execute();
    $industries_page_content_result = $query->fetchAll();
    $industries_page_content_row = count($industries_page_content_result);
    if(isset($industries_page_content_row)) {
      if($industries_page_content_row>0) {
          $sr_no = 1;
          foreach($industries_page_content_result as $value) {
            $industries_page_content_id = $value['id'];
            $img = $value['img'];
            $alt = $value['alt'];
            $title = $value['title'];
            $description = $value['description'];
            $industries_type_id = $value['industries_type_id'];
            $industries_sub_type_id = $value['industries_sub_type_id'];
            $is_active = $value['is_active'];

            // $even = $sr_no%2;
            if ($sr_no % 2 == 0){
              ?>
              <section class="sectionPadding sectionHead sectionBgColor">
                 <div class="container">
                    <div class="row">
                       <div class="col-md-6">
                          <div class="text-left">
                             <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/industries/<?php if(!empty($img)){ echo $img; } ?>" >
                          </div>
                       </div>
                       <div class="col-md-6 position-relative">
                          <div class="contentWrap">
                             <div>
                                <h2><?php if(!empty($title)){ echo $title; } ?></h2>
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
                                <h2><?php if(!empty($title)){ echo $title; } ?></h2>
                                <div class="textWrap">
                                   <p class="mb-1"><?php if(!empty($description)){ echo $description; } ?></p>  
                                </div>                 
                             </div>
                          </div>
                           <div class="col-md-6 mb-4">
                             <div class="text-right">
                                <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" src="assets/images/industries/<?php if(!empty($img)){ echo $img; } ?>" class="w-100" >
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
      }else{
        ?>
          <meta http-equiv="refresh" content="0; URL=maintainance.php" />
        <?php
      }
    }

?>






<?php
   $is_active = 1;
    $query = $conn->prepare("SELECT * From industries_sub_type where industries_type_id = :industries_type_id && is_active = :is_active");
    $query->bindParam(':industries_type_id',$industries_type_id);
    $query->bindParam(':is_active',$is_active);
    $query->execute();
    $industries_sub_type_result = $query->fetchAll();
    $industries_sub_type_row = count($industries_sub_type_result);
    if(isset($industries_sub_type_row)) {
      if($industries_sub_type_row>0) {
    ?>
        <section class="sectionPadding sectionHead agreecultureTypeSection sectionBgColor1 pt-0">
          <div class="container">
            <div class="row">
                <?php              
                  foreach($industries_sub_type_result as $value) {
                      $industries_sub_type_id = $value['id'];
                      $img = $value['img_icon'];
                      $alt = $value['alt'];
                      $indSubTypeURL = $value['page_url'];
                      $industries_sub_type_name = $value['industries_sub_type_name'];
                      $is_active = $value['is_active'];
                      ?>            
                      <div class="col-md-4">
                        <a href="industries-sub-type.php?indsubtypeurl=<?php echo $indSubTypeURL; ?>">
                          <div class="text-left textWrap cardIndustries">
                            <div class="card">
                              <img alt="<?php if(!empty($alt)){ echo $alt; } ?>" class="card-img-top w-100" src="assets/images/industries/<?php if(!empty($img)){ echo $img; } ?>">
                              <div class="card-body">
                                <h4 class="card-title"><?php if(!empty($industries_sub_type_name)){ echo $industries_sub_type_name; } ?></h4>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div> 
                    <?php 
                  }                
                ?>                    
              </div>
           </div>
        </section>
    <?php
      }
    }
    ?>



<?php 
include "ask-our-team-form.php";
?>




<?php
   include 'footer.php';
?>
