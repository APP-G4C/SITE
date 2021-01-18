<?php

// FONCTION DE add_gestionnaire
function fonction_add_gestionnaire(){
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" INSERT INTO User (`Nom`, `Prenom`,`Mail`, `Type`) VALUES (:Nom, :Prenom,:Mail, '2')";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
            $test=true;
            $stmt->execute();
}
//FONCTION DE add-user
function fonction_add_utilisateur(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql=" INSERT INTO User (`Nom`, `Prenom`,`Mail`, `Type`) VALUES (:Nom, :Prenom,:Mail, '1')";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);

            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
            $test=true;
            $stmt->execute();
}

function fonction_add_faq(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" INSERT INTO `FAQ`(`Question`, `Reponse`) VALUES (:Question, :Reponse)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Question", $param_Question, PDO::PARAM_STR);
            $stmt->bindParam(":Reponse", $param_Reponse, PDO::PARAM_STR);


            // On remplis les paramètres
            $param_Question = trim($_POST["Question"]);
            $param_Reponse = trim($_POST["Reponse"]);
            $test=true;
            $stmt->execute();
}

function fonction_add_cgl(){
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" INSERT INTO `CGL`(`titre_CGL`, `CGL`) VALUES (:titre, :CGL)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":titre", $param_titre, PDO::PARAM_STR);
            $stmt->bindParam(":CGL", $param_CGL, PDO::PARAM_STR);


            // On remplis les paramètres
            $param_titre = trim($_POST["titre_CGL"]);
            $param_CGL = trim($_POST["CGL"]);
            $test=true;
            $stmt->execute();
}
?>
