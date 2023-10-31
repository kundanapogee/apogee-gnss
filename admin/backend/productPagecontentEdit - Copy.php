<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$product_type_id = $_POST['product_type_id'];
	$product_sub_type_id = $_POST['product_sub_type_id'];
	$updated_at = date('Y-m-d h:i:s');

	$product_sub_type_id = $_POST['product_sub_type_id'];
	if ((isset($product_sub_type_id)) && (!empty($product_sub_type_id))) {
		$query = $conn->prepare("SELECT * From product_sub_type where id = :id order by id desc");
		$query->bindParam('id',$product_sub_type_id);
		$query->execute();
		$result = $query->fetchAll();
		// print_r($result);
		// echo "string";
		$product_type_id = $result[0]['product_type_id'];
	}else{
		$product_type_id = $_POST['product_type_id'];
	}


	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/product/".$img_full_name;

	  $query = $conn->prepare("SELECT * From product_page_content where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img'];
	  $url = "../../assets/images/product/".$file_name;

	  if(unlink($url)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE product_page_content SET 
											img = :img_icon,
											title = :title,
											description = :description,
											product_type_id = :product_type_id,
											product_sub_type_id = :product_sub_type_id,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':title',$title);
			$query->bindParam(':description',$description);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':product_sub_type_id',$product_sub_type_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../productPageContentList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productPageContentList.php");			    			
		  }
		}
	  }
	}else{
			$query = $conn->prepare("UPDATE product_page_content SET 
											title = :title,
											description = :description,
											product_type_id = :product_type_id,
											product_sub_type_id = :product_sub_type_id,
											updated_at = :updated_at where id = :id");
			$query->bindParam(':title',$title);
			$query->bindParam(':description',$description);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':product_sub_type_id',$product_sub_type_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../productPageContentList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../productPageContentList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>