<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';
	
	$id = $_POST['id'];
	$file_type = 4;
	$apk_software_name = $_POST['apk_software_name'];
	$updated_at = date('Y-m-d h:i:s');

	if(!empty($_FILES['apk_software']['name'])) {
	  $apkSoftwareName = $_FILES['apk_software']['name'];
	  // $img_full_name = date('ymdhis').''.$img_name;
	  $apkSoftwareFullName = $apkSoftwareName;
	  $img_tmp_name = $_FILES['apk_software']['tmp_name'];
	  $path = "../../assets/software/".$apkSoftwareFullName;

	  $query = $conn->prepare("SELECT * From download_center where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $apk_software = $result[0]['apk_software'];
	  $url = "../../assets/software/".$apk_software;

	  if(!empty($url)){  
	  	unlink($url);   
	  }
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE download_center SET 
											file_type = :file_type,
											apk_software_name = :apk_software_name,
											apk_software = :apk_software,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':file_type',$file_type);
			$query->bindParam(':apk_software_name',$apk_software_name);
			$query->bindParam(':apk_software',$apkSoftwareFullName);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Updated successfully.
		                    </div>';
		        header("location:../applicationSoftwareList.php");
		  }else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../applicationSoftwareList.php");			    			
		  }
		}
	}else{
		$query = $conn->prepare("UPDATE download_center SET 
											file_type = :file_type,
											apk_software_name = :apk_software_name,
											updated_at = :updated_at where id = :id ");
		$query->bindParam(':file_type',$file_type);
		$query->bindParam(':apk_software_name',$apk_software_name);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../applicationSoftwareList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../applicationSoftwareList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}



?>