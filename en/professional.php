<?php
$current = 'professional';
include "include/header.php";
?>

    <main class="devis_main">
      <h1>Professionnals</h1>
        <div class="devis_info">
          <div class="devis_icon_container">
            <div class="devis_icon_background">
              <div class="professionnal_icon">

              </div>
            </div>
          </div>

          <ul>
            <li>Advertising music composition</li>
            <li>Institutional film music composition</li>
            <li>Jingle/dressing composition </li>
            <li>Recording/Mix/Mastering</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            For your company <strong>WarpCore Audio</strong> offers tailor-made composition services accompanied or not by mixing and mastering.
          </p>
          <p class="description_line">
            Don't hesitate to ask us for a quote!
          </p>
        </div>

        <div class="form-container">
          <h3>Ask a quote for your company</h3>
          <form class="quotation_form">
            <div class="text_zone">
              <div class="name_container">
                <label for="companyName">Company Name<span> *</span></label>
                <input id="companyName" type="text" name="companyName">
              </div>
              <div class="email_container">
                <label for="email">Email Adress<span> *</span></label>
                <input id="email" type="email" name="email">
              </div>
              <div class="description_container">
                <label for="description">projetc description<span> *</span></label>
                <textarea id="description" name="description" rows="8" cols="80"></textarea>
              </div>
            </div>
            <div class="form_bottom">
              <div class="services_type">
                <label for="serviceType">Requested service</label>
                <select id="serviceType" required class="choice_list" name="serviceType">
                  <option>Mix</option>
                  <option>Studio recording</option>
                  <option>Mastering</option>
                  <option>Composition</option>
                  <option>Arrangement</option>
                </select>
              </div>
              <div class="musical_sample_container">
                <p>Send musical sample</p>
                <div class="file_input">
                  <label for="file"></label>
                  <input accept=".wav, .mp3, .flac" id="file" type="file" name="sampleFile" value="">
                  <p id="fileName">Chose a file</p>
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
