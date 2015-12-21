<?php
/**
 * Function that deals with all emails
 */

date_default_timezone_set('America/Vancouver'); // Setting timezone to Vancouver

/**
 * Sends email
 */
function sendEmail() {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $university = $_POST["university"];
  $subject = $_POST["subject"];
  $body = $_POST["body"];
  
  //Create a new PHPMailer instance
  $mail = new PHPMailer;

  //Tell PHPMailer to use SMTP
  $mail->isSMTP();

  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 0;

  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host = 'beaubien.web-dns1.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6

  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 465;

  //Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = 'tls';

  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;

  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "inquiry@conextus.ca";

  //Password to use for SMTP authentication
  //Do not hardcode it!!!
  $mail->Password = "marshmellow";

  //Set who the message is to be sent from
  $mail->setFrom($email, $name);

  //Set who the message is to be sent to
  $mail->addAddress('incorporatedconextus@gmail.com', 'Conextus Incorporated');
  
  $mail->Subject = "$subject from $name of $university with email '$email'";
  $subject = "$subject from $name of $university with email '$email'";
  $mail->Subject = $subject;

  $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

  //Replace the plain text body with one created manually
  $mail->AltBody = $body;

  //Attach an image file
  //$mail->addAttachment('images/phpmailer_mini.png');

  //send the message, check for errors
  if (!$mail->send() && !mail($to, $subject, $message, $headers)) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }

  else {
    echo "Message sent!";
  }
}

?>
