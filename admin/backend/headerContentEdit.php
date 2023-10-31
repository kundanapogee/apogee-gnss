<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
require '../include/connection.php';

	$id = $_POST['id'];
	$actual_page_name = $_POST['page_name'];
	$page_url = $_POST['page_url'];
	$header_content = $_POST['header_content'];	
	$updated_at = date('Y-m-d h:i:s');

	$page_name_lower = strtolower($actual_page_name);
	$page_name = str_replace(' ', '', $page_name_lower);


	$query = $conn->prepare("UPDATE page_header_content SET 
																	page_name = :page_name,
																	page_url = :page_url,
																	header_content = :header_content,
																	updated_at = :updated_at where id = :id ");
	$query->bindParam(':page_name',$page_name);
	$query->bindParam(':page_url',$page_url);
	$query->bindParam(':header_content',$header_content);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$id);

	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
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