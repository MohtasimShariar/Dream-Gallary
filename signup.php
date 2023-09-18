<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $query=mysqli_query($con, "insert into tbluser(username, email, mobile_number, password) value('$username', '$email', '$mobile_number', '$password')");

    if($query){
        echo "<script>alert('User Added');</script>";
        echo "<script>window.location.href ='login.php'</script>";
    }
    else{
        echo "<script>alert('Unexpected error occurred');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Sign Up as A User</title>

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
                    <li>Sign Up</li>
                </ul>
            </div>
        </div>

        <div class="login">
            <div class="login-triangle"></div>

            <h2 class="login-header">SignUp</h2>

            <form class="login-container" method="post" action="">
                <p><input type="text" name="username" placeholder="Username"></p>
                <p><input type="email" name="email" placeholder="Email"></p>
                <p><input type="text" name="mobile_number" placeholder="Mobile Number"></p>
                <p><input type="password" name="password" placeholder="Password"></p>
                <p><input type="password" name="confirm password" placeholder="Confirm Password"></p>
                <p><button type="submit" name='submit' class="signup_btn">SignUp</button></p>
                <P>Already have an account??<a class="text-primary" href="login.php"> Login Here</a></P>
            </form>

        </div>
        <?php include_once('includes/footer.php');?>
    </body>

</html>
