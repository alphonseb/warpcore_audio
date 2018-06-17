<?php
$current = 'professional';
include "include/header.php";
?>

    <main class="devis_main">
      <h1>Professionnels</h1>
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
          <p class="description_line">
            N'hésiter pas à nous demander un devis !
          </p>
        </div>
      </div>
      <div class="form-container">
        <h3>Demande de devis pour une entreprise</h3>
        <form class="quotation_form">
          <div class="text_zone">
            <div class="name_container">
              <label for="companyName">Nom de la société<span> *</span></label>
              <input id="companyName" type="text" name="companyName">
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
