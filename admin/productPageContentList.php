<?php
  include 'header.php';

  // $is_active = 'y';
  $query = $conn->prepare("SELECT * From product_page_content_new order by id desc");
  // $query->bindParam(':is_active',$is_active);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);

  // echo "<pre>";
  // print_r($result);
  // echo "</pre>";

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
                  <h4 class="mb-sm-0 font-size-18">Product Page Content List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Product Page Content List</li>
                </ol>
              </div>
            </div>
          </div>
      </section>
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-7">
                      <div class="d-flex">
                          <div>
                            <a href="productPageContentAdd.php" class="btn btn-primary myNewLinkBtn">Add Product Page Content</a>
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
                          <table class="table mainTable mb-0" id="tableSearch">
                              <thead>
                                  <tr>
                                    <th class="pl-2">Sr. No.</th>
                                    <!-- <th class="pl-2">Img</th> -->                                    
                                    <th class="pl-2">Product Type</th>
                                    <th class="pl-2">Product Sub Type</th>
                                    <th class="pl-2">Layout</th>
                                    <th class="pl-2">Sequence No</th>
                                    <th class="pl-2">Action</th>
                                  </tr>
                              </thead>
                            <tbody>
                              <?php 
                                if (isset($row)) {
                                  if ($row>0) {
                                    $sr_no = 1;
                                    foreach ($result as $value) {
                                      $id = $value['id'];
                                      $is_active = $value['is_active'];
                                      $product_type_id = $value['product_type_id'];
                                      $product_sub_type_id = $value['product_sub_type_id'];
                                      $content_format_id = $value['content_format_id'];
                                      $sequence_no = $value['sequence_no'];

                                      $updated_at = $value['updated_at'];

                                      $query = $conn->prepare("SELECT * From content_format where id = :id");
                                      $query->bindParam('id',$content_format_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $content_format_name = $result[0]['title'];


                                      $query = $conn->prepare("SELECT * From product_type where id = :id");
                                      $query->bindParam('id',$product_type_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $product_type_name = $result[0]['product_type_name'];

                                      if ((isset($product_sub_type_id)) && (!empty($product_sub_type_id))) {
                                        $query = $conn->prepare("SELECT * From product_sub_type where id = :id");
                                        $query->bindParam('id',$product_sub_type_id);
                                        $query->execute();
                                        $result = $query->fetchAll();
                                        $product_sub_type_name = $result[0]['product_sub_type_name'];
                                      }else{
                                        $product_sub_type_name = "-----";
                                      }                                    

                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($product_sub_type_name)){ echo $product_sub_type_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($content_format_name)){ echo $content_format_name; } ?></td>
                                        <td class="fontFourteen">
                                          <div class="form-group mb-0 d-flex">
                                            <!-- <select class="js-example-basic-single1" name="sequence" onchange="getSequenceNo(this);"><option value="AL">Alabama</option>
                                              <option value="WY">Wyoming</option>
                                            </select> -->

                                            <input type="text" class="form-control d-none" value="<?php if(!empty($id)){ echo $id; } ?>" style="max-width: 50px;">

                                            
                                            <input type="text" class="form-control d-none" value="<?php if(!empty($product_type_id)){ echo $product_type_id; } ?>" style="max-width: 50px;">

                                            
                                            <input type="text" class="form-control d-none" value="<?php if(!empty($product_sub_type_id)){ echo $product_sub_type_id; } ?>" style="max-width: 50px;">

                                            <input type="text" class="form-control" value="<?php if(!empty($sequence_no)){ echo $sequence_no; } ?>" style="max-width: 50px;">
                                          </div>
                                        </td>
                                        <td>
                                          <!--<a href="productPageContentDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>-->
                                          <a href="productPageContentEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>
                                          <?php 
                                            if ($is_active==1) {
                                              ?><a onclick="return confirm('Are you sure you want to deactive this?');" href="backend/productPageContentActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #f1bf0a;" class="fas fa-star"></i></a>
                                              <?php
                                            }else{
                                              ?><a onclick="return confirm('Are you sure you want to active this?');" href="backend/productPageContentActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #ccc;" class="fas fa-star"></i></a>
                                              <?php
                                            }
                                          ?>

                                          <a href="backend/productPageContentDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>

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
    var product_page_content_id  = $(this).prev().prev().prev('input').val();
    var product_type_id  = $(this).prev().prev('input').val();    
    var product_sub_type_id  = $(this).prev('input').val();
    $.ajax({
      url: "backend/sequernceOrderAjax.php",
      type: "POST",
      data : {sequence_no:sequence_no, product_type_id:product_type_id, product_sub_type_id:product_sub_type_id,product_page_content_id:product_page_content_id},
      success: function(result){
        $("#msgSuccess").html(result);
        // console.log(result);
      }
    })
  });
</script>

<script>
  // function getSequenceNo(val){
  //   var sequence_no = val.value;
  //   // alert("Hello"+sequence_no);

  //   var productContentID = val().prev().val();
  //   alert("Hello"+productContentID);
  //   //  $.ajax({
  //   //    url: "backend/sequernceOrderAjax.php",
  //   //    type: "POST",
  //   //    data : {sequence_no:sequence_no},
  //   //    success: function(result){
  //   //    }
  //   // })
  // }
</script>


<!-- <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script> -->