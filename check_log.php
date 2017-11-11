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
$ad = $_POST["Input_ad"];

$result = $mysqli->query("SELECT log_no FROM loginfo WHERE user_id='".$user."' AND object_id='".$ad."';");

if(mysqli_num_rows($result) == 0) {
    echo (json_encode(array('clickLogFlag' => true), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
} else echo (json_encode(array('clickLogFlag' => false), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
?>