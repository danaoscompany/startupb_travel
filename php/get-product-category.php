<?php
include 'db.php';
$cityID = intval($_POST["city_id"]);
$type = $_POST["type"]; //food, goods
$results = pg_query($c, "SELECT * FROM product_category WHERE city_id=" . $cityID . " AND type='" . $type . "' ORDER BY position");
$items = [];
while ($row = pg_fetch_assoc($results)) {
    array_push($items, $row);
}
echo json_encode($items);
