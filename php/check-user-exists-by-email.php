<?php
include 'db.php';
$email = $_POST["email"];
$results = pg_query($c, "SELECT * FROM customer WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	echo 1;
} else {
	echo 0;
}
