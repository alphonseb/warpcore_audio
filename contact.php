<?php
  $current = 'contact';
 include "include/header.php"; ?>
    <main>
      <div class="contact-container">
        <h1>Contactez-moi facilement !</h1>
        <div class="contact-form-container">
          <form class="contact-form" action="" method="post">
            <div class="contact-form-names">
              <div>
                <label for="lastName">Nom</label>
                <input type="text" name="lastName" placeholder="Dupont">
              </div>
              <div>
                <label for="firstName">Prénom</label>
                <input type="text" name="firstName" placeholder="Jean">
              </div>
            </div>
            <label for="email">Adresse E-Mail</label>
            <input type="email" name="email" placeholder="jean.dupont@fai.fr">
            <label for="subject">Objet</label>
            <input type="text" name="subject" placeholder="L'objet de mon message">
            <label for="message">Message</label>
            <textarea name="message" rows="8" cols="80" placeholder="Mon message ici"></textarea>
            <input class="submit" type="submit" name="contactSubmit" value="Envoyer">
          </form>
        </div>
      </div>
    </main>
<?php include "include/footer.php" ?>
