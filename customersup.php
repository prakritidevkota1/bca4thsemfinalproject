<?php 
include('dbconnector.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "prakritydevkota7@gmail.com";
    $subject = "Message from Contact Form";

    $first_name = sanitizeInput($_POST['first_name']);
    $last_name = sanitizeInput($_POST['last_name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $message = sanitizeInput($_POST['message']);

    $message_body = "<html><body>";
    $message_body .= "<h2>Contact Form Submission</h2>";
    $message_body .= "<p><strong>First Name:</strong> $first_name</p>";
    $message_body .= "<p><strong>Last Name:</strong> $last_name</p>";
    $message_body .= "<p><strong>Email:</strong> $email</p>";
    $message_body .= "<p><strong>Phone:</strong> $phone</p>";
    $message_body .= "<p><strong>Message:</strong></p><p>$message</p>";
    $message_body .= "</body></html>";

    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $message_body, $headers)) {
            $_SESSION['success'] = "Your message has been sent successfully!";
        } else {
            $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again later.";
        }
    } else {
        $_SESSION['error'] = "Invalid email address. Please provide a valid email.";
    }

    header("Location: ../contactus.php");
    exit();
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}
?>
