<?php
    session_start();
    $msg1 = "";
    include 'connection/db.php';
    
    if(isset($_POST['login'])){
            $u = $_POST['user'];
            $p = $_POST['pass'];

            $sql = "SELECT * FROM adminlogin WHERE user = '$u' AND pass = '$p'";
            $run = mysqli_query($cn, $sql);
            $row = mysqli_fetch_array($run);

            if(mysqli_num_rows($run) > 0){
                $_SESSION['user'] = $row['user'];
                $_SESSION['pass'] = $row['pass'];
                
                header("location: adminindex.php");
            }
            else{
                $msg1= "<div class='alert'><strong>Worng User Or Password</strong></div>";
            }
        }

        if(isset($_SESSION['user'])){
            header("location: adminindex.php");
        }


 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="images/favicon.png" />


</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Admin Login</h3>

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <span><?php echo $msg1; ?></span>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="add-info.php" class="text-info">Add-Info</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>