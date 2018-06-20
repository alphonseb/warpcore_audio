<?php
$current = 'home';
include "include/header.php";
?>
    <main>
      <video src="video/backgroundAnimated2.mp4" poster="images/poster.jpg" loop muted autoplay>
      </video>
      <div class="first-screen">
        <div class="first-screen-left">
          <h1>WarpCore Audio</h1>
          <h2>Production musicale en Île-de-France</h2>
          <div class="home-description">
            <p>
              <strong>WarpCore Audio</strong> est une entreprise spécialisée dans la <strong>production musicale</strong>.
            </p>
            <p>
              Nous accompagnons les entreprises et les artistes sur tous types de services musicaux, de la <em>composition</em> au <em>mastering</em>.
            </p>
            <p>
              Vous pouvez nous <strong><a href="#services-anchor" title="Devis">contacter</a></strong> afin d’avoir un retour professionnel sur votre travail.
            </p>
            <p>
              Nous proposons également des prestations live sur demande.
            </p>
            <p>
              Nous travaillons dans deux <strong><a href="about.php#location" title="Studios">studios</a></strong> situés à <strong>Paris</strong> et dans l'<strong>Essonne</strong>.
            </p>
          </div>
        </div>
        <div class="first-screen-right">
          <div class="slider-container clip-img">
            <div class="slider clip-img">
              <img src="images/slider1.jpg" alt="Image du studio">
              <img src="images/slider2.jpg" alt="">
              <img src="images/slider3.jpg" alt="">
              <img src="images/slider4.jpg" alt="">
              <img src="images/slider5.jpg" alt="">
              <img src="images/slider6.jpg" alt="">
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
        <h2>Vous êtes</h2>
        <div class="services-categories">
          <p class="category-selected">Un professionnel</p>
          <p>Un particulier</p>
        </div>
        <div class="services-description">
          <div class="description-icon-people"></div>
          <div class="description-icon-solo"></div>
          <ul class="description-pro">
            <li>Composition de musique publicitaire</li>
            <li>Composition de musique de film institutionnel</li>
            <li>Composition de virgule sonore/habillage</li>
            <li>Enregistrement/Mixage/Mastering</li>
          </ul>
          <ul class="description-solo">
            <li>Enregistrement</li>
            <li>Mixage/Mastering</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <a id="services-link" href="professional.php" title="Vers page professionnel">Demander un devis</a>
      </div>
      <div class="artist">
        <h2>WarpCore Audio</h2>
        <h3 class="artist-name">Matthieu Germain, fondateur</h3>
        <div class="artist-img-border clip-artist-img">
          <div class="artist-img-container clip-artist-img">
            <div class="clip-artist-img">
              <img src="images/profile-color.png" alt="Matthieu Hendrix">
            </div>
          </div>
        </div>
        <div class="artist-presentation">
          <div class="quote" id="quote-left"></div>
          <div class="quote" id="quote-right"></div>
          <p class="artist-description">Je suis ingénieur du son et compositeur, spécialisé dans la production musicale.</p>
          <ul class="logo-social">
            <li><a class="social-ln" target="_blank" href="https://www.linkedin.com/in/matthieu-germain-b37963123/" title="LinkedIn"></a></li>
            <li><a class="social-fb" target="_blank" href="https://www.facebook.com/WarpCoreAudio/" title="Facebook"></a></li>
            <li><a class="social-yt" target="_blank" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA" title="YouTube"></a></li>
            <li><a class="social-sc" target="_blank" href="https://soundcloud.com/majin7" title="Soundcloud"></a></li>
          </ul>
        </div>
        <a href="about.php" title="En savoir plus" class="know-more">En apprendre plus</a>
        <h4>Portfolio</h4>
        <p class="portfolio-description">Quelques unes de nos réalisations</p>
        <div id="frame"></div>
        <a class="yt-sub" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA?sub_confirmation=1" target="_blank" title="YouTube">Nous suivre sur YouTube</a>
      </div>
      <div class="comments">
        <h2>Ils parlent de nous !</h2>
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
          <a href="https://www.facebook.com/pg/WarpCoreAudio/reviews/?ref=page_internal" target="_blank" title="Avis Facebook">Donnez votre avis !</a>
        </div>
      </div>
    </main>

<?php
include "include/footer.php";
?>
