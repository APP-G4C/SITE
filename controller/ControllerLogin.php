<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelLogin.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewLogin.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil


// On charge le fichier config si pas déjà fait (charge databse)


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
                            $_COOKIE["id"]=$id;
                            $_COOKIE["Mail"]=$Mail;
                            // Puis on redirige l'utilisateur a la page d'accueil
                            if($type==1){
                              header("Location:ControllerUser.php");
                            }
                            if($type==2){
                              header("Location:ControllerGestionnaire.php");
                            }
                            if($type==3){
                              header("Location:ControllerAdmin.php");
                            }
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
