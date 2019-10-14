<?php
include 'db.php';
$senderID = intval($_POST["sender_id"]);
$receiverID = intval($_POST["receiver_id"]);
$message = $_POST["message"];
$date = $_POST["date"];
$c->query("INSERT INTO messages (sender_id, receiver_id, message, date) VALUES (" . $senderID . ", " . $receiverID . ", '" . $message . "', '" . $date . "')");
echo mysqli_insert_id($c);
