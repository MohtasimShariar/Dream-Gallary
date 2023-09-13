<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $useremail=$_POST['email'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select user_id from tbluser where  email='$useremail' and password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['user_id']=$ret['user_id'];
      echo "<script>alert('User logged In');</script>";
      echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    }
    else{
    echo "<script>alert('Invalid Details');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Login Here</title>

        <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        </script>
        <!--//meta tags ends here-->
        <!--booststrap-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <!--//booststrap end-->
        <!-- font-awesome icons -->
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
        <!-- //font-awesome icons -->
        <!--Shoping cart-->
        <link rel="stylesheet" href="css/shop.css" type="text/css" />
        <!--//Shoping cart-->
        <!--stylesheets-->
        <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
        <!--//stylesheets-->
        <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>

    <body>
        <!--headder-->
        <?php include_once('includes/header.php');?>
        <div class="inner_page-banner one-img">
        </div>
        <!--//banner -->
        <!-- short -->
        <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
                <ul class="short_ls">
                    <li>
                        <a href="index.php">Home</a>
                        <span>/ /</span>
                    </li>
                    <li>Login</li>
                </ul>
            </div>
        </div>

        <div class="login">
            <div class="login-triangle"></div>

            <h2 class="login-header">Log in</h2>

            <form class="login-container" method="post" action="">
                <p><input type="email" name="email" placeholder="Email"></p>
                <p><input type="password" name="password" placeholder="Password"></p>
                <p><button type="submit" name='submit' class="login_btn">Login</button></p>
                <P>New User??<a class="text-primary" href="signup.php"> Create Account</a></P>
            </form>

        </div>
        <?php include_once('includes/footer.php');?>
    </body>

</html>
