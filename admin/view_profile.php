<?php
session_start();
require_once('../include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (!isset($_SESSION['admin_id'])) {
    echo "
    <script>
    window.location.href = 'index.php';
</script>
    ";
}

$gamer_id = $_GET['gamer_id'];
$fetch_gamer_data = $db_handle->runQuery("select * from gamer where id = '$gamer_id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Profile - Game-Mate</title>
    <!-- Favicon icon -->
    <?php include('include/css.php'); ?>
</head>

<body>

<!--*******************
        Preloader start
    ********************-->
<?php include('include/preloader.php'); ?>
<!--*******************
        Preloader end
    ********************-->


<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <?php include('include/header_logo.php'); ?>
    <!--**********************************
            Nav header end
        ***********************************-->


    <!--**********************************
            Header start
        ***********************************-->
    <?php include('include/header.php'); ?>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <?php include('include/sidebar.php'); ?>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Game Mate</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Gamers Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gamer's Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="profile-interest">
                                <div class="tab-pane fade active show">
                                    <div class="profile-personal-info">
                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Full Name (CN) <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['full_name_cn'];?></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Full Name (EN) <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['full_name_en'];?></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['email'];?></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Contact Number <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['number'];?></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Nick Name <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['nick_name'];?></span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Gamer ID <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span><?php echo $fetch_gamer_data[0]['gamer_id'];?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-primary mb-4 mt-5">Profile Image</h4>
                                <div class="row mt-4 sp4" id="lightgallery">
                                    <?php
                                    $image = explode(',',$fetch_gamer_data[0]['images']);
                                    foreach ($image as $item) {
                                        ?>
                                        <a href="../<?php echo $item;?>" data-exthumbimage="../<?php echo $item;?>" data-src="<?php echo $item;?>" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="../<?php echo $item;?>" alt="" class="img-fluid">
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <h4 class="text-primary mb-4 mt-5">ID Card Image</h4>
                                <div class="row mt-4 sp4" id="lightgallery">
                                    <?php
                                    $imageid = explode(',',$fetch_gamer_data[0]['gamer_id_image']);
                                    foreach ($imageid as $item){
                                        ?>
                                        <a href="../<?php echo $item;?>" data-exthumbimage="../<?php echo $item;?>" data-src="../<?php echo $item;?>" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="../<?php echo $item;?>" alt="" class="img-fluid">
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <h4 class="text-primary mb-4 mt-5">Gamer Ranking Image</h4>
                                <div class="row mt-4 sp4" id="lightgallery">
                                    <?php
                                    $imagerank = explode(',',$fetch_gamer_data[0]['gamer_ranking_image']);
                                    foreach ($imagerank as $item){
                                        ?>
                                        <a href="../<?php echo $item;?>" data-exthumbimage="../<?php echo $item;?>" data-src="../<?php echo $item;?>" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="../<?php echo $item;?>" alt="" class="img-fluid">
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="mt-4">
                                    <a href="accept_gamer.php?gamer_id=<?php echo $gamer_id; ?>" class="btn btn-primary mb-1">Approve</a>
                                    <a href="top_gamer.php?gamer_id=<?php echo $gamer_id; ?>" class="btn btn-primary mb-1">Make Top Gamer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Designed &amp; Developed by <a href="#" target="_blank">NGTTech</a> 2022</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<?php include ('include/js.php');?>
</body>
</html>