<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

			
	$title = $_POST['title'];		
	$article_category_id = $_POST['article_category_id'];		
	$header_content = $_POST['header_content'];		
	$description = $_POST['description'];
	$is_active = 1;
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('Y-m-d h:i:s');

	if (!empty($_FILES['img_file']['name'])) {
		$img_name = $_FILES['img_file']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['img_file']['tmp_name'];
		$path = "../../assets/images/article/".$img_full_name;
		if(move_uploaded_file($img_tmp_name, $path)){
			$articleType = 1;
			$query = $conn->prepare("INSERT INTO article(img,type,title,article_category_id,header_content,description,is_active,created_at,updated_at) values(:img,:type,:title,:article_category_id,:header_content,:description,:is_active,:created_at,:updated_at)");
			$query->bindParam(':img',$img_full_name);
			$query->bindParam(':type',$articleType);
			$query->bindParam(':title',$title);
			$query->bindParam(':article_category_id',$article_category_id);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':description',$description);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':updated_at',$updated_at);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Added successfully.
				</div>';
				header("location:../articleList.php");
			}else{
				$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Something went wrong3.
				</div>';
				header("location:../articleList.php");			    			
			}
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Something went wrong2.
			</div>';
			header("location:../articleList.php");	
		}
	}else{
		$articleType = 2;
		$video_link = $_POST['video_link'];	
		$query = $conn->prepare("INSERT INTO article(video_link,type,title,article_category_id,header_content,description,is_active,created_at,updated_at) values(:video_link,:type,:title,:article_category_id,:header_content,:description,:is_active,:created_at,:updated_at)");			
			$query->bindParam(':video_link',$video_link);
			$query->bindParam(':type',$articleType);
			$query->bindParam(':title',$title);
			$query->bindParam(':article_category_id',$article_category_id);
			$query->bindParam(':header_content',$header_content);
			$query->bindParam(':description',$description);
			$query->bindParam(':is_active',$is_active);
			$query->bindParam(':created_at',$created_at);
			$query->bindParam(':updated_at',$updated_at);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Added successfully.
				</div>';
				header("location:../articleList.php");
			}else{
				$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Something went wrong1.
				</div>';
				header("location:../articleList.php");			    			
			}

		// header("location:../login.php");
	}
}else{
	header("location:../login.php");
}


?>