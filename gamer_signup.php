<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (isset($_POST['register_gamer'])) {
    $full_name_cn = $db_handle->checkValue($_POST['full_name_cn']);
    $full_name_en = $db_handle->checkValue($_POST['full_name_en']);
    $number = $db_handle->checkValue($_POST['number']);
    $email = $db_handle->checkValue($_POST['email']);
    $sex = $db_handle->checkValue($_POST['sex']);
    $gamer_id = $db_handle->checkValue($_POST['gamer_id']);
    $password = $db_handle->checkValue($_POST['password']);
    $other_website = $db_handle->checkValue($_POST['other_website']);
    $social_media = $db_handle->checkValue($_POST['social_media']);
    $newspaper = $db_handle->checkValue($_POST['newspaper']);
    $serach_engine = $db_handle->checkValue($_POST['serach_engine']);
    $advertising = $db_handle->checkValue($_POST['advertising']);
    $introduced = $db_handle->checkValue($_POST['introduced']);
    $other = $db_handle->checkValue($_POST['other']);
    $inserted_at = date("Y-m-d H:i:s");
    $audio = '';

    if (!empty($_FILES['audio']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['audio']['name'];
        $file_size = $_FILES['audio']['size'];
        $file_tmp = $_FILES['audio']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        move_uploaded_file($file_tmp, "assets/audio/" . $file_name);
        $audio = "assets/audio/" . $file_name;
    }

    $image='';
    $arr = array();
    if (!empty($_FILES['profile_image']['name'][0])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        foreach ($_FILES['profile_image']['name'] as $key => $tmp_name) {
            $file_name = $RandomAccountNumber.$key."_" . $_FILES['profile_image']['name'][$key];
            $file_size = $_FILES['profile_image']['size'][$key];
            $file_tmp = $_FILES['profile_image']['tmp_name'][$key];
            $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
                $products_image = '';
            } else {
                move_uploaded_file($file_tmp, "assets/gamer_profile/" .$file_name);
                $arr[] = "assets/gamer_profile/" . $file_name;
            }
        }
        $image = implode(',', $arr);
    } else {
        $image = '';
    }

    $insert = $db_handle->insertQuery("INSERT INTO `gamer` (`full_name_cn`, `full_name_en`, `number`, `email`, `gamer_id`, `audio`, `images`, `password`, `inserted_at`,`other_website`,`social_media`,`other`,`newspaper`,`search_engine`,`advertising`,`introduced`) VALUES ('$full_name_cn','$full_name_en','$number','$email','$gamer_id','$audio','$image','$password','$inserted_at','$other_website','$social_media','$other','$newspaper','$serach_engine','$advertising','$introduced')");

    if($insert){
        echo "
        <script>
        alert('您的請求已提交！管理員將會審查並儘快批准！');
        window.location.href = 'login.php';
</script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>My Profile - Gamemate</title>

    <?php include('include/css.php'); ?>
</head>

<body class="top-two-section">
<div class="page-wrapper">
    <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
    <!-- Start of Header -->
    <?php include('include/header_inner.php'); ?>
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main" style="margin-top: -1px;">

        <!-- Start of Page Content -->
        <div class="page-content mb-10 mt-10">
            <!-- End of Shop Banner -->
            <div class="container-fluid">
                <!-- Start of Shop Content -->
                <div class="shop-content">
                    <div class="">
                        <div class="container pb-10">
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="login-popup">
                                            <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                        <h2>陪玩師註冊</h2>
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label>全名(CN)</label>
                                                                <input type="text" class="form-control" name="full_name_cn"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>全名(EN)</label>
                                                                <input type="text" class="form-control" name="full_name_en"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>電話號碼</label>
                                                                <input type="text" class="form-control" name="number"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>電子郵件</label>
                                                                <input type="text" class="form-control" name="email"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>性別</label>
                                                                <select class="form-control"
                                                                        name="sex" required>
                                                                    <option value="male">男性</option>
                                                                    <option value="female">女性</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>身份證號碼</label>
                                                                <input type="text" class="form-control" name="gamer_id"
                                                                       required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>音頻</label>
                                                                <input type="file" class="form-control" name="audio"
                                                                       required="" accept="audio/*">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>個人資料圖片（可選擇多張圖片。建議尺寸 800x900）</label>
                                                                <input type="file" class="form-control" name="profile_image[]"
                                                                       required="" accept="image/*" multiple>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>問題: 閣下如何得知本網站？</label>


                                                                <input type="checkbox" class="custom-checkbox" id="remembera" name="other_website">
                                                                <label for="remembera">透過其他網站</label>

                                                                <input type="checkbox" class="custom-checkbox" id="remembera" name="social_media">
                                                                <label for="rememberb">透過社交媒體</label>

                                                                <input type="checkbox" class="custom-checkbox" id="rememberd" name="newspaper">
                                                                <label for="rememberd">透過報紙 / 雜誌 / 宣傳單張</label>

                                                                <input type="checkbox" class="custom-checkbox" id="remembere" name="serach_engine">
                                                                <label for="remembere">透過搜尋引擎</label>

                                                                <input type="checkbox" class="custom-checkbox" id="remembere" name="advertising">
                                                                <label for="remembere">透過廣告</label>

                                                                <input type="checkbox" class="custom-checkbox" id="remembere" name="introduced">
                                                                <label for="remembere">經人介紹</label>


                                                                <input type="checkbox" class="custom-checkbox" onclick="toggleOther(this)" id="remembera">
                                                                <label for="rememberc">其他</label>
                                                                <input type="text" class="form-control" id="other" style="display: none">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>密碼</label>
                                                                <input type="password" class="form-control" name="password"
                                                                       required="">
                                                            </div>
                                                            <div class="form-checkbox d-flex align-items-center justify-content-between">
                                                                <input type="checkbox" class="custom-checkbox" id="remember1"
                                                                       required="">
                                                                <label for="remember1"><a href="assets/files/Gamerbehaviouragreement.pdf" target="_blank">Gamer Behaviour Agreement</a></label>
                                                            </div>
                                                            <div class="form-checkbox d-flex align-items-center justify-content-between">
                                                                <input type="checkbox" class="custom-checkbox" id="remember2"
                                                                       required="">
                                                                <label for="remember2"><a href="assets/files/Serviceagreement.pdf" target="_blank">Service Agreement</a></label>
                                                            </div>


                                                            <button type="submit" name="register_gamer"
                                                                    class="btn btn-primary mt-5">提交個人資料
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
                </div>
                <!-- End of Shop Content -->
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Page Wrapper -->

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

<script>
    function toggleOtherWebsite(checkbox) {
        var otherWebsiteInput = document.getElementById('otherWebsite');
        if (checkbox.checked) {
            otherWebsiteInput.style.display = 'block';
        } else {
            otherWebsiteInput.style.display = 'none';
        }
    }
    function toggleSocialMedia(checkbox) {
        var socialMedia = document.getElementById('socialMedia');
        if (checkbox.checked) {
            socialMedia.style.display = 'block';
        } else {
            socialMedia.style.display = 'none';
        }
    }
    function toggleOther(checkbox) {
        var other = document.getElementById('other');
        if (checkbox.checked) {
            other.style.display = 'block';
        } else {
            other.style.display = 'none';
        }
    }


</script>
</html>