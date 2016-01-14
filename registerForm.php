<?php
/**
 *
 */
require_once(__DIR__ . '/functions/email.php');

if (isset($_POST['leaveblank']) && !empty($_POST['leaveblank'])) {
   echo "Form has been rejected!";
}

elseif (isset($_POST["name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["body"])) {
  sendEmail();
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta charset="utf-8"/>
  <title>Conextus</title>
  <meta name="description" content="ConextUS, a Friendship application"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="css/ghost-buttons.css"/>
  <link rel="stylesheet" href="css/media-query.css"/>
  <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
  <div align="Right">
    <a class="ghost-button-semi-transparent" href="index.php">Conextus</a>
    <a class="ghost-button-semi-transparent" href="https://www.surveymonkey.com/r/WCFSQS2">Try Manually</a>
  </div>
  <div class="container1">

    <h1>We Want To Hear From You!</h1>
    <p></p>

    <div class="form-style-2">
      <div class="form-style-2-heading">Provide your information</div>
      <form action="registerForm.php" method="post">
        <label for="field1"><span>Name<span class="required">*</span></span>
          <input type="text" class="input-field" name="name" placeholder="John Smith" maxlength="72" required/>
        </label>
        <label for="field2"><span>Email <span class="required">*</span></span>
          <input type="email" class="input-field" name="email" placeholder="john@smith.com" maxlength="86" required/>
        </label>
        <label for="field3"><span>Regarding</span>
          <input type="radio" name="subject" value="Request for Open Beta"/> Open Beta
          <input type="radio" name="subject" value="Inquiry"/> Other<br/>
        </label>
        <label for="field4"><span>Message <span class="required">*</span></span>
          <textarea name="body" class="textarea-field" placeholder="Hello World!" maxlength="" required></textarea>
        </label>
        <!--
        <label><a class="noshow">Leave this blank: </a>
          <input type="text" class="noshow" name="leaveblank">
        </label>
-->
        <!-- NEED HELP HIDING THIS ON LIVE SITE -->
        
        <label><span>&nbsp;</span>
          <input type="submit" value="Submit"/>
        </label>
      </form>
    </div>
  </div>
	
  <!--FOOTER START -->
  <div class="footer">
    <div class="footerContent">
      <h6>CONNECT WITH US!</h6>
      <a href="https://www.facebook.com/Conextus-1490009591318369" target="_blank">
        <img src="img/facebookIcon.png" class="footerIcon"/>
      </a>
      <a href="https://twitter.com/ConexterInc" target="_blank">
        <img src="img/twitterIcon.png" class="footerIcon"/>
      </a>
      <a href="https://instagram.com/conextus.inc/" target="_blank">
         <img src="img/instagramIcon.png" class="footerIcon"/>
      </a>
      <p>Copyright © 2016 | Conextus Incorporated | All Rights Reserved.</p>
    </div>
  </div>
<!--FOOTER END -->
</body>
