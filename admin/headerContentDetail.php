<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $is_active = 'y';
  $query = $conn->prepare("SELECT * From page_header_content where is_active = :is_active && id = :id");
  $query->bindParam(':is_active',$is_active);
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if(isset($row)) {
    if($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $page_name = $value['page_name'];
          $page_url = $value['page_url'];
          // $gtm_head = $value['gtm_head'];
          // $gtm_body = $value['gtm_body'];
          $header_content = $value['header_content'];
          $updated_at = $value['updated_at'];
          $header_content = htmlspecialchars($header_content, ENT_QUOTES);
      }
    }
  }
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
                    <h4 class="mb-sm-0 font-size-18">Header Content Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Header Content Detail</li>
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
                              <a href="headerContentList.php" class="btn btn-primary myNewLinkBtn">Go to Header Content List</a> 
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
              <div class="col-md-12">
                <div class="card card-primary myCard mb-0">            
                   <div class="card-body">
                        <div class="infoDetail">
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div>
                                        <p class="mb-0"><small>Page Name:</small></p>
                                        <p><strong><?php if(!empty($page_name)){ echo $page_name; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div>
                                        <p class="mb-0"><small>Page URL:</small></p>
                                        <p><strong><?php if(!empty($page_url)){ echo $page_url; } ?></strong></p>
                                    </div>
                                </div>                                
                                <!-- <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>GTM HEAD:</small></p>
                                        <p><strong><?php if(!empty($gtm_head)){ echo $gtm_head; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-0"><small>GTM BODY:</small></p>
                                        <p><strong><?php if(!empty($gtm_body)){ echo $gtm_body; } ?></strong></p>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div>
                                        <p class="mb-0"><small>Description:</small></p>
                                        <p><strong><?php if(!empty($header_content)){ echo $header_content; } ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>
    </div>


<?php
  include 'footer.php';
?>

