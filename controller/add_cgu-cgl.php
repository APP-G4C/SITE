<?php
// APPEL DE LA FONCTION
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_add.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/page_administrateur.php');
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: page_administrateur.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/controller/config.php";
$CGL=$titre_CGL="";
$err_CGL=$err_titre_CGL="";

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["CGL"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_CGL = "Le champs est vide";
    } else{
        $CGL = trim($_POST["CGL"]);

    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["titre_CGL"]))){
        $err_titre_CGL = "Le champs est vide";
    } else{
        $titre_CGL = trim($_POST["titre_CGL"]);

    }


    // On vérifie qu'il n'y a pas d'erreur
    if(empty($err_Question) && empty($err_Reponse)){

        fonction_add_cgl();
    }
    else{
        header("Location:page_administrateur.php");
    }

}unset($pdo);
?>
