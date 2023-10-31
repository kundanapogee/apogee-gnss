<?php 
session_start();
if (isset($_POST['product_page_content_id'])) {
require '../include/connection.php';

$product_page_content_id = $_POST['product_page_content_id'];
$product_sub_type_id = $_POST['product_sub_type_id'];
$is_active = 1;
$updated_at = date('Y-m-d h:i:s');












// CLEAR FULL TABLE ROW DATA BEFORE UPDATING RECORD

/*$content_format_id = "";
$full_size_img = "";
$full_size_img_alt = "";
$full_size_img_title = "";
$full_size_img_description = "";
$full_size_text_title = "";
$full_size_text_description = "";
$half_img_half_text_img = "";
$half_img_half_text_img_alt = "";
$half_img_half_text_title = "";
$half_img_half_text_description = "";
$both_side_left_img = "";
$both_side_left_img_alt = "";
$both_side_left_img_title = "";
$both_side_left_img_description = "";
$both_side_right_img = "";
$both_side_right_img_alt = "";
$both_side_right_img_title = "";
$both_side_right_img_description = "";
$both_side_left_text_title = "";
$both_side_left_text_description = "";
$both_side_right_text_title = "";
$both_side_right_text_description = "";
$full_video = "";
$both_side_left_video = "";
$both_side_right_video = "";
$half_video_half_text_video = "";
$half_video_half_text_title = "";
$half_video_half_text_description = "";
$half_text_half_img_img = "";
$half_text_half_img_img_alt = "";
$half_text_half_img_title = "";
$half_text_half_img_description	= "";
$half_text_half_video_video = "";
$half_text_half_video_title = "";
$half_text_half_video_description = "";*/


// $query = $conn->prepare("UPDATE product_page_content_new SET 
// 								content_format_id = :content_format_id,
// 								full_size_img = :full_size_img,
// 								full_size_img_alt = :full_size_img_alt,
// 								full_size_img_title = :full_size_img_title,
// 								full_size_img_description = :full_size_img_description,
// 								full_size_text_title = :full_size_text_title,
// 								full_size_text_description = :full_size_text_description,
// 								half_img_half_text_img = :half_img_half_text_img,								
// 								half_img_half_text_img_alt = :half_img_half_text_img_alt,								
// 								half_img_half_text_title = :half_img_half_text_title,
// 								half_img_half_text_description = :half_img_half_text_description,
// 								both_side_left_img = :both_side_left_img,
// 								both_side_left_img_alt = :both_side_left_img_alt,
// 								both_side_left_img_title = :both_side_left_img_title,
// 								both_side_left_img_description = :both_side_left_img_description,
// 								both_side_right_img = :both_side_right_img,
// 								both_side_right_img_alt = :both_side_right_img_alt,
// 								both_side_right_img_title = :both_side_right_img_title,
// 								both_side_right_img_description = :both_side_right_img_description,
// 								both_side_left_text_title = :both_side_left_text_title,
// 								both_side_left_text_description = :both_side_left_text_description,
// 								both_side_right_text_title = :both_side_right_text_title,
// 								both_side_right_text_description = :both_side_right_text_description,
// 								full_video = :full_video,
// 								both_side_left_video = :both_side_left_video,
// 								both_side_right_video = :both_side_right_video,
// 								half_video_half_text_video = :half_video_half_text_video,
// 								half_video_half_text_title = :half_video_half_text_title,
// 								half_video_half_text_description = :half_video_half_text_description,
// 								half_text_half_img_img = :half_text_half_img_img,
// 								half_text_half_img_img_alt = :half_text_half_img_img_alt,
// 								half_text_half_img_title = :half_text_half_img_title,
// 								half_text_half_img_description = :half_text_half_img_description,
// 								half_text_half_video_video = :half_text_half_video_video,
// 								half_text_half_video_title = :half_text_half_video_title,
// 								half_text_half_video_description = :half_text_half_video_description,
// 								updated_at = :updated_at where id = :id ");
// $query->bindParam(':content_format_id',$content_format_id);
// $query->bindParam(':full_size_img',$full_size_img);
// $query->bindParam(':full_size_img_alt',$full_size_img_alt);
// $query->bindParam(':full_size_img_title',$full_size_img_title);
// $query->bindParam(':full_size_img_description',$full_size_img_description);
// $query->bindParam(':full_size_text_title',$full_size_text_title);
// $query->bindParam(':full_size_text_description',$full_size_text_description);
// $query->bindParam(':half_img_half_text_img',$half_img_half_text_img);
// $query->bindParam(':half_img_half_text_img_alt',$half_img_half_text_img_alt);
// $query->bindParam(':half_img_half_text_title',$half_img_half_text_title);
// $query->bindParam(':half_img_half_text_description',$half_img_half_text_description);
// $query->bindParam(':both_side_left_img',$both_side_left_img);
// $query->bindParam(':both_side_left_img_alt',$both_side_left_img_alt);
// $query->bindParam(':both_side_left_img_title',$both_side_left_img_title);
// $query->bindParam(':both_side_left_img_description',$both_side_left_img_description);
// $query->bindParam(':both_side_right_img',$both_side_right_img);
// $query->bindParam(':both_side_right_img_alt',$both_side_right_img_alt);
// $query->bindParam(':both_side_right_img_title',$both_side_right_img_title);
// $query->bindParam(':both_side_right_img_description',$both_side_right_img_description);
// $query->bindParam(':both_side_left_text_title',$both_side_left_text_title);
// $query->bindParam(':both_side_left_text_description',$both_side_left_text_description);
// $query->bindParam(':both_side_right_text_title',$both_side_right_text_title);
// $query->bindParam(':both_side_right_text_description',$both_side_right_text_description);
// $query->bindParam(':full_video',$full_video);
// $query->bindParam(':both_side_left_video',$both_side_left_video);
// $query->bindParam(':both_side_right_video',$both_side_right_video);
// $query->bindParam(':half_video_half_text_video',$half_video_half_text_video);
// $query->bindParam(':half_video_half_text_title',$half_video_half_text_title);
// $query->bindParam(':half_video_half_text_description',$half_video_half_text_description);
// $query->bindParam(':half_text_half_img_img',$half_text_half_img_img);
// $query->bindParam(':half_text_half_img_img_alt',$half_text_half_img_img_alt);
// $query->bindParam(':half_text_half_img_title',$half_text_half_img_title);
// $query->bindParam(':half_text_half_img_description',$half_text_half_img_description);
// $query->bindParam(':half_text_half_video_video',$half_text_half_video_video);
// $query->bindParam(':half_text_half_video_title',$half_text_half_video_title);
// $query->bindParam(':half_text_half_video_description',$half_text_half_video_description);
// $query->bindParam(':updated_at',$updated_at);
// $query->bindParam(':id',$product_page_content_id);
// if($query->execute()){


// }else{
//     $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
//                       <button type="button" class="close" data-dismiss="alert">&times;</button>
//                       Data is not Clear. something went wrong.
//                     </div>';
//     header("location:../productPageContentList.php");			    			
// }







if((isset($_POST['product_sub_type_id'])) && (!empty($_POST['product_sub_type_id']))) {
	$product_sub_type_id = $_POST['product_sub_type_id'];
	$query = $conn->prepare("SELECT * From product_sub_type where id = :id order by id desc");
	$query->bindParam('id',$product_sub_type_id);
	$query->execute();
	$result = $query->fetchAll();
	$product_type_id = $result[0]['product_type_id'];
}
// else{
// 	$product_sub_type_id = 0;
// 	$product_type_id = $_POST['product_type_id'];
// }









$query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
$query->bindParam(':id',$product_page_content_id);
$query->execute();
$result = $query->fetchAll();
$full_size_img_delete = $result[0]['full_size_img'];
$half_img_half_text_img = $result[0]['half_img_half_text_img'];
$half_text_half_img_img = $result[0]['half_text_half_img_img'];
$both_side_left_img = $result[0]['both_side_left_img'];
$both_side_right_img = $result[0]['both_side_right_img'];


// if (!empty($half_img_half_text_img)) {
// 	$url = "../../assets/images/product/".$half_img_half_text_img;
// 	if (unlink($url)) {
		
// 	}else{
// 	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
// 	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
// 	                      Image not deleted. something went wrong.
// 	                    </div>';
// 	    header("location:../productPageContentList.php");	
// 	}
// }
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



// ******************************************************************************************************************************************************************************* FULL SIZE IMAGE CODE START***********************************************************************************************************************************************************************************************************************

// Full Size Image
if(isset($_POST['fullSizeImgBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$full_size_img_alt = $_POST['full_size_img_alt'];
	if(!empty($_FILES['fullSizeImg']['name'])){

	  $query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
		$query->bindParam(':id',$product_page_content_id);
		$query->execute();
		$result = $query->fetchAll();
		$file_name = $result[0]['fullSizeImg'];
		$url = "../../assets/images/product/".$file_name;
		if((!empty($url)) && (isset($url))) {
			unlink($url);
		}		
	  $img_name = $_FILES['fullSizeImg']['name'];
	  $img_full_name = date('ymdhis').''.$img_name;
	  $img_tmp_name = $_FILES['fullSizeImg']['tmp_name'];
	  $path = "../../assets/images/product/".$img_full_name;
  	if(move_uploaded_file($img_tmp_name, $path)){
	  	$query = $conn->prepare("UPDATE product_page_content_new SET 
											content_format_id = :content_format_id,
											product_type_id = :product_type_id,
											product_sub_type_id = :product_sub_type_id,
											full_size_img = :full_size_img,
											full_size_img_alt = :full_size_img_alt,
											updated_at = :updated_at where id = :id ");
			$query->bindParam(':content_format_id',$content_format_id);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':product_sub_type_id',$product_sub_type_id);
			$query->bindParam(':full_size_img',$img_full_name);
			$query->bindParam(':full_size_img_alt',$full_size_img_alt);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$product_page_content_id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Updated successfully.
		                    </div>';
			    header("location:../productPageContentList.php");
			}else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");			    			
			}
		}
	}else{
		$query = $conn->prepare("UPDATE product_page_content_new SET 
										content_format_id = :content_format_id,
										product_type_id = :product_type_id,
										product_sub_type_id = :product_sub_type_id,
										full_size_img_alt = :full_size_img_alt,
										updated_at = :updated_at where id = :id ");
		$query->bindParam(':content_format_id',$content_format_id);
		$query->bindParam(':product_type_id',$product_type_id);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		$query->bindParam(':full_size_img_alt',$full_size_img_alt);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$product_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Updated successfully.
	                    </div>';
		    header("location:../productPageContentList.php");
		}else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productPageContentList.php");			    			
		}
	}
}



// ******************************************************************************************************************************************************************************* FULL SIZE TEXT CODE START*******************************************************************************************************************************************************************************************



// Full Size Image
if(isset($_POST['fullSizeTextBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$full_size_text_description = $_POST['full_size_text_description'];

	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									full_size_text_description = :full_size_text_description,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':full_size_text_description',$full_size_text_description);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}


//**********************************************************************************************************************************************************************************HALF IMAGE HALF TEXT CODE START**************************************************************************************************************************************************************************************


if(isset($_POST['halfImgHalfTextBtn'])) {
	if ((!empty($_FILES['half_img_half_text_img']['name'])) && (isset($_FILES['half_img_half_text_img']['name']))) {
	  $img_name = $_FILES['half_img_half_text_img']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['half_img_half_text_img']['tmp_name'];
		$path = "../../assets/images/product/".$img_full_name;

		$query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
		$query->bindParam(':id',$product_page_content_id);
		$query->execute();
		$result = $query->fetchAll();
		$file_name = $result[0]['half_img_half_text_img'];
		$url = "../../assets/images/product/".$file_name;
		if((!empty($url)) && (isset($url))) {
			unlink($url);
		}		
		if(move_uploaded_file($img_tmp_name, $path)){
			$content_format_id = $_POST['content_format_id'];
			$half_img_half_text_title = $_POST['half_img_half_text_title'];
			$half_img_half_text_img_alt = $_POST['half_img_half_text_img_alt'];
			$half_img_half_text_description = $_POST['half_img_half_text_description'];
			$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									half_img_half_text_img = :half_img_half_text_img,
									half_img_half_text_title = :half_img_half_text_title,
									half_img_half_text_img_alt = :half_img_half_text_img_alt,
									half_img_half_text_description = :half_img_half_text_description,
									updated_at = :updated_at where id = :id ");
			$query->bindParam(':content_format_id',$content_format_id);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':product_sub_type_id',$product_sub_type_id);
			$query->bindParam(':half_img_half_text_img',$img_full_name);				
			$query->bindParam(':half_img_half_text_title',$half_img_half_text_title);
			$query->bindParam(':half_img_half_text_img_alt',$half_img_half_text_img_alt);
			$query->bindParam(':half_img_half_text_description',$half_img_half_text_description);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$product_page_content_id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Updated successfully.
		                    </div>';
		    	header("location:../productPageContentList.php");
			}else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");			    			
			}
		}
		else{
				$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");	
		}
	}else{
		$content_format_id = $_POST['content_format_id'];
		$half_img_half_text_title = $_POST['half_img_half_text_title'];
		$half_img_half_text_img_alt = $_POST['half_img_half_text_img_alt'];
		$half_img_half_text_description = $_POST['half_img_half_text_description'];
		$query = $conn->prepare("UPDATE product_page_content_new SET 
								content_format_id = :content_format_id,
								product_type_id = :product_type_id,
								product_sub_type_id = :product_sub_type_id,
								half_img_half_text_title = :half_img_half_text_title,
								half_img_half_text_img_alt = :half_img_half_text_img_alt,
								half_img_half_text_description = :half_img_half_text_description,
								updated_at = :updated_at where id = :id ");
		$query->bindParam(':content_format_id',$content_format_id);
		$query->bindParam(':product_type_id',$product_type_id);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		$query->bindParam(':half_img_half_text_title',$half_img_half_text_title);
		$query->bindParam(':half_img_half_text_img_alt',$half_img_half_text_img_alt);
		$query->bindParam(':half_img_half_text_description',$half_img_half_text_description);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$product_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Updated successfully.
				                    </div>';
			header("location:../productPageContentList.php");
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
			header("location:../productPageContentList.php");
		}
	}
}


//*************************************************************************************************************************************************************************************BOTH SIDE IMAGE CODE START****************************************************************************************************************************************************************************************


//***************************************************BOTH LEFT SIDE IMAGE CODE START**********************************************

if(isset($_POST['bothSideImgBtn'])) {
	if((!empty($_FILES['both_side_left_img']['name'])) && (isset($_FILES['both_side_left_img']['name']))) {
		$content_format_id = $_POST['content_format_id'];
		$both_side_left_img_alt = $_POST['both_side_left_img_alt'];
	  $img_name = $_FILES['both_side_left_img']['name'];
		$both_side_left_img = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['both_side_left_img']['tmp_name'];
		$path = "../../assets/images/product/".$both_side_left_img;
			if(move_uploaded_file($img_tmp_name, $path)){				
				$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									both_side_left_img = :both_side_left_img,
									both_side_left_img_alt = :both_side_left_img_alt,
									updated_at = :updated_at where id = :id ");
				$query->bindParam(':content_format_id',$content_format_id);
				$query->bindParam(':product_type_id',$product_type_id);
				$query->bindParam(':product_sub_type_id',$product_sub_type_id);
				$query->bindParam(':both_side_left_img',$both_side_left_img);
				$query->bindParam(':both_side_left_img_alt',$both_side_left_img_alt);
				$query->bindParam(':updated_at',$updated_at);
				$query->bindParam(':id',$product_page_content_id);
				if($query->execute()){
					$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Added successfully.
			                    </div>';
			    	header("location:../productPageContentList.php");
				}else{
				    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
				    header("location:../productPageContentList.php");			    			
				}
			}else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");			    			
			}
	}else{
			$content_format_id = $_POST['content_format_id'];
			$both_side_left_img_alt = $_POST['both_side_left_img_alt'];
			$query = $conn->prepare("UPDATE product_page_content_new SET 
								content_format_id = :content_format_id,
								product_type_id = :product_type_id,
								product_sub_type_id = :product_sub_type_id,
								both_side_left_img_alt = :both_side_left_img_alt,
								updated_at = :updated_at where id = :id ");
			$query->bindParam(':content_format_id',$content_format_id);
			$query->bindParam(':product_type_id',$product_type_id);
			$query->bindParam(':product_sub_type_id',$product_sub_type_id);
			$query->bindParam(':both_side_left_img_alt',$both_side_left_img_alt);
			$query->bindParam(':updated_at',$updated_at);
			$query->bindParam(':id',$product_page_content_id);
			if($query->execute()){
				$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Added successfully.
		                    </div>';
		    	header("location:../productPageContentList.php");
			}else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");			    			
			}
	}




//***************************************************BOTH RIGHT SIDE IMAGE CODE START**********************************************


	if((!empty($_FILES['both_side_right_img']['name'])) && (isset($_FILES['both_side_right_img']['name']))) {
		$content_format_id = $_POST['content_format_id'];
		$both_side_right_img_alt = $_POST['both_side_right_img_alt'];
	  $img_name = $_FILES['both_side_right_img']['name'];
		$both_side_right_img = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['both_side_right_img']['tmp_name'];
		$path = "../../assets/images/product/".$both_side_right_img;
			if(move_uploaded_file($img_tmp_name, $path)){
				$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									both_side_right_img = :both_side_right_img,
									both_side_right_img_alt = :both_side_right_img_alt,
									updated_at = :updated_at where id = :id ");
				$query->bindParam(':content_format_id',$content_format_id);
				$query->bindParam(':product_type_id',$product_type_id);
				$query->bindParam(':product_sub_type_id',$product_sub_type_id);
				$query->bindParam(':both_side_right_img',$both_side_right_img);
				$query->bindParam(':both_side_right_img_alt',$both_side_right_img_alt);
				$query->bindParam(':updated_at',$updated_at);
				$query->bindParam(':id',$product_page_content_id);
				if($query->execute()){
					$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Added successfully.
			                    </div>';
			    	header("location:../productPageContentList.php");
				}else{
				    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
				    header("location:../productPageContentList.php");			    			
				}
			}else{
			    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Something went wrong.
			                    </div>';
			    header("location:../productPageContentList.php");			    			
			}
	}else{
		$query = $conn->prepare("UPDATE product_page_content_new SET 
							content_format_id = :content_format_id,
							product_type_id = :product_type_id,
							product_sub_type_id = :product_sub_type_id,
							both_side_right_img_alt = :both_side_right_img_alt,
							updated_at = :updated_at where id = :id ");
		$query->bindParam(':content_format_id',$content_format_id);
		$query->bindParam(':product_type_id',$product_type_id);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		$query->bindParam(':both_side_right_img_alt',$both_side_right_img_alt);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$product_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Added successfully.
	                    </div>';
	    	header("location:../productPageContentList.php");
		}else{
		    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                      Something went wrong.
		                    </div>';
		    header("location:../productPageContentList.php");			    			
		}	
	}
}




//*************************************************************************************************************************************************************************************BOTH SIDE TEXT CODE START****************************************************************************************************************************************************************************************

if(isset($_POST['bothSideTextBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$both_side_left_text_description = $_POST['both_side_left_text_description'];
	$both_side_right_text_description = $_POST['both_side_right_text_description'];
	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									both_side_left_text_description = :both_side_left_text_description,
									both_side_right_text_description = :both_side_right_text_description,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':both_side_left_text_description',$both_side_left_text_description);
	$query->bindParam(':both_side_right_text_description',$both_side_right_text_description);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}







// ******************************************************************************************************************************************************************************* FULL SIZE VIDEO CODE START*******************************************************************************************************************************************************************************************



// Full Size Image
if(isset($_POST['fullVideotBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$full_video = $_POST['full_video'];

	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									full_video = :full_video,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':full_video',$full_video);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}




// ********************************************************************************************************************************************************************************************* BOTH SIDE VIDEO CODE START ********************************************************************************************************************************************************************************************************



// Full Size Image
if(isset($_POST['bothSideVideoBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$both_side_left_video = $_POST['both_side_left_video'];
	$both_side_right_video = $_POST['both_side_right_video'];

	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									both_side_left_video = :both_side_left_video,
									both_side_right_video = :both_side_right_video,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':both_side_left_video',$both_side_left_video);
	$query->bindParam(':both_side_right_video',$both_side_right_video);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}





// **************************************************************************************************************************************************************************************** HALF VIDEO HALF TEXT CODE START ********************************************************************************************************************************************************************************************************



// Full Size Image
if(isset($_POST['halfVideoHalfTextBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$half_video_half_text_video = $_POST['half_video_half_text_video'];
	$half_video_half_text_title = $_POST['half_video_half_text_title'];
	$half_video_half_text_description = $_POST['half_video_half_text_description'];

	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									half_video_half_text_video = :half_video_half_text_video,
									half_video_half_text_title = :half_video_half_text_title,
									half_video_half_text_description = :half_video_half_text_description,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':half_video_half_text_video',$half_video_half_text_video);
	$query->bindParam(':half_video_half_text_title',$half_video_half_text_title);
	$query->bindParam(':half_video_half_text_description',$half_video_half_text_description);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}







//**********************************************************************************************************************************************************************************HALF TEXT HALF IMAGE CODE START**************************************************************************************************************************************************************************************



if(isset($_POST['halfTextHalfImgBtn'])) {
	if ((!empty($_FILES['half_text_half_img_img']['name'])) && (isset($_FILES['half_text_half_img_img']['name']))) {
	    $img_name = $_FILES['half_text_half_img_img']['name'];
		$img_full_name = date('ymdhis').''.$img_name;
		$img_tmp_name = $_FILES['half_text_half_img_img']['tmp_name'];
		$path = "../../assets/images/product/".$img_full_name;

		// $query = $conn->prepare("SELECT * From product_page_content_new where id = :id");
		// $query->bindParam(':id',$product_page_content_id);
		// $query->execute();
		// $result = $query->fetchAll();
		// $file_name = $result[0]['half_text_half_img_img'];
		// $url = "../../assets/images/product/".$file_name;
		// if(unlink($url)){  
			if(move_uploaded_file($img_tmp_name, $path)){
				$content_format_id = $_POST['content_format_id'];
				$half_text_half_img_title = $_POST['half_text_half_img_title'];
				$half_text_half_img_img_alt = $_POST['half_text_half_img_img_alt'];
				$half_text_half_img_description = $_POST['half_text_half_img_description'];

				$query = $conn->prepare("UPDATE product_page_content_new SET 
										content_format_id = :content_format_id,
										product_type_id = :product_type_id,
										product_sub_type_id = :product_sub_type_id,
										half_text_half_img_img = :half_text_half_img_img,
										half_text_half_img_title = :half_text_half_img_title,
										half_text_half_img_img_alt = :half_text_half_img_img_alt,
										half_text_half_img_description = :half_text_half_img_description,
										updated_at = :updated_at where id = :id ");
				$query->bindParam(':content_format_id',$content_format_id);
				$query->bindParam(':product_type_id',$product_type_id);
				$query->bindParam(':product_sub_type_id',$product_sub_type_id);
				$query->bindParam(':half_text_half_img_img',$img_full_name);
				$query->bindParam(':half_text_half_img_title',$half_text_half_img_title);
				$query->bindParam(':half_text_half_img_img_alt',$half_text_half_img_img_alt);
				$query->bindParam(':half_text_half_img_description',$half_text_half_img_description);
				$query->bindParam(':updated_at',$updated_at);
				$query->bindParam(':id',$product_page_content_id);
				if($query->execute()){
					$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
			                      <button type="button" class="close" data-dismiss="alert">&times;</button>
			                      Updated successfully.
			                    </div>';
			    	header("location:../productPageContentList.php");
				}else{
				    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
				    header("location:../productPageContentList.php");			    			
				}
			}
			else{
					$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
				    header("location:../productPageContentList.php");	
			}
		// }
	}else{


		$content_format_id = $_POST['content_format_id'];
		$half_text_half_img_title = $_POST['half_text_half_img_title'];
		$half_text_half_img_img_alt = $_POST['half_text_half_img_img_alt'];
		$half_text_half_img_description = $_POST['half_text_half_img_description'];

		$query = $conn->prepare("UPDATE product_page_content_new SET 
								content_format_id = :content_format_id,
								product_type_id = :product_type_id,
								product_sub_type_id = :product_sub_type_id,
								half_text_half_img_title = :half_text_half_img_title,
								half_text_half_img_img_alt = :half_text_half_img_img_alt,
								half_text_half_img_description = :half_text_half_img_description,
								updated_at = :updated_at where id = :id ");
		$query->bindParam(':content_format_id',$content_format_id);
		$query->bindParam(':product_type_id',$product_type_id);
		$query->bindParam(':product_sub_type_id',$product_sub_type_id);
		$query->bindParam(':half_text_half_img_title',$half_text_half_img_title);
		$query->bindParam(':half_text_half_img_img_alt',$half_text_half_img_img_alt);
		$query->bindParam(':half_text_half_img_description',$half_text_half_img_description);
		$query->bindParam(':updated_at',$updated_at);
		$query->bindParam(':id',$product_page_content_id);
		if($query->execute()){
			$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Updated successfully.
				                    </div>';
			header("location:../productPageContentList.php");
		}else{
			$_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
				                      <button type="button" class="close" data-dismiss="alert">&times;</button>
				                      Something went wrong.
				                    </div>';
			header("location:../productPageContentList.php");
		}
	}
}




// **************************************************************************************************************************************************************************************** HALF TEXT HALF VIDEO CODE START ********************************************************************************************************************************************************************************************************
// Full Size Image
if(isset($_POST['halfTextHalfVideoBtn'])){	
	$content_format_id = $_POST['content_format_id'];
	$half_text_half_video_video = $_POST['half_text_half_video_video'];	
	$half_text_half_video_title = $_POST['half_text_half_video_title'];
	$half_text_half_video_description = $_POST['half_text_half_video_description'];

	$query = $conn->prepare("UPDATE product_page_content_new SET 
									content_format_id = :content_format_id,
									product_type_id = :product_type_id,
									product_sub_type_id = :product_sub_type_id,
									half_text_half_video_video = :half_text_half_video_video,
									half_text_half_video_title = :half_text_half_video_title,
									half_text_half_video_description = :half_text_half_video_description,
									updated_at = :updated_at where id = :id ");
	$query->bindParam(':content_format_id',$content_format_id);
	$query->bindParam(':product_type_id',$product_type_id);
	$query->bindParam(':product_sub_type_id',$product_sub_type_id);
	$query->bindParam(':half_text_half_video_video',$half_text_half_video_video);
	$query->bindParam(':half_text_half_video_title',$half_text_half_video_title);
	$query->bindParam(':half_text_half_video_description',$half_text_half_video_description);
	$query->bindParam(':updated_at',$updated_at);
	$query->bindParam(':id',$product_page_content_id);
	if($query->execute()){
		$_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Updated successfully.
                    </div>';
	    header("location:../productPageContentList.php");
	}else{
	    $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
	                      <button type="button" class="close" data-dismiss="alert">&times;</button>
	                      Something went wrong.
	                    </div>';
	    header("location:../productPageContentList.php");			    			
	}
}





die();


}else{
	header("location:../login.php");
}





?>