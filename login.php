<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style_sheet.css"> <!--css link-->
</head>
<body>
    <nav class="navbar">
        <!--logo top left-->
        <div class="logo">
            <a href="index.html"><img src="Assets/Logo.png" alt="Logo"></a>
        </div>
        <!--nav bar links-->
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="photo_gallery.php">photo gallery</a>
            <a href="contact.php">contact</a>
            <a href="store.php">store</a>
            <a href="login.html"> staff login</a>
        </div>
    </nav>
    <div class="head1">
        <h1>Login</h1>
    </div>

    <form action="includes/login.inc.php" method="post">

        <div class="input_boxes">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        </div>
        
        <div class="btn">
            <button>Login</button>
        </div>

    </form>
</body>
</html>