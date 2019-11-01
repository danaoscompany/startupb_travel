<?php
include 'db.php';
$number = $_POST["number"];
pg_query($c, "INSERT INTO invalid_debit_cards (number) VALUES ('" . $number . "')");
