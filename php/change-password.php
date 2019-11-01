<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
pg_query($c, "UPDATE customer SET password='" . $password . "' WHERE email='" . $email . "'");
