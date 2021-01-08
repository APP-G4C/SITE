
<?php
// Initialisation session
session_start();
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: page_accueil.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)
require_once $_SERVER['DOCUMENT_ROOT']."/SITE/config.php";
// Définis les variables vides
$Nom = $Mail = $password = $confirmpassword = "";
$err_Mail = $err_password = $err_confirmpassword = "";

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $sql = "SELECT Mail from User WHERE Mail=:Mail"; //On vérifie qu'il n'existe pas déjà un compte avec ce mail
        if( $stmt=$pdo->prepare($sql)){
          //On attache des variables aux paramètres de la query
          $stmt->BindParam(":Mail",$param_Mail, PDO::PARAM_STR);
          $param_Mail=trim($_POST["Mail"]);
          //On execute le statement
          if($stmt->execute()){
            if($stmt->rowCount()==1){
              $Mail_err="Cette adresse mail est déjà utilisé pour un autre compte";
            }else{
              $Mail=trim($_POST["Mail"]);
            }
          }else{
            echo "Il y a eu une erreur, veuillez réessayer plus tard";
          }
          unset($stmt);//On a plus besoin du stmt, on le met a la poubelle
        }
    }
    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["password"]))){
        $err_password = "Veuillez entrer un mot de passe.";
    }elseif (strlen(trim($_POST["password"]))<6) {
      $err_password = "Veuillez renforcer la sécurité de votre mot de passe";
    }else{
        $password = trim($_POST["password"]);
    }
    // On vérifie que la confirmation du mdp a été entré
    if(empty(trim($_POST["confirm_password"]))){
      $err_confirmpassword = "Veuillez confirmer votre mot de passe";
    }
    else{
      $confirmpassword = trim($_POST["confirm_password"]);
      if($confirmpassword!=$password){
        $err_confirmpassword = "Le mot de passe ne correspond pas";
      }
    }
    // On vérifie qu'il n'y a pas d'erreur
    if(empty($err_Mail) && empty($err_password) && empty($err_confirmpassword)){
        // On prépare un statement select
        $sql = "INSERT INTO User (Mail, password) VALUES (:Mail, :password)";

        if($stmt = $pdo->prepare($sql)){
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            $param_password = trim($_POST["password"]);
            // On exécute la commande préparée
            if($stmt->execute()){
                // On redirige l'utilisateur vers la page de connexion
                header("Location:connexion.php");
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
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website | Connexion</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/connexion.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  </head>

    <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <li id="link"><a id="b2"href="connexion.php"><i class="far fa-id-badge"></i> Connexion</a></li>



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

    <div class="login-box">
      <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Inscription</h1>

        <div class="textbox">
          <i class="fas fa-user"></i>
          <input class="register" type="text" placeholder="Nom" name="Nom" value="<?php echo $Nom ?>">
        </div>

        <div class="textbox">
          <i class="fas fa-envelope"></i>
          <input class="register" type="text" placeholder="Email" name="Mail" value="<?php echo $Mail ?>">
        </div>

        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input class="register" type="password" placeholder="Mot de passe" name="password" value="<?php echo $password ?>">
        </div>

        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input class="register" type="password" placeholder="Confirmation Mot de passe" name="confirm_password" value="<?php echo $confirmpassword ?>">
        </div>

        <input type="submit" class="btn" value="S'enregistrer">
      </form>

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