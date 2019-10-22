<?php
include 'db.php';
$senderID = $_POST["sender_id"];
$receiverID = $_POST["receiver_id"];
$receiverRegistrationToken = $_POST["receiver_registration_token"];
$message = $_POST["message"];
$body = $message;
if (strlen($body) > 30) {
	$body = substr($body, 0, 30);
}
$date = $_POST["date"];
$accessToken = $_POST["access_token"];
$sql = "INSERT INTO message (userid, opponent, message, type, `read`, date_insert) VALUES ('" . $senderID . "', '" . $receiverID . "', '" . $message . "', 1, 0, '" . $date . "')";
$c->query($sql);
/*$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://fcm.googleapis.com/v1/projects/amang-ojek-255300/messages:send");
$header = array();
$header[] = "Content-Type: application/json";
$header[] = "Authorization: Bearer " . $accessToken;
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($curl, CURLOPT_TIMEOUT, 60);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, '{"message":{"notification": {"title": "New message", "body": "' . $body . '"},"token": "' . $receiverRegistrationToken . '", "data": {"type": "new_message"}}}');
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($curl);
curl_close($curl);*/
echo mysqli_insert_id($c);
//echo $sql;
