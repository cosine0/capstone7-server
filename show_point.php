<?php
/**
 * Created by PhpStorm.
 * User: 미성
 * Date: 2017-11-04
 * Time: 오후 6:34
 */

$mysqli = new mysqli('localhost','root','qwer1234','spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$user = $_POST["Input_user"];

$result = $mysqli->query("SELECT point FROM userinfo WHERE userid='".$user."';");


echo (json_encode(array('point' => $row['point']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
?>