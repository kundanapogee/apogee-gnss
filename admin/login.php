<?php
  session_start();
  include 'include/connection.php';
  if(isset($_POST['admin_login'])){ 
      $email = $_POST['email'];
      $password1 = $_POST['password'];

      if ((empty($email)) or (empty($password1))) {
        $loginmsg = 'Please fill required field';
      }


      $password = base64_encode($password1);
      $query = $conn->prepare("SELECT * FROM admin where email=:email && password=:password");
      $query->bindParam(':email',$email);
      $query->bindParam(':password',$password); 
      $query->execute(); 
      $result = $query->fetchAll();
      echo $row = count($result);
      // die();
      if($row==1){
        $_SESSION['uid'] = $result[0]['id'];
        header("location:index.php");
      }else{
        $loginmsg = 'Somthing went Wrong.';
      }      
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apogee GNSS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/myStyle.css">
  <link rel="stylesheet" type="text/css" href="dist/css/mobileResponsive.css">
</head>

<style>
  .myLoginPage .card-body {
    padding: 1rem 1.25rem;
  }
</style>

<body class="hold-transition login-page myLoginPage">
<div class="login-box">
  <div class="card card-outline card-primary bgGreen">
    <div class="card-header text-center">
      <a href="https://www.apogeegnss.com/" target="_blank" class="h1 text-uppercase" style="font-size: 30px;"><b>Apogee</b> <span class="textGreen">GNSS</span></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg pb-2 text-danger"><?php if(isset($loginmsg)){ echo $loginmsg; } ?></p>
      <form action="login.php" id="login_form" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control rounded-0 fontFourteen" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text rounded-0">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control rounded-0 fontFourteen" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text rounded-0">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="admin_login" class="btn myGreenBtn btn-block py-2">Sign In</button>
          </div>
        </div>
      </form>      
    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
</body>
</html>
<style>
  .error{
    color:red!important;
  }
</style>

<script>
  $(document).ready(function(){
      $("#login_form").validate({
        rules :{
          email: {
                required: true,
                email: true,
            },
          password: {
                required: true,  
                minlength: 6,
            }
        },
        messages :{ 
        email: {
                required:  "Please Enter Email.",
                email:  "Please Enter Valid Email.",//add an email rule that will ensure the value entered is valid email id.
            },
        password: {
                required: "Please Enter Password.",  
                minlength: "Please Enter atleast 6 Digit."
            },
        }
      });
  });
</script>