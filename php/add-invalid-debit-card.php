<?php
include 'db.php';
$number = $_POST["number"];
$c->query("INSERT INTO invalid_debit_cards (number) VALUES ('" . $number . "')");
