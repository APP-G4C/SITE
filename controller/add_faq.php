<?php
// APPEL DE LA FONCTION
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_add.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewAdmin.php');
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: ViewAdmin.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/controller/ControllerConfig.php";
$Question =$Reponse ="";
$err_Question=$err_Reponse = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(htmlspecialchars(trim($_POST["Question"])))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Question = "Le champ est vide";
    } else{
        $Question = htmlspecialchars(trim($_POST["Question"]));


    }

    // On vérifie qu'un mdp a été entré
    if(empty(htmlspecialchars(trim($_POST["Reponse"])))){
        $err_Reponse = "Veuillez entrer un mot de passe.";
    } else{
        $Reponse = htmlspecialchars(trim($_POST["Reponse"]));

    }


    // On vérifie qu'il n'y a pas d'erreur
    if(empty($err_Question) && empty($err_Reponse)){

        fonction_add_faq();
    }
    else{
        header("Location:ViewAdmin.php");
    }

}unset($pdo);
 {
    # code...
}
?>
