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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Home - Game-Mate</title>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Gamers Data</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gamers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Gamer Name</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Gamer ID</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $fetch_data = $db_handle->runQuery("select * from gamer order by id desc");
                                    $no_fetch_data = $db_handle->numRows("select * from gamer order by id desc");
                                    for ($i = 0; $i < $no_fetch_data; $i++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i + 1; ?></td>
                                            <td><?php echo $fetch_data[$i]['full_name_cn']; ?></td>
                                            <td><?php echo $fetch_data[$i]['number']; ?></td>
                                            <td><?php echo $fetch_data[$i]['email']; ?></td>
                                            <td><?php echo $fetch_data[$i]['gamer_id']; ?></td>
                                            <td>
                                                <?php
                                                if ($fetch_data[$i]['status'] == '0') {
                                                    ?>
                                                    <span class="badge light badge-danger">Pending</span>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span class="badge light badge-success">Accepted</span>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($fetch_data[$i]['top_gamer'] == '1') {
                                                    ?>
                                                    <span class="badge light badge-success">Top Gamer</span>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="dropdown ml-auto text-right">
                                                    <div class="btn-link" data-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                             version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <?php
                                                        if ($fetch_data[$i]['status'] == '0') {
                                                            ?>
                                                            <a class="dropdown-item"
                                                               href="accept_gamer.php?gamer_id=<?php echo $fetch_data[$i]['id']; ?>">Accept
                                                                Gamer</a>
                                                            <?php
                                                        }
                                                        ?>
                                                        <a class="dropdown-item"
                                                           href="view_profile.php?gamer_id=<?php echo $fetch_data[$i]['id']; ?>">View
                                                            Profile</a>
                                                        <a class="dropdown-item"
                                                           href="top_gamer.php?gamer_id=<?php echo $fetch_data[$i]['id']; ?>">Change Top Gamer Status</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
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