<?php
// APPEL DE LA FONCTION
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_add.php');

function recherche_id_user()
{
	if (htmlspecialchars(isset($_GET['q']))) {
		$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
		if(htmlspecialchars(isset($_GET['q'])) AND !empty(htmlspecialchars($_GET['q']))) 
		{
			$q = htmlspecialchars($_GET['q']);
						$recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
		}
		while($a = $recherche->fetch()) 
		{
			$reponse= "<br>".$a['id_User']; 
			echo"<br>".$reponse;
		}
	}
}

function recherche_nom_user()
{
	if (htmlspecialchars(isset($_GET['q'])))
	{
		$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
		if(htmlspecialchars(isset($_GET['q']) AND !empty(htmlspecialchars($_GET['q'])))) 
		{
			$q = htmlspecialchars($_GET['q']);
						$recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
			while($a = $recherche->fetch()) 
			{ 
				$reponse= "<br>".$a['Nom']; 
				echo "<br>".$reponse;
			}
		}
	}
}

function recherche_date_de_naissance_user()
{
	if (isset($_GET['q'])) {
		$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
		if(htmlspecialchars(isset($_GET['q'])) AND !empty(htmlspecialchars($_GET['q']))) 
		{
			$q = htmlspecialchars($_GET['q']);
						$recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
			while($a = $recherche->fetch()) 
			{ 
				$reponse= "<br>".$a['Date_de_naissance']; 
				echo "<br>".$reponse;
			}
		}
	}
}

function  recherche_sexe_user()
{
	if (htmlspecialchars(isset($_GET['q']))) {
		# code...
		$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
		if(htmlspecialchars(isset($_GET['q'])) AND !empty(htmlspecialchars($_GET['q']))) 
		{
			$q = htmlspecialchars($_GET['q']);
						$recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
		}
		while($a = $recherche->fetch()) 
		{ 
			$reponse= "<br>".$a['Sexe']; 
			echo "<br>".$reponse;
		}
	}
}


 function recherche_mail_user()
 {
 	if (isset($_GET['q'])) {
 		$pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
 		if(isset($_GET['q']) AND !empty($_GET['q'])) 
 		{
 			$q = htmlspecialchars($_GET['q']);
 						$recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
 		}
 		while($a = $recherche->fetch())
 		{ 
 			$reponse= "<br>".$a['Mail']; 
 			echo "<br>".$reponse;
 		}
 	}
 }

function recherche_prenom_user()
 {
  if (isset($_GET['q'])) {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE Type=1 AND (id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%")');
    }
    while($a = $recherche->fetch())
    { 
      $reponse= "<br>".$a['Mail']; 
      echo "<br>".$reponse;
    }
  }
 }
function recherche_id()
{
  if (isset($_GET['q'])) {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
    }
    while($a = $recherche->fetch()) 
    {
      $reponse= "<br>".$a['id_User']; 
      echo"<br>".$reponse;
    }
  }
}

function recherche_nom()
{
  if (isset($_GET['q']))
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
      while($a = $recherche->fetch()) 
      { 
        $reponse= "<br>".$a['Nom']; 
        echo "<br>".$reponse;
      }
    }
  }
}
function recherche_prenom()
{
  if (isset($_GET['q']))
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
      while($a = $recherche->fetch()) 
      { 
        $reponse= "<br>".$a['Prenom']; 
        echo "<br>".$reponse;
      }
    }
  }
}

function recherche_date_de_naissance()
{
  if (isset($_GET['q'])) {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
      while($a = $recherche->fetch()) 
      { 
        $reponse= "<br>".$a['Date_de_naissance']; 
        echo "<br>".$reponse;
      }
    }
  }
}

function  recherche_sexe()
{
  if (isset($_GET['q'])) {
    # code...
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
    }
    while($a = $recherche->fetch()) 
    { 
      $reponse= "<br>".$a['Sexe']; 
      echo "<br>".$reponse;
    }
  }
}
function  recherche_mail()
{
  if (isset($_GET['q'])) {
    # code...
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    if(isset($_GET['q']) AND !empty($_GET['q'])) 
    {
      $q = htmlspecialchars($_GET['q']);
      $recherche = $pdo->query('SELECT id_User,Nom,Sexe,Prenom,Mail,Date_de_naissance FROM User WHERE id_User LIKE "%'.$q.'%" OR Nom LIKE"%'.$q.'%"OR Prenom LIKE"%'.$q.'%" OR Date_de_naissance LIKE"%'.$q.'%" OR Sexe LIKE"%'.$q.'%" OR Mail LIKE"%'.$q.'%"');
    }
    while($a = $recherche->fetch()) 
    { 
      $reponse= "<br>".$a['Mail']; 
      echo "<br>".$reponse;
    }
  }
}

















  function id_user_rdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_User FROM User WHERE Type=1";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      $id_user_rdv="<option>".$donnees["id_User"]."</option";
      echo $id_user_rdv;
    }
  }
    function nom_user_rdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Prenom FROM User WHERE Type=1";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      $prenom_gestionnaire="<option>".$donnees["Prenom"]."</option";
      echo $prenom_gestionnaire;
    }
  }














function id__gestionnaire_rdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_User FROM User WHERE Type=2";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      $id__gestionnaire_rdv="<option>".$donnees["id_User"]."</option>";
      echo $id__gestionnaire_rdv;
    }
  }

   function id_prochainrdv_admin()
   {
     $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
     $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_POST["ok"]."'";
     $reponse=$pdo->query($sql);
     while ($donnees=$reponse->fetch())
     {
        print_r($donnees["id_User"]."<br>");
      }
    }

    function Date_prochainrdv_admin()
    {
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$id_gestio."'";
        $reponse=$pdo->query($sql);
        while ($donnees=$reponse->fetch())
        {
          print_r($donnees["Date_test"]."<br>");
        }
      }

  

    function horaire_prochainrdv_admin()
    {
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$id_gestio."'";
        $reponse=$pdo->query($sql);
        while ($donnees=$reponse->fetch())
        {
          print_r($donnees["heure_test"]."<br>");
        }
      }
    











function centre_gestionnaire_rdv()
{
  $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql="SELECT DISTINCT centre.adresse FROM centre INNER JOIN gestionnaire_centre INNER JOIN test ON centre.id_centre=gestionnaire_centre.id_centre WHERE test.id_RH='".$_SESSION['id']."'";
  $reponse=$pdo->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $centre_gestionnaire=$donnees["adresse"];
    echo $centre_gestionnaire;
  }
}

// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
header("Location: ViewAdmin.php");
exit;
}

// On charge le fichier config si pas déjà fait (charge databse)


$nom_utilisateur = $prenom_utilisateur =$date_rdv_utilisateur =$horaire_rdv_utilisateur=$test_utilisateur="";
$err_nom_utilisateur = $err_prenom_utilisateur=$err_date_rdv_utilisateur =$err_horaire_rdv_utilisateur= $err_test_utilisateur="";
$test=false;

// Si l'utilisateur entre des données dans le form...
if($_SERVER["REQUEST_METHOD"] == "POST"){
// On vérifie qu'un email a été entré

    // On vérifie qu'un email a été entré
  
    // On vérifie qu'un mdp a été entré
    if(empty(htmlspecialchars(trim($_POST["id_user_rdv"])))){
        $err_id_user_rdv = "Veuillez entrer un mot de passe.";
    } else{
        $id_user_rdv = htmlspecialchars(trim($_POST["id_user_rdv"]));
        
    }
    if(empty(htmlspecialchars(trim($_POST["date_rdv_utilisateur"])))){
        $err_date_rdv_utilisateur = "Veuillez entrer un mot de passe.";
    } else{
        $date_rdv_utilisateur = htmlspecialchars(trim($_POST["date_rdv_utilisateur"]));
        
    }
  
    
    if(empty(htmlspecialchars(trim($_POST["horaire_rdv_utilisateur"])))){
        $err_horaire_rdv_utilisateur = "Veuillez entrer un mot de passe.";
    } else{
        $horaire_rdv_utilisateur = htmlspecialchars(trim($_POST["horaire_rdv_utilisateur"]));
        
    }
    if(empty(htmlspecialchars(trim($_POST["test_utilisateur"])))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_test_utilisateur = "Veuillez entrer votre adresse Mail.";
    } else{
        $test_utilisateur = htmlspecialchars(trim($_POST["test_utilisateur"]));
        
    }

    // On vérifie qu'il n'y a pas d'erreur
    if(empty($err_nom_utilisateur) && empty($err_prenom_utilisateur)&& empty($err_centre_utilisateur)&&empty($err_horaire_rdv_utilisateur)&&empty($err_date_rdv_utilisateur)&&empty($err_test_utilisateur)){

     $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
      $sql=" INSERT INTO User (`Nom`, `Prenom`,`Mail`, `Type`) VALUES (:Nom, :Prenom,:Mail, '1')";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Date_test", $param_date_test, PDO::PARAM_STR);
            $stmt->bindParam(":heure_test", $param_heure_test_rdv, PDO::PARAM_STR);
            $stmt->bindParam(":id_User", $param_id_user_rdv, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
        
            
    
                    // On remplis les paramètres
            $param_date_test = trim($_POST["date_rdv_utilisateur"]);
            $param_heure_test_rdv = trim($_POST["horaire_rdv_utilisateur"]);
            $param_id_user_rdv = trim($_POST["id_user_rdv"]);
            $param_Nom = trim($_POST["test_utilisateur"]);
            sleep(1);
            $test=true;
            $stmt->execute();
    }
    else{
        header("Location:ViewAdmin.php");
    }

}unset($pdo);
# code...
?>