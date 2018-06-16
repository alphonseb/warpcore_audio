<?php
$current = 'home';
include "include/header.php";
?>
    <main>
      <div class="first-screen">
        <div class="first-screen-left">
          <h1>Warpcore Audio</h1>
          <h2>Production musicale en Île-de-France</h2>
          <div class="home-description">
            <p>
              WarpCore Audio est une entreprise spécialisée dans la production musicale.
            </p>
            <p>
              Nous proposons tous services musicaux, de la composition au mastering, tant pour les entreprises que pour les artistes.
            </p>
            <p>
              Vous pouvez nous contacter afin d’avoir un retour professionnel sur votre travail.
            </p>
            <p>
              Nous proposons aussi des prestations live sur demande.
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
            <li>Mixage</li>
            <li>Mastering</li>
            <li>Composition</li>
            <li>Arrangement</li>
          </ul>
        </div>
        <a id="services-link" href="#" title="Vers page professionnel"></a>
      </div>
      <div class="artist">
        <h2>WarpCore Audio</h2>
        <h3 class="artist-name">Matthieu Germain, fondateur</h3>
        <div class="artist-presentation">
          <div class="quote" id="quote-left"></div>
          <div class="quote" id="quote-right"></div>
          <p class="artist-description">Je suis ingénieur du son et compositeur, spécialisé dans la production musicale.</p>
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
              <img src="images/profile-color.png" alt="Matthieu Hendrix">
            </div>
          </div>
        </div>
        <a href="#" title="En savoir plus" class="know-more">En apprendre plus</a>
        <h4>Portfolio</h2>
        <p class="portfolio-description">Quelques unes de nos réalisations</p>
        <div id="frame"></div>
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
          <a href="#" title="Avis Facebook">Donnez votre avis !</a>
        </div>
      </div>
    </main>

<?php
include "include/footer.php";
?>
