<?php
if (isset($_POST['submit'])) {
  $lastName = $_POST['last'];
  $firstName = $_POST['first'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = nl2br(htmlspecialchars($_POST['message']));

  $mailSubject = "[EN] Message reçu de ".$firstName." ".$lastName." : ".$subject;
  $mailSubjectClient ="Confirmation of your message to WarpCore Audio";

  $header = "From: \"".$firstName." ".$lastName."\"<".$email.">\"\n";
  $header .= "Reply-To: ".$email."\n";
  $header .= "Content-Type: text/html; charset=\"utf-8\"";

  $headerClient = "From: \"WarpCore Audio\"<donotreply@warpcore-audio.fr>\"\n";
  $headerClient .= "Reply-To: donotreply@warpcore-audio.fr\n";
  $headerClient .= "Content-Type: text/html; charset=\"utf-8\"";


  $mailContent.= "<p>".$message."</p>";
  $mailContentClient = "<p>This is an automated message. Please do not answer.</p>";
  $mailContentClient .= "<p>We are confirming that you just sent the following message to WarpCore Audio :</p>";
  $mailContentClient .= "<p>".$subject."</p><p>".$message."</p>";
  $mailContentClient .= "<p>Thank you for contacting WarpCore Audio.</p>";

  if($lastName == NULL || $firstName == NULL || $subject==NULL || $email==NULL || $message==NULL){
    header("Location: ../contact.php?last=".$lastName."&first=".$firstName."&mail=".$email."&message=".$message."&subject=".$subject."#anchor");
  }
  else {
    if (mail('contact@warpcore-audio.fr',$mailSubject, $mailContent, $header) && mail($email,$mailSubjectClient,$mailContentClient,$headerClient)) {
      header("Location: ../contact.php?mailsent#bottom-anchor");
    }
    else {
      header("Location: ../contact.php?mailnotsent#bottom-anchor");
    }
  }

}

 ?>
