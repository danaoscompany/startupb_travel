<?php
include 'db.php';
$receiverID = $_POST["receiver_id"];
$opponentID = $_POST["opponent_id"];
$messages = [];
$results = pg_query($c, "SELECT * FROM message WHERE userid='" . $receiverID . "' AND opponent='" . $opponentID . "'");
if ($results && $results->num_rows > 0) {
	while ($row = pg_fetch_assoc($results)) {
		array_push($messages, $row);
	}
}
echo json_encode($messages);
