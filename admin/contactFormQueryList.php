<?php
  include 'header.php';

  $file_type = 1;
  $query = $conn->prepare("SELECT * From contact_form_query order by id desc");
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);

  if(isset($_POST['but_delete'])){
    if(isset($_POST['contact_query_id'])){
      foreach($_POST['contact_query_id'] as $deleteid){
        $query = $conn->prepare("DELETE FROM contact_form_query where id = :id ");
        $query->bindParam(':id',$deleteid);
        $query->execute();          
      }
      $_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       Deleted successfully.
                     </div>';
      // header("location:contactFormQueryList.php");
      ?>
        <meta http-equiv = "refresh" content = "0; url = contactFormQueryList.php" />
      <?php
    }
  }
?>   

  <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
      <section class="content-header">
          <div class="container-fluid">
            <?php 
              if(isset($_SESSION['amsg'])) {
                echo $_SESSION['amsg'];
                unset($_SESSION['amsg']);
              }
            ?>
            <div class="row mb-1">
              <div class="col-sm-6 pl-0"> 
              <div class="page-title-box">
                  <h4 class="mb-sm-0 font-size-18">Contact Form Query List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Contact Form Query List</li>
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
                          <!-- <div>
                            <a href="Contact Form QueryAdd.php" class="btn btn-primary myNewLinkBtn">Add Contact Form Query</a>
                          </div> -->
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
                  <!-- <a href="" class="btn btn-danger btn-sm mb-1">Delete</a> -->
                      <div>
                        <form method='post' action=''>
                          <input type='submit' class="btn btn-danger" value='Delete' name='but_delete'>
                          <div class="table-responsive mt-2" >
                            <table class="table mainTable mb-0" id="myTable">
                                <thead>
                                    <tr>
                                      <th class="pl-2">
                                        <div>
                                          <input type="checkbox" name="" id="showCheckoutAll">
                                          All
                                        </div>
                                      </th>
                                      <th class="pl-2">Sr. No.</th>
                                      <th class="pl-2">Name</th>
                                      <th class="pl-2">Email</th>
                                      <th class="pl-2">Mobile</th>
                                      <th class="pl-2">Location</th>
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
                                        $mobile = $value['mobile'];
                                        $location = $value['location'];
                                        $created_at = $value['created_at'];
                                        ?>
                                        <tr draggable='true' ondragstart='start()' ondragover='dragover()'>
                                          <td><input type="checkbox" value="<?php if(!empty($id)){ echo $id; } ?>" name="contact_query_id[]" class="checkBoxList"></td>
                                          <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                          <td class="fontFourteen"><?php if(!empty($name)){ echo $name; } ?></td>
                                          <td class="fontFourteen"><?php if(!empty($email)){ echo $email; } ?></td>
                                          <td class="fontFourteen"><?php if(!empty($mobile)){ echo $mobile; } ?></td>
                                          <td class="fontFourteen"><?php if(!empty($location)){ echo $location; } ?></td>
                                          <!--<td class="fontFourteen"><?php if(!empty($message)){ echo $message; } ?></td> -->
                                          <td class="fontFourteen"><?php if(!empty($created_at)){ echo $created_at; } ?></td>
                                          <td>
                                              <a href="contactFormQueryDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a>
                                              <!-- <a href="brochureEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a> -->
                                              <a href="backend/contactFormQueryDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>
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
  // $(".checkBoxList").attr("checked","checked",);
  // $(".checkBoxList").val("data-value");\


  // function getDelete(){
  //   var value = $('#myTable').findAll('input[type="checkbox"]:checked').html();
  //   alert(value);
  // }
</script>
<script>
  jQuery(document).ready(function() {
    jQuery('#showCheckoutAll').change(function() {
        if ($(this).prop('checked')) {
          // let myArray = (".checkBoxList").val();
          $(".checkBoxList").attr("checked","checked",);
        }
        else {
          $(".checkBoxList").removeAttr("checked","checked",);
        }
    });
});
</script>


<!-- <script>
  var row;
function start(){
  row = event.target;
}
function dragover(){
  var e = event;
  e.preventDefault();
  let children= Array.from(e.target.parentNode.parentNode.children);
  if(children.indexOf(e.target.parentNode)>children.indexOf(row))
    e.target.parentNode.after(row);
  else
    e.target.parentNode.before(row);
}
</script> -->


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