<?php include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
  header('location:login.php');
  exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/fa6ee64648.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }

    .container-2 {
      background-image: url('image/telegram.jpg');
      overflow: hidden;
      background-size: cover;
      background-position: center;
    }

    .main-container {
      background-color: lightgoldenrodyellow;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }

    .logo {
      margin-bottom: 10px;
    }

    ul {
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    li {
      margin: 0 10px;
    }

    li a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s ease;
    }

    li a:hover {
      color: #3498db;
    }

    .username {
      font-weight: bold;
      color: #333;
    }

    .username span {
      color: #27ae60;
    }

    .logout {
      margin-left: 30px;
    }

    section {}

    .hi {

      padding: 50px 0;
      text-align: center;
    }

    .text {
      color: #3498db;
    }

    h3 {
      color: #333;
      margin-top: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .container-2 {
      position: relative;
      background-image: url('image/prakk.jpg');
      background-size: cover;
      background-position: center center;
      height: 100vh;

    }

    .content-overlay {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .navbar {
      background-color: #333;

      color: white;
      padding: 10px;
    }

    .user-info {
      display: flex;
      justify-content: space-between;
      align-items: center;

      padding: 0px 20px;


    }

    .username {
      font-size: 18px;
      font-weight: bold;
    }

    .username span {
      color: #3498db;
    }

    .logout {
      display: inline-block;
      padding: 8px 16px;
      background-color: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .logout:hover {
      background-color: #c0392b;
      transform: scale(1.05);
    }

    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .contact-info {
      margin-top: 20px;
    }

    .contact-info p {
      margin-bottom: 10px;
    }

    .contact-form {
      margin-top: 30px;
    }

    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    .contact-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .social-media-links {
      margin-top: 20px;
      text-align: center;
    }

    .social-media-links a {
      display: inline-block;
      margin: 10px;
    }

    .why {
      text-align: center;

    }

    .why-shop-container {
      display: flex;

      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .reason {
      margin: 10px;
      padding: 20px;
      background-color: cadetblue;

    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .contact-info {
      margin-top: 20px;
    }

    .contact-info p {
      margin-bottom: 10px;
    }

    .contact-form {
      margin-top: 30px;
    }

    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    .contact-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .social-media-links {
      margin-top: 20px;
      text-align: center;
    }

    .social-media-links a {
      display: inline-block;
      margin: 10px;
      color: #333;
    }

    .why {
      text-align: center;
      margin-bottom: 20px;
    }

    .why-shop-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      text-align: center;
      padding: 20px;
      margin: 30px;
      background-color: rgba(128, 128, 128, 0.289);
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .reason {
      flex: 1;
      margin: 10px;
      padding: 20px;
      background-color: rgba(95, 158, 160, 0.608);
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .featured-Products {
      text-align: center;
    }

    .clothes-picture {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      margin: 20px;
    }

    .cloth {
      background-color: rgba(176, 196, 222, 0.254);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5.2px);
      -webkit-backdrop-filter: blur(5.2px);
      border: 1px solid rgba(255, 255, 255, 0.06);
      transition: transform 0.2s, box-shadow 0.3s;
      cursor: pointer;
    }

    .cloth:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 40px rgba(0, 0, 0, 0.15);
    }

    .product-image img {
      height: 100%;
      object-fit: cover;
      border-radius: 16px 16px 0 0;
    }

    .product-details {
      padding: 10px 20px;
      background-color: #fff;
      border-radius: 0 0 16px 16px;
      text-align: center;
    }

    .product-details h5 {
      margin: 10px 0;
      font-size: 22px;
    }

    .product-details p {
      font-size: 16px;
      color: #555;
    }

    .product-details a {
      display: inline-block;
      padding: 8px 16px;
      background-color: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .product-details a:hover {
      background-color: #c0392b;
      transform: scale(1.05);
    }

    .product-details {
      padding: 10px 20px;
      background-color: #fff;
      border-radius: 0 0 16px 16px;
      text-align: center;
      transition: background-color 0.3s;
    }

    .product-details h5 {
      margin: 10px 0;
      font-size: 18px;
    }

    .product-details .price {
      font-size: 16px;
      color: #555;
    }

    .buy-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #2ecc71;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .buy-button:hover {
      background-color: #05d713;
      transform: scale(1.05);
    }




    ul {
      margin: 0px;
      padding: 0px;
    }

    .footer-section {
      background: #151414;
      position: relative;
    }

    .footer-cta {
      border-bottom: 1px solid #373636;
    }

    .single-cta i {
      color: #ff5e14;
      font-size: 30px;
      float: left;
      margin-top: 8px;
    }

    .cta-text {
      padding-left: 15px;
      display: inline-block;
    }

    .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
    }

    .cta-text span {
      color: #757575;
      font-size: 15px;
    }

    .footer-content {
      position: relative;
      z-index: 2;
    }

    .footer-pattern img {
      position: absolute;
      top: 0;
      left: 0;
      height: 330px;
      background-size: cover;
      background-position: 100% 100%;
    }

    .footer-logo {
      margin-bottom: 30px;
    }

    .footer-logo img {
      max-width: 200px;
    }

    .footer-text p {
      margin-bottom: 14px;
      font-size: 14px;
      color: #7e7e7e;
      line-height: 28px;
    }

    .footer-social-icon span {
      color: #fff;
      display: block;
      font-size: 20px;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
    }

    .footer-social-icon a {
      color: #fff;
      font-size: 16px;
      margin-right: 15px;
    }

    .footer-social-icon i {
      height: 40px;
      width: 40px;
      text-align: center;
      line-height: 38px;
      border-radius: 50%;
    }

    .facebook-bg {
      background: #3B5998;
    }

    .twitter-bg {
      background: #55ACEE;
    }

    .google-bg {
      background: #DD4B39;
    }

    .footer-widget-heading h3 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 40px;
      position: relative;
    }

    .footer-widget-heading h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      height: 2px;
      width: 50px;
      background: #ff5e14;
    }

    .footer-widget ul li {
      display: inline-block;
      float: left;
      width: 50%;
      margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
      color: #ff5e14;
    }

    .footer-widget ul li a {
      color: #878787;
      text-transform: capitalize;
    }

    .subscribe-form {
      position: relative;
      overflow: hidden;
    }

    .subscribe-form input {
      width: 100%;
      padding: 14px 28px;
      background: #2E2E2E;
      border: 1px solid #2E2E2E;
      color: #fff;
    }

    .subscribe-form button {
      position: absolute;
      right: 0;
      background: #ff5e14;
      padding: 13px 20px;
      border: 1px solid #ff5e14;
      top: 0;
    }

    .subscribe-form button i {
      color: #fff;
      font-size: 22px;
      transform: rotate(-6deg);
    }

    .copyright-area {
      background: #202020;
      padding: 25px 0;
    }

    .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
    }

    .copyright-text p a {
      color: #ff5e14;
    }

    .footer-menu li {
      display: inline-block;
      margin-left: 20px;
    }

    .footer-menu li:hover a {
      color: #ff5e14;
    }

    .footer-menu li a {
      font-size: 14px;
      color: #878787;
    }

    .text {
      overflow: hidden;
      white-space: nowrap;
      margin: 0 auto;
      letter-spacing: 0.15em;
      animation: typing 6s steps(40, end), blink-caret 0.75s step-end infinite;
      visibility: hidden;
    }

    @keyframes typing {
      from {
        width: 0
      }

      to {
        width: 100%
      }
    }

    @keyframes blink-caret {

      from,
      to {
        border-color: transparent
      }

      50% {
        border-color: orange;
      }
    }
  </style>
</head>

<body>
<?php 
$username = $_SESSION['name'];
$user_email = $_SESSION['email']; 
?>


  <?php include('navbar2.php') ?>
  <div class="container-2">

    <section class="hi">
      <h2 class="text">FOR THE BOLD & THE ON-TREND</h2>
      <h3>Style Is Eternal..</h3><br>
      <a href="shopafterlogin.php" class="btn fs-4">Shop Now</a>
    </section>
    <marquee behavior="" direction=""></marquee>
  </div>

  <div>
    <div class="why">
      <h2>Why Shop With Us?</h2>
      <br>
    </div>
    <div class="why-shop-container">
      <div class="reason">
        <h3>Wide Selection</h3>
        <p>Find a diverse range of products to suit your needs.</p>
      </div>
      <div class="reason">
        <h3>Quality Products</h3>
        <p>We ensure that all our products meet high-quality standards.</p>
      </div>
      <div class="reason">
        <h3>Fast Shipping</h3>
        <p>Enjoy quick and reliable shipping services.</p>
      </div>

    </div>
    <br>

    <div class="featured-Products">
      <h2 class="featured">Featured Products</h2>
      <div class="clothes-picture" style="">
        <?php


        $qry2 = "SELECT DISTINCT p.product_id, p.product_name, p.product_image, p.price
        FROM product p
        INNER JOIN product_size_variation vps ON p.product_id = vps.product_id
        ORDER BY p.product_id DESC
        LIMIT 4";
        $result2 = mysqli_query($conn, $qry2);

        while ($data = mysqli_fetch_assoc($result2)) {
        ?>
          <div class="cloth" style="text-align:center; width:80%;">
            <div style="width:80%;margin:20px auto;height:75%; padding:10px;"><img style="height:100%;" src="admin_panel/<?php echo $data['product_image']; ?>" alt="Product Image"></div>
            <div style="margin:10px 0px;">
              <h3 syle="font-size:22px "><?php echo $data['product_name']; ?></h3>
              <p style="color:darkslategray; font-weight:bold;">Rs<?php echo $data['price']; ?></p>
            </div>
            <a style="background-color:#27ae60; text-align:center; border-radius:10px;text-decoration:none;color:white;font-weight:bolder;padding:5px 10px; font-size:15px; margin-top:10px; " href="cart.php?productid=<?php echo $data['product_id'] ?>">Buy Now</a>

          </div>
        <?php
        }
        ?>
      </div>
    </div>


  </div>
  </div>
  <script>
    window.onload = function() {
      const h2 = document.querySelector('.text');

      function startAnimation() {
        h2.style.visibility = 'visible';
        h2.style.animation = 'typing 6s steps(40, end), blink-caret 0.75s step-end infinite';
      }

      startAnimation();

      setInterval(startAnimation, 2000);
    };
  </script>





  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>Beldia chowk</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>9876543210</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>Devkotaprakrity7@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <h2 style="color:#fff"><span style="color:palevioletred">Prakriti</span> Cloths Store</h2>
              </div>
              <div class="footer-text">
                <p>Premium Online Girls' Clothing Store</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="copyright-area">

      <div class="col-xl-6 col-lg-6 text-center text-lg-left">
        <div class="copyright-text">
          <p>Copyright &copy; 2023, All Right Reserved <a href="#">Prakriti</a></p>
        </div>
      </div>



    </div>
  </footer>
  <head>
  <script type="text/javascript">
    function showMessage(message, className) {
      var messageElement = document.createElement('div');
      messageElement.className = className;
      messageElement.innerText = message;
      document.body.appendChild(messageElement);
      setTimeout(function() {
        messageElement.remove();
      }, 5000);
    }
  </script>
  <style type="text/css">
    .success-message {
      background-color: green;
      color: #fff;
      padding: 20px;
      position: absolute;
      margin: auto;
      top: 70px;
      right: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bolder;
      border-radius: 10px;
    }

    .error-message {
      background-color:red;
      color: white;
      padding: 20px;
      margin-bottom: 150px;
      text-align: center;
      font-size: 24px;
      font-weight: bolder;
      position: absolute;
      border-radius:10px;
      margin: auto;
      top: 70px;
      right: 20px;
    }
  </style>
</head>

<body>
<?php if (isset($_SESSION['success'])) { ?>
        <script type="text/javascript">
            showMessage('<?php echo $_SESSION['success']; ?>', 'success-message');
            <?php unset($_SESSION['success']);
          ?>
        </script>
    <?php } ?>

    <?php if (isset($_SESSION['error'])) { ?>
        <script type="text/javascript">
            showMessage('<?php echo $_SESSION['error']; ?>', 'error-message');
            <?php unset($_SESSION['error']);
         ?>
        </script>
    <?php } ?> 
</body>

</html>

</body>

</html>