<?php
include('php/dbconnector.php');

if (isset($_POST['input']) && isset($_POST['productid'])) {
    $size_id = $_POST['input'];
    $product_id = $_POST['productid'];

    



        $qry = "SELECT * FROM product_size_variation WHERE size_id = ? AND product_id = ?";
        $stmt = mysqli_prepare($conn, $qry);
        mysqli_stmt_bind_param($stmt, "ii", $size_id, $product_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
    

        if ($data = mysqli_fetch_assoc($result)) {
            echo '<option value="">select quantity</option>';

            $q = $data['quantity_in_stock'];
            for ($i = 1; $i <= $q; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
        } else {
            echo '<option value="">No data found</option>';
        }
    } else {
        echo '<option value="">Invalid size</option>';
    }

?>
