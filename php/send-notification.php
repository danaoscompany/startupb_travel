<?php
$message = $_POST["message"];
$type = $_POST["type"];
sendMessage();

function sendMessage(){
    $content = array(
        "en" => 'Testing Message'
        );

    $fields = array(
        'app_id' => "2936c66c-21d0-4ce4-9d24-801945b4340a",
        'included_segments' => array('All'),
        'data' => array(
        	"name" => "Dana Prakoso"
        ),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content
    );

    $fields = json_encode($fields);
print("\nJSON sent:\n");
print($fields);

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

    return $response;
}
