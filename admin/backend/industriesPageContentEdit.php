<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$alt = $_POST['alt'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$industries_type_id = $_POST['industries_type_id'];
	$industries_sub_type_id = $_POST['industries_sub_type_id'];
	$updated_at = date('Y-m-d h:i:s');;

	$industries_sub_type_id = $_POST['industries_sub_type_id'];
	if ((isset($industries_sub_type_id)) && (!empty($industries_sub_type_id))) {
		$query = $conn->prepare("SELECT * From industries_sub_type where id = :id order by id desc");
		$query->bindParam('id',$industries_sub_type_id);
		$query->execute();
		$result = $query->fetchAll();
		// print_r($result);
		// echo "string";
		$industries_type_id = $result[0]['industries_type_id'];
	}else{
		$industries_type_id = $_POST['industries_type_id'];
	}


	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/industries/".$img_full_name;

	  $query = $conn->prepare("SELECT * From industries_page_content where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img'];
	  $url = "../../assets/images/industries/".$file_name;

	  if(unlink($url)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE industries_page_content SET 
											alt = :alt,
											img = :img_icon,
											title = :title,
											description = :description,
											industries_type_id = :industries_type_id,
											industries_sub_type_id = :industries_sub_type_id,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':alt',$alt);
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':title',$title);
			$query->bindParam(':description',$description);
			$query->bindParam(':industries_type_id',$industries_type_id);
			$query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../industriesPageContentList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../industriesPageContentList.php");			    			
		  }
		}
	  }
	}else{
			$query = $conn->prepare("UPDATE industries_page_content SET 
											alt = :alt,
											title = :title,
											description = :description,
											industries_type_id = :industries_type_id,
											industries_sub_type_id = :industries_sub_type_id,
											updated_at = :updated_at where id = :id");
			$query->bindParam(':alt',$alt);
			$query->bindParam(':title',$title);
			$query->bindParam(':description',$description);
			$query->bindParam(':industries_type_id',$industries_type_id);
			$query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../industriesPageContentList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../industriesPageContentList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>