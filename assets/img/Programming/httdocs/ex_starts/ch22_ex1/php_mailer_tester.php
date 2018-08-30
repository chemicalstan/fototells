<?php
set_include_path('/xampp/htdocs/book_apps/PHPMailer');
require_once 'PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();                             // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Set SMTP server
$mail->SMTPSecure = 'tls';                   // Set encryption type
$mail->Port = 587;                           // Set TCP port
$mail->SMTPAuth = true;                      // Enable SMTP authentication
$mail->Username = 'YOUR_USERNAME@gmail.com'; // Set SMTP username
$mail->Password = 'YOUR_PASSWORD';           // Set SMTP password

$mail->setFrom('johndoe@example.com', 'John Doe');
$mail->addAddress('janedoe@example.com', 'Jane Doe');
$mail->Subject = 'PHPMailer Test';
$mail->Body    = '<p>This body uses HTML to make text <b>bold!</b></p>';
$mail->AltBody = 'This body does not use HTML.';
$mail->isHTML(true);                        // Enable HTML formatting

if($mail->send()) {
    echo '<p>Message has been sent by PHPMailer.</p>';
} else {
    echo '<p>Message could not be sent by PHPMailer.</p>';
    echo '<p>Error: ' . $mail->ErrorInfo . '</p>';
}