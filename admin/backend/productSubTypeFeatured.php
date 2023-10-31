<?php 
session_start();



if ((isset($_GET['id']))&&(!empty($_GET['id'])) &&(isset($_GET['is_featured']))) {
require '../include/connection.php';
	$product_sub_type_id = $_GET['id'];
	$is_featured = $_GET['is_featured'];
	$updated_at = date('Y-m-d h:i:s');
	if ($is_featured==0) {
		$is_featured=1;
		// die();
		$query = $conn->prepare("UPDATE product_sub_type SET 
										is_featured = :is_featured,
										updated_at = :updated_at where id = :product_sub_type_id ");
		$query->bindParam(':is_featured',$is_featured);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../productSubTypeList.php");
	    }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../productSubTypeList.php");			    			
	    }
	}elseif($is_featured==1) {
		$is_featured=0;
		$query = $conn->prepare("UPDATE product_sub_type SET 
										is_featured = :is_featured,
										updated_at = :updated_at where id = :product_sub_type_id ");
		$query->bindParam(':is_featured',$is_featured);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
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
	// echo "string";
}



?>