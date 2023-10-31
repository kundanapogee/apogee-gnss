<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	$actual_page_name = $_POST['page_name'];
	$page_url = $_POST['page_url'];
	// $gtm_head = $_POST['gtm_head'];	
	// $gtm_body = $_POST['gtm_body'];	
	$header_content = $_POST['header_content'];	
	$is_active = 'y';
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('Y-m-d h:i:s');


	$page_name_lower = strtolower($actual_page_name);
	$page_name = str_replace(' ', '', $page_name_lower);


	$query = $conn->prepare("INSERT INTO page_header_content(page_name,page_url,header_content,is_active,created_at,updated_at) values(:page_name,:page_url,:header_content,:is_active,:created_at,:updated_at)");
	$query->bindParam(':page_name',$page_name);
	$query->bindParam(':page_url',$page_url);
	$query->bindParam(':header_content',$header_content);
	$query->bindParam(':is_active',$is_active);
	$query->bindParam(':created_at',$created_at);
	$query->bindParam(':updated_at',$updated_at);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Added successfully.
                    </div>';
    	header("location:../headerContentList.php");
    }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../headerContentList.php");			    			
    }

}else{
	header("location:../login.php");
}





?>