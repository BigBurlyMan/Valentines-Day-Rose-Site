<?php

$dsn = "mysql:host=localhost;dbname=roses";
$dbusername = "root";
$dbpassword ="" ;
try {
    //$pdo saves the link as a global object//
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //prints out erorr//
    echo "connection failed: ". $e->getMessage();
}