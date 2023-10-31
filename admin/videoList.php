<?php
  include 'header.php';

  $file_type = 3;
  $query = $conn->prepare("SELECT * From download_center where file_type=:file_type order by id desc");
  $query->bindParam(':file_type',$file_type);
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
                  <h4 class="mb-sm-0 font-size-18">Video List Download Center</h4>
              </div>                      
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Video List Download Center</li>
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
                            <a href="videoAdd.php" class="btn btn-primary myNewLinkBtn">Add Video </a>
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
                                    <th class="pl-2">Video Title</th>
                                    <th class="pl-2">Video Link</th>
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
                                      $video_title = $value['video_title'];
                                      $video_link = $value['video_link'];
                                      $updated_at = $value['updated_at'];
                                      ?>
                                      <tr>
                                        <td class="fontFourteen"><?php if(!empty($sr_no)){ echo $sr_no; } ?></td>
                                        <td class="fontFourteen"><?php if(!empty($video_title)){ echo $video_title; } ?></td>
                                        <!-- <td class="fontFourteen"><iframe width="80" height="40" src="<?php if(!empty($video_link)){ echo $video_link; } ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </td> -->
                                        <td class="fontFourteen"><a target="_blank" href="<?php if(isset($video_link)){ echo $video_link; } ?>"><?php if(isset($video_link)){ echo $video_link; } ?></a></td>
                                        <td class="fontFourteen"><?php if(!empty($updated_at)){ echo $updated_at; } ?></td>
                                        <td>
                                            <!-- <a href="headerContentDetail.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-eye actionView" title="View Detail"></a> -->
                                            <a href="videoEdit.php?id=<?php if(!empty($id)){ echo $id; } ?>" class="btn far fa-edit actionEdit" title="Edit Record"></a>                                            
                                            <a href="backend/videoDelete.php?id=<?php if(!empty($id)){ echo $id; } ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn far fa-trash-alt actionDelete" title="Delete Record"></a>
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