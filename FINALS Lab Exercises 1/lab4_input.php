<?php

$json = file_get_contents('php://input');

if (empty($json)) {
    $json = '{"username":"admin", "password":"1234"}';
}

$data = json_decode($json, true);

echo "Username: " . $data['username'] . "<br>";
echo "Password: " . $data['password'];

?>