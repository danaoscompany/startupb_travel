<?php
include 'db.php';
$categoryID = intval($_POST["category_id"]);
$stores = [];
$results = $c->query("SELECT * FROM partner WHERE category_id=" . $categoryID);
while ($row = $results->fetch_assoc()) {
    array_push($stores, $row);
}
echo json_encode($stores);
