<?php

if(isset($_POST['submit'])) {
    $to = "gbenga.ayelab@gmail.com"; // Your email address
    $subject = "Message from portfolio contact form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $name . " <" . $email . ">\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Error: Message not sent.";
    }
}

?>
