<?php
include "include/header.php";
?>

    <main class="professional_main">
        <div class="professional_info">
          <div class="professional_icon">
            <img src="images/people.png" alt="">
            <h2>Professionels</h2>
          </div>
          <ul>
            <li>- Composition de musique publicitaire</li>
            <li>- Composition de musique de film institutionnel</li>
            <li>- Composition de virgule sonore/habillage</li>
          </ul>
        </div>
        <p class="description_line">Pour vous, professionels, WarpCore Audio propose des serices de composition sur-mesure accompagnés, ou non, de mixage et de mastering. N'hésiter pas à nous demander un devis !</p>
        <div class="form-container">
          <h3>Demande de devis</h3>
          <form class="quotation_form">
            <div class="text_zone">
              <div class="name_container">
                <p>nom + prénom ou nom de la société</p>
                <input type="text" name="name">
              </div>
              <div class="email_container">
                <p>email</p>
                <input type="text" name="email">
              </div>
              <div class="description_container">
                <p>explication du projet</p>
                <input class="description_input" type="text" name="description">
              </div>
            </div>
            <div class="form_bottom">
              <select class="choice_list" name="">
                <option value="Mixage">Mixage</option>
                <option value="Mixage1">Enregistrement studio</option>
                <option value="Mixage2">Mastering</option>
                <option value="Mixage3">Composition</option>
                <option value="Mixage3">Arrangement</option>
              </select>
              <div class="musical_sample_container">
                <p>envoyer un extrait musical</p>
                <div class="">
                  <img src="" alt="">
                  <p></p>
                </div>
              </div>
            </div>
          </form>
        </div>
    </main>

<?php
include "include/footer.php";
?>
