<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$industries_sub_type_name = $_POST['industries_sub_type_name'];
	$alt = $_POST['alt'];
	$page_url = $_POST['page_url'];
	$header_content = $_POST['header_content'];
	$industries_type_id = $_POST['industries_type_id'];
	$updated_at = date('Y-m-d h:i:s');

	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/industries/".$img_full_name;

	  $query = $conn->prepare("SELECT * From industries_sub_type where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img_icon'];
	  $url = "../../assets/images/industries/".$file_name;

	  if(unlink($url)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE industries_sub_type SET 
											img_icon = :img_icon,
											alt = :alt,
											page_url = :page_url,
											header_content = :header_content,
											industries_sub_type_name = :industries_sub_type_name,
											industries_type_id = :industries_type_id,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':industries_sub_type_name',$industries_sub_type_name);
			$query->bindParam(':industries_type_id',$industries_type_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../industriesSubTypeList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../industriesSubTypeList.php");			    			
		  }
		}
	  }
	}else{
		$query = $conn->prepare("UPDATE industries_sub_type SET 
										alt = :alt,
										page_url = :page_url,
										header_content = :header_content,
										industries_sub_type_name = :industries_sub_type_name,
										industries_type_id = :industries_type_id,
										updated_at = :updated_at where id = :id ");
		$query->bindParam(':industries_sub_type_name',$industries_sub_type_name);
		$query->bindParam(':alt',$alt);
		$query->bindParam(':page_url',$page_url);
		$query->bindParam(':header_content',$header_content);
		$query->bindParam(':industries_type_id',$industries_type_id);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../industriesSubTypeList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../industriesSubTypeList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>