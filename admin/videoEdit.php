<?php
  if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    include 'header.php';
    $id = $_GET['id'];
    $file_type = 3;
    $query = $conn->prepare("SELECT * From download_center where file_type = :file_type &&  id = :id");
    $query->bindParam(':file_type',$file_type);
    $query->bindParam(':id',$id);
    $query->execute();
    $result = $query->fetchAll();
    $id = $result[0]['id'];
    $video_title = $result[0]['video_title'];
    $video_link = $result[0]['video_link']; 
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
                      <h4 class="mb-sm-0 font-size-18">Edit Video Download Center</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Video Download Center</li>
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
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mt-1">
                              <form class="myForm" id="myForm" action="backend/videoEdit.php" enctype="multipart/form-data" method="post">
                                <div class="row">
                                  <div class="col-md-12 d-none">
                                    <div class="form-group">
                                      <label>ID:<sup class="text-danger">*</sup></label>
                                      <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Video Title:<sup class="text-danger">*</sup></label>
                                      <input type="text" class="form-control" name="video_title" value="<?php if(!empty($video_title)){ echo $video_title; } ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Video Link:<sup class="text-danger">*</sup></label>
                                      <input type="text" class="form-control" name="video_link" value="<?php if(!empty($video_link)){ echo $video_link; } ?>">
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
                        <div class="col-md-4">
                          <!-- <iframe width="100%" height="180" src="<?php if(isset($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
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

<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          video_title: {
            required: true
          },
          video_link: {
            required: true
          }
        },
      });
  });
</script>

