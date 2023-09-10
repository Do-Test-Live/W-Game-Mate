<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
if (isset($_POST['login'])) {
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);
    $log_in = $db_handle->runQuery("select * from gamer where email = '$email' and password = '$password'");
    $log_in_no = $db_handle->numRows("select * from gamer where email = '$email' and password = '$password'");
    if($log_in){
        if ($log_in_no == 1) {
            $s = $log_in[0]['status'];
            if($s == '1'){
                $_SESSION['userid'] = $log_in[0]["id"];
                if($log_in[0]['role'] == 'gamer'){
                    echo "<script>
                alert('Login Successful');
                window.location.href='gamer_profile.php';
                </script>";
                }else{
                    echo "<script>
                alert('Login Successful');
                window.location.href='index.php';
                </script>";
                }
            } else{
                echo "<script>
                alert('Your account is not approved yet!');
                window.location.href='login.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('Something went wrong.');
                window.location.href='login.php';
                </script>";
        }
    } else{
        echo "<script>
                alert('Something went wrong.');
                window.location.href='login.php';
                </script>";
    }
}

if (isset($_POST['signup'])) {

    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);
    $fname = $db_handle->checkValue($_POST['fname']);
    $lname = $db_handle->checkValue($_POST['lname']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $customer = $db_handle->checkValue($_POST['customer']);
    $inserted_at = date('Y-m-d h:i:s');


    $query = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `phone`, `role`, `inserted_at`) VALUES ('$fname','$lname','$email','$password','$phone','$customer','$inserted_at')";

    $insert = $db_handle->insertQuery($query);

    if ($insert) {
        echo "<script>
                alert('Signup Successful');
                window.location.href='login.php';
                </script>";
    } else {
        echo "<script>
                alert('Something went wrong.');
                window.location.href='login.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Login - Gamemate</title>

    <!--css files-->
    <?php include('include/css.php'); ?>

</head>

<body class="home">
<div class="page-wrapper">
    <!-- Start of Header -->
    <?php include ('include/header.php');?>
    <!-- End of Header -->

    <!-- Start of Main -->
    <main class="main">
        <div class="top-two-section">
            <div class="container pb-10">
                <div class="intro-wrapper mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="login-popup">
                                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                                        <li class="nav-item">
                                            <a href="#sign-in" class="nav-link active">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sign-up" class="nav-link">Sign Up</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="sign-in">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Email Address *</label>
                                                    <input type="text" class="form-control" name="email"
                                                           id="username" required="">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label>Password *</label>
                                                    <input type="password" class="form-control" name="password"
                                                           id="password" required="">
                                                </div>
                                                <div class="form-checkbox d-flex align-items-center justify-content-between">
                                                    <a href="#">Lost your password?</a>
                                                </div>
                                                <button type="submit" name="login" class="btn btn-primary">Sign In
                                                </button>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="sign-up">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Your email address *</label>
                                                    <input type="email" class="form-control" name="email" id="email_1"
                                                           required="">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label>Password *</label>
                                                    <input type="password" class="form-control" name="password"
                                                           id="password_1" required="">
                                                </div>
                                                <div class="checkbox-content login-vendor">
                                                    <div class="form-group mb-5">
                                                        <label>First Name *</label>
                                                        <input type="text" class="form-control" name="fname"
                                                               id="first-name" required="">
                                                    </div>
                                                    <div class="form-group mb-5">
                                                        <label>Last Name *</label>
                                                        <input type="text" class="form-control" name="lname"
                                                               id="last-name" required="">
                                                    </div>
                                                    <div class="form-group mb-5">
                                                        <label>Phone Number *</label>
                                                        <input type="tel" class="form-control" name="phone"
                                                               id="phone-number" required="">
                                                    </div>
                                                </div>
                                                <div class="form-checkbox user-checkbox mt-0">
                                                    <input type="radio" class="custom-checkbox checkbox-round active"
                                                           id="check-customer" name="customer" value="user"
                                                           required="" checked>
                                                    <label for="check-customer" class="check-customer mb-1">I am a
                                                        user</label>
                                                </div>
                                                <p>Your personal data will be used to support your experience
                                                    throughout this website, to manage access to your account,
                                                    and for other purposes described in our <a href="#"
                                                                                               class="text-primary">privacy
                                                        policy</a>.</p>
                                                <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                                    <input type="checkbox" class="custom-checkbox" id="remember"
                                                           name="remember" required="">
                                                    <label for="remember" class="font-size-md">I agree to the <a
                                                                href="#" class="text-primary font-size-md">privacy
                                                            policy</a></label>
                                                </div>
                                                <button type="submit" name="signup" class="btn btn-primary">Sign Up
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->


    <div class="month-category head3 pt-8">
        <div class="container">
            <div class="category-wrapper bg-white">
                <div class="product-wrapper">
                    <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-1">
                        <div class="grid-item product-wrap shoes">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo14/products/img13.jpg" alt="Product"
                                             width="300" height="337">
                                        <img src="assets/images/demos/demo14/products/img13.jpg" alt="Product"
                                             width="300" height="337">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="grid-item product-wrap fashion air-condtioning">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo14/products/img14.jpg" alt="Product"
                                             width="300" height="337">
                                        <img src="assets/images/demos/demo14/products/img14.jpg" alt="Product"
                                             width="300" height="337">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="grid-item product-wrap fashion vacuum">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo14/products/img15.jpg" alt="Product"
                                             width="300" height="337">
                                        <img src="assets/images/demos/demo14/products/img15.jpg" alt="Product"
                                             width="300" height="337">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="grid-item product-wrap fashion cameras">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo14/products/img16.jpg" alt="Product"
                                             width="300" height="337">
                                        <img src="assets/images/demos/demo14/products/img16.jpg" alt="Product"
                                             width="300" height="337">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="grid-item product-wrap shoes">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo14/products/img17.jpg" alt="Product"
                                             width="300" height="337">
                                        <img src="assets/images/demos/demo14/products/img17.jpg" alt="Product"
                                             width="300" height="337">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="grid-space col-xl-5col col-1"></div>
                    </div>
                </div>
                <!-- End of Product Wrapper -->
            </div>
        </div>
    </div>

    <!-- Start of Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Page-wrapper -->


<!-- Start of Scroll Top -->
<?php include('include/scrol_top.php'); ?>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<?php include('include/mobile.php'); ?>
<!-- End of Mobile Menu -->

<!-- Start of Newsletter popup -->
<?php include('include/newsletter.php'); ?>
<!-- End of Newsletter popup -->

<!-- Start of Quick View -->
<?php include('include/quick.php'); ?>
<!-- End of Quick view -->

<!-- Plugin JS File -->
<?php include('include/js.php'); ?>
</body>


</html>
