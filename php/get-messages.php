<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$driverID = intval($_POST["driver_id"]);
echo json_encode($c->query("SELECT * FROM messages WHERE user_id=" . $userID . " AND driver_id=" . $driverID));
