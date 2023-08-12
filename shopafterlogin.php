<?php
include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
  header('location:login.php');
}
$username = $_SESSION['name'];
$user_email = $_SESSION['email']; ?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Name - Awesome Store</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .product-container {
      max-width: 600px;
      margin: 20px auto;
  height: 80%;
      width:auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .product-description {
      font-size: 20px;
      margin-bottom: 5px;
      color: #333333;
    }

    .product-price {
      font-size: 24px;
      font-weight: bold;
      color: #ff6600;
      margin-bottom: 15px;
    }

    .buy-button {
      display: inline-block;
      padding: 12px 30px;
      font-size: 18px;
      background-color: #ff6600;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .buy-button:hover {
      background-color: #ff8800;
    }
    .product-grid{
      display:grid;
      grid-template-columns: repeat(3,1fr);
     row-gap: 20px;
     column-gap: 10px;
     margin-top:80px;}
  </style>
  
</head>

<body>
<div style="position:fixed; top:0; width:100%;">  <?php include('navbar2.php') ;?></div>
  
  <div class="product-grid">
  <?php
   $qry2 = "SELECT DISTINCT p.product_id, p.product_name, p.product_image, p.price
   FROM product p
   INNER JOIN product_size_variation vps ON p.product_id = vps.product_id
   ORDER BY p.product_id DESC";
   $result2 = mysqli_query($conn, $qry2);

   while ($data = mysqli_fetch_assoc($result2)) {
   ?>
  <div class="product-container">
    
    
    <div style="height:85%;"><img style="overflow:hidden;" class="product-image" src="admin_panel/<?php echo $data['product_image']; ;?>" alt="Product Image"></div>
    <div class="product-description">
      <h3><?php echo $data['product_name'] ;?></h3>
    </div>
    <div class="product-price">Rs <?php echo $data['price'] ;?></div>
    <a  href="cart.php?productid=<?php echo $data['product_id'] ?>" class="buy-button">Buy Now</a>
  </div>
  <?php } ?>
  </div>
</body>

</html>