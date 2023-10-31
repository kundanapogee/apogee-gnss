<?php
  include 'header.php';
  $query = $conn->prepare("SELECT * From article order by id desc");
  $query->execute();
  $result = $query->fetchAll();
  $row = count($result);

  
  
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
                  <h4 class="mb-sm-0 font-size-18">Article List</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Article List</li>
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
                            <a href="articleAdd.php" class="btn btn-primary myNewLinkBtn">Add Article</a>
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
                                    <th class="pl-2">Title</th>
                                    <th class="pl-2">Article Category</th>
                                    <!-- <th class="pl-2"></th> -->
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
                                      $title = $value['title'];
                                      $type = $value['type'];
                                      $article_category_id = $value['article_category_id'];
                                      $updated_at = $value['updated_at'];
                                      $query = $conn->prepare("SELECT * From article_category where id = :article_category_id order by id desc");
                                      $query->bindParam(':article_category_id',$article_category_id);
                                      $query->execute();                                      
                                      $article_category_result = $query->fetchAll();
                                      $article_category_name = $article_category_result[0]['article_category_name'];
                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen">
                                            <?php
                                            if($type==1){
                                              $img_icon = $value['img'];
                                              if(!empty($img_icon)){ 
                                                echo '<img src="../assets/images/article/'.$img_icon.'" style="width: 30px;">'; 
                                              }
                                            }
                                            if($type==2){
                                              $video_link = $value['video_link'];
                                              ?>
                                              <iframe width="50" height="40" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                              <?php
                                            }
                                          ?>
                                        </td>
                                        <td class="fontFourteen"><?php if(!empty($title)){ echo $title; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($article_category_name)){ echo $article_category_name; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($updated_at)){ echo $updated_at; } ?></td>
                                        <td>
                                            <!-- <a href="headerContentDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a> -->

                                            <a href="articleEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>

                                            <!-- <a onclick="return confirm('Are you sure you want to deactive this?');" href="backend/addFeatured.php?pid=44" class="btn actionStar text-warning actionWarning"><i class="fas fa-star"></i></a> -->

                                          <a href="backend/articleDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>
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