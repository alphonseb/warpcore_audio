<?php
$current = 'professional';
include "include/header.php";
?>

    <main class="devis_main">
      <video src="../video/backgroundAnimated2.mp4" poster="../images/poster.jpg" loop muted autoplay>
      </video>
      <h1>Companies</h1>
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
            <li>Jingle composition </li>
            <li>Recording/Mix/Mastering</li>
          </ul>
        </div>
        <div class="description">
          <p class="description_line">
            For your company <strong>WarpCore Audio</strong> offers hand-made composition services accompanied or not by mixing and mastering.
          </p>
          <p id="anchor" class="description_line">
            Don't hesitate to ask us for a quote and upload a music sample!
          </p>
        </div>

        <div class="form-container">
          <h3>Ask a quote for your company</h3>
          <form action="scripts/professionalForm_en.php" method="post" enctype="multipart/form-data" class="quotation_form">
            <div class="text_zone">
              <div class="name_container">
                <label for="companyName">Company Name<span> *</span>
                  <?php
                   if (isset($_GET['name']) && $_GET['name']==NULL){
                      echo "<span>Please state your name</span>";
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
                <label for="email">E-mail Address<span> *</span>
                  <?php
                   if (isset($_GET['mail']) && $_GET['mail']==NULL){
                      echo "<span>Please state your E-mail Adress</span>";
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
                <label for="description">Project description<span> *</span>
                  <?php
                   if (isset($_GET['message']) && $_GET['message']==NULL){
                      echo "<span>Please detail your project</span>";
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
                <label for="serviceType">Service required <span>*</span> </label>
                <select id="serviceType" required class="choice_list" name="serviceType">
                  <option value="">Choose a service</option>
                  <option>Studio Recording</option>
                  <option>Mix</option>
                  <option>Mastering</option>
                  <option>Composition</option>
                  <option>Arrangement</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="musical_sample_container">
                <p>Upload a music sample</p>
                <div class="file_input">
                  <label for="file"></label>
                  <input accept=".wav, .mp3, .flac" id="file" type="file" name="sampleFile">
                  <p id="fileName">Choose a file (mp3, wav, flac)</p>
                </div>
              </div>
            </div>
            <input class="submit_button" type="submit" name="submit" value="Send">
            <?php
            if (isset($_GET['error'])) {
              echo "<p class='error'>".$_GET['error']."</p>";
            }
            elseif (isset($_GET['uploadfailure']) || isset($_GET['mailnotsent'])) {
              echo "<p class='error'>Problem sending the form. Please try again.</p>";
            }
            else if (isset($_GET['uploadsuccess'])) {
              echo "<p>File and form sent !</p>";
            }
            elseif (isset($_GET['mailsent'])){
              echo "<p>Form sent !</p>";
            }

            ?>
          </form>
        </div>
    </main>

<?php
include "include/footer.php";
?>
