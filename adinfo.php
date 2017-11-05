<?php
/**
 * Created by PhpStorm.
 * User: 미성
 * Date: 2017-11-04
 * Time: 오후 6:34
 */

$mysqli = new mysqli('localhost','root','qwer1234','spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$ad = $_POST["Input_ad"];

$result = $mysqli->query("SELECT point_reward FROM ADinfo WHERE ad_no='".$ad."';");


echo (json_encode(array('point' => $row['point_reward']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
?>