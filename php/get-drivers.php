<?php
include 'db.php';
$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
$sql = "SELECT *, SQRT(POW(69.1 * (latitude - " . $lat . "), 2) + POW(69.1 * (" . $lng . " - longitude) * COS(latitude / 57.3), 2)) AS distance FROM drivers HAVING distance < 25 ORDER BY distance";
$results = $c->query($sql);
$items = [];
if ($results) {
	while ($row = $results->fetch_assoc()) {
		array_push($items, $row);
	}
}
echo json_encode($items);
