<?php
include 'db.php';
$number = $_POST["number"];
pg_query($c, "INSERT INTO invalid_credit_cards (number) VALUES ('" . $number . "')");
