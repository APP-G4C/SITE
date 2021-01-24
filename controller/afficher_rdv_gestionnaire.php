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

    function user_Date_prochainrdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Date_test,heure_test FROM test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["Date_test"]."<br>");
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
  ?>