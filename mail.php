<?php

$name = $_post['name'];
$email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$mailheader ="From: *.$name."<".$email.">"r\n";


$recipient = "gavinfreelancer254@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Ërror!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
       <h1>Thank You for contacting me. I will get back to you as soon as possible</h1>
       <p class="back">Go back to the<a href="index.html">Home Page.</a> </p>
    </div>
</body>
</html>




'




;









?>