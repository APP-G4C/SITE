<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_login.php');
function fonction_login(){
$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
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
                              header("Location:ViewUser.php");
                            }
                            if($type==2){
                              header("Location:ViewGestionnaire.php");
                            }
                            if($type==3){
                              header("Location:ViewAdmin.php");
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
        ?>