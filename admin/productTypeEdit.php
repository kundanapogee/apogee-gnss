<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From product_type where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $id = $result[0]['id'];
  $main_menu_id = $result[0]['main_menu_id'];
  $product_type_name = $result[0]['product_type_name'];          
  $img_icon = $result[0]['img_icon'];
  $page_url = $result[0]['page_url'];
  $alt = $result[0]['alt'];
  $page_url = $result[0]['page_url'];
  $header_content = $result[0]['header_content'];
  


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
                      <h4 class="mb-sm-0 font-size-18">Edit Product Type</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Product Type</li>
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
                            <form class="myForm" id="myForm" action="backend/productTypeEdit.php" method="post" enctype="multipart/form-data">
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
                                    <label for="inputName">Product Type Icon:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control fileSize" name="img_file" value="<?php if(!empty($img_icon)){ echo $img_icon; } ?>" accept="image/webp," onchange="readURL(this);">
                                  </div>
                                </div>                               
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Product Type Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="product_type_name" value="<?php if(!empty($product_type_name)){ echo $product_type_name; } ?>">
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
                                    <label for="inputName">Header Content:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="header_content" rows="5"><?php if(!empty($header_content)){ echo $header_content; } ?></textarea>
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
                  <img id="blah" src="<?php if (!empty($img_icon)) { echo "../assets/images/menu-category/".$img_icon; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail" />

                  <!-- <img src="../assets/images/menu-category/'.$img_icon.'" style="width: 30px;">                   -->
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
  $(".fileSize").change(function () {
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
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          main_menu_id: {
                required: true
          },
          product_type_name: {
                required: true
          },
          alt: {
                required: true
          },
          page_url: {
                required: true
          }
        },
      });
  });
</script>