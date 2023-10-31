<?php 
session_start();
require '../include/connection.php';


    // print_r($_POST['contact_query_id']);


    // die();

  // if(isset($_POST['but_delete'])){

    // if(isset($_POST['contact_query_id'])){
    //   foreach($_POST['contact_query_id'] as $deleteid){
    //     $query = $conn->prepare("DELETE FROM contact_form_query where id = :id ");
    //     $query->bindParam(':id',$id);
    //     $query->execute();          
    //   }
    //   $_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
    //                   <button type="button" class="close" data-dismiss="alert">&times;</button>
    //                   Deleted successfully.
    //                 </div>';
    //   header("location:../contactFormQueryList.php");
    // }
      
  // }
 
// die();


if ((isset($_GET['id'])) && (!empty($_GET['id']))) {

	$id = $_GET['id'];
	$query = $conn->prepare("DELETE FROM contact_form_query where id = :id ");
	$query->bindParam(':id',$id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Deleted successfully.
                    </div>';
    	header("location:../contactFormQueryList.php");
    }else{
    	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Something went wrong.
                    </div>';
    	header("location:../contactFormQueryList.php");			    			
    }
}else{
	header("location:../login.php");
}









?>