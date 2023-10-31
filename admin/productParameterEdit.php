<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $is_active = 1;
  $query = $conn->prepare("SELECT * From product_parameter where is_active = :is_active && id = :id");
  $query->bindParam(':is_active',$is_active);
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $key_point = $value['key_point'];
          $key_value = $value['key_value'];
          $product_sub_type_id = $value['product_sub_type_id'];
          $updated_at = $value['updated_at'];
      }
    }
  }
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
                      <h4 class="mb-sm-0 font-size-18">Edit Product Parameter</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Product Parameter</li>
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
                        <div class="mt-1">
                            <form class="myForm" id="myForm" action="backend/productParameterEdit.php" method="post">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Product Sub Type Name:<sup class="text-danger">*</sup></label>
                                    <select  class="form-control" name="product_sub_type_id">
                                      <option selected disabled>--Select One--</option>
                                      <?php 
                                      $is_active = 1;
                                      $query = $conn->prepare("SELECT * From product_sub_type where is_active = :is_active order by id desc");
                                      $query->bindParam(':is_active',$is_active);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $row = count($result);
                                        if ($row>0) {
                                          foreach ($result as $value) {
                                            echo $product_sub_type_id;
                                            echo $productSubTypeID = $value['id'];
                                            ?>
                                            <option value="<?php echo $value['id'] ?>" <?php if ($product_sub_type_id == $productSubTypeID) { echo "selected"; } ?> ><?php echo $value['product_sub_type_name']; ?>   
                                            </option>
                                            <?php
                                          }
                                        }
                                      ?>                                      
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Key Point:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="key_point" value="<?php if(!empty($key_point)){ echo $key_point; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Key Value:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="key_value" value="<?php if(!empty($key_value)){ echo $key_value; } ?>">
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
          product_sub_type_id: {
                required: true
            },
          key_point: {
                required: true
            },
          key_value: {
                required: true
            }
        },
        messages :{ 
           product_sub_type_id: {
                required:  "Please select product sub category name."
            }, 
          key_point: {
                  required:  "Please enter key point."
              },
          key_value: {
                  required: "Please enter key value."
              }
        }
      });
  });
</script>