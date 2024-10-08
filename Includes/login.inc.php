<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queries</title>
    

    <!-- Add your CSS styles here -->
    <style>
        .flex-container {
            display: flex;
            justify-content: space-around; 
            align-items: flex-start;       
            margin-top: 20px;
        }

        .flex-item {
            flex: 1;                      
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .flex-item h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            // Include the database connection
            require_once "dbh.inc.php";

            // First SQL query for the sender details
            $sql_1 = "SELECT Sender_Name, Sender_StudentID, Number_Roses, Number_Roses * 5 AS Price 
                    FROM sender_tbl 
                    JOIN rose_tbl ON sender_tbl.Sender_ID = rose_tbl.Sender_ID;";
            $stmt_4 = $pdo->prepare($sql_1);
            $stmt_4->execute();
            $result_1 = $stmt_4->fetchAll(PDO::FETCH_ASSOC);

            // Second SQL query for the recipient details
            $sql_2 = "SELECT recipient_tbl.Recipient_ID, recipient_tbl.Recipient_Name, rose_tbl.Number_Roses, rose_tbl.Sender_ID 
                    FROM recipient_tbl
                    JOIN rose_tbl ON recipient_tbl.Sender_ID = rose_tbl.Sender_ID;";
            $stmt_5 = $pdo->prepare($sql_2);
            $stmt_5->execute();
            $result_2 = $stmt_5->fetchAll(PDO::FETCH_ASSOC);

            $sql_3 = "SELECT recipient_tbl.Recipient_Name, sender_tbl.Personal_Message, sender_tbl.Sender_ID 
                    FROM recipient_tbl, sender_tbl 
                    WHERE recipient_tbl.Sender_ID = sender_tbl.Sender_ID;";
            $stmt_6 = $pdo->prepare($sql_3);
            $stmt_6->execute();
            $result_3 = $stmt_6->fetchAll(PDO::FETCH_ASSOC);

            // Display both results side by side
            echo '<div class="flex-container">';
            
            // First Query Results (Invoice)
            echo '<div class="flex-item">';
            if (count($result_1) > 0) {
                echo "<h2>Invoice</h2>";
                foreach ($result_1 as $row) {
                    echo "<p><strong>Sender Name:</strong> " . htmlspecialchars($row['Sender_Name']) . "</p>";
                    echo "<p><strong>Sender Student ID:</strong> " . htmlspecialchars($row['Sender_StudentID']) . "</p>";
                    echo "<p><strong>Number of Roses:</strong> " . htmlspecialchars($row['Number_Roses']) . "</p>";
                    echo "<p><strong>Price:</strong> $" . htmlspecialchars($row['Price']) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No records found.</p>";
            }
            echo '</div>';

            // Second Query Results (Rose List)
            echo '<div class="flex-item">';
            if (count($result_2) > 0) {
                echo "<h2>Rose List</h2>";
                foreach ($result_2 as $row) {
                    echo "<p><strong>Recipient ID:</strong> " . htmlspecialchars($row['Recipient_ID']) . "</p>";
                    echo "<p><strong>Recipient Name:</strong> " . htmlspecialchars($row['Recipient_Name']) . "</p>";
                    echo "<p><strong>Number of Roses:</strong> " . htmlspecialchars($row['Number_Roses']) . "</p>";
                    echo "<p><strong>Sender ID:</strong> " . htmlspecialchars($row['Sender_ID']) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No records found.</p>";
            }
            echo '</div>';
            //third query result (Printing list)
            echo '<div class="flex-item">';
            if (count($result_3) > 0) {
                echo "<h2>Printing list</h2>";
                foreach ($result_3 as $row) {
                    echo "<p><strong>Recipient Name:</strong> " . htmlspecialchars($row['Recipient_Name']) . "</p>";
                    echo "<p><strong>Personal Message:</strong> " . htmlspecialchars($row['Personal_Message']) . "</p>";
                    echo "<p><strong>Sender ID:</strong> " . htmlspecialchars($row['Sender_ID']) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No records found.</p>";
            }
            echo '</div>';


            
            echo '</div>'; // Close flex container
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        header("location: ../index.php");
        exit();
    }
    ?>
</body>
</html>
