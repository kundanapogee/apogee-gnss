<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From contact_form_query where id = :id");
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
          $location = $value['location'];
          $mobile = $value['mobile'];
          $message = $value['message'];
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
                    <h4 class="mb-sm-0 font-size-18">Contact Form Query Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact Form Query Detail</li>
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
                              <a href="contactFormQueryList.php" class="btn btn-primary myNewLinkBtn">Go to Contact Form Query List</a> 
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
                                        <p class="mb-0"><small>Name:</small></p>
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
                                        <p class="mb-0"><small>Location:</small></p>
                                        <p><strong><?php if(!empty($location)){ echo $location; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Mobile:</small></p>
                                        <p><strong><?php if(!empty($mobile)){ echo $mobile; } ?></strong></p>
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <div>
                                        <p class="mb-0"><small>Description:</small></p>
                                        <p><strong><?php if(!empty($message)){ echo $message; } ?></strong></p>
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

