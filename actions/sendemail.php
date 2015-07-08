<?php
require_once('../classes/class.phpmailer.php');

$mail             = new PHPMailer();

$body             = $_POST['message'];

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "brunocosta.1998@gmail.com";  // GMAIL username
$mail->Password   = "";            // GMAIL password

$mail->SetFrom($_POST['email']);

$mail->AddReplyTo($_POST['email']);

$mail->Subject    = $_POST['subject'];

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "brunocosta.1998@gmail.com";
$mail->AddAddress($address, "John Doe");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>    