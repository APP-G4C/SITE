<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
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


            <li id="link"><a id="logoapp"href="page_accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="page_accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="page_faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="page_contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo header_ada()?>

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
        </br>
      </br>


    <?php
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=database_app;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM faq');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
        <p>
          <h3 class="question"><?php echo $donnees['Question']; ?></h3>
          <br>
          <h3 class="reponses"><?php echo $donnees['Reponse']; ?></h3>
          <br>
       </p>
    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
</div>
  </body>



 <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="page_cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="page_contact.php">Contact</a></li>
                <li id="link2"><a href="page_faq.php">Aide</a></li>
                <li id="link2"><a href="page_aboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>


</html>
