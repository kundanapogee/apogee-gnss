<?php
require '../admin/include/connection.php';

if ((!empty($_POST['queryName'])) && (!empty($_POST['queryMobile'])) && (!empty($_POST['queryLocation'])) && (!empty($_POST['queryEmail'])) ) {

	$queryName = $_POST['queryName'];
	$queryEmail = $_POST['queryEmail'];
	$queryMobile = $_POST['queryMobile'];
	$queryLocation = $_POST['queryLocation'];
	$queryMessage = $_POST['queryMessage'];
	$created_at = date('Y-m-d h:i:s');
	$status = 1;

	$query = $conn->prepare("INSERT into contact_form_query(name,email,location,mobile,message,status,created_at) values(:name,:email,:location,:mobile,:message,:status,:created_at)");
	$query->bindParam(':name',$queryName);
	$query->bindParam(':email',$queryEmail);
	$query->bindParam(':mobile',$queryMobile);
	$query->bindParam(':location',$queryLocation);
	$query->bindParam(':message',$queryMessage);
	$query->bindParam(':status',$status);
	$query->bindParam(':created_at',$created_at);
	if($query->execute()){
		$to = "sales@apogeegnss.com";
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
		<td>".$queryName."</td>
		</tr>
		<tr>
		<th>Email: </th>
		<td>".$queryEmail."</td>
		</tr>
		<tr>
		<th>Location: </th>
		<td>".$queryLocation."</td>
		</tr>
		<tr>
		<th>Mobile: </th>
		<td>".$queryMobile."</td>
		</tr>
		<tr>
		<th>Message: </th>
		<td>".$queryMessage."</td>
		</tr>
		</table>
		</body>
		</html>
		";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <apogeepre@gmail.com>' . "\r\n";
		// $headers .= 'Cc: myboss@example.com' . "\r\n";
		if(mail($to,$subject,$message,$headers)){
			echo '<div class="alert alert-success bg-success text-white fontFourteen mb-3 py-2 px-3">
	                <strong>Success!</strong> Your message has been sent successfully. We contact to you soon..
	            </div>';
		}else{
			echo '<div class="alert alert-danger bg-danger text-white fontFourteen mb-3 py-2 px-3">
				<strong>Sorry!</strong> Your message has not been sent. Please try again.
			</div>';
		}
	}else{
			echo '<div class="alert alert-danger bg-danger text-white fontFourteen mb-3 py-2 px-3">
				<strong>Sorry!</strong> Somthing went wrong.
			</div>';
		}
}else{
	echo '<div class="alert alert-danger bg-danger text-white fontFourteen mb-3 py-2 px-3">
		<strong>Sorry!</strong> Please fill required field.
	</div>';
}
?>