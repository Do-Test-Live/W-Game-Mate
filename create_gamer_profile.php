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




    $insert = $db_handle->insertQuery("INSERT INTO `gamer_profile`(`game_type`,`nick_name`, `game_name`, `game_mood`, `price`, `price_unit`, `inserted_at`) VALUES ('$game_type','$nick_name','$game','$game_mode','$price','$price_unit','$inserted_at')");

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
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="gamer_id"
                                                                   value="<?php echo $_SESSION['userid']; ?>">
                                                            <div class="form-group">
                                                                <label>暱稱</label>
                                                                <input type="text" class="form-control" name="nick_name"
                                                                       required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>遊戲類型</label>
                                                                <select id="gameType" class="form-control"
                                                                        name="game_type" required>
                                                                    <option selected disabled>選擇遊戲類型</option>
                                                                    <option value="電腦遊戲">電腦遊戲</option>
                                                                    <option value="手機遊戲">手機遊戲</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>選擇遊戲</label>
                                                                <select id="game" class="form-control" name="game"
                                                                        required>
                                                                    <option selected disabled>選擇遊戲</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>選擇遊戲模式</label>
                                                                <select class="form-control" name="game_mode" required>
                                                                    <option selected disabled>選擇遊戲模式</option>
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
                                                                <label>價格</label>
                                                                <input type="number" class="form-control" name="price"
                                                                       required="">
                                                            </div>

                                                            <div class="form-group mb-0">
                                                                <label>價格單位</label>
                                                                <select class="form-control" name="price_unit" required>
                                                                    <option selected disabled>選擇價格單位</option>
                                                                    <option value="局">局</option>
                                                                    <option value="半小時">半小時</option>
                                                                    <option value="小時">小時</option>
                                                                    <option value="1天">1天</option>
                                                                </select>
                                                            </div>

                                                            <button type="submit" name="submit_profile"
                                                                    class="btn btn-primary mt-3">建立個人資料
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