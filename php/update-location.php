<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
$c->query("UPDATE customer SET lat=" . $lat . ", lng=" . $lng . " WHERE id=" . $userID);
