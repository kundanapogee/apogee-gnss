<?php
  include 'header.php';
  $query = $conn->prepare("SELECT * From product_type order by id desc");
  // $query->bindParam(':is_active',$is_active);
  $query->execute();
  $product_type_result = $query->fetchAll();
  $product_type_row = count($product_type_result);
?>


  <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-1">
                <div class="col-sm-6 pl-0"> 
                  <div class="page-title-box">
                      <h4 class="mb-sm-0 font-size-18">Add Product Sub Type</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Product Sub Type</li>
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
                            <form class="myForm" id="myForm" action="backend/productSubTypeAdd.php" enctype="multipart/form-data" method="post">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Image/Icon:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control uploadPDF" value="1" name="img_file" accept="image/webp," onchange="readURL(this);">
                                    <small class="text-danger">Note: Image resolutions will be 510*482, Always upload WEBP Type image</small>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>product Type Name:<sup class="text-danger">*</sup></label>
                                    <!-- <input type="text" class="form-control" name="category_name"> -->
                                    <select class="form-control" name="product_type_id">
                                      <option selected disabled>-- Select One --</option>
                                      <?php 
                                        if ($product_type_row>0) {
                                          foreach ($product_type_result as $value) {
                                            $product_type_id = $value['id'];
                                            $product_type_name = $value['product_type_name'];
                                            ?>
                                            <option value="<?php echo $product_type_id ?>"><?php echo $product_type_name ?></option>
                                            <?php
                                          }
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Product Sub Type Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="product_sub_type_name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Alt Tag:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="alt">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Page URL:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="page_url">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Front Title:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="front_title">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Brochure/Specification:</label>
                                      <select class="form-control" name="download_center_id">
                                        <option selected disabled>--Select One--</option>
                                        <?php 
                                        $file_type = 1;
                                        $query = $conn->prepare("SELECT * From download_center where file_type = :file_type order by id desc");
                                        $query->bindParam(":file_type",$file_type);
                                        $query->execute();
                                        $download_center_result = $query->fetchAll();
                                        $download_center_row = count($download_center_result);
                                        if ($download_center_row>0) {
                                          foreach ($download_center_result as $value) {
                                            $download_center_id = $value['id'];
                                            $brochure_name = $value['name'];
                                            ?>
                                            <option value="<?php echo $download_center_id ?>"><?php echo $brochure_name ?></option>
                                            <?php
                                          }
                                        }
                                        ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Short Description:<sup class="text-danger">*</sup></label>
                                    <!-- <input type="text" class="form-control" name="short_description"> -->
                                    <textarea class="form-control" name="short_description" rows="5"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Header Content:<sup class="text-danger">*</sup></label>
                                    <!-- <input type="text" class="form-control" name="short_description"> -->
                                    <textarea class="form-control" name="header_content" rows="5"></textarea>
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
                  <img id="blah" src="https://via.placeholder.com/210" alt="your image" class="img-fluid img-thumbnail" /> 
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
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          img_file: {
            required: true
          },
          alt: {
            required: true
          },
          page_url: {
            required: true
          },
          product_type_id: {
            required: true
          },
          product_sub_type_name: {
            required: true
          },
          front_title: {
            required: true
          },
          short_description: {
            required: true
          },
          header_content: {
            required: true
          }
        },
      });
  });
</script>

