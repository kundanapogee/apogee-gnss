<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	if (!empty($_FILES['pdf_file'])) {
	    $img_name = $_FILES['pdf_file']['name'];
		// $img_full_name = date('ymdhis').''.$img_name;
		$img_full_name = $img_name;
		$img_tmp_name = $_FILES['pdf_file']['tmp_name'];
		$path = "../../assets/document/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){
			
			$brochure_name = $_POST['brochure_name'];
			$file_type = $_POST['file_type'];
			$file_name = $img_full_name;

			$created_at = date('Y-m-d h:i:s');
			$updated_at = date('Y-m-d h:i:s');

			$query = $conn->prepare("INSERT INTO download_center(name,file_name,file_type,created_at,updated_at) values(:name,:file_name,:file_type,:created_at,:updated_at)");
			$query->bindParam(':name',$brochure_name);
			$query->bindParam(':file_name',$file_name);
			$query->bindParam(':file_type',$file_type);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':updated_at',$updated_at);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../brochureList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../brochureList.php");			    			
		  }
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../brochureList.php");	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}





?>