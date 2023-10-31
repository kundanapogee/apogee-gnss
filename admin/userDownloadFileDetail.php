<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From user_download_file where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $name = $value['name'];
          $email = $value['email'];
          $company = $value['company'];
          $download_center_id = $value['download_center_id'];
          $query = $conn->prepare("SELECT * from download_center where id = :id");
          $query->bindParam(':id',$download_center_id);
          $query->execute();
          $result = $query->fetchAll();
          // $fileName = $result[0]['name'];
          if (isset($result[0]['name'])) {
            $fileName = $result[0]['name'];
          }else{
            $fileName = "--------";
          }

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
                    <h4 class="mb-sm-0 font-size-18">User Download File Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">User Download File Detail</li>
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
                              <a href="userDownloadFileList.php" class="btn btn-primary myNewLinkBtn">Go to User Download File List</a> 
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
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>User Name:</small></p>
                                        <p><strong><?php if(!empty($name)){ echo $name; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Email:</small></p>
                                        <p><strong><?php if(!empty($email)){ echo $email; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Company:</small></p>
                                        <p><strong><?php if(!empty($company)){ echo $company; } ?></strong></p>
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>File Name:</small></p>
                                        <p><strong><?php if(!empty($fileName)){ echo $fileName; } ?></strong></p>
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

