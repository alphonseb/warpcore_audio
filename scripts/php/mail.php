<?php
if (isset($_POST['mail']) && isset($_POST['message'])) {
  $destinataire = 'contact@alphonsebouy.fr';
  $objet = 'Message reçu : alphonsebouy.fr';
  $message = htmlspecialchars($_POST['message']);

  mail($destinataire, $objet, $message);
}

header("Location: index.php?sent");
