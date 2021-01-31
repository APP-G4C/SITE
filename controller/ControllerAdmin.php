<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelAdmin.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');

$type=type_u();
switch ($type)
{
    case 1:
    header('Location:ControllerUser.php');
    break;
    case 2:
    header('Location:ControllerGestionnaire.php');
    break;
    case 4:
    header('Location:ControllerLogin.php');
    break;
}
if($type==3)
{
    $modifheader=  header_ada();
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewAdmin.php');
}
else
{
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}
$AjoutNomGestionnaire=$AjoutPrenomGestionnaire="";


// On charge le fichier config si pas déjà fait (charge databse)

$Nom =$Prenom =$Mail="";
$err_Nom=$err_Prenom =$err_Mail="";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["Nom"])&&isset($_POST["Prenom"])&&isset($_POST["Mail"]))
    {
        fonction_add_gestionnaire();
    }
}
unset($pdo);
{
}

$Question =$Reponse ="";
$err_Question=$err_Reponse = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["Question"])&&isset($_POST["Reponse"]))
    {
        fonction_add_faq();
    }
}
unset($pdo);
{
}

$Question =$Reponse ="";
$err_Question=$err_Reponse = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["TitreCGL"])&&isset($_POST["ContenuCGL"]))
    {
        fonction_add_cgl();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["SexeProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifSexeProfil();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["DatenaissanceProfil"]))
    {
        ModifDatenaissanceProfil();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["TelProfil"]))
    {
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
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["DeleteUser"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        DeleteUser();
    }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["PasswordProfil"]))
    {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifPasswordProfil();}
    }
unset($pdo);
{

}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["SexeProfilEdit"]))
    {
        ModifSexeProfilEdit();
    }
    if(isset($_POST["DatenaissanceProfilEdit"]))
    {
        ModifPasswordProfil();
    }
    if(isset($_POST["TelProfilEdit"]))
    {
        ModifPasswordProfil();
    }
    if(isset($_POST["MailProfilEdit"]))
    {
        ModifPasswordProfil();
    }
    if(isset($_POST["PasswordProfilEdit"]))
    {
        ModifPasswordProfil();
    }
    if(isset($_POST["SelectIdEdit"]))
    {
        ModifPasswordProfil();
    }
}
unset($pdo);
{ 
}
