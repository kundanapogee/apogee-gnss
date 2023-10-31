<?php 
session_start();
if (isset($_POST['submitFormBtn'])) {
	require '../admin/include/connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$company = $_POST['company'];
	$download_center_id = $_POST['download_center_id'];
	$file_name = $_POST['file_name'];
	$created_at = date('d-m-Y h:i:s');

	$query = $conn->prepare("INSERT INTO user_download_file(name,email,company,download_center_id,created_at) values(:name,:email,:company,:download_center_id,:created_at)");
	$query->bindParam(':name',$name);
	$query->bindParam(':email',$email);
	$query->bindParam(':company',$company);
	$query->bindParam(':download_center_id',$download_center_id);
	$query->bindParam(':created_at',$created_at);
	if($query->execute()){
		    $url = '../assets/document/'.$file_name;
				clearstatcache();
				if(file_exists($url)) {
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename="'.basename($url).'"');
					header('Content-Length: ' . filesize($url));
					header('Pragma: public');
					flush();
					readfile($url,true);
					$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Added successfully.
	                    </div>';
	    		header("location:../download.php");
					// die();
				}
				else{
					$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    		header("location:../download.php");		
				}
    }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../download.php");			    			
    }
}else{
		$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    header("location:../download.php");		
}


?>