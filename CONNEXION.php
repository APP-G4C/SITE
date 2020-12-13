
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website | Connexion</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="normalize.css">
  </head>

  <body>

    <header role="header">
      <nav class="menu" role="navigation">
          <div class="inner">
            <div class="m-left">
              <a href="ACCUEIL.html" class="logo"><img src="logoapp.png"/> </a>
            </div>
            <div class="m-right">
              <a href="ACCUEIL.html" class="m-link"><i class="fas fa-home"></i> Accueil</a>
              <a href="AIDE.html" class="m-link"><i class="fas fa-info"></i> Aide</a>
              <a href="CONTACT.html" class="m-link"><i class="fas fa-envelope"></i> Contact</a>
              <a href="INSCRIPTION.html" class="m-link"><i class="far fa-id-badge"></i> Inscription</a>
            </div>
          </div>
      </nav>
    </header>


    <div class="login-box">
      <h1>Connexion</h1>
      <form class="" action="config_connexion.php" method="post">
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input class="login" type="text" placeholder="Email" name="Mail" value="<?php echo $Mail; ?>">
        </div>

        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input class="login" type="password" placeholder="Mot de passe" name="password" value="<?php echo $password ?>">
        </div>
        <input type="submit" class="btn" value="Se connecter">
      </form>
    </div>



    <footer>
      <nav class="footer" role="navigation">
          <div class="inner">
            <div class="f-left">
            </div>
            <div class="f-right">
              <a href="CGU.html" class="f-link">CGU & CL</a>
              <a href="CONTACT.html" class="f-link">Contact</a>
              <a href="AIDE.html" class="f-link">Aide</a>
              <a href="about_us.html" class="f-link">A propos</a>
            </div>
          </div>
      </nav>
    </footer>

  </body>
</html>
