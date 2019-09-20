<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$c->query("UPDATE users SET password='" . $password . "' WHERE email='" . $email . "'");
