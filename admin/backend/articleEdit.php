<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';

	$id = $_POST['id'];
	$title = $_POST['title'];
	$video_link = $_POST['video_link'];
	$articleType = $_POST['articleType'];
	$description = $_POST['description'];
	$updated_at = date('Y-m-d h:i:s');

	if (!empty($_POST['video_link'])) {
		$video_link = $_POST['video_link'];
	}

	if(!empty($_FILES['img_file']['name'])) {
	  $img_name = $_FILES['img_file']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['img_file']['tmp_name'];
	  $path = "../../assets/images/article/".$img_full_name;

	  $query = $conn->prepare("SELECT * From article where id = :id");
	  $query->bindParam(':id',$id);
	  $query->execute();
	  $result = $query->fetchAll();
	  $file_name = $result[0]['img'];
	  $url = "../../assets/images/article/".$file_name;

	  if (!empty($url)) {
	  	unlink($url);
	  } 
		if(move_uploaded_file($img_tmp_name, $path)){	
			$query = $conn->prepare("UPDATE article SET 
											img = :img_icon,
											title = :title,
											type = :type,
											description = :description,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':img_icon',$img_full_name);
			$query->bindParam(':title',$title);
			$query->bindParam(':type',$articleType);
			$query->bindParam(':description',$description);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    header("location:../articleList.php");
		  }else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../articleList.php");			    			
		  }
		}
	}else{
		$query = $conn->prepare("UPDATE article SET 
										title = :title,
										type = :type,
										video_link = :video_link,
										description = :description,
										updated_at = :updated_at where id = :id ");
			$query->bindParam(':title',$title);
			$query->bindParam(':type',$articleType);
			$query->bindParam(':video_link',$video_link);
			$query->bindParam(':description',$description);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../articleList.php");
	  }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../articleList.php");			    			
	  }
	}
}else{
	header("location:../login.php");
}





?>