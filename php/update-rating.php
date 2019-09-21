<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$driverID = intval($_POST["driver_id"]);
$rating = intval($_POST["rating"]);
$comment = $_POST["comment"];
if ($c->query("SELECT * FROM rating WHERE user_id=" . $userID . " AND driver_id=" . $driverID)->num_rows > 0) {
	$sql = "UPDATE rating SET comment='" . $comment . "', rating=" . $rating . " WHERE user_id=" . $userID . " AND driver_id=" . $driverID;
	$c->query($sql);
	echo $sql;
} else {
	$sql = "INSERT INTO rating (user_id, driver_id, comment, rating) VALUES (" . $userID . ", " . $driverID . ", '" . $comment . "', " . $rating . ")";
	$c->query($sql);
	echo $sql;
}
