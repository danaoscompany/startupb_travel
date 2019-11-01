<?php
include 'db.php';
$id = intval($_POST["id"]);
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$city = $_POST["city"];
$profilePicture = $_POST["profile_picture"];
<<<<<<< HEAD
pg_query($c, "UPDATE customer SET name='" . $name . "', phone='" . $phone . "', email='" . $email . "', city='" . $city . "', profile_picture='" . $profilePicture . "' WHERE id=" . $id);
=======
$sql = "UPDATE customer SET name='" . $name . "', phone='" . $phone . "', email='" . $email . "', city='" . $city . "', picture='" . $profilePicture . "' WHERE id=" . $id;
$c->query($sql);
echo $sql;
>>>>>>> c16268cb874e55ed6757453f45761b6b2fc671e5
