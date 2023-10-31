<?php

include 'header.php';



// $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);



// echo $url = $_SERVER['REQUEST_URI']; 



// HTTP_USER_AGENT

// HTTP_HOST

// HTTP_ACCEPT_ENCODING

// HTTP_ACCEPT



// echo $CurPageURL = $_SERVER['HTTP_USER_AGENT'];









?>



<section class="breadCrumbHead">

   <div class="overlayBlack">

      <div class="px-0 textwrap">

         <h1>Download Center</h1>

         <ul class="d-flex align-items-center justify-content-center">

           <li><a href="index.php" class="text-white">Home</a></li>

           <li class="text-white">&nbsp; / &nbsp;</li>

           <li><span class="text-white">Download Center</span></li>

        </ul>

     </div>

  </div>

</section>







<section class="sectionPadding downloadFirstSec">

   <div class="headerText text-center">

      <!-- <p class="mb-2">Download</p> -->

      <h2>Downloads</h2>

   </div>





   <div class="container">

      <div>

         <ul class="nav nav-tabs">

           <li class="nav-item">

             <a class="nav-link active" data-toggle="tab" href="#home">Brochure</a>

          </li>

          <li class="nav-item">

             <a class="nav-link" data-toggle="tab" href="#userManual">User Manual</a>

          </li>

          <li class="nav-item">

             <a class="nav-link" data-toggle="tab" href="#videos">Video</a>

          </li>

          <li class="nav-item">

             <a class="nav-link" data-toggle="tab" href="#software">Software</a>

          </li>

         </ul>

         <div class="tab-content">

           <div class="tab-pane container active" id="home">

            <?php 

                  $file_type = 1;

                  $query = $conn->prepare("SELECT * From download_center where file_type=:file_type order by id desc");

                  $query->bindParam(':file_type',$file_type);

                  $query->execute();

                  $result = $query->fetchAll();

                  $row = count($result);

                  if ($row>0) {

                     foreach ($result as $value) {

                        $download_center_id = $value['id'];

                        $name = $value['name'];

                        $file_name = $value['file_name'];

                        $updated_at = $value['updated_at'];

                        ?>

                        <div class="downloadBoxWrap">

                           <div class="row mx-0 rowBg">

                              <div class="col-md-9">

                                 <div class="leftSide">

                                    <h2><?php if(!empty($name)){ echo $name; } ?></h2>

                                    <div>

                                       <ul class="mb-0">

                                          <li>Classification : <a data-toggle="modal" data-target="#downloadBrochure<?php echo $download_center_id; ?>" href="#" download>Download</a></li>

                                          <li>Last Updation : <a href="#"><?php if(isset($updated_at)){ echo $updated_at; } ?></a></li>

                                       </ul>

                                    </div>

                                 </div>           

                              </div>      

                              <div class="col-md-3">

                                 <div class="downloadWrap">

                                    <a data-toggle="modal" data-target="#downloadBrochure<?php echo $download_center_id; ?>" href="assets/document/<?php if(!empty($file_name)){ echo $file_name; } ?>" target="_blank">

                                       <img src="assets/images/icon/download.webp">

                                       <img src="assets/images/icon/downloadHover.webp">

                                    </a>

                                 </div>

                              </div>

                           </div>

                        </div>



                        <div id="downloadBrochure<?php echo $download_center_id; ?>" class="downloadBrochure modal fade" role="dialog">

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <div class="modal-header1 position-relative">

                                 <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();"><i>&times;</i></button>

                              </div>

                              <div class="modal-body">

                                 <p>Fill in your details below to download/read all our dedicated application brochures.</p>

                                 <hr>

                                 <div>

                                    <form action="backend/test1.php" class="downloadCenterForm" method="post">

                                       <div class="form-group d-none">

                                        <label>File Upload ID:<sup class="text-danger">*</sup></label>

                                        <input type="text" class="form-control download_center_id" id="download_center_id<?php echo $download_center_id; ?>" name="download_center_id" value="<?php echo $download_center_id; ?>"> 

                                     </div>

                                     <div class="form-group d-none">

                                        <label>File Name:<sup class="text-danger">*</sup></label>

                                        <input type="text" class="form-control file_name" id="file_name<?php echo $download_center_id; ?>" name="file_name" value="<?php echo $file_name; ?>"> 

                                     </div>

                                     <div class="form-group">

                                        <label>Name:<sup class="text-danger">*</sup></label>

                                        <input type="text" class="form-control name" id="name<?php echo $download_center_id; ?>" name="name">

                                     </div>

                                     <div class="form-group">

                                        <label>Email address:<sup class="text-danger">*</sup></label>

                                        <input type="email" class="form-control email" id="email<?php echo $download_center_id; ?>" name="email">

                                     </div>

                                     <div class="form-group">

                                        <label>Company Name:</label>

                                        <input type="text" class="form-control company" id="company<?php echo $download_center_id; ?>" name="company">

                                     </div>

                                     <button type="button" class="btn btn-primary submitBtn submitFormBtn" onclick="callMethod(<?php echo $download_center_id; ?>);" name="submitFormBtn">Submit</button>

                                  </form>

                               </div>

                            </div>

                         </div>

                      </div>

                   </div>



                   <?php

                }

             }

            ?> 

           </div>



           <div class="tab-pane container fade" id="userManual">

            <?php 

               $file_type = 2;

               $query = $conn->prepare("SELECT * From download_center where file_type=:file_type order by id desc");

               $query->bindParam(':file_type',$file_type);

               $query->execute();

               $result = $query->fetchAll();

               $row = count($result);

                  if ($row>0) {

                     foreach ($result as $value) {

                        $download_center_id = $value['id'];

                        $name = $value['name'];

                        $file_name = $value['file_name'];

                        $updated_at = $value['updated_at'];

                        ?>

                        <div class="downloadBoxWrap">

                           <div class="row mx-0 rowBg">

                              <div class="col-md-9">

                                 <div class="leftSide">

                                    <h2><?php if(!empty($name)){ echo $name; } ?></h2>

                                    <div>

                                       <ul class="mb-0">

                                          <li>Classification : <a data-toggle="modal" data-index="125565656" data-target="#downloadBrochure<?php echo $download_center_id; ?>" href="#" download>Download</a></li>

                                          <li>Last Updation : <a href="#"><?php if(isset($updated_at)){ echo $updated_at; } ?></a></li>

                                       </ul>

                                    </div>

                                 </div>           

                              </div>      

                              <div class="col-md-3">

                                 <div class="downloadWrap">

                                    <a data-toggle="modal" data-target="#downloadBrochure<?php echo $download_center_id; ?>" href="assets/document/<?php if(!empty($file_name)){ echo $file_name; } ?>" target="_blank">

                                       <img src="assets/images/icon/download.webp" alt = "APOGEE GNSS products brochures and manuals">

                                       <img src="assets/images/icon/downloadHover.webp" alt = "APOGEE GNSS products brochures and manuals">

                                    </a>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div id="downloadBrochure<?php echo $download_center_id; ?>" class="downloadBrochure modal fade" role="dialog">

                          <div class="modal-dialog">

                           <div class="modal-content">

                              <div class="modal-header1 position-relative">

                                 <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();"><i>&times;</i></button>

                              </div>

                              <div class="modal-body">

                                 <p>Fill in your details below to download/read all our dedicated application brochures.</p>

                                 <hr>

                                 <div>

                                    <form action="backend/test1.php" class="downloadCenterForm" method="post">

                                       <div class="form-group d-none">

                                           <label>File Upload ID:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control download_center_id" id="download_center_id<?php echo $download_center_id; ?>" name="download_center_id" value="<?php echo $download_center_id; ?>"> 

                                        </div>

                                        <div class="form-group d-none">

                                           <label>File Name:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control file_name" id="file_name<?php echo $download_center_id; ?>" name="file_name" value="<?php echo $file_name; ?>"> 

                                        </div>

                                        <div class="form-group">

                                           <label>Name:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control name" id="name<?php echo $download_center_id; ?>" name="name">

                                        </div>

                                        <div class="form-group">

                                           <label>Email address:<sup class="text-danger">*</sup></label>

                                           <input type="email" class="form-control email" id="email<?php echo $download_center_id; ?>" name="email">

                                        </div>

                                        <div class="form-group">

                                           <label>Company Name:</label>

                                           <input type="text" class="form-control company" id="company<?php echo $download_center_id; ?>" name="company">

                                        </div>

                                        <button type="button" class="btn btn-primary submitBtn submitFormBtn" onclick="callMethod(<?php echo $download_center_id; ?>);" name="submitFormBtn">Submit</button>

                                    </form>

                                 </div>

                              </div>

                           </div>

                          </div>

                        </div>

                   <?php

                }

             }

             ?>

           </div>



            <div class="tab-pane container fade" id="videos">

               <?php 

               $file_type = 3;

               $query = $conn->prepare("SELECT * From download_center where file_type=:file_type order by id desc");

               $query->bindParam(':file_type',$file_type);

               $query->execute();

               $result = $query->fetchAll();

               $row = count($result);

               if ($row>0) {

                  foreach ($result as $value) {

                     $download_center_id = $value['id'];

                     $video_title = $value['video_title'];

                     $video_link = $value['video_link'];

                     $updated_at = $value['updated_at'];

                     ?>

                     <div class="downloadBoxWrap">

                        <div class="row mx-0 rowBg">

                           <div class="col-md-9">

                              <div class="leftSide">

                                 <h2><?php if(!empty($video_title)){ echo $video_title; } ?></h2>

                                 <div>

                                    <ul class="mb-0">

                                       <li>Classification : <a target="_blank" href="<?php if(isset($video_link)){ echo $video_link; } ?>">Watch</a></li>

                                       <li>Last Updation : <a href="#"><?php if(isset($updated_at)){ echo $updated_at; } ?></a></li>

                                    </ul>

                                 </div>

                              </div>           

                           </div>      

                           <div class="col-md-3">

                              <div class="downloadWrap">

                                 <a target="_blank" href="<?php if(isset($video_link)){ echo $video_link; } ?>" target="_blank">

                                    <img src="assets/images/icon/download.webp">

                                    <img src="assets/images/icon/downloadHover.webp">

                                 </a>

                              </div>

                           </div>

                        </div>

                     </div>

                     <?php

                  }

                }

                ?>

            </div>





            <div class="tab-pane container fade" id="software">

               <div class="text-right mt-3">
                  <a href="assets/document/documentation/database_backup_restore.pdf" class="btn btn-primary">Backup and Restore</a>
               </div>

            <?php 

               $file_type = 4;

               $query = $conn->prepare("SELECT * From download_center where file_type=:file_type order by id desc");

               $query->bindParam(':file_type',$file_type);

               $query->execute();

               $result = $query->fetchAll();

               $row = count($result);

                  if ($row>0) {

                     foreach ($result as $value) {

                        $download_center_id = $value['id'];

                        $apk_software_name = $value['apk_software_name'];

                        $apk_software = $value['apk_software'];

                        $updated_at = $value['updated_at'];

                        ?>

                        <div class="downloadBoxWrap">

                           <div class="row mx-0 rowBg">

                              <div class="col-md-9">

                                 <div class="leftSide">

                                    <h2><?php if(!empty($apk_software_name)){ echo $apk_software_name; } ?></h2>

                                    <div>

                                       <ul class="mb-0">

                                          <li>Classification : <a download="<?php if(!empty($apk_software)){ echo $apk_software; } ?>" href="assets/software/<?php if(!empty($apk_software)){ echo $apk_software; } ?>">Download</a></li>

                                          <li>Last Updation : <a href="#"><?php if(isset($updated_at)){ echo $updated_at; } ?></a></li>

                                       </ul>

                                    </div>

                                 </div>           

                              </div>      

                              <div class="col-md-3">

                                 <div class="downloadWrap">

                                    <a download="<?php if(!empty($apk_software)){ echo $apk_software; } ?>" href="assets/software/<?php if(!empty($apk_software)){ echo $apk_software; } ?>">

                                       <img src="assets/images/icon/download.webp" alt = "APOGEE GNSS products brochures and manuals">

                                       <img src="assets/images/icon/downloadHover.webp" alt="APOGEE GNSS products brochures and manuals">

                                    </a>

                                 </div>

                              </div>

                           </div>

                        </div>

                       <!--  <div id="downloadBrochure<?php echo $download_center_id; ?>" class="downloadBrochure modal fade" role="dialog">

                          <div class="modal-dialog">

                           <div class="modal-content">

                              <div class="modal-header1 position-relative">

                                 <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();"><i>&times;</i></button>

                              </div>

                              <div class="modal-body">

                                 <p>Fill in your details below to download/read all our dedicated application brochures.</p>

                                 <hr>

                                 <div>

                                    <form action="backend/test1.php" class="downloadCenterForm" method="post">

                                       <div class="form-group d-none">

                                           <label>File Upload ID:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control download_center_id" id="download_center_id<?php echo $download_center_id; ?>" name="download_center_id" value="<?php echo $download_center_id; ?>"> 

                                        </div>

                                        <div class="form-group d-none">

                                           <label>File Name:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control file_name" id="file_name<?php echo $download_center_id; ?>" name="apk_software_name" value="<?php echo $apk_software_name; ?>"> 

                                        </div>

                                        <div class="form-group">

                                           <label>Name:<sup class="text-danger">*</sup></label>

                                           <input type="text" class="form-control name" id="name<?php echo $download_center_id; ?>" name="name">

                                        </div>

                                        <div class="form-group">

                                           <label>Email address:<sup class="text-danger">*</sup></label>

                                           <input type="email" class="form-control email" id="email<?php echo $download_center_id; ?>" name="email">

                                        </div>

                                        <div class="form-group">

                                           <label>Company Name:</label>

                                           <input type="text" class="form-control company" id="company<?php echo $download_center_id; ?>" name="company">

                                        </div>

                                        <button type="button" class="btn btn-primary submitBtn submitFormBtn" onclick="callMethodSoftware(<?php echo $download_center_id; ?>);" name="submitFormBtn">Submit</button>

                                    </form>

                                 </div>

                              </div>

                           </div>

                          </div>

                        </div> -->

                   <?php

                }

             }

             ?>

           </div>





            <!-- <div class="tab-pane container fade" id="software">

               <div class="downloadBoxWrap">

                  <div class="row mx-0 rowBg">

                     <div class="col-md-9">

                        <div class="leftSide">

                           <h2>Geo Master Version 10.5.1</h2>

                           <div>

                              <ul class="mb-0">

                                 <li>Classification : <a href="assets/software/GeoMasterVersion_10.5.1.apk" download="Geo Master Version 10.5.1">Download</a></li>

                                 <li>Last Updation : <a href="#">23-12-2022 : 03:20</a></li>

                              </ul>

                           </div>

                        </div>           

                     </div>      

                     <div class="col-md-3">

                        <div class="downloadWrap">

                           <a target="_blank" href="assets/software/GeoMasterVersion_10.5.1.apk" download="Geo Master Version 10.5.1">

                              <img src="assets/images/icon/download.webp">

                              <img src="assets/images/icon/downloadHover.webp">

                           </a>

                        </div>

                     </div>

                  </div>

               </div>

            </div> -->



         </div>

      </div>

</div>





</section>











<?php

include 'footer.php';

?>



<script>

function callMethod(id){         

   var download_center_id = id;

   var name = $("#name"+id).val();

   var email = $("#email"+id).val();

   var company = $("#company"+id).val();

   var file_name = $("#file_name"+id).val();

   if(name==null || name==""){

      $("#name"+id).css({"border": "1px solid red"});

      return;

   }

   if(email==null || email==""){

      $("#email"+id).css({"border": "1px solid red"});

      return;

   }

   $.ajax({

      url: "backend/test1.php",

      type: "POST",

      data : {name:name,email:email,company:company,download_center_id:download_center_id,file_name:file_name,hello:'hello'},

      success: function(result){

         var url="backend/userDownloadFileAdd.php?file_n="+result;

         location.href=url;

         setInterval(function(){

           location.href = "download.php";

        },1000);

      }

   })

}

</script>















<script>

function callMethodSoftware(id){ 

// alert("hheko");        

   var download_center_id = id;

   var name = $("#name"+id).val();

   var email = $("#email"+id).val();

   var company = $("#company"+id).val();

   var file_name = $("#file_name"+id).val();

   if(name==null || name==""){

      $("#name"+id).css({"border": "1px solid red"});

      return;

   }

   if(email==null || email==""){

      $("#email"+id).css({"border": "1px solid red"});

      return;

   }

   $.ajax({

      url: "backend/downloadSoftware.php",

      type: "POST",

      data : {name:name,email:email,company:company,download_center_id:download_center_id,file_name:file_name,hello:'hello'},

      success: function(result){

         // alert(result);

         var url="backend/userDownloadFileAdd.php?file_n="+result;

         location.href=url;

         setInterval(function(){

           location.href = "download.php";

        },1000);

      }

   })

}

</script>