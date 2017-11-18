<?php
/**
 * Created by PhpStorm.
 * User: 미성
 * Date: 2017-11-04
 * Time: 오후 6:34
 */

$mysqli = new mysqli('localhost','root','qwer1234','spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$user = $_POST["user"];
$typeName = $_POST["typeName"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$altitude = $_POST["altitude"];
$bearing = $_POST["bearing"];

$result2 = $mysqli->query("INSERT INTO `3Dinfo` VALUES (NULL, '$user', '$typeName', $latitude, $longitude, $altitude, $bearing);");