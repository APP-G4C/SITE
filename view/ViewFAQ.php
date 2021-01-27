<?php



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/faq.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>



  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="/SITE/controller/ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="/SITE/controller/ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
            <li id="link"><a id="b2"href="/SITE/controller/ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo $modifheader ?>
        </ul>
    </nav>
  </header>






  <body>
    <br>
    <div class="container" id="blocaide">
        <h1 class="top">Nous sommes là pour vous aider</h1>
        <br>
          <fieldset>

            <legend>Questions fréquentes </legend>
                <?php show_faq();?>
   


   

        </br>
      </br>
</div>
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
