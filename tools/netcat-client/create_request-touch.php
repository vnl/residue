<?php

$connection = json_decode(file_get_contents($argv[1]));

$request = json_encode(array(
    "client_id" => "$connection->client_id",
    "type" => 4
));

echo shell_exec("echo '$request' | ripe -e --key $connection->key --client-id $connection->client_id");
