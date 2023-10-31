<?php
if((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From industries_page_content where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $id = $result[0]['id'];
  $img_icon = $result[0]['img'];
  $alt = $result[0]['alt'];
  $title = $result[0]['title'];
  $description = $result[0]['description'];   
  $industries_type_id = $result[0]['industries_type_id'];
  $industries_sub_type_id = $result[0]['industries_sub_type_id'];

  $query = $conn->prepare("SELECT * From industries_type where id = :id");
  $query->bindParam('id',$industries_type_id);
  $query->execute();
  $result = $query->fetchAll();
  $industries_type_name = $result[0]['industries_type_name'];


  // if ((isset($sub_sub_category_id)) && (!empty($sub_sub_category_id))) {
  //   $query = $conn->prepare("SELECT * From sub_sub_category where id = :id");
  //   $query->bindParam('id',$sub_sub_category_id);
  //   $query->execute();
  //   $result = $query->fetchAll();
  //   $sub_sub_category_name = $result[0]['sub_sub_category_name'];
  // }else{
  //   $sub_sub_category_name = "-----";
  // }  


  

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
                      <h4 class="mb-sm-0 font-size-18">Edit Industries Page Content</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Industries Page Content</li>
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
                            <form class="myForm" id="myForm" action="backend/industriesPageContentEdit.php" enctype="multipart/form-data" method="post">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label>ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12" style="padding: 10px 15px 2px;">
                                  <label class="radio-inline">
                                    <input style="zoom:2;vertical-align: middle;" type="radio" name="optradio" id="subCatChecked" onclick="selectSubCat()"> <span style="vertical-align: middle;"> Industries Type</span>
                                  </label>
                                  <label class="radio-inline ml-2">
                                    <input style="zoom:2;vertical-align: middle;" type="radio" name="optradio" id="subSubCatChecked" onclick="selectSubSubCat()"> <span style="vertical-align: middle;"> Industries Sub Type</span>
                                  </label>
                                </div>
                                <div class="col-md-12" id="sub_categoryBox">
                                  <div class="form-group">
                                    <label>Select Industries Type:<sup class="text-danger">*</sup></label>
                                    <select class="form-control" name="industries_type_id">
                                      <option selected disabled>--Select One--</option>
                                      <?php 
                                        $query = $conn->prepare("SELECT * From industries_type order by id desc");
                                        $query->execute();
                                        $industries_type_result = $query->fetchAll();
                                        $industries_type_row = count($industries_type_result);
                                        if ($industries_type_row>0) {
                                          foreach ($industries_type_result as $value) {
                                            $ind_type_id = $value['id'];
                                            $industries_type_name = $value['industries_type_name'];
                                            ?>
                                            <option value="<?php echo $ind_type_id ?>" <?php if($industries_type_id==$ind_type_id){ echo "selected"; } ?> ><?php echo $industries_type_name ?></option>
                                            <?php
                                          }
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-12" id="sub_sub_categoryBox">
                                  <div class="form-group">
                                    <label>Select Sub Industries Type:<sup class="text-danger">*</sup></label>
                                    <select class="form-control" name="industries_sub_type_id">
                                      <option selected disabled>--Select One--</option>
                                      <?php
                                        $query = $conn->prepare("SELECT * From industries_sub_type order by id desc");
                                        $query->execute();
                                        $industries_sub_type_result = $query->fetchAll();
                                        $industries_sub_type_row = count($industries_sub_type_result);                                         
                                        if ($industries_sub_type_row>0) {
                                          foreach ($industries_sub_type_result as $value) {
                                            $ind_sub_type_id = $value['id'];
                                            $industries_sub_type_name = $value['industries_sub_type_name'];
                                            ?>
                                            <option value="<?php echo $ind_sub_type_id ?>" <?php if($industries_sub_type_id==$ind_sub_type_id){ echo "selected"; } ?> ><?php echo $industries_sub_type_name ?></option>
                                            <?php
                                          }
                                        }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Image/Icon:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control uploadPDF" value="1" name="img_file" onchange="readURL(this);">
                                    <small class="text-danger">Note: Image resolutions will be 510*410, Always upload WEBP Type image</small>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Alt Tag:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="alt" value="<?php if(!empty($alt)){ echo $alt; } ?>">
                                  </div>
                                </div> 
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Title:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="title" value="<?php if(!empty($title)){ echo $title; } ?>">
                                  </div>
                                </div>                                
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Description:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="description" rows="6"><?php if(!empty($description)){ echo $description; } ?></textarea>
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
                  <img id="blah" src="<?php if (!empty($img_icon)) { echo "../assets/images/industries/".$img_icon; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail" />    
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
      reader.onload = function (e){
        $('#blah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}
</script>



<script>
  var industries_sub_type_id = "<?php echo $industries_sub_type_id; ?>";
  if (industries_sub_type_id==0) {
    $("#sub_sub_categoryBox").hide();
    $("#subCatChecked").prop("checked", true);
  }else{
    $("#sub_categoryBox").hide();
    $("#subSubCatChecked").prop("checked", true);
  }
</script>



<script>
  function selectSubCat(){
    $("#sub_sub_categoryBox").hide();
    $("#sub_categoryBox").show();
  }
  function selectSubSubCat(){
    $("#sub_categoryBox").hide();
    $("#sub_sub_categoryBox").show();
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
  $(document).ready(function(){
    $("#myForm").validate({
      rules :{
        alt: {
          required: true
        },
        industries_type_id: {
          required: true
        },
        industries_sub_type_id: {
          required: true
        },
        industries_type_id: {
          required: true
        },
        industries_sub_type_id: {
          required: true
        },
        description: {
          required: true
        }
      },
    });
  });
</script>

