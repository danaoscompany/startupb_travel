<?php
include 'db.php';
$id = intval($_POST["id"]);
$star = intval($_POST["star"]);
$comment = $_POST["comment"];
$date = $_POST["date"];
$orderID = intval($_POST["order_id"]);
$c->query("UPDATE driver_rating SET star=" . $star . ", comment='" . $comment . "', date_update='" . $date . "' WHERE orderid=" . $orderID);
$ratingID = intval($c->query("SELECT * FROM driver_rating WHERE orderid=" . $orderID)->fetch_assoc()["id"]);
echo $ratingID;
