<?php
/**
 * Created by PhpStorm.
 * User: 미성
 * Date: 2017-11-04
 * Time: 오후 6:34
 */

$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$ad = $_POST["Input_ad"];

$result = $mysqli->query("SELECT point_reward FROM ADinfo WHERE ad_no='$ad';");

if (mysqli_num_rows($result) != 1)
    echo(json_encode(array('pointReward' => null), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
else {
    $row = mysqli_fetch_assoc($result);
    echo(json_encode(array('pointReward' => $row['point_reward']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}