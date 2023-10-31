<?php
  include 'header.php';

  $query = $conn->prepare("SELECT * From become_dealer order by id desc");
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
                  <h4 class="mb-sm-0 font-size-18">Become Dealer List Form</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Become Dealer List Form</li>
                </ol>
              </div>
            </div>
          </div>
      </section>
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-7">
                      <!-- <div class="d-flex">
                          <div>
                            <a href="brochureAdd.php" class="btn btn-primary myNewLinkBtn">Add Become Dealer List Form</a>
                          </div>
                      </div>      --> 
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
                          <table class="table mainTable mb-0" id="myTable">
                              <thead>
                                  <tr>
                                    <th class="pl-2">Sr. No.</th>
                                    <th class="pl-2">Company Name</th>
                                    <th class="pl-2">Email</th>
                                    <th class="pl-2">State</th>
                                    <th class="pl-2">Mobile</th>
                                    <!-- <th class="pl-2">Full Name</th> -->
                                    <th class="pl-2">Is Read</th>
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
                                      $company = $value['company'];
                                      $state = $value['state'];
                                      $city = $value['city'];
                                      $street = $value['street'];
                                      $telephone = $value['telephone'];
                                      $mobile = $value['mobile'];
                                      $web = $value['web'];
                                      $fname = $value['fname'];
                                      $lname = $value['lname'];
                                      $fullname = $fname." ".$lname;
                                      $email = $value['email'];
                                      $message = $value['message'];
                                      $is_read = $value['is_read'];
                                      $created_at = $value['created_at']; 
                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($company)){ echo $company; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($email)){ echo $email; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($state)){ echo $state; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($mobile)){ echo $mobile; } ?></td>
                                        <!-- <td class="fontFourteen"><?php if(!empty($fullname)){ echo $fullname; } ?></td> -->
                                        <td class="fontFourteen"><?php if(isset($is_read)){ 
                                          if($is_read==1){
                                            echo '<span class="unread">Unread</span>';
                                          }else{
                                            echo '<span class="read">Read</span>';
                                          }
                                        } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($created_at)){ echo substr($created_at,0,10); } ?></td>
                                        <td>
                                            <a href="becomeDealerFormDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>
                                            <!-- <a href="brochureEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a> -->
                                            <a href="backend/becomeDealerListDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>
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