<?php
include 'db.php';
$foods = [];
$results = $c->query("SELECT product_id, COUNT(*) FROM order_product_detail GROUP BY product_id ORDER BY COUNT(*) DESC LIMIT 10");
while ($row = $results->fetch_assoc()) {
    array_push($foods, $row);
}
echo json_encode($foods);
