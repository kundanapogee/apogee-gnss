<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$file_type = 3;
	$video_title = $_POST['video_title'];
	$video_link = $_POST['video_link'];
	$updated_at = date('Y-m-d h:i:s');
	  
	$query = $conn->prepare("UPDATE download_center SET 
										file_type = :file_type,
										video_title = :video_title,
										video_link = :video_link,
										updated_at = :updated_at where id = :id ");
	$query->bindParam(':file_type',$file_type);
	$query->bindParam(':video_title',$video_title);
	$query->bindParam(':video_link',$video_link);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
    	header("location:../videoList.php");
  }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../videoList.php");			    			
  }
}else{
	header("location:../login.php");
}





?>