<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/fn_session.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/accueil.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>


  <header id="menu1">
    <nav class="menu">
        <ul id="menu">
            <li id="link"><a id="logoapp" href="#"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="#"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2" href="faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2" href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo header_ada()?>
        </ul>
    </nav>
  </header>



    <body>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <div class="carousel-caption">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s">Nous sommes <span>Créatifs</span></h2>
                    <h3 class="animated bounceInLeft" style="animation-delay: 2s">Psychotechnical Agency</h3>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="aboutus.php">A Propos</a></p>
                  </div>
              </div>
          </div>
      </div>

    </body>





    <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="contact.php">Contact</a></li>
                <li id="link2"><a href="faq.php">FAQ</a></li>
                <li id="link2"><a href="aboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>

</html>
