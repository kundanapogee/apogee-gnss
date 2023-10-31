<?php
  include 'header.php';
?>


      <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-1">
                <div class="col-sm-6 pl-0"> 
                  <div class="page-title-box">
                      <h4 class="mb-sm-0 font-size-18">Add Application Software</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Application Software</li>
                  </ol>
                </div>
              </div>
            </div>
        </section>
        <section class="content">
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">                        
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <div class="d-flex">
                            <div>
                              <a href="#" class="btn btn-primary pdfBtn">PDF</a>
                            </div>
                            <div>
                              <a href="#" class="btn btn-primary excelBtn">Excel</a>
                            </div>
                        </div>             
                    </div>
                </div>
            </div> -->
          <div class="container-fluid">
            <div class="row mt-1">
              <div class="col-md-12">
                <div class="card card-primary myCard mb-0">            
                   <div class="card-body">
                        <div class="mt-1">
                            <form class="myForm" id="myForm" action="backend/applicationSoftwareAdd.php" enctype="multipart/form-data" method="post">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">File Type:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" value="4" name="file_type">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Application Software Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="apk_software_name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Upload Application Software:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control" name="apk_software" >
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group mb-0">
                                    <button class="btn mySubmitBtn" name="submitFormBtn">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </form>    
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




<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          apk_software_name: {
                required: true
            },
          apk_software: {
                required: true
            }
        },
      });
  });
</script>

