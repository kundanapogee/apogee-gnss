<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $menuID = $_GET['id'];
 
  // $is_active = 1;
  $query = $conn->prepare("SELECT * From product_type order by id desc");
  // $query->bindParam('is_active',$is_active);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  
}else{
    die();
}
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
            <div class="row mb-1">
              <div class="col-sm-6 pl-0"> 
              <div class="page-title-box">
                  <h4 class="mb-sm-0 font-size-18">Product Type List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Product Type List</li>
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
                            <a href="productTypeAdd.php?menuID=<?php echo $menuID; ?>" class="btn btn-primary myNewLinkBtn">Add Product Type</a>
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
                                    <th class="pl-2">Product Type Name</th>
                                    <th class="pl-2">Main Menu Name</th>
                                    <th class="pl-2">Updated Date</th>
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
                                      $img_icon = $value['img_icon'];
                                      $alt = $value['alt'];
                                      $product_type_name = $value['product_type_name'];
                                      $main_menu_id = $value['main_menu_id'];
                                      $updated_at = $value['updated_at'];
                                      $is_active = $value['is_active'];
                                      $query = $conn->prepare("SELECT * From main_menu where id = :id");
                                      $query->bindParam('id',$main_menu_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $main_menu_name = $result[0]['main_menu_name'];
                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($img_icon)){ echo '<img src="../assets/images/menu-category/'.$img_icon.'" style="width: 30px;">'; } ?></td>
                                        <td class="fontFourteen">
                                          <p class="mb-0"><?php if(!empty($product_type_name)){ echo $product_type_name; } ?></p>
                                            <small>(<?php if(!empty($alt)){ echo $alt; } ?>)</small>
                                        </td>
                                        <td class="fontFourteen"><?php if(!empty($main_menu_name)){ echo $main_menu_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($updated_at)){ echo $updated_at; } ?></td>
                                        <td>
                                            <!-- <a href="headerContentDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a> -->
                                            <a href="productTypeEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>
                                            <?php 
                                              if ($is_active==1) {
                                                ?><a onclick="return confirm('Are you sure you want to deactive this?');" href="backend/productTypeActive.php?id=<?php echo $id; ?>&&main_menu_id=<?php echo $menuID; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #f1bf0a;" class="fas fa-star"></i></a>
                                                <?php
                                              }else{
                                                ?><a onclick="return confirm('Are you sure you want to active this?');" href="backend/productTypeActive.php?id=<?php echo $id; ?>&&main_menu_id=<?php echo $menuID; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #ccc;" class="fas fa-star"></i></a>
                                                <?php
                                              }
                                            ?>                           
                                            <!-- <a href="backend/productTypeDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>&&main_menu_id=<?php echo $main_menu_id ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a> -->
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