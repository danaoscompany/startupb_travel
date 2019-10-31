<?php
include 'db.php';
$colName = $_POST["col_name"];
$id = intval($_POST["id"]);
$token = $_POST["token"]; // Registration token
$c->query("UPDATE " . $colName . " SET gcm_id='" . $token . "' WHERE id=" . $id);
