<?php
include 'db.php';
$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
$sql = "SELECT *, SQRT(POW(69.1 * (lat - " . $lat . "), 2) + POW(69.1 * (" . $lng . " - lng) * COS(lat / 57.3), 2)) AS distance FROM driver HAVING distance < 25 ORDER BY distance";
$results = $c->query($sql);
$items = [];
if ($results) {
	while ($row = $results->fetch_assoc()) {
		array_push($items, $row);
	}
}
echo json_encode($items);
