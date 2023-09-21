<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $sender = $_POST["sender"];
    $receiver = $_POST["receiver"];
    $message = $_POST["message"];
    $inserted_at = date("Y-m-d H:i:s");

    $save_message = $db_handle->insertQuery("INSERT INTO `chat`(`sender_id`, `receiver_id`, `message`, `inserted_at`) VALUES ('$sender','$receiver','$message','$inserted_at')");
    if($save_message){
        // Send a response back to the client
        echo "Form submitted successfully";
    }
} else {
    // Handle other HTTP request methods or provide an error response
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method";
}



