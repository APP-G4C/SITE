<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include 'D:\MAMP\htdocs\vendor\autoload.php';

function rd_password(){
  $caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $len_c=strlen($caractere);
  $rdpassword = '';
  for ($i=0;$i<8;$i++){
    $rdpassword.=$caractere[random_int(0,$len_c-1)];
  }
  return $rdpassword;
}

function Envoi_mail_new_gest($user_mail,$nomprenom,$mdp){
  include 'D:\MAMP\htdocs\vendor\autoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();   //Tell PHPMailer to use SMTP
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
    $mail->Host = 'smtp.gmail.com';   //Set the hostname of the mail server
    $mail->Port = 587;    //Set the SMTP port number - 587 for authenticated TLS, 465 for SSL
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPAuth = true;  //Whether to use SMTP authentication
    $mail->Username = 'G4CAPP@gmail.com';   //Username to use for SMTP authentication
    $mail->Password = 'G4CAPPcreatif';   //Password to use for SMTP authentication
    $mail->setFrom('G4CAPP@gmail.com', 'G4C');  //Set who the message is to be sent from
    //Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');

    $mail->addAddress($user_mail, $nomprenom);  //Set who the message is to be sent to
    $mail->Subject = 'Creation de votre compte PPT Test';   //Set the subject line
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    $mail->Body= 'Bonjour '.$nomprenom.',
Bienvenur sur PPT Test !
Veuillez trouver ci-joint les informations nécessaires pour vous connecter sur le site web de PPT Test
Attention, pour votre sécurité, veuillez changer vos identifiants une fois connecté.
-	Identifiant : '.$user_mail.'
-	Mot de passe : '.$mdp.'
http://localhost/SITE/controller/ControllerLogin.php
Bien cordialement,
L’Equipe PPT Test';
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->send();
  }

// FONCTION DE add_gestionnaire
function fonction_add_gestionnaire(){
  if (isset($_POST["Nom"]) &&isset($_POST["Prenom"])&&isset($_POST["Mail"])) {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        $sql=" INSERT INTO `User`(`Nom`, `Prenom`,`Mail`,`Type`,`Password`) VALUES (:Nom, :Prenom,2,:Mail,:Password)";

        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Password", $param_password, PDO::PARAM_STR);


            // On remplis les paramètres
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
            $param_Mail = trim($_POST["Mail"]);
            $param_password1 = rd_password();
            $param_password = password_hash($param_password1, PASSWORD_DEFAULT);
            $test=true;
            $stmt->execute();
            Envoi_mail_new_gest($param_Mail,$param_Nom.' '.$param_Prenom,$param_password1);
}}
function fonction_add_faq(){
  if (isset($_POST["Question"])&&isset($_POST["Reponse"])) {
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
}
function fonction_add_cgl(){
if (isset($_POST["TitreCGL"])&&isset($_POST["ContenuCGL"])) {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" INSERT INTO `CGU`(`titre`, `contenu`) VALUES (:TitreCGL, :ContenuCGL)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":TitreCGL", $param_Question, PDO::PARAM_STR);
            $stmt->bindParam(":ContenuCGL", $param_Reponse, PDO::PARAM_STR);


            // On remplis les paramètres
            $param_Question = trim($_POST["TitreCGL"]);
            $param_Reponse = trim($_POST["ContenuCGL"]);
            $test=true;
            $stmt->execute();
          }
}
function id__gestionnaire_rdv()
  {
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT DISTINCT id_User FROM User WHERE Type=2";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["id_User"]."</option>");
    }
  }
  function id_prochainrdv_admin()
   {
    if (isset($_POST["SelectId"])){
     $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
     $sql="SELECT DISTINCT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_POST["SelectId"]."'";
     $reponse=$pdo->query($sql);
      while ($donnees=$reponse->fetch())
    {
      print_r($donnees["id_User"]."<br>");
    }
  }
  }
function Date_prochainrdv_admin()
    {
      if (isset($_POST["SelectId"])){
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql="SELECT DISTINCT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_POST["SelectId"]."'";
        $reponse=$pdo->query($sql);
        while ($donnees=$reponse->fetch())
        {
          print_r($donnees["Date_test"]."<br>");
        }
      }
      }
      function horaire_prochainrdv_admin()
    {
      if (isset($_POST["SelectId"])){
        $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql="SELECT DISTINCT id_User,Date_test,heure_test FROM test WHERE Id_RH='".$_POST["SelectId"]."'";
        $reponse=$pdo->query($sql);
        while ($donnees=$reponse->fetch())
        {
          print_r($donnees["heure_test"]."<br>");
        }
      }
      }

function id__utilisateur_rdv()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT DISTINCT id_User FROM User WHERE Type=1";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["id_User"]."</option>");
    }
  }
  function NomMessage()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT nom FROM contact";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["nom"]."</option>");
    }
  }
    function PrenomMessage()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT prenom FROM contact";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["prenom"]."</option>");
    }
  }
    function MailMessage()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT email FROM contact";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["email"]."</option>");
    }
  }
     function TelMessage()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT telephone FROM contact";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["telephone"]."</option>");
    }
  }
       function MessageMessage()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT message FROM contact";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["message"]."</option>");
    }
  }

      function user_trame()
  {
    if (isset($_POST["NomUser"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT trame FROM valeur_test WHERE id_User='".$_POST["NomUser"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["trame"]."</br>");
    }
  }
  }
       function user_Heure()
  {
    if (isset($_POST["NomUser"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT Heure FROM valeur_test WHERE id_User='".$_POST["NomUser"]."'";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r($donnees["Heure"]."</br>");
    }}
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
    $req->execute();
  }

  }
       function ModifPasswordProfil(){
        if (isset($_POST["PasswordProfil"])){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $password = password_hash($_POST["PasswordProfil"], PASSWORD_DEFAULT);
    $req=$pdo->prepare("UPDATE User SET password='".$password."'WHERE User.id_User='".$_SESSION["id"]."'");
    $req->execute();}

  }

?>
