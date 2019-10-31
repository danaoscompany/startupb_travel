<?php
include 'db.php';
$cityID = intval($_POST["city_id"]);
$type = $_POST["type"]; //food, goods
$results = $c->query("SELECT * FROM product_category WHERE city_id=" . $cityID . " AND type='" . $type . "' ORDER BY position");
$items = [];
while ($row = $results->fetch_assoc()) {
    array_push($items, $row);
}
echo json_encode($items);
