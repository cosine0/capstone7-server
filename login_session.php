<?php
$mysqli = new mysqli('localhost', 'root', 'qwer1234', 'spatialapp');
mysqli_set_charset($mysqli, 'utf8');

$user = $_POST["Input_user"];
$pass = $_POST["Input_pass"];

$result = $mysqli->query("SELECT userid, password, point, name FROM userinfo WHERE userid='" . $user . "';");

if (mysqli_num_rows($result) == 0) {
    echo(json_encode(array('user_id' => "", 'user_name' => ""), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($pass == $row['password']) {
            session_start();

            $_SESSION['Input_user'] = $user;
            $_SESSION['user_name'] = $row['name'];

            $currentSessionID = session_id();

            echo(json_encode(array('user_id' => $_SESSION['Input_user'], 'user_name' => $_SESSION['user_name'], 'sessionID' => $currentSessionID, 'point' => $row['point']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        } else {
            echo(json_encode(array('user_id' => null, 'user_name' => null), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
    }
}