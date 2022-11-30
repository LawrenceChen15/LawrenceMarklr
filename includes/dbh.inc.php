<?php

$serverName = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "loginSystem";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
