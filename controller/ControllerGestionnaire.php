   <?php
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelGestionnaire.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');
$Mail = $Nom =$Prenom ="";
$err_Mail = $err_Nom=$err_Prenom = "";
$test=false;

if($_SESSION['type']=2){
  $modifheader=  header_ada();
  
  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewGestionnaire.php');

}else{
     require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}




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


}unset($pdo);


   
