   <?php
   session_start();
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
    $sql="SELECT id_test,trame,Heure FROM valeur_test WHERE id_User='".$_SESSION['id']."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
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
      print_r($donnees["Heure"]."<br>");
    }
  }

  ?>