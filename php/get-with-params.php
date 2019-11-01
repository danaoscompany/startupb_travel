<?php
include 'db.php';
$name = $_POST["name"];
$params = $_POST["params"];
$items = [];
$results = pg_query($c, "SELECT * FROM " . $name . " " . $params);
if ($results && $results->num_rows > 0) {
	while ($row = pg_fetch_assoc($results)) {
		array_push($items, $row);
	}
}
echo json_encode($items);
