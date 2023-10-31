<?php
session_start();
require '../admin/include/connection.php';

if (isset($_POST['submitBtn'])) {

	$company = $_POST['company'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$telephone = $_POST['telephone'];
	$mobile = $_POST['mobile'];
	$web = $_POST['web'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$created_at = date('Y-m-d h:i:s');
	$is_read = 1;

	$query = $conn->prepare("INSERT into become_dealer(company,state,city,street,telephone,mobile,web,fname,lname,email,message,is_read,created_at) values(:company,:state,:city,:street,:telephone,:mobile,:web,:fname,:lname,:email,:message,:is_read,:created_at)");
	$query->bindParam(':company',$company);
	$query->bindParam(':state',$state);
	$query->bindParam(':city',$city);
	$query->bindParam(':street',$street);
	$query->bindParam(':telephone',$telephone);
	$query->bindParam(':mobile',$mobile);
	$query->bindParam(':web',$web);
	$query->bindParam(':fname',$fname);
	$query->bindParam(':lname',$lname);
	$query->bindParam(':email',$email);
	$query->bindParam(':message',$message);
	$query->bindParam(':is_read',$is_read);
	$query->bindParam(':created_at',$created_at);
	if($query->execute()){
		$to = "sales@apogeegnss.com";
		$subject = "Query from Apogee Leveller Website (www.apogeegnss.com)";
		$message = "
		<html>
		<head>
		<title>APOGEE GNSS</title>
		</head>
		<body>
		<p>Contact Information</p>
		<table>
		<tr>
		<th>Company: </th>
		<td>".$company."</td>
		</tr>
		<tr>
		<th>State: </th>
		<td>".$state."</td>
		</tr>
		<tr>
		<th>City: </th>
		<td>".$city."</td>
		</tr>
		<tr>
		<th>Street: </th>
		<td>".$street."</td>
		</tr>
		<tr>
		<th>Telephone: </th>
		<td>".$telephone."</td>
		</tr>
		<tr>
		<th>Mobile: </th>
		<td>".$mobile."</td>
		</tr>
		<tr>
		<th>Web: </th>
		<td>".$web."</td>
		</tr>
		<tr>
		<th>Fname: </th>
		<td>".$fname."</td>
		</tr>
		<tr>
		<th>Lname: </th>
		<td>".$lname."</td>
		</tr>
		<tr>
		<th>Email: </th>
		<td>".$email."</td>
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
    		header("location:../become-a-dealer.php");		
		}else{
			$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
                            <strong>Sorry!</strong> Your message has not been sent. Please try again.
                          </div>';
    		header("location:../become-a-dealer.php");
		}
	}else{
			$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
				<strong>Sorry!</strong> Somthing went wrong.
			</div>';
    		header("location:../become-a-dealer.php");	
		}
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger bg-danger text-white fontFourteen mb-1 py-2 px-3">
				<strong>Sorry!</strong> Somthing went wrong.
			</div>';
    header("location:../become-a-dealer.php");
}
?>