<?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        require_once "dbh.inc.php";

        // Begin the transaction
        $pdo->beginTransaction();

        // Corrected SQL query with missing semicolon added
        $sql = "SELECT Sender_Name, Sender_StudentID, Number_Roses, Number_Roses * 5 AS Price FROM sender_tbl, rose_tbl WHERE sender_tbl.Sender_ID = rose_tbl.Sender_ID;";

        // Assuming you will later execute the query here
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute();

        // Commit the transaction after query execution
        $pdo->commit();

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

