<?php 
session_start();
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
require '../include/connection.php';
  $product_page_content_id = $_GET['id'];
  // $query = $conn->prepare("SELECT * From product_page_content where id = :id");
  // $query->bindParam(':id',$id);
  // $query->execute();
  // $result = $query->fetchAll();
  // echo $file_name = $result[0]['img'];

$query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
$query->bindParam(':id',$product_page_content_id);
$query->execute();
$result = $query->fetchAll();
$full_size_img = $result[0]['full_size_img'];
$half_img_half_text_img = $result[0]['half_img_half_text_img'];
$half_text_half_img_img = $result[0]['half_text_half_img_img'];
$both_side_left_img = $result[0]['both_side_left_img'];
$both_side_right_img = $result[0]['both_side_right_img'];

if (!empty($full_size_img)) {
    $url = "../../assets/images/product/".$full_size_img;
    if (unlink($url)) {
        
    }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          Image not deleted. something went wrong.
                        </div>';
        header("location:../productPageContentList.php");   
    }
}
if (!empty($half_img_half_text_img)) {
    $url = "../../assets/images/product/".$half_img_half_text_img;
    if (unlink($url)) {
        
    }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          Image not deleted. something went wrong.
                        </div>';
        header("location:../productPageContentList.php");   
    }
}
if (!empty($both_side_left_img)) {
    $url = "../../assets/images/product/".$both_side_left_img;
    if (unlink($url)) {
        
    }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          Image not deleted. something went wrong.
                        </div>';
        header("location:../productPageContentList.php");   
    }
}
if (!empty($both_side_right_img)) {
    $url = "../../assets/images/product/".$both_side_right_img;
    if (unlink($url)) {
        
    }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          Image not deleted. something went wrong.
                        </div>';
        header("location:../productPageContentList.php");   
    }
}

if (!empty($half_text_half_img_img)) {
    $url = "../../assets/images/product/".$half_text_half_img_img;
    if (unlink($url)) {
        
    }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          Image not deleted. something went wrong.
                        </div>';
        header("location:../productPageContentList.php");   
    }
}


// die();
	$query = $conn->prepare("DELETE FROM product_page_content_new where id = :id ");
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Deleted successfully.
                  </div>';
  	header("location:../productPagecontentList.php");
    }else{
      	$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Something went wrong.
                      </div>';
      	header("location:../productPagecontentList.php");			    			
    }
}else{
	header("location:../login.php");
}





?>