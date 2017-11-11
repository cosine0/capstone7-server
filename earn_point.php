<?php
/**
 * Created by PhpStorm.
 * User: 미성
 * Date: 2017-11-04
 * Time: 오후 6:34
 */

$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$user = $_POST["Input_user"];
$point = $_POST["Input_point"];
$ad = $_POST["Input_ad"];

$result = $mysqli->query("UPDATE userinfo SET point = point + '$point' WHERE userid='$user';");
$result2 = $mysqli->query("INSERT INTO `loginfo` VALUES (NULL, '$user', '$ad', NULL);");