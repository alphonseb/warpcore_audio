<?php
  $current = 'contact';
 include "include/header.php"; ?>
    <main>
      <video src="../video/backgroundAnimated2.mp4" poster="../images/poster.jpg" loop muted autoplay>
      </video>
      <div class="contact-container">
        <h1>Contact us easily !</h1>
        <div class="contact-form-container">
          <form class="contact-form" action="scripts/contactForm_en.php" method="post">
            <div class="contact-form-names">
              <div>
                <label for="lastName">Last Name <span> *</span>
                  <?php
                   if (isset($_GET['last']) && $_GET['last']==NULL){
                      echo "<span>Please state your last name</span>";
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
                <label for="firstName">First Name <span> *</span>
                  <?php
                   if (isset($_GET['first']) && $_GET['first']==NULL){
                      echo "<span>Please state your first name</span>";
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
            <label for="email">E-mail Adress <span> *</span>
              <?php
               if (isset($_GET['mail']) && $_GET['mail']==NULL){
                  echo "<span>Please state your e-mail adress</span>";
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
            <label for="subject">Subject <span> *</span>
              <?php
               if (isset($_GET['subject']) && $_GET['subject']==NULL){
                  echo "<span>Please specify a subject</span>";
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
                  echo "<span>Please write a message</span>";
               }
              ?>
            </label>
            <textarea id="message" name="message" rows="8" cols="80"><?php
              if (isset($_GET['message']) && $_GET['message']!=NULL) {
                echo $_GET['message'];
              }
          ?></textarea>
            <input class="submit" type="submit" name="submit" value="Send">
            <?php
            if (isset($_GET['error'])) {
              echo "<p class='error'>".$_GET['error']."</p>";
            }
            elseif (isset($_GET['uploadfailure']) || isset($_GET['mailnotsent'])) {
              echo "<p class='error'>Problem sending the form. Please try again.</p>";
            }
            else if (isset($_GET['uploadsuccess'])) {
              echo "<p>File and form sent!</p>";
            }
            elseif (isset($_GET['mailsent'])){
              echo "<p>Form sent !</p>";
            }
            ?>
          </form>
        </div>
      </div>
    </main>
<?php include "include/footer.php" ?>
