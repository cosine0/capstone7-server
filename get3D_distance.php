<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$currlati = $_POST["latitude"];
$currlong = $_POST["longitude"];
$curralti = $_POST["altitude"];

$result = $mysqli->query("SELECT `object_no`, `typeName`, `ad_userid`, `latitude`, `longitude`, `altitude`, `bearing` FROM `3Dinfo` WHERE ABS(`latitude`-$currlati) <= 0.0002 AND ABS(`longitude`-$currlong) <= 0.0001;");

$ads = array();
while ($row = mysqli_fetch_assoc($result)) {
    $ads[] = $row;
}
echo(json_encode(array('data' => $ads), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));