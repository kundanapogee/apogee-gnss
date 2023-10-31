<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	if (!empty($_FILES['img_file'])) {
	  $img_name = $_FILES['img_file']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['img_file']['tmp_name'];
		$path = "../../assets/images/industries/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){

			$industries_type_id = $_POST['industries_type_id'];
			$industries_sub_type_name = $_POST['industries_sub_type_name'];
			$alt = $_POST['alt'];
			$page_url = $_POST['page_url'];
			$header_content = $_POST['header_content'];			
			$file_name = $img_full_name;
			$is_active = 1;
			$created_at = date('Y-m-d h:i:s');
			
			$query = $conn->prepare("INSERT INTO industries_sub_type(img_icon,alt,page_url,header_content,industries_sub_type_name,industries_type_id,is_active,created_at) values(:img_icon,:alt,:page_url,:header_content,:industries_sub_type_name,:industries_type_id,:is_active,:created_at)");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':industries_sub_type_name',$industries_sub_type_name);
			$query->bindParam(':industries_type_id',$industries_type_id);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
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
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../industriesSubTypeList.php");	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}





?>