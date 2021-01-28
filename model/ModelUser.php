   <?php
   function user_id_test()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
         print_r($donnees["id_test"]."<br>");
    }
  }
      function user_trame()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT * FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ( $donnees=$reponse->fetch()) {
    print_r($donnees["trame"]."<br>");
  }
}
   function user_Heure()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r( $donnees["Heure"]."<br>");
    }
  }
function tram1()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User='".$_SESSION['id']."'";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $tram1= "'".$donnees['trame']."',";
    print_r( $tram1);
  }
}
function Heure1()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User='".$_SESSION['id']."'";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $Heure1= "'".$donnees['Heure']."',";
    print_r($Heure1);
  }
}

function tram2()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User='".$_SESSION["id"]."'";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $tram2= "'".$donnees['trame']."',";
    print_r($tram2);
  }
}
function Heure2()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User='".$_SESSION['id']."'";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $Heure2= "'".$donnees['Heure']."',";
     print_r($Heure2);
  }
}

    function user_Date_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_test,heure_test FROM test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      $resultats=$donnees["Date_test"]."<br>";
      print_r($resultats);

    }
  }
    function user_horaire_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_test,heure_test FROM test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["heure_test"]."<br>");
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
    if (isset($_POST["SexeProfil"]))
    {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Sexe='".$_POST["SexeProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}

  }
  function ModifDatenaissanceProfil(){
    if (isset($_POST["DatenaissanceProfil"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Date_de_naissance='".$_POST["DatenaissanceProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}

  }
    function ModifTelProfil(){
      if (isset($_POST["TelProfil"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Tel='".$_POST["TelProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}

  }
     function ModifMailProfil(){
      if (isset($_POST["MailProfil"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $req=$pdo->prepare("UPDATE User SET Mail='".$_POST["MailProfil"]."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}
  }


       function ModifPasswordProfil(){
        if (isset($_POST["PasswordProfil"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $password = password_hash($_POST["PasswordProfil"], PASSWORD_DEFAULT);
    $req=$pdo->prepare("UPDATE User SET password='".$password."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}

  }
  ?>
