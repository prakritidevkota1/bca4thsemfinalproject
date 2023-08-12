<!DOCTYPE html>
<html lang="en">
<?php include('php/dbconnector.php'); ?>

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

  </style>
</head>

<body>
  <div class="container-2" style="z-index:20;">

    <?php include('navbar.php') ?>
    <section class="hi">
      <h2 class="text">FOR THE BOLD & THE ON-TREND</h2>
      <h3>Style Is Eternal..</h3><br>

      <a href="shop.php" class="btn btn-primary fs-4">Shop Now </a>


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
      <!-- Add more reasons as needed -->
    </div>
    <br>
    <style>
      .clothes-picture {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;

      }

      .cloth {
        background: rgba(255, 255, 255, 0.14);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5.2px);
        -webkit-backdrop-filter: blur(5.2px);
        border: 1px solid rgba(255, 255, 255, 0.06);
      }
    </style>
    <div class="featured-Products">
      <h2 class="featured">Featured Products</h2>
      <div class="clothes-picture" style="">
        <?php

$qry2 = "SELECT DISTINCT p.* FROM product p
         INNER JOIN product_size_variation vps ON p.product_id = vps.product_id";

        $result2 = mysqli_query($conn, $qry2);

        while ($data = mysqli_fetch_assoc($result2)) {
        ?>
          <div class="cloth" style=" width:80%;">
            <div style="width:80%;margin:20px auto;height:75%; padding:10px;"><img style="height:100%;" src="admin_panel/<?php echo $data['product_image']; ?>" alt="Product Image"></div>
            <div style="margin-left: 0px 0px 10px 30px; ">
              <h5><?php echo $data['product_name']; ?></h5>
              <p><?php echo $data['price']; ?></p>
              <a href="cart.php?productid=<?php echo $data['product_id'] ?>">Buy Now</a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>


  </div>
  </div>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/f6481011f6.js" crossorigin="anonymous"></script>
    <style>
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
        background-color: grey;

      }
    </style>
  </head>

  <body>
    <div class="container">
      <!--<h1>Contact Us</h1> -->

      <!-- <div class="contact-info">
      <p>Email: example@example.com</p>
      <p>Phone: 9847144922</p>
      <p>Address: Nawalpur</p>
    </div>
    
    <div class="contact-form">
      <h2>Send us a message</h2>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <input type="submit" value="Send Message">
      </form>
    </div> -->


      <footer>
        <div>
          <div class="social-media-links">
            <h4>FOLLOW US ON: </h4>
            <a href="https://www.facebook.com/prakriti.devkota.543" target="_blank">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/prakrity___/" target="_blank">
              <i class="fa-brands fa-square-instagram"></i>
            </a>
          </div>
        </div>
        <div>
          <!-- <h3 class="instagram">follow us on instagram</h3>0 -->
          <div class="main-container-2">
            <!--<div class="logo">LOGO> -->

          </div>
        </div class="info">
        <p style=" padding:20px; width:30%; position:absolute; left:0px;"> BY @prakrity___ FASHION BRAND EST:2018</p>
        <i class="fa-solid fa-clothes-hanger fa-beat"></i>


    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1849346547842!2d84.37196227534669!3d27.711575776180123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb3012c44e5d%3A0x90bcd02cc47f11c8!2sBeldiha!5e0!3m2!1sen!2snp!4v1685597164920!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

    </footer>

  </body>

  </html>





  <!-- <div class="inner-maincontainer">
        <div class="info-container1">
            <h2>welcome</h2>
            <p>you can order clothes through this website where you can get different kinds of clothes in suitable
                price. </p>
        </div> -->
  <!-- <div class="info-container-img">
            <img src="clothes.jpg" alt="" width="600px" height="600px" style="border-radius: 8px; margin-top: 10px;">
        </div> -->
  <!-- </div> -->
</body>

</html>