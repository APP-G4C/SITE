<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

   include ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelGestionnaire.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');
$Mail = $Nom =$Prenom ="";
$err_Mail = $err_Nom=$err_Prenom = "";
$test=false;

$type=type_u();
switch ($type)
{
    case 1:
    header('Location:ControllerUser.php');
    break;
    case 3:
    header('Location:ControllerAdmin.php');
    break;
    case 4:
    header('Location:ControllerLogin.php');
    break;
}

if($type=2)
{
    $modifheader=  header_ada();
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewGestionnaire.php');
}
else
{
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
    if(isset($_POST["Nom"])&&isset($_POST["Prenom"])&&isset($_POST["Mail"]))
    {
        fonction_add_utilisateur();
            # code...
    }
    // On vérifie qu'il n'y a pas d'erreur
}
unset($pdo);
{

}


// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["SexeProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifSexeProfil();}
    }
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["DatenaissanceProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifDatenaissanceProfil();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["TelProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifTelProfil();
    }
}
unset($pdo);
{   
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["MailProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifMailProfil();
    }
}
unset($pdo);
{    # code...
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["PasswordProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifPasswordProfil();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["id_user_rdv"])&&isset($_POST["date_rdv_utilisateur"])&&isset($_POST["horaire_rdv_utilisateur"])&&isset($_POST["test_utilisateur"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        add_rdv();
    }
}
unset($pdo);
{
}