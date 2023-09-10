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

$id = $_GET['gamer_id'];

$status = $db_handle->runQuery("select top_gamer from gamer where id='$id'");
if($status[0]['top_gamer'] == 0){
    $gamer = 1;
} else {
    $gamer = 0;
}
$update = $db_handle->insertQuery("UPDATE `gamer` SET `top_gamer`='$gamer' WHERE `id` = '$id'");
if($update){
    echo "
    <script>
    alert('Status Updated Successfully');
    window.location.href = 'dashboard.php';
</script>
    ";
}