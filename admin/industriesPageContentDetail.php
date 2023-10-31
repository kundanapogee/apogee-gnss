<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];

  $query = $conn->prepare("SELECT * From industries_page_content where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $img = $value['img'];
          $title = $value['title'];
          $description = $value['description'];
          $industries_type_id = $value['industries_type_id'];
          $industries_sub_type_id = $value['industries_sub_type_id'];
          $is_active = $value['is_active'];
          $updated_at = $value['updated_at'];
          $created_at = $value['created_at']; 
      }
    }
  }

  $query = $conn->prepare("SELECT * From industries_type where id = :industries_type_id");
  $query->bindParam(':industries_type_id',$industries_type_id);
  $query->execute();
  $result = $query->fetchAll();
  if (isset($result[0]['industries_type_name'])) {
      $industries_type_name = $result[0]['industries_type_name'];
  }
  

  $query = $conn->prepare("SELECT * From industries_sub_type where id = :industries_sub_type_id");
  $query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
  $query->execute();
  $result = $query->fetchAll();
  if (isset($result[0]['industries_sub_type_name'])) {
      $industries_sub_type_name = $result[0]['industries_sub_type_name'];
  }
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
                    <h4 class="mb-sm-0 font-size-18">Industries Page Content Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Industries Page Content Detail</li>
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
                              <a href="industriesPageContentList.php" class="btn btn-primary myNewLinkBtn">Go to Industries Page Content List</a> 
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
                                        <p class="mb-0"><small>Title:</small></p>
                                        <p><strong><?php if(!empty($title)){ echo $title; } ?></strong></p>
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
                                        <p class="mb-0"><small>Industries Type Name:</small></p>
                                        <p><strong><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>Industries Sub Type Name:</small></p>
                                        <p><strong><?php if(!empty($industries_sub_type_name)){ echo $industries_sub_type_name; } ?></strong></p>
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
                                        <p class="mb-0"><small>Description:</small></p>
                                        <p><strong><?php if(!empty($description)){ echo $description; } ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="pl-3">
                  <img id="blah" src="<?php if (!empty($img)) { echo "../assets/images/industries/".$img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail" />    
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>


<?php
  include 'footer.php';
?>

