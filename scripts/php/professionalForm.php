<?php
if (isset($_POST['submit'])) {
  $companyName = $_POST['companyName'];
  $email = $_POST['email'];
  $message = nl2br(htmlspecialchars($_POST['description']));
  $serviceType = $_POST['serviceType'];

  $subject = "Demande de devis pour ".$companyName." : ".$serviceType;

  $header = "From: \"".$companyName."\"<".$email.">\"\n";
  $header .= "Reply-To: ".$email."\n";
  $header .= "Content-Type: text/html; charset=\"iso-8859-1\"";

  $mailContent.= "<p>".$message."</p>";

  if($companyName == NULL || $email==NULL || $message==NULL){
    header("Location: ../../professional.php?name=".$companyName."&mail=".$email."&message=".$message."&type=".$serviceType."#anchor");
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

          $mailContent.= "<p>Le client a inclus un fichier audio : <a href='http://alphonsebouy.fr/warpcore-audio/hendrix/uploads/".$fileNameNew."' title='fichier'>voir le fichier</a></p>";
          if(mail('contact@alphonsebouy.fr', $subject, $mailContent, $header) && move_uploaded_file($fileTmpName, $fileDestination)){
            header("Location: ../../professional.php?uploadsuccess#bottom-anchor");
          }
          else{
            header("Location: ../../professional.php?uploadfailure#bottom-anchor");
          }
          exit();
        }
        else {
          $error = "Fichier trop volumineux.";
        }
      }
      else {
        $error = "Erreur lors de la mise en ligne du fichier. Veuillez réessayer.";
      }
    }
    else {
      $error = "Seuls les fichiers audio sont autorisés";
    }
    header("Location: ../../professional.php?error=".$error);
  }
  else {
    $mailContent .= "<p>Le client n'a pas inclu de fichier audio.</p>";
    if (mail('contact@alphonsebouy.fr',$subject, $mailContent, $header)) {
      header("Location: ../../professional.php?mailsent#bottom-anchor");
    }
    else {
      header("Location: ../../professional.php?mailnotsent#bottom-anchor");
    }
  }

}

 ?>
