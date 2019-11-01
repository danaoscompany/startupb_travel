<?php
include 'db.php';
$cityID = intval($_POST["city_id"]);
$items = [];
$results = pg_query($c, "SELECT product_id, COUNT(*) FROM order_product_detail WHERE type='food' GROUP BY product_id ORDER BY COUNT(*) DESC LIMIT 10");
while ($row = pg_fetch_assoc($results)) {
    $productID = intval($row["product_id"]);
    $product = pg_query($c, "SELECT * FROM partner_product WHERE id=" . $productID)->fetch_assoc();
    $categoryID = intval($product["category_id"]);
    $category = pg_query($c, "SELECT * FROM product_category WHERE id=" . $categoryID)->fetch_assoc();
    if (intval($category["city_id"]) == $cityID) {
        array_push($items, $row);
    }
}
echo json_encode($items);
