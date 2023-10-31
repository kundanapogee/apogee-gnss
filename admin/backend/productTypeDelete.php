<?php 
session_start();
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
require '../include/connection.php';
  $id = $_GET['id'];
  $main_menu_id = $_GET['main_menu_id'];

  $query = $conn->prepare("SELECT * From product_type where id = :id");
  $query->bindParam(':id',$id);
  $query->execute();
  $result = $query->fetchAll();
  $file_name = $result[0]['img_icon'];
  $url = "../../assets/images/menu-category/".$file_name;
  if(unlink($url)) {
    $query = $conn->prepare("DELETE FROM product_type where id = :id ");
    $query->bindParam(':id',$id);
    if($query->execute()){
      $_SESSION['amsg'] = '<div class="alert alert-success alert-dismissible myAlertBox">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Deleted successfully.
                      </div>';
        header("location:../productTypeList.php?id=".$main_menu_id);
      }else{
        $_SESSION['amsg'] = '<div class="alert alert-danger alert-dismissible myAlertBox">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Something went wrong.
                      </div>';
        header("location:../productTypeList.php?id=".$main_menu_id);               
      }
  }
}else{
  header("location:../login.php");
}





?>