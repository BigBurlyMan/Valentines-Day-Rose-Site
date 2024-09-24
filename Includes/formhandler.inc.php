<?php

//checks to see if someone actually submits data//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //posts data//
    $Number_Roses = $_POST["Number_Roses"];
    $Name_Receiver = $_POST["Name_Receiver"];
    $Name_Sender = $_POST["Name_Sender"];
    $Message = $_POST["Message"];

    try {
        require_once"dbh.inc.php";
        $query = "INSERT INTO rose_information (Number_Roses, Name_Receiver, Name_Sender, Message) VALUES (?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$Number_Roses, $Name_Receiver, $Name_Sender, $Message]);

        $pdo = null;
        $stmt = null;
        header("location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Queery Failed: ". $e->getMessage());
    }

}
//incase anyone tries to bypass the request method through url sends back to home page//
else {
    header("location: ../index.php");
}