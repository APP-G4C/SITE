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

  $nom=$prenom=$email=$telephone=$message="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    try{
      $connexion = new PDO("mysql:host=$serveur;dbname=database_app", $login, $pass);
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

        $nom=test_input($_POST['lname']);
        $prenom = $_POST['fname'];
        $email= $_POST['email'];
        $telephone= $_POST['tel'];
        $message= $_POST['message'];


        function test_input($data) {
      $data = htmlspecialchars($data);
      return $data;
    }
      $requete->execute();
      }
      catch(PDOException $e){
        echo 'echec de la co : ' .$e->getMessage();
      }
    }

  /*  function test_input($donnee){
      $donnee=htmlspecialchars($donnee);
      $donnee=strip_tags($donnee);
      $donnee=trim($donnee);
      $donne=stripslashes($donnee);

      return $donnee;
    }*/

  /*  $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }*/





/*Welcome  <?php echo htmlspecialchars($_POST["fname"]); ?>  <?php echo htmlspecialchars($_POST["lname"]);?> , votre adresse mail est <?php echo $_POST["email"]; ?>  <br>
Votre question est : <br>
<?php echo $_POST["message"]; */
?>
</form>

</body>
</html>
