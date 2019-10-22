<?php
include 'db.php';
$userID = intval($_POST["id"]);
$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
$c->query("UPDATE driver SET lat=" . $lat . ", lng=" . $lng . " WHERE id=" . $userID);
