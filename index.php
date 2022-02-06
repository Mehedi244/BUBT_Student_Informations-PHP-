<?php 
  error_reporting(0);
  include 'connection/db.php';

  $sql  = "SELECT id from studentinfo ORDER BY id";
    $result = mysqli_query($cn, $sql);

      $row = mysqli_num_rows($result);
        
        global $row;


 ?>

<!DOCTYPE html>
<html>
<head>
    <title>BUBT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="images/favicon.png" />

    <style type="text/css">
        #login .container #login-row #login-column #welcome-box {
        margin-top: 120px;
        max-width: 600px;
        height: 340px;
        }
        #welcome-box h3{
            font-size: 22px !important;
            text-transform: uppercase !important;
        }
        #welcometext{
            text-transform: uppercase;
        }
        #count-student{
            padding-top: 0px !important;
            font-size: 24px;
        }
        #getstart{
            text-align: center;
            display: block;
            text-transform: uppercase;
        }
        .btn-info {
            color: #fff;
            background-color: #126d99;
            border-color: #17a2b8;
        }

    </style>


</head>
<body>
    <div id="login">
        <h3 id="welcometext" class="text-center text-white pt-5">Welcome To BUBT 32 Intake</h3>

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="welcome-box" class="col-md-12">
                        <h3 class="text-center text-white pt-5">Total Student</h3>
                        <p id="count-student" class="text-center text-white pt-5"><?php echo $row; ?></p>
                        <a id="getstart" class="btn btn-info" href="home.php">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>