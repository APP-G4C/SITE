<?php
// Initialisation session
session_start();
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: ACCUEIL.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)
require_once "config.php";
// Définis les variables vides
$Mail = $password = "";
$err_Mail = $err_password = "";

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $Mail = trim($_POST["Mail"]);
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["password"]))){
        $err_password = "Veuillez entrer un mot de passe.";
    } else{
        $password = trim($_POST["password"]);
    }

    // On vérifie qu'il n'y a pas d'erreur
    if(empty($err_Mail) && empty($err_password)){
        // On prépare un statement select
        $sql = "SELECT id_User, Mail, password,type FROM user WHERE Mail = :Mail";

        if($stmt = $pdo->prepare($sql)){
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            // On exécute la commande préparée
            if($stmt->execute()){
                // On vérifie que le Mail existe, puis on vérifie le mdp
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id_User"];
                        $Mail = $row["Mail"];
                        $password1 = $row["password"];
                        $type=$row['type'];
                        if($password==$password1){
                            // Le mdp est bon, on lance une session
                            session_start();

                            // On stock les donnnées disant que la session est lancée pour un superglobal
                            $_SESSION["connecte"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["Mail"] = $Mail;
                            $_SESSION['type'] = $type;
                            // Puis on redirige l'utilisateur a la page d'accueil
                            header("Location: ACCUEIL.html");
                        } else{
                            // Sinon on met un message d'erreur
                            $err_password = "Votre mot de passe n'est pas valide.";
                        }
                    }
                } else{
                    // Si le mail ne correspond à rien, on renvoie un message d'erreur
                    $err_Mail = "Cet adresse mail ne correspond à aucun compte.";
                }
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
