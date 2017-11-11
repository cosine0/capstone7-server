<?php
$mysqli = new mysqli('localhost','root','qwer1234','spatialapp');

$user = $_POST["Input_user"];
$pass = $_POST["Input_pass"];

$result = $mysqli->query("SELECT userid, password FROM userinfo WHERE userid='".$user."';");


if(mysqli_num_rows($result) == 0) {
	die("ID does not exist.\n");
}
else {
	while($row = mysqli_fetch_assoc($result)) {
		if($pass == $row['password']) {
			print "userid:";
			print $row['userid'];
			print "/password:";
			print $row['password'];
			print "<br>";
			die("Login success!");
		} else {
			die("Pass doese not match.\n");
		}
	}
}