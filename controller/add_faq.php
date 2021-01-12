<?php
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: page_administrateur.php");
    exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/controller/config.php";
$Question = $Reponse ="";
$err_Question = $err_Reponse= "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Question"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $Question = "Veuillez entrer votre adresse Question.";
    } else{
        $Question = trim($_POST["Question"]);
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["Reponse"]))){
        $err_Reponse = "Veuillez entrer un mot de passe.";
    } else{
        $Reponse = trim($_POST["Reponse"]);
    }


    // On vérifie qu'il n'y a pas d'erreur
        $sql="INSERT INTO `FAQ` (`Question`, `Reponse`) VALUES (':Question',':Reponse')";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Question", $param_Question, PDO::PARAM_STR);
            $stmt->bindParam(":Reponse", $param_Reponse, PDO::PARAM_STR);
        

            // On remplis les paramètres
            $param_Question = trim($_POST["Question"]);
            $param_Reponse = trim($_POST["Reponse"]);
           
            $test=true;
            $stmt->execute();


}unset($pdo);
 {
    # code...
}
