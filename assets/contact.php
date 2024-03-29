<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "deepali.minimaster@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "First Name: $FirstName\nLast Name: $LastName\nEmail: $email\Phone Number: $phone\nMessage: $message";

    mail($to, $subject, $body);

    echo "Your message has been sent successfully!";
}
?>
