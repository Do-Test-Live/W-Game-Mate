<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
if (!isset($_SESSION['userid'])) {
    echo "<script>
                window.location.href='index.php';
                </script>";
}

if (isset($_POST['submit_profile'])) {
    $gamerid = $db_handle->checkValue($_POST['gamer_id']);
    $nick_name = $db_handle->checkValue($_POST['nick_name']);
    $game_type = $db_handle->checkValue($_POST['game_type']);
    $game = $db_handle->checkValue($_POST['game']);
    $game_mode = $db_handle->checkValue($_POST['game_mode']);
    $price = $db_handle->checkValue($_POST['price']);
    $price_unit = $db_handle->checkValue($_POST['price_unit']);
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

    $insert = $db_handle->insertQuery("INSERT INTO `gamer_profile`(`game_type`,`nick_name`,`gamer_id`, `game_name`, `game_mood`, `price`, `price_unit`, `audio_file`, `inserted_at`,`profile_image`) VALUES ('$game_type','$nick_name','$gamerid','$game','$game_mode','$price','$price_unit','$audio','$inserted_at','$image')");

    if($insert){
        echo "
        <script>
        alert('Your request is submitted! Admin will have a look and approve this soon!');
        window.location.href = 'gamer_profile.php';
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

<body>
<div class="page-wrapper">
    <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
    <!-- Start of Header -->
    <?php include('include/header_inner.php'); ?>
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main" style="margin-top: -1px;">

        <!-- Start of Page Content -->
        <div class="page-content mb-10">
            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                 style="background-image: url(assets/images/shop/banner2.jpg); background-color: #FFC74E;">
                <div class="container banner-content">

                </div>
            </div>
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
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="gamer_id"
                                                                   value="<?php echo $_SESSION['userid']; ?>">
                                                            <div class="form-group">
                                                                <label>Nick Name</label>
                                                                <input type="text" class="form-control" name="nick_name"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Game Type</label>
                                                                <select id="gameType" class="form-control"
                                                                        name="game_type" required>
                                                                    <option selected disabled>Choose Game Type</option>
                                                                    <option value="電腦遊戲">電腦遊戲</option>
                                                                    <option value="手機遊戲">手機遊戲</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Choose Game</label>
                                                                <select id="game" class="form-control" name="game"
                                                                        required>
                                                                    <option selected disabled>Choose Game</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Choose Game Mode</label>
                                                                <select class="form-control" name="game_mode" required>
                                                                    <option selected disabled>Choose Game Mode</option>
                                                                    <option value="標準模式">標準模式</option>
                                                                    <option value="單雙積分">單雙積分</option>
                                                                    <option value="彈性積分">彈性積分</option>
                                                                    <option value="隨機單中">隨機單中</option>
                                                                    <option value="積分模式">積分模式</option>
                                                                    <option value="標準模式">標準模式</option>
                                                                    <option value="不限模式">不限模式</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Audio</label>
                                                                <input type="file" class="form-control" name="audio"
                                                                       required="" accept="audio/*">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Profile Images (Can Select Multiple Image. Recommended Size 800x900)</label>
                                                                <input type="file" class="form-control" name="profile_image[]"
                                                                       required="" accept="image/*" multiple>
                                                            </div>


                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="number" class="form-control" name="price"
                                                                       required="">
                                                            </div>

                                                            <div class="form-group mb-0">
                                                                <label>Price Unit</label>
                                                                <select class="form-control" name="price_unit" required>
                                                                    <option selected disabled>Choose Game Mode</option>
                                                                    <option value="局">局</option>
                                                                    <option value="半小時">半小時</option>
                                                                    <option value="小時">小時</option>
                                                                    <option value="1天">1天</option>
                                                                </select>
                                                            </div>

                                                            <button type="submit" name="submit_profile"
                                                                    class="btn btn-primary mt-3">Submit Profile
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
    $(document).ready(function () {
        // Handle the onchange event of the first select field
        $('#gameType').change(function () {
            var selectedGameType = $(this).val();

            // Make an AJAX request to fetch options based on the selected game type
            $.ajax({
                type: 'POST',
                url: 'fetch_options.php', // Replace with the correct URL to your PHP script
                data: {gameType: selectedGameType},
                success: function (data) {
                    // Populate the second select field with the fetched options
                    $('#game').html(data);

                }
            });
        });
    });


</script>
</html>