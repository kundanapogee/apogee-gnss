<?php
  include 'header.php';


  $query = $conn->prepare("SELECT * From user_download_file order by id desc");
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
                  <h4 class="mb-sm-0 font-size-18">User Download File List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">User Download File List</li>
                </ol>
              </div>
            </div>
          </div>
      </section>
      <section class="content-body">
        <!-- <div class="container-fluid">
              <div class="row">
                  <div class="col-md-7">
                      <div class="d-flex">
                          <div>
                            <a href="User Download FileAdd.php" class="btn btn-primary myNewLinkBtn">Add User Download File</a>
                          </div>
                      </div>     
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
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary myCard mb-0">            
                 <div class="card-body">
                      <div>
                        <div class="table-responsive" >
                          <table class="table mainTable mb-0" id="myTable">
                              <thead>
                                  <tr>
                                    <th class="pl-2">Sr. No.</th>
                                    <th class="pl-2">User Name</th>
                                    <th class="pl-2">Email</th>
                                    <!-- <th class="pl-2">company</th> -->
                                    <th class="pl-2">File Name</th>
                                    <th class="pl-2">Created Date</th>
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
                                      $name = $value['name'];
                                      $email = $value['email'];
                                      $company = $value['company'];
                                      $download_center_id = $value['download_center_id'];                                      
                                      $created_at = $value['created_at'];

                                      $query = $conn->prepare("SELECT * from download_center where id = :id");
                                      $query->bindParam(':id',$download_center_id);
                                      // $query->execute();
                                      // $result = $query->fetchAll();
                                      $query->execute();
                                      $result = $query->fetchAll();
                                      // echo "<pre>";
                                      // print_r($result);
                                      // echo "</pre>";
                                      if (isset($result[0]['name'])) {
                                        $fileName = $result[0]['name'];
                                      }else{
                                        $fileName = "----";
                                      }

                                      if (!empty($result[0]['apk_software_name'])) {
                                        $fileName = $result[0]['apk_software_name'];
                                      }

                                      
                                      
                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($name)){ echo $name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($email)){ echo $email; } ?></td>
                                        <!-- <td class="fontFourteen"><?php if(!empty($company)){ echo $company; } ?></td> -->
                                        <td class="fontFourteen"><?php if(!empty($fileName)){ echo $fileName; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($created_at)){ echo $created_at; } ?></td>
                                        <td>
                                            <a href="userDownloadFileDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>
                                            <!-- <a href="categoryEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a> -->
                                            <a href="backend/userDownloadFileDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>
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