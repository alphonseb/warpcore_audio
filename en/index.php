<?php
$current = 'home';
include "include/header.php";
?>
    <main>
      <div class="first-screen">
        <div class="first-screen-left">
          <h1>WarpCore Audio</h1>
          <h2>Musical Production in Île-de-France</h2>
          <div class="home-description">
            <p>
              <strong>WarpCore Audio</strong> is a company specialized in <strong>musical production</strong>.
            </p>
            <p>
              We offer all kinds of musical services, from <em>writing</em> to <em>mastering</em>, as much for companies as for artists.
            </p>
            <p>
              You can <strong><a href="#services-anchor" title="Devis">contact us</a></strong> to get professional feedback on your work.
            </p>
            <p>
              We work in two <strong><a href="about.php#location" title="Studios">studios</a></strong> located in <strong>Paris</strong> and in <strong>Essonne</strong>.
            </p>
            <p>
              We also offer live services on request.
            </p>
          </div>
        </div>
        <div class="first-screen-right">
          <div class="slider-container clip-img">
            <div class="slider clip-img">
              <img src="../images/slider2.jpg" alt="">
              <img src="../images/slider1.jpg" alt="Image du studio">
              <img src="../images/slider3.jpg" alt="">
              <img src="../images/slider4.jpg" alt="">
              <img src="../images/slider5.jpg" alt="">
              <img src="../images/slider6.jpg" alt="">
            </div>
          </div>
          <div class="slider-bullet">
            <div class="selected">
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
      <div id="services-anchor">

      </div>
      <div class="services">
        <h2>You are</h2>
        <div class="services-categories">
          <p class="category-selected">A professional</p>
          <p>Private</p>
        </div>
        <div class="services-description">
          <div class="description-icon-people"></div>
          <div class="description-icon-solo"></div>
          <ul class="description-pro">
            <li>Advertising music composition</li>
            <li>Institutional film music composition</li>
            <li>Jingle/dressing composition </li>
            <li>Recording/Mix/Mastering</li>
          </ul>
          <ul class="description-solo">
            <li>Mix</li>
            <li>Mastering</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <a id="services-link" href="professional.php" title="Vers page professionnel">Ask for a quote</a>
      </div>
      <div class="artist">
        <h2>WarpCore Audio</h2>
        <h3 class="artist-name">Matthieu Germain, fondateur</h3>
        <div class="artist-presentation">
          <div class="quote" id="quote-left"></div>
          <div class="quote" id="quote-right"></div>
          <p class="artist-description">I am a sound engineer and composer, specialized in music production.</p>
          <ul class="logo-social">
            <li><a class="social-sc" href="#" title="Soundcloud"></a></li>
            <li><a class="social-fb" href="#" title="Facebook"></a></li>
            <li><a class="social-ml" href="#" title="Mail"></a></li>
            <li><a class="social-yt" href="#" title="YouTube"></a></li>
          </ul>
        </div>
        <div class="artist-img-border clip-artist-img">
          <div class="artist-img-container clip-artist-img">
            <div class="clip-artist-img">
              <img src="../images/profile-color.png" alt="Matthieu Hendrix">
            </div>
          </div>
        </div>
        <a href="about.php" title="En savoir plus" class="know-more">Learn more</a>
        <h4>Portfolio</h2>
        <p class="portfolio-description">Some of our realizations</p>
        <div id="frame"></div>
        <a class="yt-sub" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA?sub_confirmation=1" target="_blank" title="YouTube">Follow us on YouTube</a>
      </div>
      <div class="comments">
        <h2>They talk about us !</h2>
        <div class="comments-box">
          <div class="comments-fb"></div>
          <div class="comments-content">
            <h3>Thomas Vallas</h3>
            <p>Super accueil, ambiance plus que sympa, on apprécie l'investissement et le plaisir de faire du bon boulot ... et sans secret, dans ces conditions le taff est propre, ça sonne, on en redemande. On recommande, on remercie, on est content, on y retourne. Très satisfait !</p>
          </div>
          <div class="comments-content">
            <h3>Quentin Putaud</h3>
            <p>Nous avons été absolument ravi de travailler avec <strong>WarpCore Audio</strong>, le travail est fait, même bien fait, et avec le sourire et la bonne humeur en prime ! Enregistrement, mixage, mastering, je dit oui, dans la langue de Molière !</p>
          </div>
          <div class="comments-content">
            <h3>Paul Grossberger</h3>
            <p>Travail efficace et rapide, toujours à l'écoute et prêt à donner de bons conseils. C'est la première fois que nous travaillons avec vous et surement pas la dernière ! Un grand merci !</p>
          </div>
          <a href="https://www.facebook.com/pg/WarpCoreAudio/reviews/?ref=page_internal" target="_blank" title="Avis Facebook">Give your opinion !</a>
        </div>
      </div>
    </main>

<?php
include "include/footer.php";
?>
