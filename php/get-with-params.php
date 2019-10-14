<?php
include 'db.php';
$name = $_POST["name"];
$params = $_POST["params"];
$items = [];
$results = $c->query("SELECT * FROM " . $name . " " . $params);
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($items, $row);
	}
}
echo json_encode($items);
