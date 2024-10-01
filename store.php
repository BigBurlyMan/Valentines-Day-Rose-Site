<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="style_sheet.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="index.html"><img src="Assets/Logo.png" alt="Logo"></a>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="photo_gallery.php">photo gallery</a>
            <a href="contact.php">contact</a>
            <a href="store.php">store</a>
        </div>
    </nav>
    <div class="head1">
        <h1>STORE</h1>
    </div>

    <div class="text_boxes">
    <form id="roseForm" action="includes/formhandler.inc.php" method="post">
        <input type="number" id="Number_Roses" name="Number_Roses" placeholder="Number of roses 1-9" min="1" max="9" required>
        <input type="text" id="Recipient_Name" name="Recipient_Name" placeholder="FULL name of recipient" required maxlength="20">
        <input type="text" id="Sender_Name" name="Sender_Name" placeholder="Your Name" required maxlength="20">
        <input type="text" id="Sender_StudentID" name="Sender_StudentID" placeholder="Your Student ID" required>
        <input type="text" id="Personal_Message" name="Personal_Message" placeholder="Message (optional)" maxlength="50">
        <button type="submit">Submit</button>
    </form>

    <!-- Message Box for errors -->
    <div id="errorMessage" style="color: red; display: none;"></div>
</div>

<script>
    // JavaScript form validation
    document.getElementById('roseForm').addEventListener('submit', function(event) {
        // Clear any previous error messages
        let errorMessage = document.getElementById('errorMessage');
        errorMessage.style.display = 'none';
        errorMessage.innerHTML = '';

        // Get the form fields
        let numberRoses = document.getElementById('Number_Roses').value;
        let recipientName = document.getElementById('Recipient_Name').value;
        let senderName = document.getElementById('Sender_Name').value;
        let senderStudentID = document.getElementById('Sender_StudentID').value;
        let personalMessage = document.getElementById('Personal_Message').value;

        // Validation flags
        let isValid = true;

        // Validate the number of roses
        if (!numberRoses || isNaN(numberRoses) || numberRoses < 1 || numberRoses > 9) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Please enter a valid number of roses (1-9).<br>';
        }

        // Validate the Student ID
        if (!senderStudentID || isNaN(senderStudentID) || senderStudentID.length !== 5) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Please enter a valid Student ID (exactly 5 digits).<br>';
        }

        // Validate Recipient Name
        if (!recipientName || recipientName.length > 20 || /\d/.test(recipientName)) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Recipient name must be 20 characters or less and cannot contain numbers.<br>';
        }

        // Validate Sender Name
        if (!senderName || senderName.length > 20 || /\d/.test(senderName)) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Your name must be 20 characters or less and cannot contain numbers.<br>';
        }

        // Validate Personal Message
        if (personalMessage.length > 50) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Personal message must be 50 characters or less.<br>';
        }

        // Check if all required fields are filled
        if (!recipientName || !senderName) {
            isValid = false; // Mark as invalid
            errorMessage.innerHTML += 'Please fill in all required fields.<br>';
        }

        // If any validation fails, prevent form submission and display error messages
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            errorMessage.style.display = 'block'; // Show the error message box
        }
    });
</script>





</body>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>We are a company dedicated to providing excellent service and quality products.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Info</h3>
            <p>Our services range from consulting to product development and beyond.</p>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Reach out to us at contact@yourcompany.com or call us at +123 456 7890.</p>
        </div>
    </div>
    <p>&copy; 2024 YourCompany. All rights reserved.</p>
</footer>
</html>