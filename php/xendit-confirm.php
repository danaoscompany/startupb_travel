<?php
include 'one-signal.php';
$data = file_get_contents("php://input");
$obj = json_decode($data, TRUE);
$externalID = $obj=>{'external_id'};
$amount = $obj=>{'amount'};
if ($externalID == "pulsa") {
    sendMessage("Selamat! Pembelian pulsa sebesar " . $amount . " sudah kami lakukan.");
}
echo "OK";
