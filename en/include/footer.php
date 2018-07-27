    <footer>
      <div class="footer-container">
        <div class="footer-content">
          <h2>Contact Us</h2>
          <p class="contact-description">We are available 7 days a week. Use our <strong><a href="contact.php" title="Fomulaire de contact">contact form</a></strong> or any of the following.</p>
          <div>
            <h3>Email</h3>
            <p><a href="mailto:contact@warpcore-audio.fr" title="Mail">contact@warpcore-audio.fr</a></p>
          </div>
          <div>
            <h3>Phone</h3>
            <p><a href="tel:+33634532343" title="Phone">+33 6 34 53 23 43</a></p>
          </div>
          <div>
            <h3>Social Network</h3>
            <ul class="logo-social">
              <li><a class="social-ln" target="_blank" href="https://www.linkedin.com/in/matthieu-germain-b37963123/" title="LinkedIn"></a></li>
              <li><a class="social-fb" target="_blank" href="https://www.facebook.com/WarpCoreAudio/" title="Facebook"></a></li>
              <li><a class="social-yt" target="_blank" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA" title="YouTube"></a></li>
              <li><a class="social-sc" target="_blank" href="https://soundcloud.com/majin7" title="Soundcloud"></a></li>
            </ul>
          </div>
        </div>
        <p class="legal">Copyright Warpcore Audio 2018 - <a href="legal.php" title="Mentions légales">Legal Disclaimer</a></p>
      </div>
      <div class="scroll">
        <div class="scroll-line">
        </div>
        <span class="scroll-anim">scroll</span>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../dist/scripts/main.min.js"></script>
    <?php
    if ($current == 'home') {
      echo "<script src='../scripts/js/ytv.js'></script>";
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
