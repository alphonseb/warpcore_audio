<?php
$current = 'particular';
include "include/header.php";
?>

    <main class="devis_main">
      <video src="video/backgroundAnimated2.mp4" poster="images/poster.jpg" loop muted autoplay>
      </video>
      <h1>Artistes</h1>
      <div class="devis_background_particular">
        <div class="devis_info">
          <div class="devis_icon_container">
            <div class="devis_icon_background">
              <div class="particular_icon">

              </div>
            </div>
          </div>
          <ul>
            <li>Enregistrement studio</li>
            <li>Mixage/Mastering</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            Pour vous, artistes, <strong>WarpCore Audio</strong> propose des prestations musicales en tout genre pour vous accompagner au mieux dans vos projets musicaux ou audiovisuels.
          </p>
          <p id="anchor" class="description_line">
            N'hésitez pas à nous demander un devis et à inclure un extrait musical !
          </p>
        </div>
      </div>
      <div class="form-container">
        <h3>Demande de devis pour un particulier</h3>
        <form action="scripts/php/particularForm.php" method="post" enctype="multipart/form-data" class="quotation_form">
          <div class="text_zone">
            <div class="particular_name">
              <div class="name_container">
                <label for="last">Nom<span> *</span>
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
                id="last" type="text" name="last">
              </div>
              <div class="name_container">
                <label for="first">Prénom<span> *</span>
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
                 id="first" type="text" name="first">
              </div>
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
              <label for="description">Explication du projet<span> *</span>
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
              <label for="serviceType">Prestation demandée</label>
              <select id="serviceType" required class="choice_list" name="serviceType">
                <option value="">Choisissez une prestation</option>
                <option>Enregistrement studio</option>
                <option>Mixage</option>
                <option>Mastering</option>
                <option>Composition</option>
                <option>Arrangement</option>
                <option>Autre</option>
              </select>
            </div>
            <div class="musical_sample_container">
              <p>Envoyer un extrait musical</p>
              <div class="file_input">
                <label for="file"></label>
                <input accept=".wav, .mp3, .flac" id="file" type="file" name="sampleFile" >
                <p id="fileName">Choisissez un fichier (mp3, wav, flac)</p>
              </div>
            </div>
          </div>
          <input class="submit_button" type="submit" name="submit" value="Envoyer">
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
    </main>

<?php
include "include/footer.php";
?>
