<?php



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PPT - Test</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/connexions.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>


  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
            <li id="link"><a id="b2"href="ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <li id="link"><a id="b2"href="ControllerLogin.php"><i class="far fa-id-badge"></i> Connexion</a></li>
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
          <input class="login" type="text" placeholder="Email" name="Mail">
        </div>
        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input class="login" type="password" placeholder="Mot de passe" name="password">
        </div>
        <input type="submit" class="btn" value="Se connecter">
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
    <br><br><br><br><br><br><br>

  </body>


  <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="/SITE/controller/ControllerCGU.php">CGU & CL</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerContact.php">Contact</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerFAQ.php">FAQ</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerAboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>



</html>
