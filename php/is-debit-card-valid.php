<?php
include 'db.php';
$number = $_POST["number"];
$results = $c->query("SELECT * FROM invalid_debit_cards WHERE number='" . $number . "'");
if ($results && $results->num_rows > 0) {
	echo 0;
} else {
	echo 1;
}
