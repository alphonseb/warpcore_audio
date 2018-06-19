<?php
if (isset($_POST['submit'])) {
  $companyName = $_POST['companyName'];
  $email = $_POST['email'];
  $message = htmlspecialchars($_POST['description']);
  $serviceType = $_POST['serviceType'];
  if($companyName == NULL || $email==NULL || $message==NULL){
    header("Location: ../../professional.php?name=".$companyName."&mail=".$email."&message=".$message."&type=".$serviceType);
  }


}

 ?>
