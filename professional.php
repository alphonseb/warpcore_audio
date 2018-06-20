<?php
$current = 'professional';
include "include/header.php";
?>

    <main class="devis_main">
      <video src="video/backgroundAnimated2.mp4" poster="images/poster.jpg" loop muted autoplay>
      </video>
      <h1>Entreprises</h1>
      <div class="devis_background_professional">
        <div class="devis_info">
          <div class="devis_icon_container">
            <div class="devis_icon_background">
              <div class="professionnal_icon">
              </div>
            </div>
          </div>
          <ul>
            <li>Composition de musique publicitaire</li>
            <li>Composition de musique de film institutionnel</li>
            <li>Composition de virgule sonore/habillage</li>
            <li>Enregistrement/Mixage/Mastering</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            Pour votre entreprise <strong>WarpCore Audio</strong> propose des serices de composition sur-mesure accompagnés, ou non, de mixage et de mastering.
          </p>
          <p id="anchor" class="description_line">
            N'hésiter pas à nous demander un devis et à inclure un extrait musical !
          </p>
        </div>
      </div>
      <div class="form-container">
        <h3>Demande de devis pour une entreprise</h3>
        <form action="scripts/php/professionalForm.php" method="post" enctype="multipart/form-data" class="quotation_form">
          <div class="text_zone">
            <div class="name_container">
              <label for="companyName">Nom de la société<span> *</span>
                <?php
                 if (isset($_GET['name']) && $_GET['name']==NULL){
                    echo "<span>Veuillez rentrer votre nom</span>";
                 }
                ?>
              </label>
              <input
              <?php
              if (isset($_GET['name']) && $_GET['name']!=NULL) {
                echo "value='".$_GET['name']."'";
              }
               ?>
              id="companyName" type="text" name="companyName">
            </div>
            <div class="email_container">
              <label for="email">Adresse Email<span> *</span>
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
            </div>
            <div class="description_container">
              <label for="description">explication du projet<span> *</span>
                <?php
                 if (isset($_GET['message']) && $_GET['message']==NULL){
                    echo "<span>Veuillez détailler votre projet</span>";
                 }
                ?>
              </label>
              <textarea id="description" name="description" rows="8" cols="80"><?php
                if (isset($_GET['message']) && $_GET['message']!=NULL) {
                  echo $_GET['message'];
                }
                 ?></textarea>
            </div>
          </div>
          <div id="bottom-anchor" class="form_bottom">
            <div class="services_type">
              <label for="serviceType">Prestation demandée <span>*</span> </label>
              <select id="serviceType" required class="choice_list" name="serviceType">
                <option value=""></option>
                <option>Mixage</option>
                <option>Enregistrement studio</option>
                <option>Mastering</option>
                <option>Composition</option>
                <option>Arrangement</option>
              </select>
            </div>
            <div class="musical_sample_container">
              <p>Envoyer un extrait musical</p>
              <div class="file_input">
                <label for="file"></label>
                <input accept=".wav, .mp3, .flac" id="file" type="file" name="sampleFile">
                <p id="fileName">Choisissez un fichier</p>
              </div>
            </div>
          </div>
          <input class="submit_button" type="submit" name="submit" value="Envoyer">
          <?php
          if (isset($_GET['error'])) {
            echo "<p classs='error'>".$_GET['error']."</p>";
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
    </main>

<?php
include "include/footer.php";
?>
