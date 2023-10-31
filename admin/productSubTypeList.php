<?php
  include 'header.php';
  $query = $conn->prepare("SELECT * From product_sub_type order by id desc");
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
?>   


  <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
      <section class="content-header">
          <div class="container-fluid">
            <?php 
            if (isset($_SESSION['amsg'])) {
                echo $_SESSION['amsg'];
                unset($_SESSION['amsg']);
            }
            ?>
            <div id="msgSuccess"></div>
            <div class="row mb-1">
              <div class="col-sm-6 pl-0"> 
              <div class="page-title-box">
                  <h4 class="mb-sm-0 font-size-18">Product Sub Type List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Product Sub Type List</li>
                </ol>
              </div>
            </div>
          </div>
      </section>
      <section class="Category">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-7">
                      <div class="d-flex">
                          <div>
                            <a href="productSubTypeAdd.php" class="btn btn-primary myNewLinkBtn">Add Product Sub Type</a>
                          </div>
                      </div>      
                  </div>
                  <div class="col-md-5 d-flex justify-content-end">
                      <!-- <div class="d-flex">
                          <div>
                            <a href="#" class="btn btn-primary pdfBtn">PDF</a>
                          </div>
                          <div>
                            <a href="#" class="btn btn-primary excelBtn">Excel</a>
                          </div>
                      </div> -->             
                  </div>
              </div>
          </div>
        <div class="container-fluid">
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card card-primary myCard mb-0">            
                 <div class="card-body">
                      <div>
                        <div class="table-responsive" >
                          <table class="table mainTable mb-0" id="mytable">
                              <thead>
                                  <tr>
                                    <th class="pl-2">Sr. No.</th>
                                    <th class="pl-2">Image</th>
                                    <th class="pl-2">Product Sub Type Name</th>
                                    <th class="pl-2">Product Type Name</th>
                                    <th class="pl-2">Main Menu Name</th>
                                    <th class="pl-2">Sequence</th>
                                    <th class="pl-2">Action</th>
                                  </tr>
                              </thead>
                            <tbody>
                              <?php 

                                // echo "<pre>";
                                // print_r($result);
                                // echo "</pre>";

                                if (isset($row)) {
                                  if ($row>0) {
                                    $sr_no = 1;
                                    foreach ($result as $value) {
                                      $id = $value['id'];
                                      $img_icon = $value['img_icon'];
                                      $alt = $value['alt'];
                                      $product_sub_type_name = $value['product_sub_type_name'];
                                      $product_type_id = $value['product_type_id'];
                                      $is_active = $value['is_active'];
                                      $is_featured = $value['is_featured'];
                                      $sequence_no = $value['sequence_no'];
                                      $created_at = $value['created_at'];

                                      $query = $conn->prepare("SELECT * From product_type where id = :id");
                                      $query->bindParam('id',$product_type_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $row = count($result);
                                      // die();

                                      $product_type_name = $result[0]['product_type_name'];
                                      $main_menu_id = $result[0]['main_menu_id'];

                                      $query = $conn->prepare("SELECT * From main_menu where id = :id");
                                      $query->bindParam('id',$main_menu_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $main_menu_name = $result[0]['main_menu_name'];

                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($img_icon)){ echo '<img src="../assets/images/product/'.$img_icon.'" style="width: 30px;">'; } ?></td>
                                        <td class="fontFourteen">
                                          <p class="mb-0"><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></p>
                                            <small>(<?php if(!empty($alt)){ echo $alt; } ?>)</small>
                                        </td>
                                        <td class="fontFourteen"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($main_menu_name)){ echo $main_menu_name; } ?></td>
                                        <!-- <td class="fontFourteen"><?php if(!empty($created_at)){ echo $created_at; } ?></td> -->

                                        <td class="fontFourteen">
                                          <div class="form-group mb-0 d-flex">
                                            <input type="text" class="form-control d-none" value="<?php if(!empty($id)){ echo $id; } ?>" style="max-width: 50px;">                                            
                                            <input type="text" class="form-control d-none" value="<?php if(!empty($product_type_id)){ echo $product_type_id; } ?>" style="max-width: 50px;">
                                            <!-- <input type="text" class="form-control d-none" value="<?php if(!empty($product_sub_type_id)){ echo $product_sub_type_id; } ?>" style="max-width: 50px;"> -->
                                            <input type="text" class="form-control" value="<?php if(!empty($sequence_no)){ echo $sequence_no; } ?>" style="max-width: 50px;">
                                          </div>
                                        </td>
                                        <td>
                                            <a href="productSubTypeDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>
                                            <a href="productSubTypeEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>
                                            <?php 
                                              if($is_active==1) {
                                                ?><a onclick="return confirm('Are you sure you want to deactive this?');" href="backend/productSubTypeActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #f1bf0a;" class="fas fa-star"></i></a>
                                                <?php
                                              }else{
                                                ?><a onclick="return confirm('Are you sure you want to active this?');" href="backend/productSubTypeActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #ccc;" class="fas fa-star"></i></a>
                                                <?php
                                              }
                                            ?>
                                            <?php 
                                              if ($is_featured==1) {
                                                ?><a href="backend/productSubTypeFeatured.php?id=<?php if(!empty($id)){ echo $id; } ?>&&is_featured=<?php echo $is_featured; ?>" onclick="return confirm('Are you sure you want to remove this product to home page?');" class="btn actionFeaturedBtn" title="Featured Product"><i class="fas fa-heart"></i></a>
                                                <?php
                                              }else{
                                                ?><a href="backend/productSubTypeFeatured.php?id=<?php if(!empty($id)){ echo $id; } ?>&&is_featured=<?php echo $is_featured; ?>" onclick="return confirm('Are you sure you want to show this product to home page?');" class="btn actionNotFeaturedBtn" title="Not Featured Product"><i class="fas fa-heart-broken"></i></a>
                                                <?php
                                              }
                                            ?>
                                            <!-- <a href="backend/productSubTypeDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a> -->
                                        </td>
                                      </tr>
                                      <?php
                                      $sr_no = $sr_no+1;
                                    }
                                  }
                                }
                              ?>                             
                          </tbody>
                          </table>
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
  $('input').on('blur', function() {
    var sequence_no  = $(this).val();
    if (sequence_no == "") {
      alert("Please enter sequence no");
      return false;
    }
    var product_sub_type_id  = $(this).prev().prev('input').val();
    var product_type_id  = $(this).prev('input').val();   

    // alert("product_sub_type_id "+product_sub_type_id);
    // alert("product_type_id "+product_type_id);

    $.ajax({
      url: "backend/productSubTypeSequernceAjax.php",
      type: "POST",
      data : {sequence_no:sequence_no, product_type_id:product_type_id, product_sub_type_id:product_sub_type_id},
      success: function(result){
        // alert("Result= "+result);
        $("#msgSuccess").html(result);
        // console.log(result);
      }
    })
  });
</script>

<!-- 
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script> -->