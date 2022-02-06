<?php
  error_reporting(0);
  include 'connection/db.php';

  session_start();
  if(isset($_GET['out'])){
    session_destroy();
    header("location: admin.php");
  }

  if(!$_SESSION['user']){
    session_destroy();
    header("location: admin.php");
  }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BUBT_32_1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" />

    <style type="text/css">
       @media only screen and (max-width: 767.98px) {
          
         .form-control:disabled, .form-control[readonly] {
              background-color: #000000;
              opacity: 0;
              padding: 0px;
          }
            .sidebar {
                top: 3rem;
            }
            .navbar-dark .navbar-brand {
                color: #fff;
                background: #212529;
            }
          .navbar-nav {
              display: block !important;
              flex-direction: column;
              padding-left: 0;
              margin-bottom: 0;
              list-style: none;
              float: right;
              width: 100%;
          }
          a.nav-link.px-3 {
              display: block;
              float: right;
              margin-right: 14px;
              
          }
          .form-control:disabled, .form-control[readonly] {
                background-color: #000000;
                opacity: 0;
                padding: 0px;
                display:none !important;
            }
        }
        @media only screen and (max-width: 600px) {
          .h2{
            font-size: 14px !important;
            text-align:center;
          }
         .form-control:disabled, .form-control[readonly] {
              background-color: #000000;
              opacity: 0;
              padding: 0px;
          }
          .navbar-nav {
              display: block !important;
              flex-direction: column;
              padding-left: 0;
              margin-bottom: 0;
              list-style: none;
              float: right;
              width: 100%;
          }
          a.nav-link.px-3 {
              display: block;
              float: right;
              margin-right: 14px;
          }
          .left p {
              margin: 2px;
              text-align: center !important;
          }
          .right img {
            float: none !important;
              width: 107px;
              display: block !important;
              margin: 0 auto !important;
          }
          .d-flex {
            display: block !important;
        }
        .mb-2 {
            margin-bottom: .5rem!important;
            display: block;
            text-align: center;
        }
        .wrapper {
            background: #ecf7ed;
            padding: 51px 2px !important;
            color: black;
        }
        }
    </style>

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="home.php">BUBT_32_1</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 "  type="text" placeholder="" aria-label="Search" disabled>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
     <a class="nav-link px-3" href="?out=<?php echo $_SESSION['user']; ?>">Logout</a>
     
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-info.php">
              <span data-feather="users"></span>
              Add Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="drive.php">
             <span data-feather="cloud-drizzle"></span>
              Drive
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">
             <span data-feather="bell"></span>
              notice
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"  href="#">
              <span data-feather="file"></span>
              Disable
            </a>
          </li>
          
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Support</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/mahedi.khan.9041/" target="_blank">
              <span data-feather="file-text"></span>
              Help
            </a>
          </li>
          
          
        </ul>
      </div>
    </nav>