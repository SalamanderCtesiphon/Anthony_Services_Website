<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "swbrookshire@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}

error_log("Error: " . print_r($_POST, true));
?>