<?php
include 'db.php';
$receiverID = $_POST["receiver_id"];
$opponentID = $_POST["opponent_id"];
$messages = [];
$results = $c->query("SELECT * FROM message WHERE userid='" . $receiverID . "' AND opponent='" . $opponentID . "'");
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($messages, $row);
	}
}
echo json_encode($messages);
