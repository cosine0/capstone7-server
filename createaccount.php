<?php
$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');

$user = $_POST["Input_user"];
$pass = $_POST["Input_pass"];
$name = $_POST["Input_name"];

$result = $mysqli->query("SELECT userid, password FROM userinfo WHERE userid='" . $user . "';");


if (mysqli_num_rows($result) == 0) {
    $abc = $mysqli->query("INSERT INTO `userinfo` (`user_no`, `userid`, `name`, `point`, `password`) VALUES (NULL, '" . $user . "', '" . $name . "','0', '" . $pass . "');");

    if ($abc) die("Create Success. \n");
    else die("Failed. \n");
} else {
    die("ID already exist. \n");
}