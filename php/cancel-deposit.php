<?php
include 'db.php';
$id = intval($_POST["id"]);
$c->query("UPDATE deposit SET expire=1 WHERE id=" . $id)
