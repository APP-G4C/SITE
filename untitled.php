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
// Définie les variables vides
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
        $sql = "SELECT id_User, Mail, password FROM user WHERE Mail = :Mail";

        if($stmt = $pdo->prepare($sql)){
          echo $stmt
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            // On exécute la commande préparée
            if($stmt->execute()){
              echo "test1";
                // On vérifie que le Mail existe, puis on vérifie le mdp
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id_User"];
                        $Mail = $row["Mail"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Le mdp est bon, on lance une session
                            session_start();

                            // On stock les donnnées disant que la session est lancée pour un superglobal
                            $_SESSION["connecte"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["Mail"] = $Mail;

                            // Puis on redirige l'utilisateur a la page d'accueil
                            header("Location: ACCUEIL.php");
                        } else{
                            // Sinon on met un message d'erreur
                            $err_password = "Votre mot de passe n'est pas valide.";
                        }
                    }
                } else{
                    // Si le mail ne correspond à rien, on renvoie un message d'erreur
                    $username_err = "Cet adresse mail ne correspond à aucun compte.";
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