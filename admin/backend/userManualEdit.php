<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$file_type = 2;
	$name = $_POST['name'];
	$updated_at = date('Y-m-d h:i:s');

	if(!empty($_FILES['pdf_file']['name'])) {
	  $img_name = $_FILES['pdf_file']['name'];
	  // $img_full_name = date('ymdhis').''.$img_name;
	  $img_full_name = $img_name;
	  $img_tmp_name = $_FILES['pdf_file']['tmp_name'];
	  $path = "../../assets/document/".$img_full_name;

	  $query = $conn->prepare("SELECT * From download_center where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['file_name'];
	  $url = "../../assets/document/".$file_name;

	  if(!empty($url)){ 
	  	unlink($url);
	  }
	  if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE download_center SET 
											file_type = :file_type,
											name = :name,
											file_name = :file_name,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':file_type',$file_type);
			$query->bindParam(':name',$name);
			$query->bindParam(':file_name',$img_full_name);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../userManualList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../userManualList.php");			    			
		  }
	  }
	}else{
		$query = $conn->prepare("UPDATE download_center SET 
											file_type = :file_type,
											name = :name,
											updated_at = :updated_at where id = :id ");
		$query->bindParam(':file_type',$file_type);
		$query->bindParam(':name',$name);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../userManualList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../userManualList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>