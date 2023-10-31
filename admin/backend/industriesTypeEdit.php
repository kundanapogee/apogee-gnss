<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$main_menu_id = $_POST['main_menu_id'];
	$alt = $_POST['alt'];
	$page_url = $_POST['page_url'];
	$header_content = $_POST['header_content'];
	$description = $_POST['description'];
	$industries_type_name = $_POST['industries_type_name'];
	$created_at = date('Y-m-d h:i:s');

	if(!empty($_FILES['img_icon_white']['name'])) {		
	  $img_name_white = $_FILES['img_icon_white']['name'];
	  $img_full_name_white = date('ymdhis').''.$img_name_white;
	  $img_tmp_name = $_FILES['img_icon_white']['tmp_name'];
	  $path = "../../assets/images/menu-category/".$img_full_name_white;

	  $query = $conn->prepare("SELECT * From industries_type where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img_icon_white'];
	  $url_white_icon = "../../assets/images/menu-category/".$file_name;

	  if(unlink($url_white_icon)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE industries_type SET 
											img_icon_white = :img_icon_white,
											main_menu_id = :main_menu_id,
											created_at = :created_at where id = :id ");
			$query->bindParam(':img_icon_white',$img_full_name_white);
			$query->bindParam(':main_menu_id',$main_menu_id);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':id',$id);
			$query->execute();
		}
	  }
	}


	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/menu-category/".$img_full_name;

	  $query = $conn->prepare("SELECT * From industries_type where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img_icon'];
	  $url = "../../assets/images/menu-category/".$file_name;

	  if(unlink($url)){  
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE industries_type SET 
											img_icon = :img_icon,
											alt = :alt,
											page_url = :page_url,
											header_content = :header_content,
											industries_type_name = :industries_type_name,
											description = :description,
											main_menu_id = :main_menu_id,
											created_at = :created_at where id = :id ");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':page_url',$page_url);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':industries_type_name',$industries_type_name);
			$query->bindParam(':description',$description);
			$query->bindParam(':main_menu_id',$main_menu_id);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':id',$id);
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
	  }
	}else{
		$query = $conn->prepare("UPDATE industries_type SET 
										alt = :alt,
										page_url = :page_url,
										header_content = :header_content,
										industries_type_name = :industries_type_name,
										description = :description,
										main_menu_id = :main_menu_id,
										created_at = :created_at where id = :id ");
		$query->bindParam(':alt',$alt);
		$query->bindParam(':page_url',$page_url);
		$query->bindParam(':header_content',$header_content);
		$query->bindParam(':industries_type_name',$industries_type_name);
		$query->bindParam(':description',$description);
		$query->bindParam(':main_menu_id',$main_menu_id);
		$query->bindParam(':created_at',$created_at);
		$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
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
	header("location:../login.php");
}





?>