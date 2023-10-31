<?php
  include 'header.php';
  $query = $conn->prepare("SELECT * From article_category order by id desc");
  $query->execute();
  $article_category_result = $query->fetchAll();
  $article_category_row = count($article_category_result);
?>


<style>
.ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border-color: var(--ck-color-base-border);
    min-height: 250px;
}
</style>

  <div class="content-wrapper myContent-wrapper position-relative pt-3" id="contentWrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-1">
                <div class="col-sm-6 pl-0"> 
                  <div class="page-title-box">
                      <h4 class="mb-sm-0 font-size-18">Add Article</h4>
                  </div>                      
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Article</li>
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
              <div class="col-md-8">
                <div class="card card-primary myCard mb-0">            
                   <div class="card-body">                    
                        <div class="mt-1">
                            <form class="myForm" id="myForm" action="backend/articleAdd.php" enctype="multipart/form-data" method="post">
                              <div class="row">

                                <div class="col-md-12" style="padding: 10px 15px 2px;">
                                  <label class="radio-inline">
                                    <input style="zoom:2;vertical-align: middle;" type="radio" name="articleType" checked onclick="featureImageSelect()"> <span style="vertical-align: middle;">Features Image</span>
                                  </label>
                                  <label class="radio-inline ml-2">
                                    <input style="zoom:2;vertical-align: middle;" type="radio" name="articleType" onclick="videoLinkSelect()"> <span style="vertical-align: middle;"> Video Link</span>
                                  </label>
                                </div>

                                <div class="col-md-12" id="featureImg">
                                  <div class="form-group">
                                    <label>Feature Image:<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control uploadPDF" value="1" name="img_file" accept="image/webp," onchange="readURL(this);">
                                    <small class="text-danger">Note: Image size of 1000*450 will be look better, Always upload WEBP Type image</small>
                                  </div>
                                </div>

                                <div class="col-md-12" id="videoLink">
                                  <div class="form-group">
                                    <label>Video Link:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" value="" name="video_link">
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Title:<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" name="title" >
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="inputName">Article Category:<sup class="text-danger">*</sup></label>
                                    <select class="form-control" name="article_category_id">
                                      <option selected disabled>-- Select One --</option>
                                      <?php 
                                        if ($article_category_row>0) {
                                          foreach ($article_category_result as $value) {
                                            $article_category_id = $value['id'];
                                            $article_category_name = $value['article_category_name'];
                                            ?>
                                            <option value="<?php echo $article_category_id ?>">
                                              <?php echo $article_category_name ?>
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
                                    <label>Header Content:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="header_content" rows="5"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Description:<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control descriptionText" name="description" rows="10"></textarea>
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
              <div class="col-md-4">
                <div class="pl-3">
                  <img id="blah" src="https://via.placeholder.com/210" alt="your image" class="img-fluid img-thumbnail" /> 
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
  $(".uploadPDF").change(function () {
    var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
    var sizeLimit= 1024*2;
    if (sizeInMb > sizeLimit) {
      alert("Please upload less then 2 MB files");
      $(this).val("");
    }
  });
</script>


<script>
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}
</script>


<script>
  $(document).ready(function(){
      $("#myForm").validate({
        rules :{
          img_file: {
            required: true
          },
          video_link: {
            required: true
          },
          title: {
            required: true
          },
          article_category_id: {
            required: true
          },
          header_content: {
            required: true
          },
          description: {
            required: true
          }
        },
      });
  });
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '.descriptionText' ) )
        .catch( error => {
            console.error( error );
        } );
</script>



<script>
  $("#videoLink").hide();
  function featureImageSelect(){
    $("#videoLink").hide();
    $("#featureImg").show();
  }
  function videoLinkSelect(){
    $("#featureImg").hide();
    $("#videoLink").show();
  }
</script>