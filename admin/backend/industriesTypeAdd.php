<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	if (!empty($_FILES['img_file'])) {
	  	$img_name = $_FILES['img_file']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['img_file']['tmp_name'];
		$path = "../../assets/images/menu-category/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){
			$img_name_white = $_FILES['img_icon_white']['name'];
			$img_full_name_white = date('ymdhis').''.$img_name_white;
			$img_tmp_name_white = $_FILES['img_icon_white']['tmp_name'];
			$path = "../../assets/images/menu-category/".$img_full_name_white;

			if(move_uploaded_file($img_tmp_name_white, $path)){
				$main_menu_id = $_POST['main_menu_id'];
				$industries_type_name = $_POST['industries_type_name'];
				$alt = $_POST['alt'];
				$page_url = $_POST['page_url'];
				$header_content = $_POST['header_content'];
				$description = $_POST['description'];
				$file_name = $img_full_name;
				$is_active = 1;
				$created_at = date('Y-m-d h:i:s');
				$query = $conn->prepare("INSERT INTO industries_type(img_icon,alt,page_url,industries_type_name,description,main_menu_id,is_active,img_icon_white,header_content,created_at) values(:img_icon,:alt,:page_url,:industries_type_name,:description,:main_menu_id,:is_active,:img_icon_white,:header_content,:created_at)");
				$query->bindParam(':img_icon',$img_full_name);
				$query->bindParam(':alt',$alt);
				$query->bindParam(':page_url',$page_url);
				$query->bindParam(':industries_type_name',$industries_type_name);
				$query->bindParam(':description',$description);
				$query->bindParam(':main_menu_id',$main_menu_id);
				$query->bindParam(':is_active',$is_active);
				$query->bindParam(':img_icon_white',$img_full_name_white);
				$query->bindParam(':header_content',$header_content);
				$query->bindParam(':created_at',$created_at);
				if($query->execute()){
					$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Added successfully.
			                    </div>';
			    	header("location:../industriesTypeList.php?id=".$main_menu_id);
				}else{
				    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
				    header("location:../industriesTypeList.php?id=".$main_menu_id);			    			
				}
			}
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../industriesTypeList.php?id=".$main_menu_id);	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}



?>