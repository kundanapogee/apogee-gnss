<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	$page_url = strtolower($_POST['page_url']);

	$query = $conn->prepare("SELECT * From product_sub_type where page_url = :page_url");
	$query->bindParam('page_url',$page_url);
	$query->execute();
	$pageUrlResult = $query->fetchAll();
	$pageUrlRow = count($pageUrlResult);

	if ($pageUrlRow>0) {
		$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      This page URL is already exist.
			                    </div>';
		header("location:../productSubTypeList.php");
		die();
	}



	if (!empty($_FILES['img_file'])) {
	  $img_name = $_FILES['img_file']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['img_file']['tmp_name'];
		$path = "../../assets/images/product/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){
			
			$product_type_id = $_POST['product_type_id'];
			$product_sub_type_name = $_POST['product_sub_type_name'];
			$front_title = $_POST['front_title'];
			$alt = $_POST['alt'];	
			$download_center_id = $_POST['download_center_id'];			
			$short_description = $_POST['short_description'];
			$header_content = $_POST['header_content'];
			$file_name = $img_full_name;
			$is_active = 1;
			$created_at = date('Y-m-d h:i:s');

			$query = $conn->prepare("INSERT INTO product_sub_type(img_icon,alt,page_url,product_sub_type_name,product_type_id,front_title,download_center_id,short_description,header_content,is_active,created_at) values(:img_icon,:alt,:page_url,:product_sub_type_name,:product_type_id,:front_title,:download_center_id,:short_description,:header_content,:is_active,:created_at)");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':product_sub_type_name',$product_sub_type_name);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':front_title',$front_title);
			$query->bindParam(':download_center_id',$download_center_id);
			$query->bindParam(':short_description',$short_description);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../productSubTypeList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productSubTypeList.php");			    			
		  }
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productSubTypeList.php");	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}


?>