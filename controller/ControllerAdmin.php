<?php
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelAdmin.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');

$type=type_u();
switch ($type) {
  case 1:
    header('Location:ControllerUser.php')
    break;
  case 2:
    header('Location:ControllerGestionnaire.php')
    break;
  case 4:
    header('Location:ControllerLogin.php')
    break;
}
if($_SESSION['type']==3){
  $modifheader=  header_ada();

  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewAdmin.php');

}else{
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}
$AjoutNomGestionnaire=$AjoutPrenomGestionnaire="";


// On charge le fichier config si pas déjà fait (charge databse)

$Nom =$Prenom =$Mail="";
$err_Nom=$err_Prenom =$err_Mail="";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["Nom"])&&isset($_POST["Prenom"])&&isset($_POST["Mail"])){
        fonction_add_gestionnaire();
            # code...
        }
    // On vérifie qu'il n'y a pas d'erreur


}unset($pdo);
 {
    # code...
}
$Question =$Reponse ="";
$err_Question=$err_Reponse = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["Question"])&&isset($_POST["Reponse"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        fonction_add_faq();}

}unset($pdo);
 {
    # code...
}

$Question =$Reponse ="";
$err_Question=$err_Reponse = "";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["TitreCGL"])&&isset($_POST["ContenuCGL"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        fonction_add_cgl();}

}unset($pdo);
 {
    # code...
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["SexeProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifSexeProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["DatenaissanceProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifDatenaissanceProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["TelProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifTelProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["MailProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifMailProfil();
}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["PasswordProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifPasswordProfil();}

}unset($pdo);
 {
    # code...
}
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil

// On charge le fichier config si pas déjà fait (charge databse)
