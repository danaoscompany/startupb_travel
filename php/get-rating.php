<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$driverID = intval($_POST["driver_id"]);
$sql = "SELECT * FROM rating WHERE user_id=" . $userID . " AND driver_id=" . $driverID;
echo json_encode($c->query($sql)->fetch_assoc());
//echo $sql;
