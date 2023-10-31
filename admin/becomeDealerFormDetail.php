<?php

if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];

    $is_read= 0;
    $query = $conn->prepare("UPDATE become_dealer SET 
                                    is_read = :is_read where id = :id ");
    $query->bindParam(':is_read',$is_read);
    $query->bindParam(':id',$id);
    $query->execute();

  $query = $conn->prepare("SELECT * From become_dealer where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $company = $value['company'];
          $state = $value['state'];
          $city = $value['city'];
          $street = $value['street'];
          $telephone = $value['telephone'];
          $mobile = $value['mobile'];
          $web = $value['web'];
          $fname = $value['fname'];
          $lname = $value['lname'];
          $full_name = $fname." ".$lname;
          $email = $value['email'];
          $message = $value['message'];
          $is_read = $value['is_read'];
          $created_at = $value['created_at']; 
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
                    <h4 class="mb-sm-0 font-size-18">Become Dealer Form List Detail</h4>
                </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Become Dealer Form List Detail</li>
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
                              <a href="becomeDealerFormList.php" class="btn btn-primary myNewLinkBtn">Go to Become Dealer Form List</a> 
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
                                        <p class="mb-0"><small>Company:</small></p>
                                        <p><strong><?php if(!empty($company)){ echo $company; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>State:</small></p>
                                        <p><strong><?php if(!empty($state)){ echo $state; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>City:</small></p>
                                        <p><strong><?php if(!empty($city)){ echo $city; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Street:</small></p>
                                        <p><strong><?php if(!empty($street)){ echo $street; } ?></strong></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Mobile:</small></p>
                                        <p><strong><?php if(!empty($mobile)){ echo $mobile; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Web:</small></p>
                                        <p><strong><?php if(!empty($web)){ echo $web; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div>
                                        <p class="mb-0"><small>Full Name:</small></p>
                                        <p><strong><?php if(!empty($full_name)){ echo $full_name; } ?></strong></p>
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
                                        <p class="mb-0"><small>Created Date Time</small></p>
                                        <p><strong><?php if(!empty($created_at)){ echo $created_at; } ?></strong></p>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div>
                                        <p class="mb-0"><small>Message:</small></p>
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

