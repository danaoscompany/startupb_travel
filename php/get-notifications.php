<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$results = $c->query("SELECT * FROM notifications WHERE user_id=0 OR user_id=" . $userID . " ORDER BY date ASC");
$notifications = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($notifications, $row);
	}
}
echo json_encode($notifications);
