    <footer>
      <div class="footer-container">
        <div class="footer-content">
          <h2>Nous contacter</h2>
          <p class="contact-description">Nous sommes joignables 7 jours sur 7. Utilisez notre <strong><a href="contact.php" title="Fomulaire de contact">formulaire de contact</a></strong> ou bien un autre moyen ci-dessous.</p>
          <div>
            <h3>Email</h3>
            <p><a href="mailto:contact@warpcore-audio.fr" title="Mail">contact@warpcore-audio.fr</a></p>
          </div>
          <div>
            <h3>Téléphone</h3>
            <p><a href="tel:+33634532343" title="Téléphone">+33 6 34 53 23 43</a></p>
          </div>
          <div>
            <h3>Réseaux sociaux</h3>
            <ul class="logo-social">
              <li><a class="social-sc" href="#" title="Soundcloud"></a></li>
              <li><a class="social-fb" href="#" title="Facebook"></a></li>
              <li><a class="social-ml" href="#" title="Mail"></a></li>
              <li><a class="social-yt" href="#" title="YouTube"></a></li>
            </ul>
          </div>
        </div>
        <p class="legal">Copyright Warpcore Audio 2018 - <a href="legal.php" title="Mentions légales">Mentions légales</a></p>
      </div>
      <div class="scroll">
        <div class="scroll-line">
        </div>
        <span class="scroll-anim">scroll</span>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/js/app.js"></script>
    <script src="scripts/js/header.js"></script>
    <script src="scripts/js/hamburger"></script>
    <?php
    if ($current == 'home') {
      echo "<script src='scripts/js/ytv.js'></script>";
      echo "
      <script>
        document.addEventListener('DOMContentLoaded', function(event) {
          var controller = new YTV('frame', {
            playlist: 'PLl7DBpCoPyXjgzxGYGMaPU1pZ3aSVOIPr'
          });
        });
      </script>
      ";
    }
    ?>

  </body>
</html>
