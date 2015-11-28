<?php
require_once '/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

date_default_timezone_set('America/Vancouver'); // Setting timezone to Vancouver

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "incorporatedconextus@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "";

//Set who the message is to be sent from
$mail->setFrom('incorporatedconextus@gmail.com', 'Conextus Incorporated');

//Set an alternative reply-to address
// $mail->addReplyTo('incorporatedconextus@yahoo.com', 'Conextus Incorporated');

//Set who the message is to be sent to
$mail->addAddress('incorporatedconextus@gmail.com', 'Conextus Incorporated');

$name = $_POST["name"];
$email = $_POST["email"];
$university = $_POST["university"];
$subject = $_POST["subject"];
$body = $_POST["body"];

//Set the subject line
$mail->Subject = "$subject from $name of $university";

$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}

else {
  echo "Message sent!";
}

?>
