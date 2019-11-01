<?php
include 'db.php';
$number = $_POST["number"];
$results = pg_query($c, "SELECT * FROM invalid_debit_cards WHERE number='" . $number . "'");
if ($results && $results->num_rows > 0) {
	echo 0;
} else {
	echo 1;
}
