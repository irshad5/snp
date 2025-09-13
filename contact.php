<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info.snppharmaceutical@gmail.com"; // Your email
    $subject = "New Enquiry from Website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your enquiry has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
