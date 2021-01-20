<?php
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: page_gestionnaire.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/controller/config.php";
$Mail = $Nom =$Prenom ="";
$err_Mail = $err_Nom=$err_Prenom = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(htmlspecialchars(trim($_POST["Mail"])))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $Mail = trim(htmlspecialchars($_POST["Mail"]));
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim(htmlspecialchars($_POST["Nom"])))){
        $err_Nom = "Veuillez entrer un mot de passe.";
    } else{
        $Nom = htmlspecialchars(trim($_POST["Nom"]));
    }
    if(empty(htmlspecialchars(trim($_POST["Prenom"])))){
        $err_Prenom = "Veuillez entrer un mot de passe.";
    } else{
        $Prenom = htmlspecialchars(trim($_POST["Prenom"]));
    }


// On vérifie qu'il n'y a pas d'erreur
    if(empty($err_Nom) && empty($err_Prenom)&&empty($err_Mail)){

     fonction_add_utilisateur();
    }
    else{
        header("Location:page_gestionnaire.php");
    }
  


}unset($pdo);


