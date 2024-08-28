<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "tamarasagakova@gmail.com";
$mail->Password = "jtyjlnalwxnoambr";

$mail->setFrom($email, $name);
$mail->addAddress("tamarasagakova@gmail.com", "Tamara");

$mail->Body = $message;

$mail->send();

header("Location: sent.html");