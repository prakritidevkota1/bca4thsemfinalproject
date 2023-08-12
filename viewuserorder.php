<!DOCTYPE html>
<html lang="en">
<?php include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
  header('location:login.php');
  exit();
}
?>
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  
 
 
 $username = $_SESSION['name'];
 $user_email = $_SESSION['email']; 

 
     include("navbar2.php");?>
    <div class="ordersBtn" id="ordersBtn">
        <h3>Order Details</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>O.N.</th>
                    <th>productimage</th>
                    <th>productName</th>
                    <th>productID</th>
                    <th>OrderDate</th>
                    <th>Payment Method</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                    <th>More Details</th>
                </tr>
            </thead>
            <?php
            
          
            $user_id=$_SESSION['id'] ;
            $sql = "SELECT * FROM orders WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $product_id = $row['product_id'];
            ?>
                    <tr style="background-color:honeydew;">

                        <td><?= $row["order_id"] ?></td>
                        <?php
                        $subqry = "SELECT * from product
                       where product_id=$product_id";
                        $res = $conn->query($subqry);
                        if ($row2 = $res->fetch_assoc()) {
                        ?>
                            <td><img height="100px" src="admin_panel/<?= $row2["product_image"] ?>"></td>
                            <td><?= $row2["product_name"] ?></td>


                        <?php } ?>
                        <td><?= $row["product_id"] ?></td>


                        <td><?= $row["order_date"] ?></td>
                        <td><?= $row["pay_method"] ?></td>
                        <?php
                        if ($row["order_status"] == 0) {

                        ?>
                            <td><div style="background-color:rgba(255, 255, 0, 0.372); border-radius:10px;padding:5px 10px;width:50%;">Pending</div></td>
                        <?php

                        } else {
                        ?>
                          <td ><div style="color:rgb(6, 190, 6);">Delivered</div></td>

                        <?php
                        }
                        if ($row["pay_status"] == 0) {
                        ?>
                          <td ><div style="background-color:rgba(255, 0, 0, 0.405); border-radius:10px;padding:5px 10px;width:50%;">Unpaid</div></td>
                        <?php

                        } else if ($row["pay_status"] == 1) {
                        ?>
                            <td ><div style="background-color:rgba(0, 244, 0, 0.365); border-radius:10px;padding:5px 10px;width:50%;">Paid</div></td>
                        <?php
                        }
                        ?>



                        <?php 
                        
                        $confirmation_status = $row['pay_status'];
                        $order_id= $row['order_id'];

                        // Show "Completed" for confirmed orders, otherwise show buttons
                        $status_text = ($confirmation_status == 1) ? 'Completed' : '<a href="#" class="pbtn_1" onclick="show(' . $order_id .  ')" class="pbtn_1">Cancel Order</ion-icon></a>';


                        // ...
                        echo '<td id="action" class="pbtn" style="height:100%;">';
                        echo '<div class="btndiv">';
                        echo $status_text;
                        echo '</div>';
                        echo '</td>';
                        // ...
                        ?>



                        

                        <td><a class="btn btn-primary openPopup" href="viewusereachorder.php?orderID=<?= $row['order_id'] ?>">View</a></td>
                    </tr>
            <?php

                }
            }
            ?>

        </table>

    </div>
    <!-- Modal -->

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Custom table styles */
        .table-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .pbtn_1 {
    display: inline-block;
    padding: 10px 20px;
    background-color: purple; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.2s;
  }

  .pbtn_1:hover {
    background-color: #8b5c9e; 
    transform: scale(1.05);
  }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
            text-align: center;
        }

        .table th,
        .table td {
            padding: 12px;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            border-color: #454d55;
            text-align: center;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Modal styles */
        .order-view-modal {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        * {
            margin: 0px;
            padding: 0px;

            font-family: 'Barlow', sans-serif;
            font-family: 'Lato', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-family: 'Ubuntu', sans-serif;

        }
     /* .ordersBtn{
        background-image: url('image/imageb2.jpg');
      background-size: cover;
      background-position: center center;
      height: 100vh;
     } */
        .main-body-delete {
            background: rgba(255, 255, 255, 0.16);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8.4px);
            -webkit-backdrop-filter: blur(8.4px);
            height: 100vh;
            display: none;

            position: fixed;
            top: 0;
            width: 100vw;

        }

        .main-delete-container {


            display: flex;

            height: 100vh;
            display: flex;
            position: fixed;
            top: 0;
            width: 100vw;




        }

        .inner-delete-container {
            background-color: rgba(128, 128, 128, 0.208);
            text-align: center;
            width: 25%;
            border-radius: 16px;
            height: 15%;
            margin: auto;
            padding: 25px;

        }

        .inner-delete-container i {
            color: red;
            font-size: 44px;
        }

        .button {
            margin-top: 25px;
        }

        .button a {
            text-decoration: none;

            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 15px;
        }


        .cancel {
            background-color: rgba(43, 13, 240, 0.773);
            color: white;
        }

        .cancel:hover {
            background-color: rgba(43, 13, 240, 0.35);
        }

        .delete:hover {
            background-color: rgba(255, 0, 0, 0.38);
        }

        .delete {
            background-color: red;
            color: white;
        }

        table,
        th,
        td {
            padding: 1rem 2.2rem;
            text-align: center;
            border-collapse: collapse;



        }

        table tr {
            border-bottom: 2px solid rgba(228, 220, 220, 0.081);
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        thead th {
            position: stick;
            top: 0;
            left: 0;
            background-color: #d5d1de74;

        }

        .bedit {
            background-color: rgb(16, 16, 196);
            text-decoration: none;
            color: white;
            font-size: 28px;
            padding: 3px 15px;
            border-radius: 15px;
            text-align: center;

        }

        .bdelete {
            background-color: #cc0000;
            text-decoration: none;
            color: white;
            font-size: 28px;
            padding: 3px 15px;
            border-radius: 15px;
            text-align: center;

        }



        .adminmain-container {
            display: flex;
            max-width: 100%;
        }

        .dashdiv {
            flex: 1;
            /* max-width: 100%; */
            margin-left: 65px;
        }

        .menudiv {
            position: fixed;
            z-index: 999;
            width: 200px;


        }


        @media (min-width: 320px) and (max-width: 600px) {

            table,
            th,
            td {
                padding: 5px 10px;
                text-align: center;
                border-collapse: collapse;
                font-size: 7px;



            }

            .selleraddbutton {
                margin-top: 20px;
                margin-right: 20px;
                text-align: right;


            }



            .sellermain-container {
                min-height: 200vh;
                display: flex;
                justify-content: center;
                margin-top: 2vh;




            }


            .seller-title {
                border-bottom: 4px solid rgba(124, 137, 142, 0.879);
                padding: 5px 10px 0px 15px;
                color: rgb(2, 2, 58);
                font-size: 2px;
                font-weight: light;

            }

            .bedit {
                background-color: rgb(16, 16, 196);
                text-decoration: none;
                color: white;
                font-size: 8px;
                padding: 0.1px 5px;
                border-radius: 15px;
                text-align: center;

            }

            .bdelete {
                background-color: #cc0000;
                text-decoration: none;
                color: white;
                font-size: 8px;
                padding: 0.1px 5px;
                border-radius: 15px;
                text-align: center;

            }

            td img {
                width: 20px;
                border-radius: 50%;
                height: 20px;
                vertical-align: middle;
            }

            thead th {
                position: unset;
                top: 0;
                left: 0;
                background-color: #d5d1de74;

            }

            .selleraddbutton a {
                background-color: #0049B7;
                color: white;
                padding: 5px 7px;
                border-radius: 15px;
                text-decoration: none;
                font-weight: lighter;
                font-size: 7px;

            }

            .tablemaindiv {
                width: 90vh;
            }

            .seller-title {
                border-bottom: 4px solid rgba(124, 137, 142, 0.879);
                padding: 5px 10px 0px 15px;
                color: rgb(2, 2, 58);
                font-size: 10px;
                font-weight: light;
                position: sticky;

            }
        }



        @media (min-width: 600px) and (max-width: 1080px) {

            table,
            th,
            td {
                padding: 12px 10px;
                text-align: center;
                border-collapse: collapse;
                font-size: 13px;



            }


            .sellermain-container {
                min-height: 200vh;
                display: flex;
                justify-content: center;
                margin-top: 2vh;





            }


            .seller-title {
                border-bottom: 4px solid rgba(124, 137, 142, 0.879);
                padding: 5px 10px 0px 15px;
                color: rgb(2, 2, 58);
                font-size: 10px;
                font-weight: light;

            }

            .bedit {
                background-color: rgb(16, 16, 196);
                text-decoration: none;
                color: white;
                font-size: 20px;
                padding: 0.1px 5px;
                border-radius: 15px;
                text-align: center;

            }

            .bdelete {
                background-color: #cc0000;
                text-decoration: none;
                color: white;
                font-size: 20px;
                padding: 0.1px 5px;
                border-radius: 15px;
                text-align: center;

            }

            td img {
                width: 30px;
                border-radius: 50%;
                height: 30px;
                vertical-align: middle;
            }

            thead th {
                position: unset;
                top: 0;
                left: 0;
                background-color: #d5d1de74;

            }

            .selleraddbutton a {
                background-color: #0049B7;
                color: white;
                padding: 5px 7px;
                border-radius: 15px;
                text-decoration: none;
                font-weight: lighter;
                font-size: 20px;

            }

            .tablemaindiv {
                max-width: 100%;
            }

            .seller-title {
                border-bottom: 4px solid rgba(124, 137, 142, 0.879);
                padding: 5px 10px 0px 15px;
                color: rgb(2, 2, 58);
                font-size: 15px;
                font-weight: light;
                position: sticky;

            }
        }
    </style>



    <div class="main-body-delete" id="maindiv">
        <div class="main-delete-container">
            <div class="inner-delete-container">
                <h3>Do You Want to Cancel Your Order?</h3>
                <i class="ri-emotion-sad-line"></i>
                <div class="button">
                    <a href="" id="cancel" onclick="hidden()" class="cancel">Back</a>
                    <a id="delete" class="delete">Cancel Order</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        function hidden() {
            var maindiv2 = document.getElementById("maindiv");
            maindiv2.style.display = "none";
        }


        function show(x) {

            document.getElementById("maindiv").style.display = "block";
            document.getElementById("delete").href = "php/qdeleteproduct.php?id=" + x;





        }
    </script>




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