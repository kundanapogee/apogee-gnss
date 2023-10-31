<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../include/connection.php';			
	$main_menu_name = $_POST['main_menu_name'];
	$created_at = date('Y-m-d h:i:s');
	$is_active = 1;
	$query = $conn->prepare("INSERT INTO main_menu(main_menu_name,is_active,created_at) values(:main_menu_name,:is_active,:created_at)");
	$query->bindParam(':main_menu_name',$main_menu_name);
	$query->bindParam(':is_active',$is_active);
	$query->bindParam(':created_at',$created_at);
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