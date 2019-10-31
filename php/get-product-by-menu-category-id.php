<?php
include 'db.php';
$partnerID = $_POST["partner_id"];
$menuCategoryID = intval($_POST["menu_category_id"]);
$results = $c->query("SELECT * FROM partner_product WHERE userid='" . $partnerID . "' AND menu_category_id=" . $menuCategoryID);
$items = [];
while ($row = $results->fetch_assoc()) {
    array_push($items, $row);
}
echo json_encode($items);
