<?php 
session_start();
if (isset($_POST['sequence_no'])) {
	require '../include/connection.php';

	$product_type_id = $_POST['product_type_id'];
	$product_sub_type_id = $_POST['product_sub_type_id'];
	$product_page_content_id = $_POST['product_page_content_id'];
	$sequence_no = $_POST['sequence_no'];
	$updated_at = date('Y-m-d h:i:s');



	$query = $conn->prepare("SELECT * from product_page_content_new where product_type_id = :product_type_id and sequence_no = :sequence_no and product_sub_type_id = :product_sub_type_id");
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':sequence_no',$sequence_no);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->execute();
	$result = $query->fetchAll();
	$row = count($result);

	// print_r($result);

	// die();
	// die();
	if($row==0){
		$query = $conn->prepare("UPDATE product_page_content_new SET 
										sequence_no = :sequence_no,
										updated_at = :updated_at where id = :product_page_content_id ");
		$query->bindParam(':sequence_no',$sequence_no);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':product_page_content_id',$product_page_content_id);
		if($query->execute()){
		  echo '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      Added successfully.
                    </div>';
		}else{
		  echo '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      Somthing went wrong.
                    </div>';		    			
		}
	}else{
		echo '<div class="alert alert-danger alert-dismissible myAlertBox">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  Already used this sequence.
                </div>';		    
	}
}else{
	header("location:../login.php");
}





?>