<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';
	$id = $_POST['id'];
	$key_point = $_POST['key_point'];
	$key_value = $_POST['key_value'];
	$product_sub_type_id = $_POST['product_sub_type_id'];
	$updated_at = date('Y-m-d h:i:s');
	$query = $conn->prepare("UPDATE product_parameter SET 
																	key_point = :key_point,
																	key_value = :key_value,
																	product_sub_type_id = :product_sub_type_id,
																	updated_at = :updated_at where id = :id ");
	$query->bindParam(':key_point',$key_point);
	$query->bindParam(':key_value',$key_value);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
    	header("location:../productParameterList.php");
    }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../productParameterList.php");			    			
    }
}else{
	header("location:../login.php");
}


?>