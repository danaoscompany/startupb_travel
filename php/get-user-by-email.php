<?php
include 'db.php';
$email = $_POST["email"];
$values = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($values && $values->num_rows > 0) {
	$row = $values->fetch_assoc();
	echo json_encode($row);
}
