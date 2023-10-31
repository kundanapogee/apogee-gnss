<?php
  include 'header.php';

  // $is_active = 'y';
  $query = $conn->prepare("SELECT * From industries_page_content order by id desc");
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
            <div class="row mb-1">
              <div class="col-sm-6 pl-0"> 
              <div class="page-title-box">
                  <h4 class="mb-sm-0 font-size-18">Industries Page Content List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Industries Page Content List</li>
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
                            <a href="industriesPageContentAdd.php" class="btn btn-primary myNewLinkBtn">Add Industries Page Content</a>
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
                                    <th class="pl-2">Img</th>
                                    <th class="pl-2">Title</th>
                                    <th class="pl-2">Industries Type</th>
                                    <th class="pl-2">Industries Sub Type</th>
                                    <!-- <th class="pl-2">Updated Date</th> -->
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
                                      $img_icon = $value['img'];
                                      $alt = $value['alt'];
                                      $title = $value['title'];
                                      $is_active = $value['is_active'];
                                      $industries_type_id = $value['industries_type_id'];
                                      $industries_sub_type_id = $value['industries_sub_type_id'];
                                      $updated_at = $value['updated_at'];

                                      $query = $conn->prepare("SELECT * From industries_type where id = :id");
                                      $query->bindParam('id',$industries_type_id);
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      $industries_type_name = $result[0]['industries_type_name'];

                                      if ((isset($industries_sub_type_id)) && (!empty($industries_sub_type_id))) {
                                        $query = $conn->prepare("SELECT * From industries_sub_type where id = :id");
                                        $query->bindParam('id',$industries_sub_type_id);
                                        $query->execute();
                                        $result = $query->fetchAll();
                                        $industries_sub_type_name = $result[0]['industries_sub_type_name'];
                                      }else{
                                        $industries_sub_type_name = "-----";
                                      }                                    

                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($img_icon)){ echo '<img src="../assets/images/industries/'.$img_icon.'" style="width: 30px;">'; } ?></td>
                                        <td class="fontFourteen">
                                          <p class="mb-0"><?php if(!empty($title)){ echo $title; } ?></p>
                                          <small>(<?php if(!empty($alt)){ echo $alt; } ?>)</small>
                                        </td>
                                        <td class="fontFourteen"><?php if(!empty($industries_type_name)){ echo $industries_type_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($industries_sub_type_name)){ echo $industries_sub_type_name; } ?></td>
                                        <!-- <td class="fontFourteen"><?php if(!empty($updated_at)){ echo $updated_at; } ?></td> -->
                                        <td>
                                            <a href="industriesPageContentDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>
                                            <a href="industriesPageContentEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>
                                            <?php 
                                              if ($is_active==1) {
                                                ?><a onclick="return confirm('Are you sure you want to deactive this?');" href="backend/industriesPageContentActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #f1bf0a;" class="fas fa-star"></i></a>
                                                <?php
                                              }else{
                                                ?><a onclick="return confirm('Are you sure you want to active this?');" href="backend/industriesPageContentActive.php?id=<?php echo $id; ?>&&is_active=<?php echo $is_active; ?>" class="btn actionStar text-warning actionWarning" ><i style="color: #ccc;" class="fas fa-star"></i></a>
                                                <?php
                                              }
                                            ?>
                                            <a href="backend/industriesPageContentDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>

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







<style>
  #myModalPopup .crossBtn{
    position: absolute;
    opacity: 1;
    background-color: red;
    border-radius: 50%;
    width: 27px;
    height: 27px;
    right: -14px;
    top: -14px;
  }
  #myModalPopup .crossBtn i{
    margin-left: -5px;
    margin-top: -8px;
    font-size: 15px;
    position: absolute;
    color: #fff;
  }
</style>


<div class="modal" id="myModalPopup" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding: 8px 15px;">
        <h4 class="modal-title" style="font-size: 18px;">Add Header Content</h4>
        <button type="button" class="close1 crossBtn" data-dismiss="modal"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">
        <div>
          <form class="myForm">            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="fontFourteen">Page URL</label>
                  <input class="form-control" placeholder="Page URL">
                </div>                   
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="fontFourteen">Page Content</label>
                  <!-- <input class="form-control" placeholder="Page URL"> -->
                  <textarea class="form-control summernote"></textarea>
                </div>   

                <!-- <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea> -->                
              </div>                
            </div> 
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <div class="float-right">
            <button type="submit" class="btn btn-primary mySubmitBtn"></i> Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
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