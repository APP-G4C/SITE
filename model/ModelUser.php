   <?php
   function user_id_test()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
         return $donnees["id_test"];
    }
  }
      function user_trame()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    $donnees=$reponse->fetch();
    return $donnees["trame"]."<br>";
  }
   function user_Heure()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      return $donnees["Heure"]."<br>";
    }
  }
function tram1()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User=159";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $tram1= "'".$donnees['trame']."',";
    return $tram1;
  }
}
function Heure1()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User=159";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $Heure1= "'".$donnees['Heure']."',";
    return $Heure1;
  }
} 

function tram2()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User=159";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $tram2= "'".$donnees['trame']."',";
    return $tram2;
  }
}
function Heure2()
{
  $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User=159";
  $reponse = $bdd->query($sql);
  while ($donnees=$reponse->fetch())
  {
    $Heure2= "'".$donnees['Heure']."',";
    return $Heure2;
  }
} 

    function user_Date_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_test,heure_test FROM test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      return $donnees["Date_test"]."<br>";
    }
  }
    function user_horaire_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_test,heure_test FROM test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      return $donnees["heure_test"]."<br>";
    }
  }
  ?>