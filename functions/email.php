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
  
  $subject = "$subject from $name of $university";

  $to = 'incorporatedconextus@gmail.com';
  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //send the message, check for errors
  if (!mail($to, $subject, $body, $headers)) {
    echo 'Sorry! Please email at <a href="mailto:incorporatedconextus@gmail.com">incorporatedconextus@gmail.com</a> while we fixed this issue.';
  }

  else {
    echo "Message sent!";
  }
}

?>
