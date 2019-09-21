<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$type = $_POST["type"];
$account = $_POST["account"];
$bankType = $_POST["bank_type"];
$holder = $_POST["holder"];
$c->query("INSERT INTO banks (user_id, type, account, bank_type, holder) VALUES (" . $userID . ", '" . $type . "', '" . $account . "', '" . $bankType . "', '" . $holder . "')");
