<?php
include 'db.php';
$id = intval($_POST["id"]);
pg_query($c, "UPDATE deposit SET expire=1 WHERE id=" . $id)
