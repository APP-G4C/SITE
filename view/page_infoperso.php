<?php


$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName="database_app";

try
{
 $bdd = "mysql: host" . $bdHost .";bdname=" . $dbName .;
 $pdo = new PDO($bdd,$dbUser,$dbName);
 echo "connexion succes";
}catch(Exception $e){
    echo "erreur de DB connexion:" .$e->getMessage();
    }


$status ="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $tel = $_POST["Numéro_de_téléphone"];
    $date = $_POST["Date_de_naissance"];
    $Mail = $_POST["Mail"];
    $password = $_POST["password"];


    if(empty($tel) || empty($date) || empty($email) || empty($password)){  
        $status = "tout les valeur sont vide.";
     }else{
       if(strlen(!filtre_var($email, FILTER_VALIDATE_EMAIL)){
       $status = "Veuillez entrer votre Mail correctement" ;
     }else{

     $sql = "UPDATE user set user(tel,Date_de_naissance,Mail,password)
     VALUES(:tel,:Date_de_naissance,:Mail,:password)";
     $stmt = $pdo-> prepare($sql);
     $stmt->execute(['Numéro de téléphone'=>$tel,'Date de Naissance'=>$date,
     'Mail'=>$email, 'Mot de passe'=>$password]);
     $status = "votre info est engistré";
     $tel = "";
     $date =  "";
     $email = "";
     $password = "";
     }
}

?>








