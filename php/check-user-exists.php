<?php
include 'db.php';
$googleUserID = $_POST["google_user_id"];
$results = pg_query($c, "SELECT * FROM customer WHERE google_user_id='" . $googleUserID . "'");
if ($results && $results->num_rows > 0) {
	echo 1;
} else {
	echo 0;
}
