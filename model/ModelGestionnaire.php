<?php
//chargement de fichier necessaire a PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
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
      $id_user_rdv="<option>".$donnees["id_User"]."</option>";
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

  function rd_password(){
    $caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len_c=strlen($caractere);
    $rdpassword = '';
    for ($i=0;$i<8;$i++){
      $rdpassword.=$caractere[random_int(0,$len_c-1)];
    }
    return $rdpassword;
  }

function Envoi_mail_new_user($user_mail,$nomprenom,$mdp){
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
    $mail->Body='Bienvenue sur PPT Test. Vos identifiants sont :'.$user_mail.', '.$mdp.'';
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->send();
  }

  function fonction_add_utilisateur(){
    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql=" INSERT INTO User (`Nom`, `Prenom`,`Mail`, `Type`,`Password`) VALUES (:Nom, :Prenom,:Mail, '1',:Password)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":Mail", $param_Mail, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            $stmt->bindParam(":Prenom", $param_Prenom, PDO::PARAM_STR);
            $stmt->bindParam(":Password", $param_password, PDO::PARAM_STR);
            // On remplis les paramètres
            $param_Mail = trim($_POST["Mail"]);
            $param_Nom = trim($_POST["Nom"]);
            $param_Prenom = trim($_POST["Prenom"]);
            $param_password1 = rd_password();
            $param_password = password_hash($param_password1, PASSWORD_DEFAULT);
            sleep(1);
            $test=true;
            $stmt->execute();
            Envoi_mail_new_user($param_Mail,$param_Nom.' '.$param_Prenom,$param_password1);

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
  function id__utilisateur_rdv()
  {

    $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql="SELECT DISTINCT id_User FROM User WHERE Type=1";
    $reponse=$pdo->query($sql);
    while ($donnees=$reponse->fetch())
    {
      print_r("<option>".$donnees["id_User"]."</option><br>");
    }
  }

function add_rdv(){
      $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $sql=" INSERT INTO test (`Date_test`,`heure_test`,`id_User`,`Nom`) VALUES ( :Date_test,:heure_test,:id_User,:Nom)";
        $stmt = $pdo->prepare($sql);
            // On attache les variables au statement comme paramètres
            $stmt->bindParam(":id_User", $param_id_User, PDO::PARAM_STR);
            $stmt->bindParam(":Date_test", $param_Date_test, PDO::PARAM_STR);
            $stmt->bindParam(":heure_test", $param_heure_test, PDO::PARAM_STR);
            $stmt->bindParam(":Nom", $param_Nom, PDO::PARAM_STR);
            // On remplis les paramètres
            $param_id_User = trim($_POST["id_user_rdv"]);
            $param_Date_test = trim($_POST["date_rdv_utilisateur"]);
            $param_heure_test = trim($_POST["horaire_rdv_utilisateur"]);
            $param_Nom= trim($_POST["test_utilisateur"]);
            sleep(1);
            $test=true;
            $stmt->execute();

}

