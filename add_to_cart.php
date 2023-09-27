<?php
   session_start();
   error_reporting(0);
   include('includes/dbconnection.php');

   if(!isset($_SESSION['user_id'])){
         echo '<script>alert("you must login first")</script>';
         header ('location:logout.php');
   }

   $user_id = $_SESSION['user_id'];
   $ret=mysqli_query($con,"select * from tbluser where user_id='$user_id'");
   $row=mysqli_fetch_array($ret);
   $username=$row['username'];
   $email=$row['email'];
   $mobile_number=$row['mobile_number'];


if(isset($_POST['send']))
  {
   $eid=$_GET['eid'];
   $user_id=$_SESSION['user_id'];
   $fullname=$_POST['fullname'];
   $email=$_POST['email'];
   $mobilenumber=$_POST['mobnum'];
   $quantity=$_POST['quantity'];
   $message=$_POST['message'];
   $enquirynumber = mt_rand(100000000, 999999999);
   
   $query1=mysqli_query($con,"insert into tblenquiry(EnquiryNumber, Artpdid, user_id, FullName, Email, MobileNumber, Quantity, Message ) value('$enquirynumber', '$eid', '$user_id', '$fullname', '$email','$mobilenumber', '$quantity', '$message')");
   
   if($query1) {
      echo '<script>alert("Your enquiry successfully send. Your Enquiry number is "+"'.$enquirynumber.'")</script>';
      echo "<script>window.location.href='index.php'</script>";
   }
   else
   {
      echo "<script>alert('Something went wrong.');
      history.back();
      </script>";  
      
   }
}

  ?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Art Gallery Management System | Art Enquiry</title>

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
        <?php include_once('includes/header.php');?>
        <!-- banner -->
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
                    <li>Enquiry</li>
                </ul>
            </div>
        </div>
        <!-- //short-->
        <!--contact -->
        <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
                <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Buy Now</h3>
                <div class="contact-list-grid">
                    <form action="#" method="post">
                        <div class=" agile-wls-contact-mid">
                            <div class="form-group contact-forms">
                                <input class="form-control" type="text" name="fullname" required="true"
                                    value="<?php echo $username ?>" />
                            </div>
                            <div class="form-group contact-forms">
                                <input class="form-control" type="email" name="email" required="true"
                                    value="<?php echo $email ?>" />
                            </div>
                            <div class="form-group contact-forms">
                                <input class="form-control" type="text" name="mobnum" maxlength="10" pattern="[0-9]+"
                                    value="<?php echo $mobile_number ?>" />
                            </div>


                            <button id="decrease" class="decrease-btn">-</button>

                            <input class="quantity" type="text" name="quantity" id="quantity" value="">

                            <button id="increase" class="increase-btn">+</button>


                            <div class="form-group contact-forms">
                                <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-block sent-butnn" name="send">Buy Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--//contact-map -->
        </section>
        <!--subscribe-address-->

        <?php include_once('includes/footer.php');?>

        <!--js working-->
        <script src='js/jquery-2.2.3.min.js'></script>
        <!--//js working-->
        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
        toys.render();

        toys.cart.on('toys_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
        </script>
        <!-- //cart-js -->
        <!-- start-smoth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

        var x = 1;
        $("#quantity").attr('value', x);
        $("#increase").click(function() {
            event.preventDefault();
            $("#quantity").attr('value', ++x);
        });
        $("#decrease").click(function() {
            event.preventDefault();
            if ($("#quantity").attr('value') > 1) {
                $("#quantity").attr('value', --x);
            }

        });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- here stars scrolling icon -->
        <script>
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };


            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
        </script>
        <!-- //here ends scrolling icon -->
        <!--bootstrap working-->
        <script src="js/bootstrap.min.js"></script>
        <!-- //bootstrap working-->
        <!-- //OnScroll-Number-Increase-JavaScript -->
    </body>

</html>
