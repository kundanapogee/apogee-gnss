<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];

  $query = $conn->prepare("SELECT * From product_sub_type where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $img_icon = $value['img_icon'];
          $alt = $value['alt'];
          $product_sub_type_name = $value['product_sub_type_name'];
          $product_type_id = $value['product_type_id'];
          $front_title = $value['front_title'];
          $short_description = $value['short_description'];
          $header_content = $value['header_content'];
          $is_active = $value['is_active'];
          $updated_at = $value['updated_at'];
          $created_at = $value['created_at']; 
      }
    }
  }

  $query = $conn->prepare("SELECT * From product_type where id = :product_type_id");
  $query->bindParam(':product_type_id',$product_type_id);
  $query->execute();
  $result = $query->fetchAll();
  if (isset($result[0]['product_type_name'])) {
      $product_type_name = $result[0]['product_type_name'];
  }
  // $query = $conn->prepare("SELECT * From product_sub_type where id = :industries_sub_type_id");
  // $query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
  // $query->execute();
  // $result = $query->fetchAll();
  // if (isset($result[0]['industries_sub_type_name'])) {
  //     $industries_sub_type_name = $result[0]['industries_sub_type_name'];
  // }
  // $industries_sub_type_name = $result[0]['industries_sub_type_name'];
}else{
    die();
}
?>



    <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-1">
                <div class="col-sm-6 pl-0"> 
                <div class="page-title-box">
                    <h4 class="mb-sm-0 font-size-18">Product Sub Type Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Product Sub Type Detail</li>
                  </ol>
                </div>
              </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="d-flex">
                            <div>
                              <a href="productSubTypeList.php" class="btn btn-primary myNewLinkBtn">Go to Product Sub Type List</a> 
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <!-- <div class="d-flex">
                            <div>
                              <a href="#" class="btn btn-primary pdfBtn">PDF</a>
                            </div>
                            <div>
                              <a href="#" class="btn btn-primary excelBtn">Excel</a>
                            </div>
                        </div>  -->            
                    </div>
                </div>
            </div>
          <div class="container-fluid">
            <div class="row mt-0">
              <div class="col-md-8">
                <div class="card card-primary myCard mb-0">            
                   <div class="card-body">
                        <div class="infoDetail">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Product Sub Type Name:</small></p>
                                        <p><strong><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Product Type Name:</small></p>
                                        <p><strong><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Front Title:</small></p>
                                        <p><strong><?php if(!empty($front_title)){ echo $front_title; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Alt Tag:</small></p>
                                        <p><strong><?php if(!empty($alt)){ echo $alt; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Is Active:</small></p>
                                        <p><strong><?php if(!empty($is_active)){ echo '<span class="bg-success text-white px-3 rounded">Active</span>'; }else{ echo '<span class="bg-danger text-white px-3 rounded">Deactive</span>'; } ?></strong></p>
                                    </div>
                                </div>  
                                <div class="col-md-12">
                                    <div>
                                        <p class="mb-0"><small>Short Description:</small></p>
                                        <p><strong><?php if(!empty($short_description)){ echo $short_description; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div>
                                        <p class="mb-0"><small>Header Content:</small></p>
                                        <p><strong><?php if(!empty($header_content)){ echo $header_content; } ?></strong></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                   </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="pl-3">
                  <img id="blah" src="<?php if (!empty($img_icon)) { echo "../assets/images/product/".$img_icon; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail" />    
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>


<?php
  include 'footer.php';
?>

