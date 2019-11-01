<?php
include 'db.php';
$userID = $_POST["userid"];
$amount = doubleval($_POST["amount"]);
$uniqueCode = intval($_POST["unique_code"]);
$total = doubleval($_POST["total"]);
$date = $_POST["date"];
$trxid = $_POST["trxid"];
$sql = "INSERT INTO deposit (userid, amount, `unique`, total, status, expire, notif, trxid, date_update, date_insert) VALUES ('" . $userID . "', " . $amount . ", " . $uniqueCode . ", " . $total . ", 0, 0, 0, '" . $trxid . "', '" . $date . "', '" . $date . "')";
pg_query($c, $sql);
$id = mysqli_insert_id($c);
echo $id;
//echo $sql;
