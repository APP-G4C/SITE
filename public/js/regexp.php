<?php
// Initialisation session
session_start();
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil


// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/config.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/fn_session.php');
$Mail = $Nom =$Prenom ="";
$err_Prenom = $err_Nom =$err_Mail= "";

// Si l'utilisateur entre des données dans le form...
//useless
$err=array('err_nom' =>$Nom ,'err_prenom' =>$Prenom,'err_mail' =>$Mail);
foreach ($err as $i ) {
  if (empty($i))
   {
    echo $i . "est vide";
  }
  # code...
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $Mail = trim($_POST["Mail"]);
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["Prenom"]))){
        $err_password = "Veuillez entrer un Prénom.";
    } else{
        $password = trim($_POST["Prenom"]);
    }
    if(empty(trim($_POST["Nom"]))){
        $err_password = "Veuillez entrer un nom";
    } else{
        $password = trim($_POST["Nom"]);
    }

    // On vérifie qu'il n'y a pas d'erreur
    if(1==1){
      echo "bonjour";
        // On prépare un statement select
        $sql = "INSERT INTO `User` (`id_User`, `id_centre`, `Nom`, `Prenom`, `Sexe`, `Date_de_naissance`, `Mail`, `password`, `Type`) VALUES ('?', '?', '$Nom', '$Prenom', '?', '?', ':Mail', '?', '2')";

        if($stmt = $pdo->prepare($sql)){
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Prenom = trim($_POST["Prenom"]);
            $param_Nom = trim($_POST["Nom"]);
            $param_Mail = trim($_POST["Mail"]);
            // On exécute la commande préparée
            if($stmt->execute()){
              header("Location:pageadministrateur.php");
                // On vérifie que le Mail existe, puis on vérifie le mdp
                
            } else{
              echo "Il y a eu une erreur, veuillez réessayer plus tard.";
            }

            // On ferme le statement préparé
            unset($stmt);
        }
    }

    // On ferme la connection à la base de donnée
    unset($pdo);
}
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
    <link rel="stylesheet" href="/SITE/public/css/p_agu.css">
    <script src="regexp.js"></script>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
     <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    
</head>


  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo header_ada()?>

  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="my-5">Expressions Régulieres</h1>

          <form action="" method="POST" id="loginForm">
            <!-- Email -->
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" />
              <small></small>
            </div>

            <!-- password -->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" />
              <small></small>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary btn-block">
                Connexion
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="js/regexp.js"></script>
  </body>
</html>
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

