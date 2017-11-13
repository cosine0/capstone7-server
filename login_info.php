<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$asdf = $_POST["id"];

session_id($asdf);

session_start();

echo(json_encode(array('user_id' => $_SESSION['Input_user'], 'user_name' => $_SESSION['user_name'], 'sessionID' => $asdf), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));