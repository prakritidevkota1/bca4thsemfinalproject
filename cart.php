<?php include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
    header('location:login.php');
}
?>
<?php $productid = $_GET['productid']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .header {
            background-color: #f9f9f9;
            padding: 20px;
            border-bottom: 2px solid #e0e0e0;
        }

        .r1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .abc h1 {
            margin: 0;
            font-size: 30px;
            color: #333;
        }

        .pqr {
            color: #ffc107;
        }

        .fa-star {
            margin-right: 2px;
        }

        .container-body {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .r3 {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .klo ul {
            padding: 0;
            list-style-type: none;
        }

        .klo ul li {
            color: #555;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .des a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .des a:hover {
            color: #2980b9;
        }

        .col-md-7 img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>


</head>

<body>
    <?php $qry = "SELECT * FROM product 
        WHERE product_id = '$productid'";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        $data = mysqli_fetch_assoc($result);



    ?>


        <div class="container py-4 my-4 mx-auto d-flex flex-column">
            <div class="header">
                <div class="row r1">
                    <div class="col-md-9 abc">
                        <h1><?php echo $data['product_name']; ?></h1>
                    </div>
                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>

                </div>
            </div>

            <div class="container-body mt-4">
                <div class="row r3">
                    <div class="col-md-5 p-0 klo">
                        <ul>
                            <li>Unit Price :<?php echo $data['price'] ?></li>
                            <li>Category:<?php echo $data['category_id'] ?></li>
                            <li>Available size:<?php echo $data['size'] ?></li>

                            <li>Estimated Delivery Time : 2-3 Days</li>
                            <li>Payment Method:Cash ON Delivery</li>
                            <li>COD Available (All Over Nepal)</li>
                            <div class="col-md-2 myt des"><a href="#">Description</a>

                            </div>
                            <div><?php echo $data['product_desc']; ?></div>
                        </ul>
                    </div>
                    <div class="col-md-7"> <img src="./admin_panel/<?php echo $data['product_image']; ?>" width="80%" height="85%"> </div>

                </div>
            <?php } ?>
            </div>
            <style>
                .r4 {
                    justify-content: space-around;
                }

                .r4 {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 20px;
                    padding: 20px;
                    background-color: #f5f5f5;
                    border-radius: 10px;
                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                }

                .r4 label {
                    font-weight: bold;
                    display: block;
                    margin-bottom: 5px;
                }

                .r4 select,
                .r4 input[type="tel"],
                .r4 input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    font-size: 14px;
                }

                .r4 select {
                    height: 40px;
                }

                .r4 button {
                    background-color: #ff9800;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                }

                .r4 a {
                    color: #3498db;
                    text-decoration: none;
                    font-size: 16px;
                    transition: color 0.3s;
                }

                .r4 a:hover {
                    color: #2980b9;
                }
            </style>
            <form action="admin_panel/controller/addorder.php?productid=<?php echo $productid; ?>" method="POST">
                <div class="footer d-flex flex-column mt-5">
                    <div class="row r4" style="">


                        <div>
                            <select id="searchsize" name="size">

                                <option value="">select sizes</option>
                                <?php $qry2 = "SELECT * FROM product_size_variation pv join sizes s on s.size_id=pv.size_id where product_id='$productid'";
                                $result = mysqli_query($conn, $qry2);


                                while ($data = mysqli_fetch_assoc($result)) {



                                ?>


                                    <option value="<?php echo $data['size_id']; ?>"><?php echo $data['size_name']; ?></option>

                                <?php } ?>


                            </select>


                        </div>
                        <script>
                            $(document).ready(function() {
                                $("#searchsize").on('change', function() {
                                    var input = $(this).val();
                                    var product = "<?php echo $productid; ?>";
                                    $.ajax({
                                        url: "liveserver1.php",
                                        method: "POST",
                                        data: {
                                            input: input,
                                            productid: product
                                        },
                                        success: function(data) {
                                            $("#orderq").html(data);
                                        },
                                        error: function() {
                                            $("#orderq").html('<option value="">Unable to fetch data</option>');
                                        }
                                    });
                                });


                                
                            });
                        </script>





                        <div >

                            <select name="selquantity" id="orderq">
                             
                            <option value="">select quantity</option>

                            </select>


                        </div>
                        <div></div>

                        <div>
                            <label for="phoneInput">Phone no</label>
                            <input type="tel" id="phone" name="phone" pattern="\d{10}" placeholder="Enter Phone no." required>
                        </div>
                        <div>
                            <label>Delivery Address</label>
                            <input type="text" placeholder="Enter delivery address" name="daddress" required>
                        </div>



                        <div style="text-align:center;" class="col-md-9 myt justify-content-center">
                            <button style=" margin-bottom:10px;" type="submit" name="submit" class="btn btn-outline-warning">BUY NOW</button>
                            <div>
                                <a class="col-md-9 myt btn btn-outline-secondary back-link" href="homepageafterlogin.php">BACK</a>
                            </div>


                        </div>


                    </div>

                </div>


        </div>

        </form>

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