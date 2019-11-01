<?php
include 'db.php';
$name = $_POST["name"];
$id = intval($_POST["id"]);
$items = [];
$sql = "SELECT * FROM " . $name . " WHERE id=" . $id;
$results = pg_query($c, $sql);
if ($row = pg_fetch_assoc($results)) {
	while ($row = pg_fetch_assoc($results)) {
		array_push($items, $row);
	}
}
//echo json_encode($items);
echo $sql;
