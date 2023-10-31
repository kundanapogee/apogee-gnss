<?php 
session_start();

if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';
	if (!empty($_FILES['apk_software'])) {
	    $apkSoftwareName = $_FILES['apk_software']['name'];
		// $apkSoftwareFullName = date('ymdhis').''.$apkSoftwareName;
		$apkSoftwareFullName = $apkSoftwareName;
		$img_tmp_name = $_FILES['apk_software']['tmp_name'];
		$path = "../../assets/software/".$apkSoftwareFullName;
		if(move_uploaded_file($img_tmp_name, $path)){
			
			$apk_software_name = $_POST['apk_software_name'];
			$file_type = $_POST['file_type'];

			$created_at = date('Y-m-d h:i:s');
			$updated_at = date('Y-m-d h:i:s');

			$query = $conn->prepare("INSERT INTO download_center(apk_software_name,apk_software,file_type,created_at,updated_at) values(:apk_software_name,:apk_software,:file_type,:created_at,:updated_at)");
			$query->bindParam(':apk_software_name',$apk_software_name);
			$query->bindParam(':apk_software',$apkSoftwareFullName);
			$query->bindParam(':file_type',$file_type);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':updated_at',$updated_at);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../applicationSoftwareList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../applicationSoftwareList.php");			    			
		  }
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../applicationSoftwareList.php");	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}





?>