<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';
	$id = $_POST['id'];
	$main_menu_name = $_POST['main_menu_name'];
	$updated_at = date('Y-m-d h:i:s');

	$query = $conn->prepare("UPDATE main_menu SET 
									main_menu_name = :main_menu_name,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':main_menu_name',$main_menu_name);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Added successfully.
                    </div>';
    	header("location:../mainMenuList.php");
    }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../mainMenuList.php");			    			
    }
}else{
	header("location:../login.php");
}





?>