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
        <!--
        <div class="N_drop_down">
        <label for="membership">How Many Roses</label>
            <select name="Number_Roses" id="rose_count">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <div class="text_boxes">
            <label for="widerTextarea">The FULL NAME Of Reciever:</label>
            <textarea id="widerTextarea" name="	Name_Receiver"></textarea>
            <br><br>
            <label for="widerTextarea">Your Name (optional)</label>
            <textarea id="widerTextarea" name="Name_Sender"></textarea>
            <br><br>
            <label for="tallerTextarea">personalised message:</label>
            <textarea id="tallerTextarea" name="Message"></textarea>
        </div>
        <div class="submit_button">
            <button class="hover-button">Checkout</button>
        </div>
-->
    <input type="int" name="Number_Roses" placeholder="Number of roses">
    <input type="text" name="Name_Receiver" placeholder=" FULL name of recipient">
    <input type="text" name="Name_Sender" placeholder="Your Name">
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