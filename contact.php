<?php
  $current = 'contact';
 include "include/header.php"; ?>
    <main>
      <video src="video/backgroundAnimated2.mp4" poster="images/poster.jpg" loop muted autoplay>
      </video>
      <div class="contact-container">
        <h1>Contactez-nous facilement !</h1>
        <div class="contact-form-container">
          <form class="contact-form" action="scripts/php/contactForm.php" method="post">
            <div class="contact-form-names">
              <div>
                <label for="lastName">Nom <span> *</span>
                  <?php
                   if (isset($_GET['last']) && $_GET['last']==NULL){
                      echo "<span>Veuillez rentrer votre nom</span>";
                   }
                  ?>
                </label>
                <input
                <?php
                if (isset($_GET['last']) && $_GET['last']!=NULL) {
                  echo "value='".$_GET['last']."'";
                }
                 ?>
                 id="lastName" type="text" name="last">
              </div>
              <div>
                <label for="firstName">Prénom <span> *</span>
                  <?php
                   if (isset($_GET['first']) && $_GET['first']==NULL){
                      echo "<span>Veuillez rentrer votre prénom</span>";
                   }
                  ?>
                </label>
                <input
                <?php
                if (isset($_GET['first']) && $_GET['first']!=NULL) {
                  echo "value='".$_GET['first']."'";
                }
                 ?>
                id="firstName" type="text" name="first">
              </div>
            </div>
            <label for="email">Adresse E-Mail <span> *</span>
              <?php
               if (isset($_GET['mail']) && $_GET['mail']==NULL){
                  echo "<span>Veuillez rentrer votre adresse email</span>";
               }
              ?>
            </label>
            <input id="email" type="email" name="email" value="
            <?php
            if (isset($_GET['mail']) && $_GET['mail']!=NULL) {
              echo $_GET['mail'];
            }
             ?>
            ">
            <label for="subject">Objet <span> *</span>
              <?php
               if (isset($_GET['subject']) && $_GET['subject']==NULL){
                  echo "<span>Veuillez spécifier un objet</span>";
               }
              ?>
            </label>
            <input
            <?php
            if (isset($_GET['subject']) && $_GET['subject']!=NULL) {
              echo "value='".$_GET['subject']."'";
            }
             ?>
            id="subject" type="text" name="subject">
            <label for="message">Message <span> *</span>
              <?php
               if (isset($_GET['message']) && $_GET['message']==NULL){
                  echo "<span>Veuillez écrire un message</span>";
               }
              ?>
            </label>
            <textarea id="message" name="message" rows="8" cols="80"><?php
              if (isset($_GET['message']) && $_GET['message']!=NULL) {
                echo $_GET['message'];
              }
          ?></textarea>
            <input class="submit" type="submit" name="submit" value="Envoyer">
            <?php
            if (isset($_GET['error'])) {
              echo "<p class='error'>".$_GET['error']."</p>";
            }
            elseif (isset($_GET['uploadfailure']) || isset($_GET['mailnotsent'])) {
              echo "<p class='error'>Problème dans l'envoi du formulaire. Veuillez réessayer.</p>";
            }
            else if (isset($_GET['uploadsuccess'])) {
              echo "<p>Fichier et formulaire envoyés!</p>";
            }
            elseif (isset($_GET['mailsent'])){
              echo "<p>Formulaire envoyé !</p>";
            }
            ?>
          </form>
        </div>
      </div>
    </main>
<?php include "include/footer.php" ?>
