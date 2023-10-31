<?php
if((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $product_page_content_id = $_GET['id'];


  $query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
  $query->bindParam(':id',$product_page_content_id);
  $query->execute();
  $result = $query->fetchAll();
  // $id = $result[0]['id'];
  $content_format_id = $result[0]['content_format_id'];
  $full_size_img = $result[0]['full_size_img'];
  $full_size_img_alt = $result[0]['full_size_img_alt'];
  $full_size_img_title = $result[0]['full_size_img_title'];   
  $full_size_img_description = $result[0]['full_size_img_description'];
  $full_size_text_title = $result[0]['full_size_text_title'];

  $full_size_text_description = $result[0]['full_size_text_description'];
  $half_img_half_text_img = $result[0]['half_img_half_text_img'];
  $half_img_half_text_img_alt = $result[0]['half_img_half_text_img_alt'];
  $half_img_half_text_title = $result[0]['half_img_half_text_title'];
  $half_img_half_text_description = $result[0]['half_img_half_text_description'];

  $both_side_left_img = $result[0]['both_side_left_img'];
  $both_side_left_img_alt = $result[0]['both_side_left_img_alt'];
  $both_side_left_img_title = $result[0]['both_side_left_img_title'];
  $both_side_left_img_description = $result[0]['both_side_left_img_description'];
  $both_side_right_img = $result[0]['both_side_right_img'];
  $both_side_right_img_alt = $result[0]['both_side_right_img_alt'];
  $both_side_right_img_title = $result[0]['full_size_text_title'];
  $both_side_right_img_description = $result[0]['full_size_text_title'];
  $both_side_left_text_title = $result[0]['both_side_left_text_title'];
  $both_side_left_text_description = $result[0]['both_side_left_text_description'];
  $full_video = $result[0]['full_video'];

  $both_side_left_video = $result[0]['both_side_left_video'];
  $both_side_right_video = $result[0]['both_side_right_video'];
  $half_video_half_text_video = $result[0]['half_video_half_text_video'];
  $half_video_half_text_title = $result[0]['half_video_half_text_title'];
  $half_video_half_text_description = $result[0]['half_video_half_text_description'];

  $both_side_right_text_title = $result[0]['both_side_right_text_title'];
  $both_side_right_text_description = $result[0]['both_side_right_text_description'];

  $half_text_half_img_img = $result[0]['half_text_half_img_img'];
  $half_text_half_img_img_alt = $result[0]['half_text_half_img_img_alt'];
  $half_text_half_img_title = $result[0]['half_text_half_img_title'];
  $half_text_half_img_description = $result[0]['half_text_half_img_description'];

  $half_text_half_video_video = $result[0]['half_text_half_video_video'];
  $half_text_half_video_title = $result[0]['half_text_half_video_title'];
  $half_text_half_video_description = $result[0]['half_text_half_video_description'];

  $product_type_id = $result[0]['product_type_id'];
  $product_sub_type_id = $result[0]['product_sub_type_id'];
  $is_active = $result[0]['is_active'];
  $created_at = $result[0]['created_at'];
  $updated_at = $result[0]['updated_at'];


  // $query = $conn->prepare("SELECT * From product_type where id = :id");
  // $query->bindParam('id',$product_type_id);
  // $query->execute();
  // $result = $query->fetchAll();
  // $product_type_name = $result[0]['product_type_name'];


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
                      <h4 class="mb-sm-0 font-size-18">Edit product Page Content</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit product Page Content</li>
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
                         <form class="myForm" id="myForm" action="backend/productPagecontentEdit.php" enctype="multipart/form-data" method="post">
                          <div class="row">
                            <div class="col-md-12 d-none">
                              <div class="form-group">
                                <input type="text" class="form-control" name="product_page_content_id" value="<?php if(!empty($product_page_content_id)){ echo $product_page_content_id; } ?>" >
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group" id="subSubCategory">
                                  <label for="inputName">Product Sub Type Name:<sup class="text-danger">*</sup></label>
                                  <select class="form-control" name="product_sub_type_id">
                                    <option selected disabled>--Select One--</option>
                                    <?php 
                                    $query = $conn->prepare("SELECT * From product_sub_type order by id desc");
                                    $query->execute();
                                    $product_sub_type_result = $query->fetchAll();
                                    $product_sub_type_row = count($product_sub_type_result);
                                      if ($product_sub_type_row>0) {
                                        foreach ($product_sub_type_result as $value) {
                                          $productSubTypeID = $value['id'];
                                          $product_sub_type_name = $value['product_sub_type_name'];
                                          ?>
                                          <option value="<?php echo $product_sub_type_id ?>" <?php if($productSubTypeID==$product_sub_type_id){ echo "selected"; } ?> ><?php echo $product_sub_type_name ?></option>
                                          <?php
                                        }
                                      }
                                    ?>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-12">                   
                              <div class="form-group" >
                                <label for="inputName">Select Content Format:<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="content_format_id" onchange="selectContentFormat(this);">
                                  <option selected disabled>--Select One--</option>
                                  <?php
                                  $query = $conn->prepare("SELECT * From content_format");
                                  $query->execute();
                                  $content_format_result = $query->fetchAll();
                                  $content_format_row = count($content_format_result);
                                    if($content_format_row>0) {
                                      foreach ($content_format_result as $value) {
                                        $contentFormatID = $value['id'];
                                        ?>
                                        <option value="<?php echo $value['id']; ?>" <?php if($contentFormatID == $content_format_id){ echo "selected"; } ?> ><?php echo $value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                  ?>
                                </select>
                              </div>
                            </div>



<!--******************************************************************************************************************************************************************************************** FULL SIZE IMAGE CODE START**************************************************************************************************************************************************************************************************** -->

                            
                            <div class="col-md-12" id="fullSizeImg">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputName">Full Size Image:<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control uploadPDF" name="fullSizeImg" accept="image/gif, image/webp," onchange="fullSizeImgBlah(this);">
                                  <small class="text-danger">Note: Image resolutions will be max 1920*500. Always upload WEBP Type image</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label >Full Size Image Alt Tag:<sup class="text-danger">*</sup></label>
                                  <input type="text" class="form-control" name="full_size_img_alt" value="<?php if(!empty($full_size_img_alt)){ echo $full_size_img_alt; } ?>" >
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <button class="btn mySubmitBtn" name="fullSizeImgBtn">Submit</button>
                                </div>
                              </div>
                            </div>


<!--************************************************************************************************************************************************************************************************ FULL SIZE TEXT CODE START ************************************************************************************************************************************************************************************************ -->


                            <div class="col-md-12" id="fullSizeText">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputDescription">Full Size Text Description:<sup class="text-danger">*</sup></label>
                                  <textarea class="form-control fullSizeTextDescription" rows="5" name="full_size_text_description">
                                     <?php if(!empty($full_size_text_description)){ echo $full_size_text_description; } ?>
                                  </textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <button class="btn mySubmitBtn" name="fullSizeTextBtn">Submit</button>
                                </div>
                              </div>
                            </div>


<!--************************************************************************************************************************************************************************************************ HALF IMAGE HALF TEXT CODE START ****************************************************************************************************************************************************************************************** -->
                            


                            <div class="col-md-12" id="halfImgHalfText">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputName">Half Side Image :<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control uploadPDF" name="half_img_half_text_img" accept="image/gif, image/webp," onchange="halfImgHalfTextImgBlah(this);">
                                  <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputName">Half Side Title:<sup class="text-danger">*</sup></label>
                                  <input type="text" class="form-control" name="half_img_half_text_title" value="<?php if(!empty($half_img_half_text_title)){ echo $half_img_half_text_title; } ?>" >
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label >Half Img Half Text Img Alt Tag:<sup class="text-danger">*</sup></label>
                                  <input type="text" class="form-control" name="half_img_half_text_img_alt" value="<?php if(!empty($half_img_half_text_img_alt)){ echo $half_img_half_text_img_alt; } ?>" >
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputDescription">Half Side Description:<sup class="text-danger">*</sup></label>
                                  <textarea class="form-control halfImgHalfTextDescription" rows="7" name="half_img_half_text_description">
                                    <?php if(!empty($half_img_half_text_description)){ echo $half_img_half_text_description; } ?>
                                  </textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <button class="btn mySubmitBtn" name="halfImgHalfTextBtn">Submit</button>
                                </div>
                              </div>
                            </div>



<!--******************************************************************************************************************************************************************************** BOTH SIDE IMAGE CODE START **************************************************************************************************************************************************************************************-->


                            <div class="col-md-12" id="bothSideImg">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputName">Both Side Left Image :<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control uploadPDF" name="both_side_left_img" accept="image/gif, image/webp," onchange="bothSideLeftImgBlah(this);">
                                  <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label >Both Side Left Img Alt Tag:<sup class="text-danger">*</sup></label>
                                  <input type="text" class="form-control" name="both_side_left_img_alt" value="<?php if(!empty($both_side_left_img_alt)){ echo $both_side_left_img_alt; } ?>" >
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputName">Both Side Right Image :<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control uploadPDF" name="both_side_right_img" accept="image/gif, image/webp," onchange="bothSideRightImgBlah(this);">
                                  <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label >Both Side Right Img Alt Tag:<sup class="text-danger">*</sup></label>
                                  <input type="text" class="form-control" name="both_side_right_img_alt" value="<?php if(!empty($both_side_right_img_alt)){ echo $both_side_right_img_alt; } ?>" >
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
                                  <label for="inputDescription">Half Text Side One:<sup class="text-danger">*</sup></label>
                                  <textarea class="form-control bothSideLeftTextDescription" rows="5" name="both_side_left_text_description">
                                    <?php if(!empty($both_side_left_text_description)){ echo $both_side_left_text_description; } ?>
                                  </textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="inputDescription">Half Text Side Two:<sup class="text-danger">*</sup></label>
                                  <textarea class="form-control bothSideRightTextDescription" rows="5" name="both_side_right_text_description">
                                    <?php if(!empty($both_side_right_text_description)){ echo $both_side_right_text_description; } ?>
                                  </textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <button class="btn mySubmitBtn" name="bothSideTextBtn">Submit</button>
                                </div>
                              </div>
                            </div>



<!--******************************************************************************************************************************************************************************* FULL SIZE VIDEO CODE START ************************************************************************************************************************************************************************************** -->


                  <div class="col-md-12" id="fullVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="inputDescription">Full Video Link:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="full_video" value="<?php if(!empty($full_video)){ echo $full_video; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="fullVideotBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--******************************************************************************************************************************************************************************* BOTH SIDE VIDEO CODE START ************************************************************************************************************************************************************************************** -->

                  <div class="col-md-12" id="bothSideVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link Left:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_left_video" value="<?php if(!empty($both_side_left_video)){ echo $both_side_left_video; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link Right:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="both_side_right_video" value="<?php if(!empty($both_side_right_video)){ echo $both_side_right_video; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="bothSideVideoBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--******************************************************************************************************************************************************************************* HALF VIDEO HALF TEXT CODE START ********************************************************************************************************************************************************************************* -->

                  <div class="col-md-12" id="halfVideoHalfText">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link:<sup class="text-danger">*</sup></label>
                         <input type="text" class="form-control" name="half_video_half_text_video" value="<?php if(!empty($half_video_half_text_video)){ echo $half_video_half_text_video; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_video_half_text_title" value="<?php if(!empty($half_video_half_text_title)){ echo $half_video_half_text_title; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control halfVideoHalfTextDescription" name="half_video_half_text_description" rows="4"> <?php if(!empty($half_video_half_text_description)){ echo $half_video_half_text_description; } ?> </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfVideoHalfTextBtn">Submit</button>
                      </div>
                    </div>
                  </div>


<!--*******************************************************************************************************************************************************************************HALF TEXT HALF IMAGE CODE START********************************************************************************************************************************************************************************* -->
                
                  <div class="col-md-12" id="halfTextHalfImg">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="inputName">Half Side Image :<sup class="text-danger">*</sup></label>
                        <input type="file" class="form-control uploadPDF" name="half_text_half_img_img" accept="image/gif, image/webp," onchange="halfTextHalfImgImgBlah(this);">
                        <small class="text-danger">Note: Image resolutions will be 800*750. Always upload WEBP Type image</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="inputName">Half Side Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_img_title" value="<?php if(!empty($half_text_half_img_title)){ echo $half_text_half_img_title; } ?>" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Half Text Half Img Alt Tag:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_img_img_alt" value="<?php if(!empty($half_text_half_img_img_alt)){ echo $half_text_half_img_img_alt; } ?>" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Half Side Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control halfTextHalfImgDescription" rows="5" name="half_text_half_img_description">
                          <?php if(!empty($half_text_half_img_description)){ echo $half_text_half_img_description; } ?>
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-0">
                        <button class="btn mySubmitBtn" name="halfTextHalfImgBtn">Submit</button>
                      </div>
                    </div>
                  </div>



<!--******************************************************************************************************************************************************************************* HALF TEXT HALF VIDEO CODE START ********************************************************************************************************************************************************************************* -->

                  <div class="col-md-12" id="halfTextHalfVideo">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Video Link:<sup class="text-danger">*</sup></label>
                         <input type="text" class="form-control" name="half_text_half_video_video" value="<?php if(!empty($half_text_half_video_video)){ echo $half_text_half_video_video; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="half_text_half_video_title" value="<?php if(!empty($half_text_half_video_title)){ echo $half_text_half_video_title; } ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control halfTextHalfVideoDescription" name="half_text_half_video_description" rows="4"> <?php if(!empty($half_text_half_video_description)){ echo $half_text_half_video_description; } ?> </textarea>
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
                  <?php 
                    if (!empty($full_size_img)) {
                      ?>
                      <div id="fullSizeImgWrap">
                        <img id="fullSizeImgBlah" src="<?php if (!empty($full_size_img)) { echo "../assets/images/product/".$full_size_img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail mb-3" />
                      </div>                      
                      <?php
                    }
                    if (!empty($half_img_half_text_img)) {
                      ?>
                      <div id="halfImgHalfTextImgWrap">
                        <img id="halfImgHalfTextImgBlah" src="<?php if (!empty($half_img_half_text_img)) { echo "../assets/images/product/".$half_img_half_text_img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail mb-3" />
                      </div>
                      <?php
                    }                    
                    if (!empty($both_side_left_img)) {
                      ?>
                      <div id="bothSideLeftImgWrap">
                        <img id="bothSideLeftImgBlah" src="<?php if (!empty($both_side_left_img)) { echo "../assets/images/product/".$both_side_left_img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail mb-3" />
                      </div>
                      <?php
                    }
                    if (!empty($both_side_right_img)) {
                      ?>
                      <div id="bothSideRightImgWrap">
                        <img id="bothSideRightImgBlah" src="<?php if (!empty($both_side_right_img)) { echo "../assets/images/product/".$both_side_right_img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail mb-3" />
                      </div>
                      <?php
                    }
                    if (!empty($half_text_half_img_img)) {
                      ?>
                      <div id="halfTextHalfImgImgWrap">
                        <img id="halfTextHalfImgImgBlah" src="<?php if (!empty($half_text_half_img_img)) { echo "../assets/images/product/".$half_text_half_img_img; }else{ echo "https://via.placeholder.com/210"; } ?>" alt="your image" class="img-fluid img-thumbnail mb-3" />
                      </div>
                      <?php
                    }
                  ?>                      
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

  $("#fullSizeImgWrap").hide();
  $("#halfImgHalfTextImgWrap").hide();
  $("#bothSideLeftImgWrap").hide();
  $("#bothSideRightImgWrap").hide();
  $("#halfTextHalfImgImgWrap").hide(); 


  <?php 
    if($content_format_id == 1){
      ?>
          $("#fullSizeImg").show();
          $("#fullSizeImgWrap").show();
      <?php
    }elseif($content_format_id == 2){
      ?>
          $("#fullSizeText").show();
      <?php
    }elseif($content_format_id == 3){
      ?>
          $("#halfImgHalfText").show();
          $("#halfImgHalfTextImgWrap").show();
      <?php
    }elseif($content_format_id == 4){
      ?>
          $("#bothSideImg").show();
          $("#bothSideLeftImgWrap").show();
          $("#bothSideRightImgWrap").show();
      <?php
    }elseif($content_format_id == 5){
      ?>
          $("#bothSideText").show();
      <?php
    }elseif($content_format_id == 6){
      ?>
          $("#fullVideo").show();
      <?php
    }elseif($content_format_id == 7){
      ?>
          $("#bothSideVideo").show();
      <?php
    }elseif($content_format_id == 8){
      ?>
          $("#halfVideoHalfText").show();
      <?php
    }elseif($content_format_id == 9){
      ?>
          $("#halfTextHalfImg").show();
          $("#halfTextHalfImgImgWrap").show();
      <?php
    }elseif($content_format_id == 10){
      ?>
          $("#halfTextHalfVideo").show();
      <?php
    }
    else{

    }
  ?>
 


  function selectContentFormat(val){
    var formatValue = val.value;

    // fullSizeImg == 1
    if(formatValue == 1){
      $("#fullSizeImg").show();
      $("#fullSizeImgWrap").show();
      $("#fullSizeText").hide();
      $("#halfImgHalfText").hide();
      $("#bothSideImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();

      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
    }
    // halfImgHalfText == 3
    if(formatValue == 3){
      $("#halfImgHalfText").show();
      $("#halfImgHalfTextImgWrap").show();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();

      $("#fullSizeImg").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
    }
    // bothSideImg == 4
    if(formatValue == 4){
      $("#bothSideImg").show();
      $("#bothSideLeftImgWrap").show();
      $("#bothSideRightImgWrap").show();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideText").hide();
      $("#fullVideo").hide();
      $("#bothSideVideo").hide();
      $("#halfVideoHalfText").hide();
      $("#halfTextHalfImg").hide();

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();  
    }
    // halfTextHalfImg == 9
    if(formatValue == 9){
      $("#halfTextHalfImg").show();
      $("#halfTextHalfImgImgWrap").show();
      $("#fullVideo").hide();
      $("#bothSideText").hide();
      $("#bothSideImg").hide();
      $("#halfImgHalfText").hide();
      $("#fullSizeText").hide();
      $("#fullSizeImg").hide();
      $("#bothSideVideo").hide();  
      $("#halfVideoHalfText").hide();   

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
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

      $("#fullSizeImg").hide();
      $("#halfImgHalfTextImgWrap").hide();
      $("#bothSideLeftImgWrap").hide();
      $("#bothSideRightImgWrap").hide();
      $("#halfTextHalfImgImgWrap").hide();
    }

    // $("#contentFormat").hide();
    // $("#subSubCategory").show();
  }
</script>

<script>
  function fullSizeImgBlah(input) {
    if(input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#fullSizeImgBlah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script>
  function halfImgHalfTextImgBlah(input) {
    if(input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#halfImgHalfTextImgBlah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script>
  function bothSideLeftImgBlah(input) {
    if(input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#bothSideLeftImgBlah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script>
  function bothSideRightImgBlah(input) {
    if(input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#bothSideRightImgBlah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script>
  function halfTextHalfImgImgBlah(input) {
    if(input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#halfTextHalfImgImgBlah').attr('src', e.target.result);
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
        full_size_img_alt: {
          required: true
        },
        full_size_text_description: {
          required: true
        },   
        half_img_half_text_img_alt: {
          required: true
        },        
        half_img_half_text_title: {
          required: true
        },
        half_img_half_text_description: {
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



<!-- 
<script>
  var product_sub_type_id = "<?php echo $product_sub_type_id; ?>";
  if (product_sub_type_id==0) {
    $("#sub_sub_categoryBox").hide();
    $("#subCatChecked").prop("checked", true);
  }else{
    $("#sub_categoryBox").hide();
    $("#subSubCatChecked").prop("checked", true);
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
</script> -->