<?php

$sname = "localhost";
$uname = "root";
$password = "123456";
$db_name = "dsbv";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}