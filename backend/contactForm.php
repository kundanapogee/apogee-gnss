<?php
session_start();
require '../admin/include/connection.php';

if (isset($_POST['submitBtn'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];
	$created_at = date('Y-m-d h:i:s');
	$status = 1;

// API endpoint URL
	$apiUrl = 'https://192.168.1.39:8080//SalesCrm//addWebsiteEnquiry';

// Data to send as parameters
	$data = array(
		'name' => $name,
		'username' => $email,
		'phone' => $mobile,
		'location' => $location,
		'message' => $message
	);

// Initialize cURL session
	$ch = curl_init();

// Set cURL options
	curl_setopt($ch, CURLOPT_URL, $apiUrl);
	curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Convert data array to URL-encoded string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
	echo 'cURL Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the API response
echo $response;
//


$query = $conn->prepare("INSERT into contact_form_query(name,email,location,mobile,message,status,created_at) values(:name,:email,:location,:mobile,:message,:status,:created_at)");
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':location',$location);
$query->bindParam(':mobile',$mobile);
$query->bindParam(':message',$message);
$query->bindParam(':status',$status);
$query->bindParam(':created_at',$created_at);
if($query->execute()){
	$to = "sales@apogeegnss.com";
        // $to = "kundanapogee@gmail.com";
	$subject = "Query from Apogee GNSS Website (www.apogeegnss.com)";
	$message = "
	<html>
	<head>
	<title>Apogee GNSS Pvt Ltd</title>
	</head>
	<body>
	<p>Contact Information</p>
	<table>
	<tr>
	<th>Name: </th>
	<td>".$name."</td>
	</tr>
	<tr>
	<th>Email: </th>
	<td>".$email."</td>
	</tr>
	<tr>
	<th>Location: </th>
	<td>".$location."</td>
	</tr>
	<tr>
	<th>Mobile: </th>
	<td>".$mobile."</td>
	</tr>
	<tr>
	<th>Message: </th>
	<td>".$message."</td>
	</tr>
	</table>
	</body>
	</html>
	";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <apogeegnss Website>' . "\r\n";
		// $headers .= 'Cc: myboss@example.com' . "\r\n";
	if(mail($to,$subject,$message,$headers)){
		$_SESSION['msg'] = '<div class="alert alert-success bg-success text-white fontFourteen mb-1 py-2 px-3">
		<strong>Success!</strong> Your message has been sent successfully. We contact to you soon..
		</div>';
		header("location:../contact.php");		
	}else{
		$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
		<strong>Sorry!</strong> Your message has not been sent. Please try again.
		</div>';
		header("location:../contact.php");
	}
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
	<strong>Sorry!</strong> Somthing went wrong.
	</div>';
	header("location:../contact.php");	
}
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
	<strong>Sorry!</strong> Somthing went wrong.
	</div>';
	header("location:../contact.php");
}
?>