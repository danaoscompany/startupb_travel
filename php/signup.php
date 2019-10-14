<?php
include 'db.php';
$googleUserID = $_POST["google_user_id"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$name = $_POST["name"];

// Check if email exists
$values = $c->query("SELECT * FROM customer WHERE email='" . $email . "'");
if ($values && $values->num_rows > 0) {
	echo -1;
	return;
}

// Check if phone exists
$values = $c->query("SELECT * FROM customer WHERE phone='" . $phone . "'");
if ($values && $values->num_rows > 0) {
	echo -2;
	return;
}

// Check if google user ID exists
$values = $c->query("SELECT * FROM customer WHERE google_user_id='" . $googleUserID . "'");
if ($values && $values->num_rows > 0) {
	echo -3;
	return;
}

$sql = "INSERT INTO customer (google_user_id, email, phone, password, name) VALUES ('" . $googleUserID . "', '" . $email . "', '" . $phone . "', '" . $password . "', '" . $name . "')";
$c->query($sql);
$userID = mysqli_insert_id($c);
echo $userID;
//echo $sql;
