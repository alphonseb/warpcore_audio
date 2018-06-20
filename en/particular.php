<?php
$current = 'particular';
include "include/header.php";
?>

    <main class="devis_main">
      <h1>Private</h1>
        <div class="devis_info">
          <div class="devis_icon_container">
            <div class="devis_icon_background">
              <div class="particular_icon">

              </div>
            </div>
          </div>

          <ul>
            <li>Studio Recording</li>
            <li>Mix</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            For you, artists, <strong>WarpCore Audio</strong> offers musical performances of all kinds to accompany you in your musical or audiovisual projects.
          </p>
          <p class="description_line">
            Don't hesitate to ask us for a quote!
          </p>
        </div>

        <div class="form-container">
          <h3>Request a quote for a private</h3>
          <form class="quotation_form">
            <div class="text_zone">
              <div class="particular_name">
                <div class="name_container">
                  <label for="companyName">Last name<span> *</span></label>
                  <input id="companyName" type="text" name="companyName">
                </div>
                <div class="name_container">
                  <label for="companyName">First Name<span> *</span></label>
                  <input id="companyName" type="text" name="companyName">
                </div>
              </div>
              <div class="email_container">
                <label for="email">Email Adress<span> *</span></label>
                <input id="email" type="email" name="email">
              </div>
              <div class="description_container">
                <label for="description">project description<span> *</span></label>
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
                <p>Send a musical sample</p>
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
