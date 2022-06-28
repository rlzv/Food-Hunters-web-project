<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "foodenjoy";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
	echo "Connection Failed";
}