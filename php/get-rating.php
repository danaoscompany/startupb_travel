<?php
include 'db.php';
$orderID = intval($_POST["order_id"]);
$userIDInt = intval($_POST["user_id"]);
$driverIDInt = intval($_POST["driver_id"]);
$date = $_POST["date"];
$userID = $c->query("SELECT * FROM customer WHERE id=" . $userIDInt)->fetch_assoc()["userid"];
$driverID = $c->query("SELECT * FROM driver WHERE id=" . $driverIDInt)->fetch_assoc()["userid"];
$sql = "SELECT * FROM driver_rating WHERE orderid=" . $orderID;
$results = $c->query($sql);
if ($results && $results->num_rows > 0) {
    echo json_encode($results->fetch_assoc());
} else {
	$sql = "INSERT INTO driver_rating (driver, customer, star, comment, date_update, orderid) VALUES ('" . $driverID . "', '" . $userID . "', 0, '', '" . $date . "', " . $orderID . ")";
    $c->query($sql);
    $id = mysqli_insert_id($c);
    echo json_encode($c->query("SELECT * FROM driver_rating WHERE id=" . $id)->fetch_assoc());
    //echo $sql;
}
