<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);

   // Email configuration
   $to = "swbrookshire@gmail.com";
   $subject = "New Message from Contact Form";
   $headers = "From: " . $email . "\r\n";
   $headers .= "Reply-To: " . $email . "\r\n";
   $headers .= "Content-type: text/html; charset=UTF-8\r\n";

   // Send email
   if (mail($to, $subject, $message, $headers)) {
      echo "Message sent successfully";
   } else {
      echo "Message could not be sent";
   }
}
?>