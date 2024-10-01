<?php 

// Check to see if someone actually submits data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve posted data
    $Number_Roses = $_POST["Number_Roses"];
    $Recipient_Name = $_POST["Recipient_Name"];
    $Sender_Name = $_POST["Sender_Name"];
    $Sender_StudentID = $_POST["Sender_StudentID"];
    $Personal_Message = $_POST["Personal_Message"];

    try {
        require_once "dbh.inc.php";

        // Start a transaction to ensure all queries succeed or fail together
        $pdo->beginTransaction();

        // Insert data into sender_tbl
        $query1 = "INSERT INTO sender_tbl (Sender_Name, Sender_StudentID, Personal_Message) VALUES (?, ?, ?);";
        $stmt1 = $pdo->prepare($query1);
        $stmt1->execute([$Sender_Name, $Sender_StudentID, $Personal_Message]);

        // Get the last inserted Sender_ID for foreign key use, if needed
        $Sender_ID = $pdo->lastInsertId();

        // Insert data into recipient_tbl
        $query2 = "INSERT INTO recipient_tbl (Recipient_Name, Sender_ID) VALUES (?, ?);";
        $stmt2 = $pdo->prepare($query2);
        $stmt2->execute([$Recipient_Name, $Sender_ID]);

        // Insert data into rose_tbl
        $query3 = "INSERT INTO rose_tbl (Number_Roses, Sender_ID) VALUES (?, ?);";
        $stmt3 = $pdo->prepare($query3);
        $stmt3->execute([$Number_Roses, $Sender_ID]);

        // Commit the transaction if all queries were successful
        $pdo->commit();

        // Close the connection and redirect
        $pdo = null;
        header("location: ../index.php");
        exit();

    } catch (PDOException $e) {
        // Rollback the transaction if any query fails
        $pdo->rollBack();
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // Redirect to home page if request method is not POST
    header("location: ../index.php");
    exit();
}
