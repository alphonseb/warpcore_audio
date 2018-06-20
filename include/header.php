<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="WarpCore Audio est une entreprise spécialisée dans la production musicale, pour les entreprises et les artistes.">
    <title>Warpcore Audio</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800" rel="stylesheet">
    <link href="styles/ytv.css" type="text/css" rel="stylesheet" />
    <style>
      ::selection{background: #2CDFFF; color: #FFF;}
      ::placeholder{
        color: #FFF;
        opacity: 0.5;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="logo">
        </div>
        <div class="header-mobile">
          <a href="index.php" title="Page d'accueil"><div class="logo-mobile"></div></a>
          <h2 class="title-mobile">WarpCore Audio</h2>
          <div class="hamburger-container">
            <div class="top-bun">
            </div>
            <div class="steak">
            </div>
            <div class="bottom-bun">
            </div>
          </div>
        </div>
        <nav>
           <ul class="menu">
             <li>
               <a href="index.php"> Accueil</a>
               <div class="underline <?php if($current == 'home'){echo 'link-selected';}?>"></div>
             </li>
             <li>
               <a href="professional.php"> Entreprises</a>
               <div class="underline <?php if($current == 'professional'){echo 'link-selected';}?>"></div>
             </li>
             <li> <a href="particular.php"> Artistes  </a><div class="underline <?php if($current == 'particular'){echo 'link-selected';}?>"></div></li>
             <li> <a href="about.php"> A propos </a><div class="underline <?php if($current == 'about'){echo 'link-selected';}?>"></div></li>
             <li> <a href="contact.php"> Contact </a><div class="underline <?php if($current == 'contact'){echo 'link-selected';}?>"></div></li>
           </ul>
           <ul class="language">
             <li><a href="#" class="lg-selected">FR</a></li>
             <li><a
               <?php
              switch ($current) {
                case 'home':
                  echo "href='en/index.php'";
                  break;
                case 'professional':
                  echo "href='en/professional.php'";
                  break;
                case 'particular':
                  echo "href='en/particular.php'";
                  break;
                case 'about':
                  echo "href='en/about.php'";
                  break;
                case 'contact':
                  echo "href='en/contact.php'";
                  break;
                case 'legal':
                  echo "href='en/legal.php'";
                  break;
                default:
                  echo "href='en/index.php'";
                  break;
              }
                ?>
               title="English version">EN</a></li>
           </ul>
        </nav>
      </div>
    </header>
