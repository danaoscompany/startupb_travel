<?php
include 'db.php';
$email = $_POST["email"];
sendMail($email);

function sendMail($email) {
	$to      = $email;
	$subject = 'Atur ulang Kata Sandi';
	$message = 'Mohon klik tautan berikut dari smartphone Anda untuk mengatur ulang kata sandi: http://amangojek.co.id?action=reset-password&email=' . $email;
	$headers = 'From: admin@amangojek.co.id' . "\r\n" .
    	'Reply-To: admin@amangojek.co.id' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}
