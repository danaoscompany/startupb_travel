<?php
include 'db.php';
$tableName = $_POST["name"];
$id = intval($_POST["id"]);
$columnName = $_POST["col_name"];
$columnValue = $_POST["col_value"];
pg_query($c, "UPDATE " . $tableName . " SET " . $columnName . "='" . $columnValue . "' WHERE id=" . $id);
