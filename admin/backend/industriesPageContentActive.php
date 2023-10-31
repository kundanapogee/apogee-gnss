<?php 
session_start();



if ((isset($_GET['id']))&&(!empty($_GET['id'])) &&(isset($_GET['is_active']))) {
require '../include/connection.php';
	$industries_page_content_id = $_GET['id'];
	$is_active = $_GET['is_active'];
	$updated_at = date('Y-m-d h:i:s');
	if ($is_active==0) {
		$is_active=1;
		// die();
		$query = $conn->prepare("UPDATE industries_page_content SET 
										is_active = :is_active,
										updated_at = :updated_at where id = :industries_page_content_id ");
		$query->bindParam(':is_active',$is_active);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':industries_page_content_id',$industries_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../industriesPageContentList.php");
	    }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../industriesPageContentList.php");			    			
	    }
	}elseif($is_active==1) {
		$is_active=0;
		$query = $conn->prepare("UPDATE industries_page_content SET 
										is_active = :is_active,
										updated_at = :updated_at where id = :industries_page_content_id ");
		$query->bindParam(':is_active',$is_active);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':industries_page_content_id',$industries_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
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
	// echo "string";
}



?>