<?php
include 'db.php';
$email = $_POST["email"];
$values = pg_query($c, "SELECT * FROM customer WHERE email='" . $email . "'");
if (pg_num_rows($values) > 0) {
	$row = $values->fetch_assoc();
	echo json_encode($row);
}
