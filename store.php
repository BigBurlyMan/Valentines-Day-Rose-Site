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
            <a href="index.html">Home</a>
            <a href="photo_gallery.html">photo gallery</a>
            <a href="contact.html">contact</a>
            <a href="store.html">store</a>
        </div>
    </nav>
    <div class="head1">
        <h1>STORE</h1>
    </div>

    <div class="N_drop_down">
    <label for="membership">How Many Roses</label>
        <select name="rose_count" id="rose_count">
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
        <textarea id="widerTextarea" name="widerTextarea"></textarea>
        <br><br>

        <label for="widerTextarea">Your Name (optional)</label>
        <textarea id="widerTextarea" name="widerTextarea"></textarea>
        <br><br>

        <label for="tallerTextarea">personalised message:</label>
        <textarea id="tallerTextarea" name="tallerTextarea"></textarea>
    </div>

    <div class="submit_button">
        <button class="hover-button">Checkout</button>
    </div>
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