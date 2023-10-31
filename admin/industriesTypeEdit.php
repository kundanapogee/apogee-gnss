<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From industries_type where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $id = $result[0]['id'];
  $main_menu_id = $result[0]['main_menu_id'];
  $industries_type_name = $result[0]['industries_type_name'];          
  $img_icon = $result[0]['img_icon'];
  $alt = $result[0]['alt'];
  $page_url = $result[0]['page_url'];
  $header_content = $result[0]['header_content'];
  $description = $result[0]['description'];
  $img_icon_white = $result[0]['img_icon_white'];
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
                      <h4 class="mb-sm-0 font-size-18">Edit Industries Type</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Industries Type</li>
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
              <div class="col-md-8">
                <div class="card card-primary myCard mb-0">            
                   <div class="card-body">
                        <div class="mt-1">
                            <form class="myForm" id="myForm" action="backend/industriesTypeEdit.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">Main Menu ID :<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="main_menu_id" value="<?php if(!empty($main_menu_id)){ echo $main_menu_id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Image Icon (Black):<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control uploadPDF" accept="image/webp," name="img_file" onchange="readURL(this);">
                                    <small class="text-danger">Note: Upload only Square Image, maximum resolutions will be 512*512 or less, Always upload WEBP Type image</small>
                                  </div>
                                </div>  
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Image Icon (White):<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control img_file_white" value="1" name="img_icon_white" accept="image/webp," onchange="readURL1(this);">
                                    <small class="text-danger">Note: Upload only Square Image, maximum resolutions will be 512*512 or less, Always upload WEBP Type image</small>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Alt Tag:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="alt" value="<?php if(!empty($alt)){ echo $alt; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Page URL:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="page_url" value="<?php if(!empty($page_url)){ echo $page_url; } ?>">
                                  </div>
                                </div>                            
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Industries Type Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="industries_type_name" value="<?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Header Content:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="header_content" rows="5"><?php if(!empty($header_content)){ echo $header_content; } ?></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Short Description:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="description" rows="5"><?php if(!empty($description)){ echo $description; } ?></textarea>
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
              <div class="col-md-4">
                <div class="pl-3">
                  <img id="blah" src="<?php if (!empty($img_icon)) { echo "../assets/images/menu-category/".$img_icon; }else{ echo "https://via.placeholder.com/210"; } ?>" class="img-fluid img-thumbnail" /> 

                  <img id="img_file_white" src="<?php if (!empty($img_icon_white)) { echo "../assets/images/menu-category/".$img_icon_white; }else{ echo "https://via.placeholder.com/210"; } ?>" class="img-fluid img-thumbnail" />                 
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
   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
   function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_file_white').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
  $(".uploadPDF").change(function () {
    var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
    var sizeLimit= 1024*2;
    if (sizeInMb > sizeLimit) {
      alert("Please upload less then 2 MB files");
      $(this).val("");
    }
  });
</script>

<script>
  $(".img_file_white").change(function () {
    var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
    var sizeLimit= 1024*2;
    if (sizeInMb > sizeLimit) {
      alert("Please upload less then 2 MB files");
      $(this).val("");
    }
  });
</script>
<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          industries_type_name: {
            required: true
          },
          alt: {
            required: true
          },
          page_url: {
            required: true
          },
          header_content: {
            required: true
          },
          description: {
            required: true
          }
        },
      });
  });
</script>

