<?php
session_start();
require_once('../include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
if(isset($_POST['login'])){
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);

    $login = $db_handle->runQuery("select * from admin_login where email = '$email' and password = '$password'");
    $no_login = $db_handle->numRows("select * from admin_login where email = '$email' and password = '$password'");
    if($login){
        if($no_login == 1){
            $_SESSION['admin_id'] = $login[0]['id'];
            echo "
            <script>
            alert('Login Successfull');
            window.location.href = 'dashboard.php';
</script>
            ";
        }
    }else{
        echo "
        <script>
        alert('Email or password is not correct! Please try again.');
        window.location.href = 'index.php';
</script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Game-Mate</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icons/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="../assets/img/logo.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
</body>

</html>