 <?php 
session_start();
include 'include/connection.php';

if((!isset($_SESSION['uid'])) && (empty($_SESSION['uid']))){
  header("Location:login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apogee GNSS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="dist/css/chariot.css" rel="stylesheet" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="dist/css/sweet_alert.css">
  <link rel="stylesheet" href="dist/css/myStyle.css">
  <link rel="stylesheet" type="text/css" href="dist/css/mobileResponsive.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/product/loaderLogoIcon.png" height="60" width="60">
      </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>  4 Sales Enquiry
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 Complaint Enquiry
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 News 
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
        </div>
      </li> -->
     
      <li class="nav-item mr-3">
        <a class="nav-link lineHeightOneTwo pl-1" href="backend/logout.php">
          <!-- <i class="fas fa-th-large">sda</i> -->
          <img src="dist/img/product/power-off.png" width="20">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/product/logoIcon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1;margin-top: 6px;">
      <span class="brand-text font-weight-light">Apogee</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sidebarNavWrap">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item">
            <a href="index.php" class="nav-link" id="dashboard">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="#" class="nav-link" id="downloadCenter">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Download Center
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="brochureList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brochure List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="userManualList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Manual List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="videoList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="applicationSoftwareList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Application Software List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="userDownloadFileList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Download File List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="#" class="nav-link" id="industries">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Industries
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="industriesTypeList.php?id=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Industries Type List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="industriesSubTypeList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Industries Sub Type List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="industriesPageContentList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Content Type List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="productTypeList.php?id=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Type List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="productSubTypeList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Sub Type List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="productPageContentList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Content Type List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="productParameterList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Parameter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="articleList.php" class="nav-link lineHeightOneTwo">
              <i class="nav-icon fas fa-th"></i>
              <p>Article</p>
            </a>
          </li> 
          
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Job Career
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="brochureList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Office</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="userManualList.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job</p>
                </a>
              </li>
            </ul>
          </li>  -->
          <li class="nav-item">
            <a href="headerContentList.php" class="nav-link lineHeightOneTwo">
              <i class="nav-icon fas fa-th"></i>
              <p>Header Content</p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="contactFormQueryList.php" class="nav-link lineHeightOneTwo">
              <i class="nav-icon fas fa-th"></i>
              <p>Contact Form Query</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="becomeDealerFormList.php" class="nav-link lineHeightOneTwo">
              <i class="nav-icon fas fa-th"></i>
              <p>Become a Dealer Form</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link lineHeightOneTwo1">
              <i class="fas fa-power-off nav-icon" style="font-size: 18px!important;"></i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="blogList.php" class="nav-link lineHeightOneTwo">
              <i class="nav-icon fas fa-th"></i>
              <p>Blog</p>
            </a>
          </li> -->
      </nav>
    </div>
  </aside>





    