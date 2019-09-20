<?php
include 'db.php';
$number = $_POST["number"];
$c->query("INSERT INTO invalid_credit_cards (number) VALUES ('" . $number . "')");
