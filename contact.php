<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    $to = 'contactus@accessoryglobe.com';
    $subject = 'New Contact Form Submission from website';
    $message_body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message_body, $headers)) {
        echo '<script>alert("Message sent successfully! Thank You!!");</script>';
    } else {
        echo '<script>alert("Error sending message.");</script>';
    }
}
?>