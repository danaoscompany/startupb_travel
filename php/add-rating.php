<?php
include 'db.php';
$driverID = $_POST["driver_id"];
$customerID = $_POST["customer_id"];
$star = intval($_POST["star"]);
$comment = $_POST["comment"];
$date = $_POST["date"];
$c->query("INSERT INTO driver_rating (driver, customer, star, comment, date_update) VALUES ('" . $driverID . "', '" . $customerID . "', " . $star . ", '" . $comment . "', '" . $date . "')");
$id = mysqli_insert_id($c);
echo $id;
