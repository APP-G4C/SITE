<?php 

   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelAdmin.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');


if($_SESSION['type']=3){
  $modifheader=  header_ada();
  
  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewAdmin.php');

}else{
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}


// On charge le fichier config si pas déjà fait (charge databse)
$id_prochainrdv_admin=id_prochainrdv_admin();
$Nom =$Prenom =$Mail="";
$err_Nom=$err_Prenom =$err_Mail="";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(htmlspecialchars(trim($_POST["Nom"])))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Nom = "Le champ est vide";
    } else{
        $Nom = htmlspecialchars(trim($_POST["Nom"]));
        echo $Nom;


    }

    // On vérifie qu'un mdp a été entré
    if(empty(htmlspecialchars(trim($_POST["Prenom"])))){
        $err_Prenom = "Veuillez entrer un mot de passe.";
    } else{
        $Prenom = htmlspecialchars(trim($_POST["Prenom"]));
        echo $Prenom;

    }
    if(empty(htmlspecialchars(trim($_POST["Mail"])))){
        $err_Mail = "Veuillez entrer un mot de passe.";
      }else{
        $Mail = htmlspecialchars(trim($_POST["Mail"]));
        echo $Mail;
      }
    if(empty($err_Nom) && empty($err_Prenom)&&empty($err_Mail))
    {
      fonction_add_gestionnaire();
      require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelAdmin.php');
    }else{
        header("Location:/SITE/view/ViewAdmin.php");
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
        require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelAdmin.php');
    }
    else{
        header("Location:/SITE/view/ViewAdmin.php");
    }

}unset($pdo);
 {
    # code...
}

// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil

// On charge le fichier config si pas déjà fait (charge databse)

