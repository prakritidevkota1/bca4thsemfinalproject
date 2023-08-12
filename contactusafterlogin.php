<!DOCTYPE html>

<?php
include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
  header('location:login.php');
}
$username = $_SESSION['name'];
$user_email = $_SESSION['email']; ?>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Get In Touch Section</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body {
  background: #f2f4f6;
}
.footer_get_touch_outer {
  margin-top: 80px;
}
.container {
  width: 95%;
  max-width: 1140px;
  margin: auto;
}
.grid-70-30 {
  display: grid;
  grid-template-columns: 70% 30%;
}
.get_form_inner {
  display: block;
  padding: 50px 40px;
  background: #fff;
  box-shadow: -4px -2px 20px -7px #cfd5df;
}
input[type="text"], input[type="text"], input[type="email"], input[type="tel"] {
  border: 1px solid #dbdbdb;
  border-radius: 2px;
  color: #333;
  height: 42px;
  padding: 0 0 0 20px;
  width: 100%;
  outline: 0;
}
.grid-50-50 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
.grid-full {
  margin: 20px 0;
}
textarea {
  border: 1px solid #dbdbdb;
  border-radius: 2px;
  color: #333;
  padding: 12px 0 0 20px;
  width: 100%;
  outline: 0;
  margin-bottom: 20px;
}
.get_form_inner_text h3 {
  color: #333;
  font-size: 26px;
  font-weight: 600;
  margin-bottom: 40px;
}
input[type="submit"] {
  display: inline-block;
  font-size: 16px;
  text-transform: uppercase;
  background: transparent;
  border: 2px solid;
  font-weight: 500;
  padding: 10px 20px;
  outline: 0;
  cursor: pointer;
  color: #103e65;
  transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -webkit-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -moz-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -ms-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -o-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
input[type="submit"]:hover {
  background-color: #f85508;
  border-color: #f85508;
  color: #fff;
}
.get_say_form {
  display: inline-block;
  padding: 45px 0 25px 30px;
  background: #103e65;
  position: relative;
}
.get_say_form h5 {
  color: #fff;
  font-size: 26px;
  margin: 0 0 40px;
}
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.get_say_social-icn {
  display: flex;
  position: absolute;
  bottom: 40px;
}
.get_say_social-icn a {
  font-size: 22px;
  color: #fff;
  padding: 0 20px 0 0;
}
.get_say_info_sec i {
  color: #fff;
  font-size: 32px;
}
.get_say_info_sec > li {
  display: grid;
  grid-template-columns: 40px auto;
  align-items: center;
  margin-bottom: 40px;
}
.get_say_info_sec > li a {
  width: 100%;
  display: block;
  padding: 15px 25px;
  color: #fff;
  font-size: 16px;
  text-decoration: unset;
  font-weight: 500;
  background: #162b65;
  border-radius: 5px 0 0 5px;
  transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -webkit-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -moz-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -ms-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -o-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.get_say_info_sec > li a:hover {
  background-color: #f85508;
}
  </style>
</head>
<body>
  <?php include('navbar2.php') ?>
  <section class="footer_get_touch_outer">
    <div class="container">
      <div class="footer_get_touch_inner grid-70-30">
        <div class="colmun-70 get_form">
          <div class="get_form_inner">
            <div class="get_form_inner_text">
              <h3>Get In Touch</h3>
            </div>
            <form action="php/customersupafter.php" method="POST">
              <div class="grid-50-50">
                <input type="text" name="first_name"placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="email"  name="email" placeholder="Email">
                <input type="tel" name="phone" placeholder="Phone">
              </div>
              <div class="grid-full">
                <textarea placeholder="About Your Project" name="message" cols="30" rows="10"></textarea>
                <input type="submit" value="Submit">
              </div>
            </form>
          </div>
        </div>
        <div class="colmun-30 get_say_form">
          <h5>Say Hi!</h5>
          <ul style="flex-direction:column;" class="get_say_info_sec">
            <li>
              <i class="fa fa-envelope"></i>
              <a href="mailto:">devkotaprakrity7@gmail.com</a>
            </li>
            <li>
              <i class="fa fa-whatsapp"></i>
              <a href="tel:">+9779804559777</a>
            </li>
            
          </ul>  
          <ul class="get_say_social-icn">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>          
        </div>        
      </div>
    </div>
  </section>
  <head>
  <script type="text/javascript">
    function showMessage(message, className) {
      var messageElement = document.createElement('div');
      messageElement.className = className;
      messageElement.innerText = message;
      document.body.appendChild(messageElement);
      setTimeout(function() {
        messageElement.remove();
      }, 2000);
    }
  </script>
  <style type="text/css">
    .success-message {
      background-color: green;
      color: #fff;
      padding: 20px;
      position: absolute;
      margin: auto;
      top: 60px;
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
      top: 60px;
      right: 20px;
    }
  </style>
</head>

<body>


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
</body>

</html>
</body>
</html>