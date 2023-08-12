<?php
$servername = "localhost"; 
$username = 'root'; 
$password = ''; 
$dbname = "bcadatabase"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $existingUserQuery = "SELECT * FROM userdetails WHERE user_email = '$email'";
    $existingUserResult = mysqli_query($conn, $existingUserQuery);

    if (mysqli_num_rows($existingUserResult) > 0) {
        echo 'User already exists';
    } else {
        
        $sql = "INSERT INTO userdetails (user_name, user_email, user_password) VALUES ('$username', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            if (mysqli_affected_rows($conn) > 0) {
                header("Location: ../login.php");
                exit();
            } else {
                echo 'Unable to register';
            }
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>
