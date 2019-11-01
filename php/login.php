<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$values = pg_query($c, "SELECT * FROM customer WHERE email='" . $email . "'");
if (pg_num_rows($values) > 0) {
	$row = $values->fetch_assoc();
	if ($row["password"] != $password) {
		echo -2;
		return;
	}
	echo 0;
} else {
	// Email not registered
	echo -1;
}
