<?php

$string_value = file_get_contents("api.json");

$todos_array = json_decode($string_value, true);

// var_dump($_GET['album_id']);

if(isset($_GET['song_id'])) {
    $response = [
        "results" => $todos_array[$_GET['song_id']],
        "success" => true
    ];
} else {
    $response = [
        "results" => $todos_array,
        "success" => true
    ];
}

header('Content-Type: application/json');
echo json_encode($response);