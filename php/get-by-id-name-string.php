<?php
include 'db.php';
$name = $_POST["name"];
$idName = $_POST["id_name"];
$id = $_POST["id"];
$items = [];
$sql = "SELECT * FROM " . $name . " WHERE " . $idName . "='" . $id . "'";
<<<<<<< HEAD
$results = pg_query($c, $sql);
=======
$results = $c->query($sql);
>>>>>>> c16268cb874e55ed6757453f45761b6b2fc671e5
if ($results && $results->num_rows > 0) {
	while ($row = pg_fetch_assoc($results)) {
		array_push($items, $row);
	}
}
echo json_encode($items);
