<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navbar</title>
  <link rel="stylesheet" href="./css/navbar.css">
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
      background-color:aliceblue;
      padding: 5px;
      border-bottom: 1px solid #ccc;
      height:50px;
      overflow: hidden;
  padding:5px;
      margin-bottom: 2px;
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
      margin-bottom:10px ;
    }

   

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

    

  </style>

</head>

<body>
  
<div class="main-container">
    <ul style="font-size:18px;">
      <div class="logo">
        <li>LOGO</li>
      </div>
      <div class="midinfo">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="shop.php">Products</a></li>
 
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </div>
      <div class="user-info">
        
        <div ><a style="background-color:darkgrey" class="logout" href="login.php">Log In</a></div>
        <div><a  style="background-color:#2980b9" class="logout" href="signup.php">Sign Up</a></div>
      </div>
    </ul>
  </div>


 
</body>

</html>