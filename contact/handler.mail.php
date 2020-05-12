<?php
if(isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $formcontent=" From: $first $last \n Phone: $phone \n Type: $type \n Message: $message";
    $recipient = "meaningfulmusic.org@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";}
?>
