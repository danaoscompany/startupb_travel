<?php
include 'db.php';
$customerID = intval($_POST["customer_id"]);
$results = pg_query($c, "SELECT * FROM favorite_product WHERE customer_id=" . $customerID);
$stores = [];
while ($row = pg_fetch_assoc($results)) {
    $partnerID = intval($row["partner_id"]);
    $results2 = pg_query($c, "SELECT * FROM partner WHERE id=" . $partnerID);
    while ($row2 = $results2->fetch_assoc()) {
        array_push($stores, $row2);
    }
}
echo json_encode($stores);
