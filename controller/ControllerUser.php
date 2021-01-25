   <?php
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelUser.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerConfig.php');


if($_SESSION['type']=1)
{
  $user_id_test=user_id_test();
  $modifheader=  header_ada();
  $user_trame=user_trame();
  $user_Heure= user_Heure();
  $user_Date_prochainrdv=user_Date_prochainrdv();
  $user_horaire_prochainrdv=user_horaire_prochainrdv();
  require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewUser.php');
}
else
{
    require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerLogin.php');
}





