<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fichiers</title>
  </head>
  <body>
    <?php
    if (isset($_POST['delete'])) {
      $fileName = $_POST['file-name'];
      unlink($fileName);
    }
    if (isset($_POST['submit_display']) || isset($_POST['delete'])) {
      $location = "uploads/";
      $resource = opendir($location);
      while(($entry = readdir($resource)) !== FALSE){
        if ($entry != '.' && $entry != '..') {
          $elements[]=$entry;
          echo '<p><a href="scripts/php/read.php?audio='.$entry.'">'.$entry.'</a></p>';
          echo '<form action="display.php" method="post">';
          echo '<input type="hidden" name="file-name" value="'.$location.$entry.'">';
          echo '<input type="submit" name="delete" value="supprimer">';
          echo '</form>';
        }
      }
    }
    ?>
    <a href="index.php">Back to admin panel</a>
  </body>
</html>
