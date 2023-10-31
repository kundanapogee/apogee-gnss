<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $is_active = 'y';
  $query = $conn->prepare("SELECT * From page_header_content where is_active = :is_active && id = :id");
  $query->bindParam(':is_active',$is_active);
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);
  if (isset($row)) {
    if ($row>0) {
        foreach ($result as $value) {
          $id = $value['id'];
          $page_name = $value['page_name'];
          $page_url = $value['page_url'];
          // $gtm_head = $value['gtm_head'];
          // $gtm_body = $value['gtm_body'];
          $header_content = $value['header_content'];
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
                      <h4 class="mb-sm-0 font-size-18">Add Header Content</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Header Content</li>
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
                            <form class="myForm" id="myForm" action="backend/headerContentEdit.php" method="post">
                              <div class="row">
                                <div class="col-md-12 d-none">
                                  <div class="form-group">
                                    <label for="inputName">ID:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Page Name:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="page_name" value="<?php if(!empty($page_name)){ echo $page_name; } ?>">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Page URL:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="page_url" value="<?php if(!empty($page_url)){ echo $page_url; } ?>">
                                  </div>
                                </div>
                                <!-- <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputDescription">GTM Head:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control summernote1" rows="10" name="gtm_head"> <?php if(!empty($gtm_head)){ echo $gtm_head; } ?> </textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputDescription">GTM Body:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control summernote1" rows="10" name="gtm_body"> <?php if(!empty($gtm_body)){ echo $gtm_body; } ?> </textarea>
                                  </div>
                                </div> -->
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputDescription">Header Content:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control summernote1" rows="10" name="header_content"> <?php if(!empty($header_content)){ echo $header_content; } ?> </textarea>
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
          page_name: {
                required: true
            },
          page_url: {
                required: true
            },
          gtm_head: {
                required: true
          },
          gtm_body: {
                required: true
          },
          header_content: {
                required: true
          }
        },
        messages :{ 
          page_name: {
                  required:  "Please enter page name."
              },
          page_url: {
                  required: "Please enter page URL."
              },
          gtm_head: {
                required: "Please enter GTM head."
            },
            gtm_body: {
                required: "Please enter GTM body."
            },
          header_content: {
              required: "Please enter header content.",
          },
        }
      });
  });
</script>