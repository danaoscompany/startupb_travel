<?php
include 'db.php';
$categoryID = intval($_POST["category_id"]);
$stores = [];
$results = pg_query($c, "SELECT * FROM partner WHERE category_id=" . $categoryID);
while ($row = pg_fetch_assoc($results)) {
    array_push($stores, $row);
}
echo json_encode($stores);
