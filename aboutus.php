<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Preview About</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
.wrapper{

    display: flex;
    justify-content: center;
    align-items: center;
}
.background-container{
    width: 100%;
    min-height: 60vh;
    display: flex; 
}
.bg-1{
    flex: 1;
    
}
.bg-2{
    flex: 1;
    
}
.about-container{
  z-index: -2;
    width: 85%;
    min-height: 100vh;
    position: absolute;
 
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 40px;
    border-radius: 5px;
}
.image-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.image-container img {
    width: 500px;
    height: 500px;
    margin: 20px;
    border-radius: 10px;
}
.text-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    font-size: 22px;
}
.text-container h1{
    font-size: 70px;
    padding: 20px 0px;
}
.text-container a{
    text-decoration: none;
    padding: 12px;
    margin: 50px 0px;
    background-color: rebeccapurple;
    border: 2px solid transparent;
    color: white;
    border-radius: 5px;
    transition: .3s all ease;
    z-index: 10;
}
.text-container a:hover{
    background-color: transparent;
    color: black;
    border: 2px solid rebeccapurple;
}
@media screen and (max-width: 1600px){
    .about-container{
        width: 90%;
    }
    .image-container img{
        width: 400px;
        height: 400px;
    }
    .text-container h1{
        font-size: 50px;
    }
}
@media screen and (max-width: 1100px){
    .about-container{
        flex-direction: column;
    }
    .image-container img{
        width: 300px;
        height: 300px;
    }
    .text-container {
        align-items: center;
    }
}
    </style>
</head>
<body>
<?php include('navbar.php') ?>

    <div class="wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>
    
        </div>
        <div class="about-container">
            
            <div class="image-container">
                <img src="image/men.png" alt="">
                
            </div>

            <div class="text-container">
                <h2>About us</h2>
                <p>Discover Prakriti Clothes Store, your go-to destination for chic and comfortable girls' clothing.</p>
                <p>From casual to elegant, our thoughtfully curated collection caters to all occasions.</p>
                <p>Enjoy a seamless online shopping experience, backed by our commitment to top-notch quality and empowering young fashion enthusiasts.</p>
                <p>Join us to embrace your distinctive style with confidence.</p>
         
            </div>
            
        </div>
    </div>

    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color:rgba(255, 248, 220, 0.523);
    }
    .ourteam {
      text-align: center;
      font-size: 24px;
      margin-top: 40px;
    }
    .allteam {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 20px;
      background-color: rgba(128, 128, 128, 0.436); 
      padding:40px;
      border-radius: 20px;
      margin:20px;
    }
    .team {
      width: calc(33.33% - 20px);
      background-color: white;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 100%;
      width:30%;
      overflow: hidden;
      text-align: center;
    }
    .image img {
      max-width: 100%;
      display: block;
      
    }
    .team h3 {
      font-size: 20px;
      margin: 10px 0;
      padding: 0 10px;
    }
    .team p {
      font-size: 16px;
      margin: 0 0 10px;
      padding: 0 10px;
    }
  </style>
</head>
<body>
  <div style="background-color:yellow; margin:auto; border-radius: 15px;   width:10%;"  class="ourteam"><h3 >Our Team</h3></div>
  <div class="allteam">
    <div class="team">
      <div class="image"><img src="image/men.png" alt=""></div>
      <div style="background-color:rgba(137, 43, 226, 0.285); width:30%; margin: 20px auto; border-radius: 15px;">
        <h3>Co-founder</h3>
        <p>Prakriti Devkota</p>
      </div>
    </div>
    <div class="team">
      <div class="image"><img src="image/men.png" alt=""></div>
      <div style="background-color:rgba(178, 237, 126, 0.914); width:30%; margin: 20px auto; border-radius: 15px;">

        <h3>Manager</h3>
        <p>Aakash Kandel</p>
      </div>
    </div>
    <div class="team">
      <div class="image"><img src="image/men.png" alt=""></div>
      <div style="background-color:rgba(226, 43, 192, 0.285); width:30%; margin: 20px auto; border-radius: 15px;">

        <h3>Supplier</h3>
        <p>Ishika Sigdel</p>
      </div>
    </div>
  </div>
</body>
</html>