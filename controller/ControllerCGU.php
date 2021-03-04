<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelCGU.php');
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil

// On charge le fichier config si pas déjà fait (charge databse)
$modifheader=  header_ada();
$CGL=$titre_CGL="";
$err_CGL=$err_titre_CGL="";
$test=false;
// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty(trim($_POST["CGL"])))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_CGL = "Le champs est vide";
    } else
    {
        $CGL = trim($_POST["CGL"]);
    }
    if(empty(trim($_POST["titre_CGL"])))
    {
        $err_titre_CGL = "Le champs est vide";
    }
    else
    {
        $titre_CGL = trim($_POST["titre_CGL"]);
    }
    if(empty($err_Question) && empty($err_Reponse))
    {
        fonction_add_cgl();
    }
    else
    {
        header("Location:ViewAdmin.php");
    }
}
unset($pdo);

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewCGU.php');