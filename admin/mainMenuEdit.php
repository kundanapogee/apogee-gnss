<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From main_menu where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $main_menu_name = $value['main_menu_name'];
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
                      <h4 class="mb-sm-0 font-size-18">Edit Main Menu</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Main Menu</li>
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
                            <form class="myForm" id="myForm" action="backend/mainMenuEdit.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                               <!--  <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Category Icon:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control" name="img_file">
                                  </div>
                                </div> -->
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Main Menu Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="main_menu_name" value="<?php if(!empty($main_menu_name)){ echo $main_menu_name; } ?>">
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
          main_menu_name: {
            required: true
          },
        }
      });
  });
</script>