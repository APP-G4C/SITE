<?php
function id_user_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["id_User"]."<br>");
    }
  }
     function Date_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["Date_test"]."<br>");
    }
  }
      function horaire_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["heure_test"]."<br>");
    }
  }


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
            sleep(1);
            $test=true;
            $stmt->execute();

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

function SexeProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Sexe  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Sexe"]."</option>");
    }
  }
function NomProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Nom  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Nom"]."</option>");
    }
  }
  function PrenomProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Prenom  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Prenom"]."</option>");
    }
  }
   function DatenaissanceProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_de_naissance  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Date_de_naissance"]."</option>");
    }
  }
    function TelProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Tel  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Tel"]."</option>");
    }
  }
    function MailProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Mail  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["Mail"]."</option>");
    }
  }
      function PasswordProfil()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT password  FROM User WHERE id_User='".$_SESSION["id"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["password"]."</option>");
    }
  }
  function ModifSexeProfil(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Sexe='".$_POST["SexeProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    sleep(1);
    $req->execute();

  }
  function ModifDatenaissanceProfil(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Date_de_naissance='".$_POST["DatenaissanceProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    sleep(1);
    $req->execute();

  }
    function ModifTelProfil(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Tel='".$_POST["TelProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    sleep(1);
    $req->execute();

  }
     function ModifMailProfil(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Mail='".$_POST["MailProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    sleep(1);
    $req->execute();

  }
       function ModifPasswordProfil(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET password='".$_POST["PasswordProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    sleep(1);
    $req->execute();

  }