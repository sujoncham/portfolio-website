<?php
if(!isset($_POST['submit'])){
    echo 'error, you need to submit form!';
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($email)){
    echo 'Name and Email are mandatory!';
    exit;
}

$email_from = 'sojonchambugong@gmail.com';
$email_subject = 'New Form submission';
$email_body = 'you have received a new message from the user $name.\n'. 'email address: $email\n'. 
    'Here is the message:\n $message'. 
$to = 'sojonchambugong@gmail.com';
$headers = 'From : $email_from \r\n';

mail($to, $email_subject, $email_body, $headers);
