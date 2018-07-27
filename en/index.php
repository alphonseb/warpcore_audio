<?php
$current = 'home';
include "include/header.php";
?>
    <main>
      <video src="../video/backgroundAnimated2.mp4" poster="../dist/images/poster.jpg" loop muted autoplay>
      </video>
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
              We also offer live services on request.
            </p>
            <p>
              We work in two <strong><a href="about.php#location" title="Studios">studios</a></strong> located in <strong>Paris</strong> and in <strong>Essonne</strong>.
            </p>
          </div>
        </div>
        <div class="first-screen-right">
          <div class="slider-container clip-img">
            <div class="slider clip-img">
              <img src="../dist/images/slider1.jpg" alt="Mix table">
              <img src="../dist/images/slider2.jpg" alt="Studio">
              <img src="../dist/images/slider3.jpg" alt="Preamp">
              <img src="../dist/images/slider4.jpg" alt="Drums">
              <img src="../dist/images/slider5.jpg" alt="Drums">
              <img src="../dist/images/slider6.jpg" alt="Mix console">
              <span><em>Studio des Petites Ecuries</em></span>
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
          <p class="category-selected">A company</p>
          <p>An artist</p>
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
        <h3 class="artist-name">Matthieu Germain, founder</h3>
        <div class="artist-presentation">
          <div class="quote" id="quote-left"></div>
          <div class="quote" id="quote-right"></div>
          <p class="artist-description">I am a sound engineer and composer, specialized in music production.</p>
          <ul class="logo-social">
            <li><a class="social-ln" target="_blank" href="https://www.linkedin.com/in/matthieu-germain-b37963123/" title="LinkedIn"></a></li>
            <li><a class="social-fb" target="_blank" href="https://www.facebook.com/WarpCoreAudio/" title="Facebook"></a></li>
            <li><a class="social-yt" target="_blank" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA" title="YouTube"></a></li>
            <li><a class="social-sc" target="_blank" href="https://soundcloud.com/majin7" title="Soundcloud"></a></li>
          </ul>
        </div>
        <div class="artist-img-border clip-artist-img">
          <div class="artist-img-container clip-artist-img">
            <div class="clip-artist-img">
              <img src="../dist/images/profile-color.png" alt="Matthieu Hendrix">
            </div>
          </div>
        </div>
        <a href="about.php" title="En savoir plus" class="know-more">Learn more</a>
        <h4>Portfolio</h4>
        <p class="portfolio-description">Some of our work</p>
        <div id="frame"></div>
        <a class="yt-sub" href="https://www.youtube.com/channel/UCIxdBIc7hXWeFTzvMzwctnA?sub_confirmation=1" target="_blank" title="YouTube">Follow us on YouTube</a>
      </div>
      <div class="comments">
        <h2>They talk about us !</h2>
        <div class="comments-box">
          <div class="comments-fb"></div>
          <div class="comments-content">
            <h3>Thomas Vallas</h3>
            <p>Great reception, atmosphere more than nice, we appreciate the investment and the pleasure of doing good work... and without secret, in these conditions the taff is clean, it sounds, we ask for more. We recommend, we thank, we're happy, we go back. Very satisfied!</p>
          </div>
          <div class="comments-content">
            <h3>Quentin Putaud</h3>
            <p>We were absolutely delighted to work with <strong>WarpCore Audio</strong>, the work is done, even well done, and with a smile and good mood as a bonus! Recording, mixing, mastering, I say yes, in Molière's language!</p>
          </div>
          <div class="comments-content">
            <h3>Paul Grossberger</h3>
            <p>Efficient and fast work, always ready to listen and give good advice. This is the first time we've worked with you and certainly not the last! Thank you so much!</p>
          </div>
          <a href="https://www.facebook.com/pg/WarpCoreAudio/reviews/?ref=page_internal" target="_blank" title="Avis Facebook">Give your opinion !</a>
        </div>
      </div>
    </main>

<?php
include "include/footer.php";
?>
