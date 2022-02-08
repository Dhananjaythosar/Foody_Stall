<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$mobile= $_POST['phone'];
$date= $_POST['date'];
$time= $_POST['time'];
$sits= $_POST['people'];
$message = $_POST['message'];

$subject = "New table booking request from the website";
        $body = "Hi $name,  \r\r\n\n Your Details: \r\n Contact No:$mobile\r\n Date:$date\r\n  No of people: $sits \r\n\n\n Your booking request was received. We will call back or send an Email to confirm your reservation. \r\r\n\nThank you!!";
        $headers = "From: foodystall77@gmail.com";

        if (mail($email, $subject, $body, $headers)) {
            echo "<script type='text/javascript'>alert('Your booking request was sent. Thank you!');document.location='index.php';</script>";
            
        }else {
            echo "Email sending failed...";
        }
    }
?>