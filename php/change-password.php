<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$c->query("UPDATE customer SET password='" . $password . "' WHERE email='" . $email . "'");
