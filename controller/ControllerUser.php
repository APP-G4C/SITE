   <?php
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelUser.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');

$type=type_u();
switch ($type)
{
  case 3:
  header('Location:ControllerAdmin.php');
  break;
  case 2:
  header('Location:ControllerGestionnaire.php');
  break;
  case 4:
  header('Location:ControllerLogin.php');
  break;
}
if($type=1)
{
  $modifheader=  header_ada();
  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewUser.php');
}
else
{
  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
  if(isset($_POST["SexeProfil"]))
  {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifSexeProfil();}
  }
  unset($pdo);
  {
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
  if(isset($_POST["SexeProfil"]))
  {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifSexeProfil();
  }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
  if(isset($_POST["DatenaissanceProfil"]))
  { //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifDatenaissanceProfil();
  }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
  if(isset($_POST["TelProfil"]))
  {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifTelProfil();
  }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// On vérifie qu'un email a été entré
  if(isset($_POST["MailProfil"]))
  {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifMailProfil();
  }
}
unset($pdo);
{
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["PasswordProfil"]))
  {  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
    ModifPasswordProfil();
  }
}
unset($pdo);
{    # code...
}
