<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="contactUs.css">
    <title>Vaccination potal</title>
</head>
<body background="back-con.jpg">
    
<?php include 'header.php';
 ?>
    <script src="script.js"></script>

    <div class="container">
      <h1>Contact Us</h1>
      <div class="image-placeholder">
        <img src="conpic.jpg" >
    </div>
      <div class="contact-form">
          <form action="#">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Name">

              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="Phone Number">

              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">

              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Your Message"></textarea>

              <button type="submit">Submit</button>
          </form>
          <div class="image-placeholder">
              <img src="conpic2.jpg" >
          </div>
      </div>
  </div>
    <!-- Footer Section -->
    <?php include 'footer.php';
 ?>
</body>
</html>
