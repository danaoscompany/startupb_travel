<?php
include 'db.php';
$name = $_POST["name"];
$idName = $_POST["id_name"];
$id = intval($_POST["id"]);
$items = [];
$c->query("DELETE FROM " . $name . " WHERE " . $idName . "=" . $id);
