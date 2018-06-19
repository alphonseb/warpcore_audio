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
            <li>Mixage</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            Pour vous, artistes, <strong>WarpCore Audio</strong> propose des prestations musicales en tout genre pour vous accompagner au mieux dans vos projets musicaux ou audiovisuels.
          </p>
          <p class="description_line">
            N'hésiter pas à nous demander un devis !
          </p>
        </div>
      </div>
      <div class="form-container">
        <h3>Demande de devis pour un particulier</h3>
        <form class="quotation_form">
          <div class="text_zone">
            <div class="particular_name">
              <div class="name_container">
                <label for="companyName">Nom<span> *</span></label>
                <input id="companyName" type="text" name="companyName">
              </div>
              <div class="name_container">
                <label for="companyName">Prénom<span> *</span></label>
                <input id="companyName" type="text" name="companyName">
              </div>
            </div>
            <div class="email_container">
              <label for="email">Adresse Email<span> *</span></label>
              <input id="email" type="email" name="email">
            </div>
            <div class="description_container">
              <label for="description">explication du projet<span> *</span></label>
              <textarea id="description" name="description" rows="8" cols="80"></textarea>
            </div>
          </div>
          <div class="form_bottom">
            <div class="services_type">
              <label for="serviceType">Prestation demandée</label>
              <select id="serviceType" required class="choice_list" name="serviceType">
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
                <input accept=".wav, .mp3, .flac" id="file" type="file" name="sampleFile" value="">
                <p id="fileName">Choisissez un fichier</p>
              </div>
            </div>
          </div>
          <input class="submit_button" type="submit" name="formSubmit" value="Envoyer">
        </form>
      </div>
    </main>

<?php
include "include/footer.php";
?>
