<?php
include 'db.php';
$id = intval($_POST["id"]);
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$city = $_POST["city"];
$profilePicture = $_POST["profile_picture"];
pg_query($c, "UPDATE customer SET name='" . $name . "', phone='" . $phone . "', email='" . $email . "', city='" . $city . "', profile_picture='" . $profilePicture . "' WHERE id=" . $id);
