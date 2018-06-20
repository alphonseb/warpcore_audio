<?php
if (isset($_POST['submit'])) {
  $companyName = $_POST['companyName'];
  $email = $_POST['email'];
  $message = nl2br(htmlspecialchars($_POST['description']));
  $serviceType = $_POST['serviceType'];

  $subject = "[EN] Demande de devis pour ".$companyName." : ".$serviceType;
  $mailSubjectClient ="Confirmation of your request for a(n) ".$serviceType." quote to WarpCore Audio";

  $header = "From: \"".$companyName."\"<".$email.">\"\n";
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

  if($companyName == NULL || $email==NULL || $message==NULL){
    header("Location: ../professional.php?name=".$companyName."&mail=".$email."&message=".$message."&type=".$serviceType."#anchor");
  }
  else if(!empty($_FILES['sampleFile']['name'])){
    $file = $_FILES['sampleFile'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('mp3', 'mpeg3', 'wav', 'flac');
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 50000000) {
          $fileNameNew = date("dmY-His").'_'.$companyName.'_'.$fileName.'.'.$fileActualExt;
          $fileDestination = '../../hendrix/uploads/'.$fileNameNew;

          $mailContent.= "<p>Le client a inclus un fichier audio : <a href='http://warpcore-audio.fr/hendrix/uploads/".$fileNameNew."' title='fichier'>voir le fichier</a></p>";
          if(mail('entreprises@warpcore-audio.fr', $subject, $mailContent, $header) && move_uploaded_file($fileTmpName, $fileDestination) && mail($email,$mailSubjectClient,$mailContentClient,$headerClient)){
            header("Location: ../professional.php?uploadsuccess#bottom-anchor");
          }
          else{
            header("Location: ../professional.php?uploadfailure#bottom-anchor");
          }
          exit();
        }
        else {
          $error = "File too voluminous. Max size is 50MB.";
        }
      }
      else {
        $error = "There was an error uploading the file. Please try again.";
      }
    }
    else {
      $error = "Only audio files can be uploaded.";
    }
    header("Location: ../professional.php?error=".$error."#bottom-anchor");
  }
  else {
    $mailContent .= "<p>Le client n'a pas inclus de fichier audio.</p>";
    if (mail('entreprises@warpcore-audio.fr',$subject, $mailContent, $header) && mail($email,$mailSubjectClient,$mailContentClient,$headerClient)) {
      header("Location: ../professional.php?mailsent#bottom-anchor");
    }
    else {
      header("Location: ../professional.php?mailnotsent#bottom-anchor");
    }
  }

}

 ?>
