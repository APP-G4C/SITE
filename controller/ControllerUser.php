   <?php
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelUser.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');


if($_SESSION['type']=1)
{

  $modifheader=  header_ada();


  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewUser.php');
}
else
{
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["SexeProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifSexeProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["SexeProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifSexeProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["DatenaissanceProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifDatenaissanceProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["TelProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifTelProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["MailProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifMailProfil();}

}unset($pdo);
 {
    # code...
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(isset($_POST["PasswordProfil"])){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        ModifPasswordProfil();}

}unset($pdo);
 {
    # code...
}



