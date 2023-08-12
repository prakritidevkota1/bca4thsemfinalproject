<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Custom table styles */
        .container {
            margin-top: 50px;
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


        .table img {
            max-height: 80px;
            max-width: 100px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #343a40;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.N.</th>

                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total price</th>
                </tr>
            </thead>
            <?php
            include_once "php/dbconnector.php";
            $ID = $_GET['orderID'];

            $sql = "SELECT * from order_details 
        where 
        order_id=$ID";
            $result = $conn->query($sql);
            $count = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $v_id = $row['variation_id'];
            ?>
                    <tr style="background-color:honeydew";>
                        <td><?= $count ?></td>



                        <?php


                        $subqry2 = "SELECT s.size_name
                        FROM sizes s
                        INNER JOIN product_size_variation v ON s.size_id = v.size_id
                        WHERE v.variation_id = $v_id";

                        $res2 = $conn->query($subqry2);
                        if ($row3 = $res2->fetch_assoc()) {
                        ?>
                            <td><?= $row3["size_name"] ?></td>
                        <?php
                        }
                        ?>
                        <td><?= $row["quantity"] ?></td>
                        <td><?= $row["price"] ?></td>
                        <?php $tp = $row["price"];
                        $tq = $row['quantity'];
                        $total = $tp * $tq;
                        ?>
                        <td style="background-color:aquamarine;padding:5px 5px;border-radius:10px;width:20%;"><?php echo $total; ?></td>
                    </tr>
            <?php
                    $count = $count + 1;
                }
            } else {
                echo "error";
            }
            ?>
        </table>
        <a class="back-button" href="viewuserorder.php">BACK</a>
    </div>

</body>

</html>