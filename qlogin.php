<?php
session_start();
include('dbconnector.php');

if (isset($_POST['submit'])) {
    $admin = "admin@gmail.com";
    $adminpass = "12345";

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM userdetails WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        if (($data['user_email'] == $email) && ($data['user_password'] == $password) && ($data['utype'] == 0)) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $data['user_name'];
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['type'] = 0;
            $_SESSION['success'] = 'Successfully logged in.';
            header("location: ../homepageafterlogin.php");
            exit();
        } elseif (($email == $admin) && ($password == $adminpass) && ($data['utype'] == "admin")) {
            $_SESSION['email'] = $admin;
            $_SESSION['type'] = $data['type'];
            $_SESSION['success'] = 'Welcome into Admin panel.';
            header("location: ../admin_panel/index.php");
            exit();
        } else {
            $_SESSION['error'] = 'Invalid username or password.';
            header("location: ../login.php");
        }
    } else {
        $_SESSION['error'] = 'User not found.';
        header("location: ../login.php");
    }
}
?>
