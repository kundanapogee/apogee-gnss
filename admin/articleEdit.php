<?php
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
  include 'header.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * From article where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $id = $result[0]['id'];
  $img = $result[0]['img'];
  $video_link = $result[0]['video_link'];
  $title = $result[0]['title'];
  $type = $result[0]['type'];
  $article_category_id = $result[0]['article_category_id'];
  $header_content = $result[0]['header_content'];
  $description = $result[0]['description']; 
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
            <h4 class="mb-sm-0 font-size-18">Edit Article</h4>
          </div>                      
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Article</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<section class="content">
  <div class="container-fluid">
    <div class="row mt-1">
      <div class="col-md-8">
        <div class="card card-primary myCard mb-0">            
         <div class="card-body">
          <div class="mt-1">
            <form class="myForm" id="myForm" action="backend/articleEdit.php" enctype="multipart/form-data" method="post">
              <div class="row">

                <div class="col-md-12 d-none">
                  <div class="form-group">
                    <label>ID:<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="id" value="<?php if(!empty($id)){ echo $id; } ?>">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Select Article Type:<sup class="text-danger">*</sup></label>
                    <select class="form-control" name="articleType" onchange="selectArticleType(this.value);">
                      <option value="1" <?php if($type==1){ echo "selected"; } ?> >Features Image</option>
                      <option value="2" <?php if($type==2){ echo "selected"; } ?> >Video Link</option>
                    </select>
                  </div>
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
                      <input type="text" class="form-control" value="<?php if(!empty($video_link)){ echo $video_link; } ?>" name="video_link">
                    </div>
                  </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title:<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="title" value="<?php if(!empty($title)){ echo $title; } ?>">
                      </div>
                    </div> 
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="inputName">Article Category:<sup class="text-danger">*</sup></label>
                        <select class="form-control" name="article_category_id">
                          <option selected disabled>-- Select One --</option>
                          <?php 
                            $query = $conn->prepare("SELECT * From article_category order by id desc");
                            $query->execute();
                            $article_category_result = $query->fetchAll();
                            $article_category_row = count($article_category_result);
                            if ($article_category_row>0) {
                              foreach ($article_category_result as $value) {
                                $article_cat_id = $value['id'];
                                $article_category_name = $value['article_category_name'];
                                ?>
                                <option value="<?php echo $article_cat_id; ?>" <?php if($article_cat_id == $article_category_id) { echo "selected";  } ?> >
                                  <?php echo $article_category_name; ?>
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
                        <textarea class="form-control" name="header_content" rows="5"><?php if(!empty($header_content)){ echo $header_content; } ?></textarea>
                      </div>
                    </div> 
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description:<sup class="text-danger">*</sup></label>
                        <textarea class="form-control descriptionText" name="description" rows="5"><?php if(!empty($description)){ echo $description; } ?></textarea>
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
            <!-- <img id="blah" src="https://via.placeholder.com/210" alt="your image" class="img-fluid img-thumbnail" />  -->
            <img id="blah" src="<?php if (!empty($img)) { echo "../assets/images/article/".$img; }else{ echo "https://via.placeholder.com/210"; } ?>" class="img-fluid img-thumbnail" /> 
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
$(document).ready(function(){
  $("#myForm").validate({
    rules :{
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
      },
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

<?php if($type==1){ 
  ?>
  $("#videoLink").hide();
  $("#featureImg").show();
  <?Php
} ?>  
<?php if($type==2){ 
  ?>
  $("#featureImg").hide();
  $("#videoLink").show();
  <?Php
} ?>

function selectArticleType(val){
  if(val==1){
    $("#videoLink").hide();
    $("#featureImg").show();
  }
  if(val==2){
    $("#featureImg").hide();
    $("#videoLink").show();
  }
}

// $("#videoLink").hide();
// function featureImageSelect(){
//   $("#videoLink").hide();
//   $("#featureImg").show();
// }
// function videoLinkSelect(){
//   $("#featureImg").hide();
//   $("#videoLink").show();
// }
</script>