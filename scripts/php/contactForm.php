<?php
if (isset($_POST['submit'])) {
  $lastName = $_POST['last'];
  $firstName = $_POST['first'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = nl2br(htmlspecialchars($_POST['message']));

  $mailSubject = "Message reçu de ".$firstName." ".$lastName." : ".$subject;

  $header = "From: \"".$firstName." ".$lastName."\"<".$email.">\"\n";
  $header .= "Reply-To: ".$email."\n";
  $header .= "Content-Type: text/html; charset=\"utf-8\"";

  $mailContent.= "<p>".$message."</p>";

  if($lastName == NULL || $firstName == NULL || $subject==NULL || $email==NULL || $message==NULL){
    header("Location: ../../contact.php?last=".$lastName."&first=".$firstName."&mail=".$email."&message=".$message."&subject=".$subject."#anchor");
  }
  else {
    if (mail('contact@alphonsebouy.fr',$mailSubject, $mailContent, $header)) {
      header("Location: ../../contact.php?mailsent#bottom-anchor");
    }
    else {
      header("Location: ../../contact.php?mailnotsent#bottom-anchor");
    }
  }

}

 ?>
