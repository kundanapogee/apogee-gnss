<?php
  if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    include 'header.php';
    $id = $_GET['id'];
    $file_type = 1;
    $query = $conn->prepare("SELECT * From download_center where file_type = :file_type &&  id = :id");
    $query->bindParam(':file_type',$file_type);
    $query->bindParam(':id',$id);
    $query->execute();
    $result = $query->fetchAll();
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $file_name = $result[0]['file_name']; 
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
                      <h4 class="mb-sm-0 font-size-18">Edit Brochure</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Brochure</li>
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
                            <form class="myForm" id="myForm" action="backend/brochureEdit.php" enctype="multipart/form-data" method="post">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Brochure Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="name" value="<?php if(!empty($name)){ echo $name; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Upload File:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control uploadPDF" name="pdf_file"  accept="application/pdf">
                                    <small class="text-danger">Note: please upload less then 3 mb file.</small>
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
  $(".uploadPDF").change(function () {
    var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
    var sizeLimit= 1024*3;
    if (sizeInMb > sizeLimit) {
      alert("Please upload less then 3 MB files");
      $(this).val("");
    }
  });
</script>

<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          name: {
                required: true
            }
        },
      });
  });
</script>

