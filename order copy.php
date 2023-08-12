<?php include 'includes/header.php';

if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];

    $sql = "DELETE FROM orders WHERE o_id = $delid";

    if (mysqli_query($conn, $sql)) {
      
        header("Location: orders.php");
        exit();
    } else {
        echo "Error deleting order: " . mysqli_error($conn);
    }
}



$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '
    <main class="main-container">
        <div class="main-title">
            <h2>Orders</h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">U id</th>
                    <th scope="col">P id</th>
                    <th scope="col">Order date</th>
                    <th scope="col">Delivered date</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Order Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';


    $sn = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <th scope="row">' . $sn . '</th>
                <td>' . $row['u_id'] . '</td>
                <td>' . $row['p_id'] . '</td>
                <td>' . $row['o_date'] . '</td>
                <td>' . $row['d_date'] . '</td>
                <td>' . $row['o_status'] . '</td>
                <td>' . $row['o_qty'] . '</td>
                <td>' . $row['o_price'] . '</td>
                <td>' . $row['o_payment_method'] . '</td>
                <td>' . $row['o_total'] . '</td>
                <td>
                    <a href="editorders.php?id=' . $row['o_id'] . '"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="orders.php?delid=' . $row['o_id'] . '"><i class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
              </tr>';
        $sn++;
    }

    echo '</tbody>
        </table>
    </main>';
} else {
    echo 'No orders found.';
}

include 'includes/footer.php';