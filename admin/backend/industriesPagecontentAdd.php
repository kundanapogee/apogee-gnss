<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	if (!empty($_FILES['featureImg'])) {
	  $img_name = $_FILES['featureImg']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['featureImg']['tmp_name'];
		$path = "../../assets/images/industries/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){
		if ((isset($_POST['industries_sub_type_id'])) && (!empty($_POST['industries_sub_type_id']))) {
			$industries_sub_type_id = $_POST['industries_sub_type_id'];
			$query = $conn->prepare("SELECT * From industries_sub_type where id = :id order by id desc");
			$query->bindParam('id',$industries_sub_type_id);
			$query->execute();
			$result = $query->fetchAll();
			$industries_type_id = $result[0]['industries_type_id'];
		}else{
			$industries_sub_type_id = 0;
			$industries_type_id = $_POST['industries_type_id'];
		}
			$alt = $_POST['alt'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$created_at = date('d-m-Y h:i:s');
			$updated_at = date('d-m-Y h:i:s');
			$is_active = 1;
			$query = $conn->prepare("INSERT INTO industries_page_content(industries_type_id,industries_sub_type_id,title,img,alt,description,is_active,created_at,updated_at) values(:industries_type_id,:industries_sub_type_id,:title,:img,:alt,:description,:is_active,:created_at,:updated_at)");
			$query->bindParam(':industries_type_id',$industries_type_id);
			$query->bindParam(':industries_sub_type_id',$industries_sub_type_id);
			$query->bindParam(':title',$title);
			$query->bindParam(':img',$img_full_name);
			$query->bindParam(':alt',$alt);
			$query->bindParam(':description',$description);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':updated_at',$updated_at);
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
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../industriesPageContentList.php");	
		}
	}else{
		header("location:../login.php");
	}
}else{
	header("location:../login.php");
}



?>