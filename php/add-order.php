<?php
include 'db.php';
include 'uuid.php';
$customerID = $_POST["customer_id"];
$driverID = $_POST["driver_id"];
$paymentType = intval($_POST["payment_type"]);
$paymentStatus = intval($_POST["payment_status"]);
$price = doubleval($_POST["price"]);
$latFrom = doubleval($_POST["lat_from"]);
$lngFrom = doubleval($_POST["lng_from"]);
$latTo = doubleval($_POST["lat_to"]);
$lngTo = doubleval($_POST["lng_to"]);
$locationFrom = $_POST["location_from"];
$locationTo = $_POST["location_to"];
$note = $_POST["note"];
$distance = doubleval($_POST["distance"]);
$date = $_POST["date"];
$fromIOS = intval($_POST["from_ios"]);
$sql = "INSERT INTO `order` (orderid, customer, driver, service, status, payment_type, payment_status, price, lat_from, lng_from, location_from, location_detail_from, lat_to, lng_to, location_to, location_detail_to, note, distance, date_insert, date_update, notif_log, from_ios) VALUES ('" . randomUUID() . "', '" . $customerID . "', '" . $driverID . "', 0, 1, " . $paymentType . ", " . $paymentStatus . ", " . $price . ", " . $latFrom . ", " . $lngFrom . ", '" . $locationFrom . "', '" . $locationFrom . "', " . $latTo . ", " . $lngTo . ", '" . $locationTo . "', '" . $locationTo . "', '" . $note . "', " . $distance . ", '" . $date . "', '" . $date . "', '', " . $fromIOS . ")";
$c->query($sql);
$id = mysqli_insert_id($c);
echo $id;
//echo $sql;
