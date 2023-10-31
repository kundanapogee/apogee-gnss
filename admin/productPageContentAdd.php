<?php
include 'header.php';

$query = $conn->prepare("SELECT * From product_type order by id desc");
// $query->bindParam(':is_active',$is_active);
$query->execute();
$product_type_result = $query->fetchAll();
$product_type_row = count($product_type_result);

$query = $conn->prepare("SELECT * From product_sub_type order by id desc");
// $query->bindParam(':is_active',$is_active);
$query->execute();
$product_sub_type_result = $query->fetchAll();
$product_sub_type_row = count($product_sub_type_result);


$query = $conn->prepare("SELECT * From content_format");
$query->execute();
$content_format_result = $query->fetchAll();
$content_format_row = count($content_format_result);

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
            <div class="mt-0">
              <form class="myForm" id="myForm" action="backend/productPagecontentAdd.php" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" id="subSubCategory">
                        <label >Product Sub Type Name:<sup class="text-danger">*</sup></label>
                        <select class="form-control" name="product_sub_type_id">
                          <option selected disabled>--Select One--</option>
                          <?php 
                            if ($product_sub_type_row>0) {
                              foreach ($product_sub_type_result as $value) {
                                $product_sub_type_id = $value['id'];
                                $product_sub_type_name = $value['product_sub_type_name'];
                                ?>
                                <option value="<?php echo $product_sub_type_id ?>"><?php echo $product_sub_type_name ?></option>
                                <?php
                              }
                            }
                          ?>
                        </select>
                      </div>
                  </div>                  
                  <div class="col-md-12">                   
                    <div class="form-group" >
                      <label >Select Content Format:<sup class="text-danger">*</sup></label>
                      <select class="form-control" name="content_format_id" onchange="selectContentFormat(this);">
                        <option selected disabled>--Select One--</option>
                        <?php 
                          if($content_format_row>0) {
                            foreach ($content_format_result as $value) {
                              ?>
                              <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                              <?php
                            }
                          }
                        ?>
                      </select>
                    </div>
                  </div>


<!--*********************************************************************************************************************************************************************************************** FULL SIZE IMAGE CODE START ************************************************************************************************************************************************************************************************* -->
      
                <div class="col-md-12" id="fullSizeImg">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label >Full Size Image:<sup class="text-danger">*</sup></label>
                      <input type="file" class="form-control uploadPDF" name="fullSizeImg" accept="image/gif, image/webp," onchange="readURL(this);">
                      <small class="text-danger">Note: Image resolutions will be max 1920*500. Always upload WEBP Type image</small>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Full Size Image Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="full_size_img_alt">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-0">
                      <button class="btn mySubmitBtn" name="fullSizeImgBtn">Submit</button>
                    </div>
                  </div>
                </div>


<!--******************************************************************************************************************************************************************************* FULL SIZE TEXT CODE START *************************************************************************************************************************************************************************************** -->

                  <div class="col-md-12" id="fullSizeText">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Full Size Text Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control summernote1 fullSizeTextDescription" name="full_size_text_description"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="fullSizeTextBtn">Submit</button>
                      </div>
                    </div>
                  </div>

<!--******************************************************************************************************************************************************************************* HALF IMAGE HALF TEXT CODE START ********************************************************************************************************************************************************************************* -->
                  

                  <div class="col-md-12" id="halfImgHalfText">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Side Image :<sup class="text-danger">*</sup></label>
                        <input type="file" class="form-control uploadPDF" name="half_img_half_text_img" accept="image/gif, image/webp," onchange="readURL(this);">
                        <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Side Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_img_half_text_title">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Img Half Text Img Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_img_half_text_img_alt">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Half Side Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control summernote1 halfImgHalfTextDescription " rows="7" name="half_img_half_text_description"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfImgHalfTextBtn">Submit</button>
                      </div>
                    </div>
                  </div>



<!--******************************************************************************************************************************************************************************* BOTH SIDE IMAGE CODE START ************************************************************************************************************************************************************************************* -->


                  <div class="col-md-12" id="bothSideImg">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Both Side Left Image :<sup class="text-danger">*</sup></label>
                        <input type="file" class="form-control uploadPDF" name="both_side_left_img" accept="image/gif, image/webp," onchange="readURL(this);">
                        <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Both Side Left Img Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_left_img_alt">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Both Side Right Image :<sup class="text-danger">*</sup></label>
                        <input type="file" class="form-control uploadPDF" name="both_side_right_img" accept="image/gif, image/webp," onchange="readURL(this);">
                        <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Both Side Right Img Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_right_img_alt">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="bothSideImgBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--******************************************************************************************************************************************************************************* BOTH SIDE TEXT CODE START *************************************************************************************************************************************************************************************** -->


                  <div class="col-md-12" id="bothSideText">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Half Text Side One:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control summernote1 bothSideLeftTextDescription" rows="5" name="both_side_left_text_description"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Half Text Side Two:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control summernote1 bothSideRightTextDescription" rows="5" name="both_side_right_text_description"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="bothSideTextBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--******************************************************************************************************************************************************************************* FULL SIZE VIDEO CODE START *************************************************************************************************************************************************************************************** -->


                  <div class="col-md-12" id="fullVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Full Video Link:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="full_video">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="fullVideotBtn">Submit</button>
                      </div>
                    </div>
                  </div>




<!--******************************************************************************************************************************************************************************* BOTH SIDE VIDEO CODE START ************************************************************************************************************************************************************************************* -->


                  <div class="col-md-12" id="bothSideVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link Left:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_left_video" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link Right:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_right_video" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="bothSideVideoBtn">Submit</button>
                      </div>
                    </div>
                  </div>





<!--************************************************************************************************************************************************************************************************ HALF VIDEO HALF TEXT CODE START **************************************************************************************************************************************************************************************** -->

                  <div class="col-md-12" id="halfVideoHalfText">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_video_half_text_video" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_video_half_text_title" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control halfVideoHalfTextDescription" name="half_video_half_text_description" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfVideoHalfTextBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--*************************************************************************************************************************************************************************************************** HALF TEXT HALF IMG CODE START ****************************************************************************************************************************************************************************************** -->
                  
                  <div class="col-md-12" id="halfTextHalfImg">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Side Image :<sup class="text-danger">*</sup></label>
                        <input type="file" class="form-control uploadPDF" name="half_text_half_img_img" accept="image/gif, image/webp," onchange="readURL(this);">
                        <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Side Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_img_title">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Text Half Img Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_img_img_alt">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Half Side Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control summernote1 halfTextHalfImgDescription " rows="7" name="half_text_half_img_description"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfTextHalfImgBtn">Submit</button>
                      </div>
                    </div>
                  </div>



<!--************************************************************************************************************************************************************************************************ HALF TEXT HALF VIDEO CODE START **************************************************************************************************************************************************************************************** -->

                  <div class="col-md-12" id="halfTextHalfVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_video_video" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_video_title" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control halfTextHalfVideoDescription" name="half_text_half_video_description" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfTextHalfVideoBtn">Submit</button>
                      </div>
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

<!-- 
<script>
  $(document).ready function({
  })
</script> 
-->

<script>
  $("#fullSizeImg").hide();
  $("#fullSizeText").hide();
  $("#halfImgHalfText").hide();
  $("#bothSideImg").hide();
  $("#bothSideText").hide();
  $("#fullVideo").hide();
  $("#bothSideVideo").hide();
  $("#halfVideoHalfText").hide();
  $("#halfTextHalfImg").hide();
  $("#halfTextHalfVideo").hide();

  function selectContentFormat(val){
    var formatValue = val.value;

    // fullSizeImg == 1
    if(formatValue == 1){
      $("#fullSizeImg").show();
      $("#fullSizeText").hide();
      $("#halfImgHalfText").hide();
      $("#bothSideImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // fullSizeText == 2
    if(formatValue == 2){
      $("#fullSizeText").show();
      $("#fullSizeImg").hide();
      $("#halfImgHalfText").hide();
      $("#bothSideImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // halfImgHalfText == 3
    if(formatValue == 3){
      $("#fullSizeText").hide();
      $("#halfImgHalfText").show();      
      $("#fullSizeImg").hide();
      $("#bothSideImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // bothSideImg == 4
    if(formatValue == 4){
      $("#bothSideImg").show();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // bothSideText == 5
    if(formatValue == 5){
      $("#bothSideText").show();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // fullVideo == 6
    if(formatValue == 6){
      $("#fullVideo").show();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // bothSideVideo == 7
    if(formatValue == 7){
      $("#bothSideVideo").show();
      $("#fullVideo").hide();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();      
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();
    }
    // halfVideoHalfText == 8
    if(formatValue == 8){
      $("#halfVideoHalfText").show();
      $("#fullVideo").hide();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideVideo").hide(); 
      $("#halfTextHalfImg").hide();
      $("#halfTextHalfVideo").hide();    
    }
    // halfTextHalfImg == 9
    if(formatValue == 9){
      $("#halfTextHalfImg").show();
      $("#fullVideo").hide();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideVideo").hide();  
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfVideo").hide();   
    }
    // halfTextHalfVideo == 10
    if(formatValue == 10){
      $("#halfTextHalfVideo").show();
      $("#fullVideo").hide();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideVideo").hide();  
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();
    }
    // $("#contentFormat").hide();
    // $("#subSubCategory").show();
  }

// halfTextHalfImg

</script>

<script>
    ClassicEditor
        .create( document.querySelector( '.fullSizeTextDescription' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
    .create( document.querySelector( '.halfImgHalfTextDescription' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.bothSideLeftTextDescription' ) )
    .catch( error => {
        console.error( error );
    } );

     ClassicEditor
    .create( document.querySelector( '.bothSideRightTextDescription' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.halfVideoHalfTextDescription' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.halfTextHalfImgDescription' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '.halfTextHalfVideoDescription' ) )
    .catch( error => {
        console.error( error );
    } );
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
        product_sub_type_id: {
          required: true
        },
        content_format_id: {
          required: true
        },
        fullSizeImg: {
          required: true
        },
        full_size_img_alt: {
          required: true
        },
        full_size_text_description: {
          required: true
        },        
        half_img_half_text_img: {
          required: true
        },        
        half_img_half_text_title: {
          required: true
        },
        half_img_half_text_img_alt: {
          required: true
        },
        half_img_half_text_description: {
          required: true
        },
        both_side_left_img: {
          required: true
        },
        both_side_right_img: {
          required: true
        },
        both_side_left_img_alt: {
          required: true
        },
        both_side_right_img_alt: {
          required: true
        },
        both_side_left_text_description: {
          required: true
        },
        both_side_right_text_description: {
          required: true
        },
        full_video: {
          required: true
        },
        both_side_left_video: {
          required: true
        },
        both_side_right_video: {
          required: true
        },
        half_video_half_text_video: {
          required: true
        },
        half_video_half_text_title: {
          required: true
        },
        half_video_half_text_description: {
          required: true
        },
        half_text_half_img_img: {
          required: true
        },
        half_text_half_img_img_alt: {
          required: true
        },
        half_text_half_img_title: {
          required: true
        },
        half_text_half_img_description: {
          required: true
        },
        half_text_half_video_video: {
          required: true
        },
        half_text_half_video_title: {
          required: true
        },
        half_text_half_video_description: {
          required: true
        }
      },
    });
  });
</script>

                  
                  
                  
                  