<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$main_menu_id = $_POST['main_menu_id'];
	$product_type_name = $_POST['product_type_name'];
	$header_content = $_POST['header_content'];
	$alt = $_POST['alt'];

	$updated_at = date('Y-m-d h:i:s');
	$page_url = strtolower($_POST['page_url']);



	$query = $conn->prepare("SELECT * From product_type where page_url = :page_url and id != :id");
	$query->bindParam('page_url',$page_url);
	$query->bindParam('id',$id);
	$query->execute();
	$pageUrlResult = $query->fetchAll();
	$pageUrlRow = count($pageUrlResult);

	if ($pageUrlRow>0) {
		$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      This page URL is already exist.
			                    </div>';
		header("location:../productTypeList.php?id=".$main_menu_id);
		die();
	}


// die();

	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/menu-category/".$img_full_name;
	  $query = $conn->prepare("SELECT * From product_type where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img_icon'];
	  $url = "../../assets/images/menu-category/".$file_name;

	  if(unlink($url)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE product_type SET 
											img_icon = :img_icon,
											alt = :alt,
											page_url = :page_url,
											product_type_name = :product_type_name,
											header_content = :header_content,
											main_menu_id = :main_menu_id,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':product_type_name',$product_type_name);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':main_menu_id',$main_menu_id);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../productTypeList.php?id=".$main_menu_id);
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productTypeList.php?id=".$main_menu_id);			    			
		  }
		}
	  }
	}else{
		$query = $conn->prepare("UPDATE product_type SET 
										product_type_name = :product_type_name,
										header_content = :header_content,
										alt = :alt,
										page_url = :page_url,
										main_menu_id = :main_menu_id,
										updated_at = :updated_at where id = :id ");
		$query->bindParam(':product_type_name',$product_type_name);
		$query->bindParam(':header_content',$header_content);
		$query->bindParam(':alt',$alt);
		$query->bindParam(':page_url',$page_url);
		$query->bindParam(':main_menu_id',$main_menu_id);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$main_menu_id);
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$main_menu_id);			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>