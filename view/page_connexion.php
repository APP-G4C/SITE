<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/login.php');
/*session_start();*/
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/connexions.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>


  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="page_accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="page_accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="page_faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="page_contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <li id="link"><a id="b2"href="page_connexion.php"><i class="far fa-id-badge"></i> Connexion</a></li>



            <!--UTILISATEUR
            <li id='link'><a id="b6"href="#"> Ma Page</a>
                    <ul>
                        <li><a href="pageutilisateur.php"> Ma Page Utilisateur</li></a>
                        <li><a href="#">Déconnexion</li></a>
                    </ul>
                </li><!-->

             <!--GESTIONNAIRE
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.php"> Ma Page Gestionnaire</li></a>

                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->
            <!-- ADMIN
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.php"> Ma Page Administrateur</li></a>


                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->

        </ul>
    </nav>
  </header>


  <body>
<br><br>
    <div class="login-box">
      <h1>Connexion</h1>
      <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input class="login" type="text" placeholder="Email" name="Mail" value="<?php echo $Mail; ?>">
        </div>
        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input class="login" type="password" placeholder="Mot de passe" name="password" value="<?php echo $password ?>">
        </div>
        <input type="submit" class="btn" value="Se connecter">
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="error_block"><p>
          <?php if(!empty($err_Mail)){
            echo $err_Mail;
          }
            elseif (!empty($err_password)) {
              echo $err_password;
            }
           ?></p>
        </div>
      </form>
    </div>

  </body>


  <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="page_cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="page_contact.php">Contact</a></li>
                <li id="link2"><a href="page_faq.php">FAQ</a></li>
                <li id="link2"><a href="page_aboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>



</html>
