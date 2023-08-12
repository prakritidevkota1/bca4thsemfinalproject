<?php 
include('dbconnector.php');


$order_id = $_GET['id'];
$qry = "SELECT * FROM order_details WHERE order_id = $order_id";
$result = mysqli_query($conn, $qry);
$data = mysqli_fetch_assoc($result);
$varid = $data['variation_id'];
$quan = $data['quantity'];

$qry2 = "SELECT * FROM `product_size_variation` WHERE variation_id = $varid";
$result2 = mysqli_query($conn, $qry2);
$data2 = mysqli_fetch_assoc($result2);
$prequan = $data2['quantity_in_stock'];
$updatequn = $quan + $prequan;

$delqry = "DELETE FROM orders WHERE order_id = $order_id";

if (mysqli_query($conn, $delqry)) {
    $upd_qry = "UPDATE product_size_variation SET quantity_in_stock = $updatequn WHERE variation_id = $varid";
    mysqli_query($conn, $upd_qry);

    
    $to = $_SESSION['email'];
    $subject = 'Order Cancellation Confirmation';
    $message = "
        <html>
        <head>
            <title>Order Cancellation Confirmation</title>
        </head>
        <body>
            <h1>Order Cancellation Confirmation</h1>
            <p>We regret to inform you that your order with order ID $order_id has been canceled.</p>
            <p>If you have any questions or concerns, please contact our customer support.</p>
            <p>We apologize for any inconvenience this may have caused.</p>
            
            <p>Best regards,<br>Prakriti Clothing Store</p>
        </body>
        </html>
    ";

    $headers = "From: prakritydevkota@gmail.com\r\n";
    $headers .= "Reply-To: prakritydevkota@gmail.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['success'] = 'Your order has been canceled.';
    header("location: ../viewuserorder.php");

    } else {
        $_SESSION['success'] = 'Your order has been canceled.';
        $_SESSION['error'] = 'But there was an issue sending the confirmation email';
        
    }

    header("location: ../viewuserorder.php");
    exit();
} else {
    $_SESSION['error'] = 'Error canceling the order: ' . mysqli_error($conn);
    header("location: ../viewuserorder.php");
    exit();
}
?>
