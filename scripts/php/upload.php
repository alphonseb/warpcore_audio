<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];

  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $first = $_POST['first'];
  $last = $_POST['last'];
  $compoName = $_POST['compo'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('mp3', 'mpeg3', 'wav');

  if ($first != NULL && $last != NULL && $compoName != NULL) {
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 50000000) {
          $fileNameNew = date("dmY-His").'_'.$first.'_'.$last.'_'.$compoName.'.'.$fileActualExt;
          $fileDestination = '../../../../uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          header("Location: ../../index.php?uploadsuccess");
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
      $error = "Seuls les fichiers audio sont autorisés.";
    }
  }
  else {
    $error = "Veuillez remplir toutes les cases.";
  }
  header("Location: ../../index.php?error=".$error);
}
