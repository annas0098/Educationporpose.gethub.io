<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_form = 'info@yourwebsitename.com';

$email_subject = 'new email submission';

$email_body = "user name: $name.\n".
                "user email: $visiter_email.\n".
                 "subject: $subject.\n".
                   "user massage: $massage.\n";

$to = 'graphicsab0@gmail.com'

$headers = "from: $email_form \r\n";
$headers .= "reply-to: $visiter_email \r\n ";

mail($to,$email_subject.$email_body,$headers);

header("location: contact.html")






?>