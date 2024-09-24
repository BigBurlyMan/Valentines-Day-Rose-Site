<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
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
        <h1>GALLERY</h1>
    </div>

    <!-- Slideshow container -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1599.jpg" style="width:100%" >
    </div>
    <div class="mySlides fade">
      <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1620.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1649.jpg" style="width:100%">
  </div>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
  </script>

  <div class="catagories_product">
    <div class="row_product">
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1593-Edit.jpg" alt="feel flex Blue">
        </div>
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1595.jpg" alt="feel flex black">
        </div>
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1598.jpg" alt="feel flex white">
        </div>
    </div>

  <div class="catagories_product">
    <div class="row_product">
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1605.jpg" alt="feel flex Blue">
        </div>
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1608.jpg" alt="feel flex black">
        </div>
        <div class="product_1">
            <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1611.jpg" alt="feel flex white">
        </div>
    </div>
    
    <div class="catagories_product">
      <div class="row_product">
          <div class="product_1">
              <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1593-Edit.jpg" alt="feel flex Blue">
          </div>
          <div class="product_1">
              <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1595.jpg" alt="feel flex black">
          </div>
          <div class="product_1">
              <img src="Assets/Valentine's Day 2024(Insta Ready)/_DML1598.jpg" alt="feel flex white">
          </div>
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