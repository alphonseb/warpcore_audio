<?php
if (isset($_POST['submit'])) {
  $lastName = $_POST['last'];
  $firstName = $_POST['first'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = nl2br(htmlspecialchars($_POST['message']));

  $mailSubject = "Message reçu de ".$firstName." ".$lastName." : ".$subject;
  $mailSubjectClient ="Confirmation de votre message à Warpcore Audio";

  $header = "From: \"".$firstName." ".$lastName."\"<".$email.">\"\n";
  $header .= "Reply-To: ".$email."\n";
  $header .= "Content-Type: text/html; charset=\"utf-8\"";

  $headerClient = "From: \"WarpCore Audio\"<nepasrepondre@warpcore-audio.fr>\"\n";
  $headerClient .= "Reply-To: nepasrepondre@warpcore-audio.fr\n";
  $headerClient .= "Content-Type: text/html; charset=\"utf-8\"";

  $mailContent.= "<p>".$message."</p>";
  $mailContentClient = "<p>Ceci est un message automatisé. Veuillez ne pas répondre</p>";
  $mailContentClient .= "<p>Nous confirmons que vous avez envoyé le message suivant à WarpCore Audio :</p>";
  $mailContentClient .= "<p>".$subject."</p><p>".$message."</p>";
  $mailContentClient .= "<p>Merci d'avoir contacté WaprCore Audio.</p>";

  if($lastName == NULL || $firstName == NULL || $subject==NULL || $email==NULL || $message==NULL){
    header("Location: ../../contact.php?last=".$lastName."&first=".$firstName."&mail=".$email."&message=".$message."&subject=".$subject."#anchor");
  }
  else {
    if (mail('contact@warpcore-audio.fr',$mailSubject, $mailContent, $header) && mail($email,$mailSubjectClient,$mailContentClient,$headerClient)) {
      header("Location: ../../contact.php?mailsent#bottom-anchor");
    }
    else {
      header("Location: ../../contact.php?mailnotsent#bottom-anchor");
    }
  }

}

 ?>
