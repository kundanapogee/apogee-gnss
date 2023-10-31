<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	$key_point = $_POST['key_point'];
	$key_value = $_POST['key_value'];	
	$product_sub_type_id = $_POST['product_sub_type_id'];	
	$is_active = 1;
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('Y-m-d h:i:s');

	$query = $conn->prepare("INSERT INTO product_parameter(key_point,key_value,product_sub_type_id,is_active,created_at,updated_at) values(:key_point,:key_value,:product_sub_type_id,:is_active,:created_at,:updated_at)");
	$query->bindParam(':key_point',$key_point);
	$query->bindParam(':key_value',$key_value);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':is_active',$is_active);
	$query->bindParam(':created_at',$created_at);
	$query->bindParam(':updated_at',$updated_at);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Added successfully.
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