<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

$chat_id = $_POST['chat_id'];
$rid = $_POST['rid'];

// Fetch chat messages based on chat_id and rid
$query = "SELECT * FROM chat WHERE (sender_id = '$chat_id' || receiver_id = '$chat_id') AND (sender_id = '$rid' || receiver_id = '$rid') ORDER BY id DESC";
$fetch_message = $db_handle->runQuery($query);

// Create an array to store chat messages
$messages = array();

// Iterate through the fetched messages
foreach ($fetch_message as $message) {
    $messages[] = array(
        'sender_id' => $message['sender_id'],
        'message' => $message['message']
    );
}

// Create a JSON response containing the chat messages
$response = array(
    'messages' => $messages
);

// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Return the JSON response
echo json_encode($response);

