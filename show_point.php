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



if(mysqli_num_rows($result) == 0)
    echo (json_encode(array('point' => 333), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
else {
    $row = mysqli_fetch_assoc($result);
    echo (json_encode(array('pointReward' => $row['point']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}


?>