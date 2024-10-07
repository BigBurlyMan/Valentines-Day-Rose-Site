<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        // Include the database connection
        require_once "dbh.inc.php";

        // Prepare the SQL query
        $sql = "SELECT Sender_Name, Sender_StudentID, Number_Roses, Number_Roses * 5 AS Price 
                FROM sender_tbl 
                JOIN rose_tbl ON sender_tbl.Sender_ID = rose_tbl.Sender_ID;";

        // Use PDO to prepare the statement
        $stmt = $pdo->prepare($sql);

        // Execute the prepared statement
        $stmt->execute();

        // Fetch all the results in an associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Check if there are results to display
        if (count($result) > 0) {
            echo "<h2>Invoice</h2>";
            foreach ($result as $row) {
                // Display each row in a readable format
                echo "<p><strong>Sender Name:</strong> " . htmlspecialchars($row['Sender_Name']) . "</p>";
                echo "<p><strong>Sender Student ID:</strong> " . htmlspecialchars($row['Sender_StudentID']) . "</p>";
                echo "<p><strong>Number of Roses:</strong> " . htmlspecialchars($row['Number_Roses']) . "</p>";
                echo "<p><strong>Price:</strong> $" . htmlspecialchars($row['Price']) . "</p>";
                echo "<hr>"; // Add a horizontal line between rows for better visibility
            }
        } else {
            // No records found
            echo "<p>No records found.</p>";
        }
        

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
?>
