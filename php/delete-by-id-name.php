<?php
include 'db.php';
$name = $_POST["name"];
$idName = $_POST["id_name"];
$id = intval($_POST["id"]);
$items = [];
pg_query($c, "DELETE FROM " . $name . " WHERE " . $idName . "=" . $id);
