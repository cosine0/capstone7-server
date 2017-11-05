<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli('localhost','root','qwer1234','spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$currlati = $_POST["latitude"];
$currlong = $_POST["longitude"];
$curralti = $_POST["altitude"];

$mysqli->query("DECLARE @lati DECIMAL (11,6);");
$mysqli->query("DECLARE @long DECIMAL (11,6);");
$mysqli->query("SET @lati = (float)$currlati;");
$mysqli->query("SET @long = (float)$currlong;");

$result = $mysqli->query("SELECT ad_no, name, latitude, longitude, altitude, bearing, width, height, banner_url, texture_url FROM ADinfo WHERE ABS(latitude-$currlati) <= 0.0002 AND ABS(longitude-$currlong) <= 0.0001;");

$ads = array();
while($row = mysqli_fetch_assoc($result)) {
	$ads[] = $row;
}
echo (json_encode(array('data' => $ads), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
?>
