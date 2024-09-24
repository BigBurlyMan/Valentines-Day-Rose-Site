<?php

$servername = "localhost:3306";
$username = "root";
$password = "usbw";
$dbname = "valentines day roses";

// create connection//
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection//
if ($conn->connect_error) 
{
die("Connection Failed: " . $conn->connect_error);
}

?>