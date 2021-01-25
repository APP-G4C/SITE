<?php
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

    # code...
?>