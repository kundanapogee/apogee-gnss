<?php 
session_start();



if ((isset($_GET['id']))&&(!empty($_GET['id'])) &&(isset($_GET['is_active']))) {
require '../include/connection.php';
	$product_type_id = $_GET['id'];
	$main_menu_id = $_GET['main_menu_id'];
	$is_active = $_GET['is_active'];
	$updated_at = date('Y-m-d h:i:s');
	if ($is_active==0) {
		$is_active=1;
		// die();
		$query = $conn->prepare("UPDATE product_type SET 
										is_active = :is_active,
										updated_at = :updated_at where id = :product_type_id ");
		$query->bindParam(':is_active',$is_active);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':product_type_id',$product_type_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$product_type_id);
	    }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$product_type_id);			    			
	    }
	}elseif($is_active==1) {
		$is_active=0;
		$query = $conn->prepare("UPDATE product_type SET 
										is_active = :is_active,
										updated_at = :updated_at where id = :product_type_id ");
		$query->bindParam(':is_active',$is_active);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':product_type_id',$product_type_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$product_type_id);
	    }else{
	    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    	header("location:../productTypeList.php?id=".$product_type_id);			    			
	    }
	}else{
		$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	   header("location:../productTypeList.php?id=".$product_type_id);
	}	
}else{
	header("location:../login.php");
	// echo "string";
}



?>