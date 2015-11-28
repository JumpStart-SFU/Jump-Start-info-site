<?php
/**
 *
 */

require_once 'functions/email.php';

if (isset($_POST["name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["subject"])) {
  sendEmail();
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  
  <link rel="stylesheet" href="css/grid.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/media.css"/>
  <link rel="stylesheet" href="normalize.css"/>
	
  <script src="js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="js/autoScrollTo.js"></script> <!-- External js from CSS tricks -->
  <script type="text/javascript" src="js/wufoo.js"></script><!-- External js from wufoo-->
  <title>Conextus</title>
</head>
<body>
  <!-- HEADER / NAVIGATION -->
  <div class = "header">
    <div class="grid_100">
      <ul>
        <li class = "grid_25"><a href="index.php" class="topNav">Conextus</a></li>
      </ul>
    </div>
  </div>
  <!-- HEADER / NAVIGATION END -->

  <!-- FORM -->
  <div class = "registrationFormContent">
    <div class ="registrationForm">
      <h2>Contact Us!</h2>
      <div class = "grid_100">
        <form action="registerForm.php" method="post" id="usrform">
          <ul class="registerForm">
            <li>Name</li><input type="text" name="name" placeholder="John Adams" required/>
            <li>Email</li><input type="email" name="email" placeholder="john@email.com" required/>
            <li>University</li><input type="text" name="university" placeholder="Avery University"/>
            <li>Subject</li>
            <input type="radio" name="subject" value="Request for Open Beta"/> Open Beta
            <input type="radio" name="subject" value="Inquiry"/> Inquiry<br/>
            <li>Body</li><textarea name="body" form="usrform" rows="4" cols="50" placeholder="I would like to sign up for your open beta." required></textarea>
          </ul>
          
          <input type="submit" name="submit_button" value="Submit"/>
        </form>
      </div>
    </div>
  </div>
  <!-- FORM END -->
	
  <!-- FOOTER -->
  <div class = "footer" id="formFooter">
    <div class = "footerContent">
      <h6>CONNECT WITH US!</h6>
      <a href="https://www.facebook.com/Conextus-1490009591318369" target="_blank"><img src="img/facebookIcon.png" class = "footerIcon"/></a>
      <a href="https://twitter.com/ConexterInc" target="_blank"><img src="img/twitterIcon.png" class = "footerIcon"/></a>
      <a href="https://instagram.com/conextus.inc/" target="_blank"><img src="img/instagramIcon.png" class = "footerIcon"/></a>
      <p>Copyright © 2016 | Conextus Incorporated | All Rights Reserved.</p>
    </div>
  </div>
  <!-- FOOTER END -->
</body>
