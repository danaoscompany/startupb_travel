<?php
include 'db.php';
$data = file_get_contents("php://input");
$obj = json_decode($data, true);
$externalID = $obj["external_id"];
$row = pg_query($c, "SELECT * FROM deposit WHERE trxid='" . $externalID . "'")->fetch_assoc();
$date = date('Y-m-d H:i:s');
$sql = "UPDATE deposit SET date_update='" . $date . "', status=1 WHERE trxid='" . $externalID . "'";
pg_query($c, $sql);
$balance = intval(pg_query($c, "SELECT * FROM customer WHERE userid='" . $row["userid"] . "'")->fetch_assoc()["balance"]);
$balance += intval($obj["amount"]);
pg_query($c, "UPDATE customer SET balance=" . $balance . " WHERE userid='" . $row["userid"] . "'");
$content = array(
        "en" => 'Click this notification for more info',
        "id" => 'Klik untuk info lebih lanjut'
        );

$title = array(
        "en" => 'Your balance has been updated',
        "id" => 'Saldo Anda telah ditambahkan'
        );

    $fields = array(
        'app_id' => "4b208b19-b68f-43a0-ba73-1ca51f013a4e",
        'included_segments' => array('All'),
        'data' => array(
            "type" => "funds_added",
            "data" => $data
        ),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content,
        'headings' => $title
    );

    $fields = json_encode($fields);
print("\nJSON sent:\n");
print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic NTc1ZjhmNGEtYTdkNC00NTA1LThlYjItMjRmZGFkYzgwODcw'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

    $response = curl_exec($ch);
    curl_close($ch);
    echo "OK";
