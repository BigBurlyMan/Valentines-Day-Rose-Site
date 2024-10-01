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
    
    <form action="includes/formhandler.inc.php" method="post">
    <input type="int" name="Number_Roses" placeholder="Number of roses">
    <input type="text" name="Recipient_Name" placeholder=" FULL name of recipient">
    <input type="text" name="Sender_Name" placeholder="Your Name">
    <input type="text" name="Sender_StudentID" placeholder="Your Student ID">
    <input type="text" name="Personal_Message" placeholder="Message (optional)">
    <button>Submit</button>
    </form>


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