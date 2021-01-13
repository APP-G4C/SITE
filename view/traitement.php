<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/page_contact.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <title> php et mysql</title>
  <meta charset = "utf-8"/>
  </head>
  <body>



  <?php

  $serveur= "localhost";
  $login ="root";
  $pass="root";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try{
      $connexion = new PDO("mysql:host=$serveur;dbname=database_app", $login, $pass); //connection a la bdd
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      $requete = $connexion->prepare(
        "INSERT INTO contact(nom,prenom,email,telephone,message)
                    VALUES(:nom,:prenom,:email,:telephone,:message)"
        );


        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom',$prenom);
        $requete->bindParam(':email',$email);
        $requete->bindParam(':telephone',$telephone);
        $requete->bindParam(':message',$message);


        $nom=$_POST['lname'];
        $prenom =$_POST['fname'];
        $email= $_POST['email'];
        $telephone=$_POST['tel'];
        $message= $_POST['message'];


      $requete->execute();

    }


    catch(PDOException $e){
      echo 'echec de la co : ' .$e->getMessage();
    }

  }

?>


</body>
</html>
