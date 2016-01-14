<?php
/**
 * Function that deals with all emails
 */

date_default_timezone_set('America/Vancouver'); // Setting timezone to Vancouver

/**
 * Sends email
 */
function sendEmail() {
  $name = sanitizeString($_POST["name"]);
  $email = sanitizeString($_POST["email"]);
  $subject = sanitizeString($_POST["subject"]);
  $body = sanitizeString($_POST["body"]);
  
  if (empty($subject)) {
    $subject = "SUBJECT NOT FILLED";
  }

  $to = 'incorporatedconextus@gmail.com';
  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //send the message, check for errors
  if (!mail($to, $subject, $body, $headers)) {
    echo 'Sorry! Please email at <a href="mailto:incorporatedconextus@gmail.com">incorporatedconextus@gmail.com</a> while we fixed this issue.';
    
    write_log("Email not sent to $name's $email with the message:\r\n  $body'");
  }

  else {
    $headers = "From: incorporatedconextus@gmail.com" . "\r\n" .
    "Reply-To: incorporatedconextus@gmail.com" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $subject = "Copy of your email: " . $subject;
    mail($email, $subject, $body, $headers);
    
    echo "Message sent!";
  }
}

/**
 * Function that deals with sanitizing inputs
 */
function sanitizeString($input) {
  $output = $input;
  $output = strip_tags(trim($output));
  $output = htmlentities($output, ENT_NOQUOTES);
  return $output;
}

function write_log($error_message) {
  $error_message = date('Y-m-d-H-i-s') . ": $error_message\r\n";
  $file = 'errorlog.txt';
  file_put_contents($file, $error_message, FILE_APPEND | LOCK_EX);
}

?>
