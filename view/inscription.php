<?php
// Initialisation session
session_start();
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: accueil.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)
require_once $_SERVER['DOCUMENT_ROOT']."\SITE\config.php";
// Définis les variables vides
$Mail = $password = $confirmpassword = "";
$err_Mail = $err_password = $err_confirmpassword = "";

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $sql = "SELECT Mail from User WHERE Mail=:Mail";
        if( $stmt=$pdo->prepare($sql)){
          //On attache des variables aux paramètres de la query
          $stmt->BindParam(":Mail",$param_Mail, PDO::PARAM_STR);
          $param_Mail=trim($_POST["Mail"]);
          //On execute le statement
          if($stmt->execute()){
            if($stmt->Row_count()==1){
              $Mail_err="Cette adresse mail est déjà utilisé pour un autre compte";
            }else{
              $Mail=trim($_POST["Mail"]);
            }
          }else{
            echo "Il y a eu une erreur, veuillez réessayer plus tard"
          }
          unset($stmt)//On a plus besoin du stmt, on le met a la poubelle
        }
    }
    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["password"]))){
        $err_password = "Veuillez entrer un mot de passe.";
    }elseif (strlen(trim($_POST["password"]))<6) {
      $err_password = "Veuillez renforcer la sécurité de votre mot de passe"
    }else{
        $password = trim($_POST["password"]);
    }
    // On vérifie que la confirmation du mdp a été entré
    if(empty(trim($_POST["confirm_password"]))){
      $err_confirmpassword = "Veuillez confirmer votre mot de passe"
    }
    else{
      $confirmpassword = trim($_POST["confirm_password"])
      if($confirmpassword!=$password){
        $err_confirmpassword = "Le mot de passe ne correspond pas"
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
            $param_password = trim($_POST["password"])
            // On exécute la commande préparée
            if($stmt->execute()){
                // On redirige l'utilisateur vers la page de connexion
                header("Location:connexion.php")
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
