<?php
include 'db.php';
$userID = $_POST["userid"];
$amount = doubleval($_POST["amount"]);
$uniqueCode = intval($_POST["unique_code"]);
$total = doubleval($_POST["total"]);
$date = $_POST["date"];
$c->query("INSERT INTO deposit (userid, amount, unique, total, status, expire, notif, trxid, date_update, date_insert) VALUES ('" . $userID . "', " . $amount . ", " . $uniqueCode . ", " . $total . ", 0, 0, 0, 0, '" . $date . "', '" . $date . "')");
