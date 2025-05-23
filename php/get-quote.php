<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$quote = file_get_contents("https://zenquotes.io/api/random/");

if ($quote === false) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to fetch quote"]);
    exit;
}

echo $quote;
?>
