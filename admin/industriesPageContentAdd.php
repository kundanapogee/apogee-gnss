<?php
include 'header.php';

$query = $conn->prepare("SELECT * From industries_type order by id desc");
// $query->bindParam(':is_active',$is_active);
$query->execute();
$industries_type_result = $query->fetchAll();
$industries_type_row = count($industries_type_result);

$query = $conn->prepare("SELECT * From industries_sub_type order by id desc");
// $query->bindParam(':is_active',$is_active);
$query->execute();
$industries_sub_type_result = $query->fetchAll();
$industries_sub_type_row = count($industries_sub_type_result);

?>


<div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm-6 pl-0"> 
          <div class="page-title-box">
            <h4 class="mb-sm-0 font-size-18">Add Page Content</h4>
          </div>                      
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Page Content</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row mt-1">
        <div class="col-md-8">
          <div class="card card-primary myCard mb-0">            
           <div class="card-body">
            <div class="mt-1">
              <form class="myForm" id="myForm" action="backend/industriesPagecontentAdd.php" enctype="multipart/form-data" method="post">
                <div class="row">

                  <div class="col-md-12" style="padding: 10px 15px 2px;">
                    <label class="radio-inline">
                      <input style="zoom:2;vertical-align: middle;" type="radio" name="optradio" checked onclick="selectSubCat()"> <span style="vertical-align: middle;">Industries Type</span>
                    </label>
                    <label class="radio-inline ml-2">
                      <input style="zoom:2;vertical-align: middle;" type="radio" name="optradio" onclick="selectSubSubCat()"> <span style="vertical-align: middle;"> Industries Sub Type</span>
                    </label>
                  </div>

                  <div class="col-md-12 mt-3" >
                    <div class="form-group" id="subCategory">
                      <label for="inputName">Industries Type Name:<sup class="text-danger">*</sup></label>
                      <select class="form-control" name="industries_type_id">
                        <option selected disabled>--Select One--</option>
                        <?php 
                        if ($industries_type_row>0) {
                          foreach ($industries_type_result as $value) {
                            $industries_type_id = $value['id'];
                            $industries_type_name = $value['industries_type_name'];
                            ?>
                            <option value="<?php echo $industries_type_id ?>"><?php echo $industries_type_name ?></option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group" id="subSubCategory">
                      <label for="inputName">Industries Sub Type Name:<sup class="text-danger">*</sup></label>
                      <select class="form-control" name="industries_sub_type_id">
                        <option selected disabled>--Select One--</option>
                        <?php 
                        if ($industries_sub_type_row>0) {
                          foreach ($industries_sub_type_result as $value) {
                            $industries_sub_type_id = $value['id'];
                            $industries_sub_type_name = $value['industries_sub_type_name'];
                            ?>
                            <option value="<?php echo $industries_sub_type_id ?>"><?php echo $industries_sub_type_name ?></option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputName">Title:<sup class="text-danger">*</sup></label>
                      <input type="text" class="form-control" name="title">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputName">Image:<sup class="text-danger">*</sup></label>
                      <input type="file" class="form-control uploadPDF" name="featureImg" accept="image/webp," onchange="readURL(this);">
                      <small class="text-danger">Note: Upload only Square Image, maximum resolutions will be 510*410 or less, Always upload WEBP Type image</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputName">Alt Tag:<sup class="text-danger">*</sup></label>
                      <input type="text" class="form-control" name="alt">
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputDescription">Description:<sup class="text-danger">*</sup></label>
                      <textarea class="form-control summernote1" rows="7" name="description"></textarea>
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
  $("#subSubCategory").hide();
  function selectSubCat(){
    $("#subSubCategory").hide();
    $("#subCategory").show();
  }
  function selectSubSubCat(){
    $("#subCategory").hide();
    $("#subSubCategory").show();
  }
</script>


<script>
  $(document).ready(function(){
    $("#myForm").validate({
      rules :{
        industries_type_id: {
          required: true
        },
        industries_sub_type_id: {
          required: true
        },
        sub_category_id: {
          required: true
        },        
        featureImg: {
          required: true
        },
        description: {
          required: true
        }
      },
    });
  });
</script>

