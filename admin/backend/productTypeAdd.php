<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	$main_menu_id = $_POST['main_menu_id'];
	$page_url = strtolower($_POST['page_url']);

	$query = $conn->prepare("SELECT * From product_type where page_url = :page_url");
	$query->bindParam('page_url',$page_url);
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

	// $main_menu_name = $result[0]['main_menu_name'];

	// die();    

	if (!empty($_FILES['img_file'])) {
	  $img_name = $_FILES['img_file']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['img_file']['tmp_name'];
		$path = "../../assets/images/menu-category/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){			
			
			$product_type_name = $_POST['product_type_name'];
			$header_content = $_POST['header_content'];
			// $page_url = $_POST['page_url'];
			$alt = $_POST['alt'];
			$file_name = $img_full_name;
			$is_active = 1;
			$created_at = date('Y-m-d h:i:s');
			$query = $conn->prepare("INSERT INTO product_type(img_icon,product_type_name,alt,page_url,header_content,main_menu_id,is_active,created_at) values(:img_icon,:product_type_name,:alt,:page_url,:header_content,:main_menu_id,:is_active,:created_at)");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':product_type_name',$product_type_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':main_menu_id',$main_menu_id);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
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
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productTypeList.php?id=".$main_menu_id);	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}





?>