<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$currlati = $_POST["latitude"];
$currlong = $_POST["longitude"];
$curralti = $_POST["altitude"];
$latitudeOption = (float)$_POST["latitudeOption"];
$longitudeOption = (float)$_POST["longitudeOption"];

$result = $mysqli->query("SELECT `ad_no`, `name`, `latitude`, `longitude`, `altitude`, `bearing`, `width`, `height`, `banner_url`, `texture_url` FROM `ADinfo` WHERE ABS(`latitude`-$currlati) <= $latitudeOption AND ABS(`longitude`-$currlong) <= $longitudeOption;");

$ads = array();
while ($row = mysqli_fetch_assoc($result)) {
    $ads[] = $row;
}
echo(json_encode(array('data' => $ads), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));