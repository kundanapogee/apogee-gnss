<?php 


// echo "string";
// die();

if(isset($_POST['hello'])){
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$company = $_POST['company'];
	$download_center_id = $_POST['download_center_id'];
	$file_name = $_POST['file_name'];
	$created_at = date('d-m-Y h:i:s');
	$hello = $_POST['hello'];

	require '../admin/include/connection.php';
	$query = $conn->prepare("INSERT INTO user_download_file(name,email,company,download_center_id,created_at) values(:name,:email,:company,:download_center_id,:created_at)");
	$query->bindParam(':name',$name);
	$query->bindParam(':email',$email);
	$query->bindParam(':company',$company);
	$query->bindParam(':download_center_id',$download_center_id);
	$query->bindParam(':created_at',$created_at);
	$query->execute();

	// echo $file_name;


}else if (isset($_GET['file_n'])) {
	$file_n  = $_GET['file_n'];
	//force_file_download($file_n);
	//echo $file_n;
}


echo $url = '../assets/software/'.$file_nn;

function force_file_download($file_nn){
	$url = '../assets/software/'.$file_nn;
	//echo $url;
	header('Set-Cookie: fileLoading=true'); 
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($url).'"');
	header('Content-Length: ' . filesize($url));
	header('Pragma: public');
	flush();
	readfile($url,true);
}

?>









