<?php
session_start();

require '../PHPMailer.php';
require '../SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer();

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
    $fetch_gamer = $db_handle->runQuery("select email from gamer where id = '$id'");
    $email = $fetch_gamer[0]['email'];
    $email_to = $email;

    $mail->isSMTP();
    $mail->Host = 'mail.gamemate.com.hk';  // Specify your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@gamemate.com.hk';
    $mail->Password = '&{@(J2D[1_&3';
    $mail->Port = 465;  // Specify the SMTP port
    $mail->SMTPSecure = 'ssl';  // Enable encryption, 'ssl' also possible

// Email content
    $mail->setFrom('info@gamemate.com.hk', 'Gamemate');
    $mail->addAddress($email_to);
    $mail->Subject = 'Account Approval';
    $mail->isHTML(true);
    $mail->Body = "
    <html>
        <body style='background-color: #eee; font-size: 16px;'>
        <div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
            <p style='text-align: center;color:green;font-weight:bold'>Congratulations! Your account as a gamer is accepted.</p>
        </div>
        </body>
    </html>";

// Send the email
    if ($mail->send()) {
    echo "
    <script>
    alert('Status Updated Successfully');
    window.location.href = 'dashboard.php';
</script>
    ";}
}