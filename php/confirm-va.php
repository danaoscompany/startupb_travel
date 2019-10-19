<?php
include 'db.php';
$data = file_get_contents("php://input");
echo $data;
return;
$obj = json_decode($data, true);
$externalID = $obj["external_id"];
$row = $c->query("SELECT * FROM deposit WHERE trxid='" . $externalID . "'")->fetch_assoc();
$date = date('Y-m-d H:i:s');
$sql = "UPDATE deposit SET date_update='" . $date . "', status=1 WHERE trxid='" . $externalID . "'";
$c->query($sql);
$balance = $c->query("SELECT * FROM customer WHERE userid='" . $row["userid"] . "'")->fetch_assoc()["balance"];
$balance += intval($obj["amount"]);
$c->query("UPDATE customer SET balance=" . $balance . " WHERE userid='" . $row["userid"] . "'");
$content = array(
            "en" => 'Click for more info'
        );

    $fields = array(
        'app_id' => "2936c66c-21d0-4ce4-9d24-801945b4340a",
        'included_segments' => array('All'),
        'data' => array(
        	"data" => $data
        ),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content
    );

    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic OWUwY2IyZjctMGU0OC00MGUyLTg1ZDItZGIyMjU2MTg1Mzdl'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

    $response = curl_exec($ch);
    curl_close($ch);
    echo "OK";
