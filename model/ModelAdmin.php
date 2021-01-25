<?php

// FONCTION DE add_gestionnaire
function fonction_add_gestionnaire(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" INSERT INTO `User`(`Nom`, `Prenom`,`Mail`) VALUES (:Nom, :Prenom,:Mail)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);



            // On remplis les paramètres
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
            $param_Mail = trim($_POST["Mail"]);
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
        $sql=" INSERT INTO `CGL`(`titre_cgl`, `cgl`) VALUES (:titre,:CGL)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":titre", $param_titre, PDO::PARAM_STR);
            $stmt->bindParam(":CGL", $param_CGL, PDO::PARAM_STR);
            // On remplis les paramètres
            $param_titre = trim($_POST["titre_cgl"]);
            $param_CGL = trim($_POST["cgl"]);
            $test=true;
            $stmt->execute();
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


function afficher_gestionnaire(){
     if ($test=1 &&empty(!$Prenom)&&empty(!$Nom))
        {
          echo 'Felicitations vous avez ajouté "'.$Prenom.' '.$Nom.'" en tant que Gestionnaire !';
        }
      else
        {
          header("Location:ViewGestionnaire.php");
        }
}
