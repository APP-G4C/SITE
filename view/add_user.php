<?php
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: pageadministrateur.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/config.php";
$Mail = $Nom =$Prenom ="";
$err_Mail = $err_Nom=$err_Prenom = "";

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $Mail = trim($_POST["Mail"]);
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["Nom"]))){
        $err_Nom = "Veuillez entrer un mot de passe.";
    } else{
        $Nom = trim($_POST["Nom"]);
    }
    if(empty(trim($_POST["Prenom"]))){
        $err_Prenom = "Veuillez entrer un mot de passe.";
    } else{
        $Nom = trim($_POST["Prenom"]);
    }


    // On vérifie qu'il n'y a pas d'erreur
        $sql=" INSERT INTO User ( `Nom`, `Prenom`,`Mail`, `Type`) VALUES ( :Nom, :Prenom,:Mail, '2')";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
     




}unset($pdo);


echo $Nom;
