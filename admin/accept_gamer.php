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

$update = $db_handle->insertQuery("UPDATE `gamer` SET `status`='1' WHERE `id` = $id");
if($update){
    echo "
    <script>
    alert('Status Updated Successfully');
    window.location.href = 'dashboard.php';
</script>
    ";
}