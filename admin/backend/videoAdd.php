<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	if (isset($_POST['submitFormBtn'])) {			
		$video_title = $_POST['video_title'];
		$video_link = $_POST['video_link'];
		$file_type = 3;

		$created_at = date('Y-m-d h:i:s');
		$updated_at = date('Y-m-d h:i:s');
		
		$query = $conn->prepare("INSERT INTO download_center(file_type,video_title,video_link,created_at,updated_at) values(:file_type,:video_title,:video_link,:created_at,:updated_at)");
		$query->bindParam(':file_type',$file_type);
		$query->bindParam(':video_title',$video_title);
		$query->bindParam(':video_link',$video_link);
		$query->bindParam(':created_at',$created_at);
		$query->bindParam(':updated_at',$updated_at);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Added successfully.
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
}else{
	header("location:../login.php");
}





?>