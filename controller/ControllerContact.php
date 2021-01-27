<?php


require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelContact.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');


  $serveur= "localhost";
  $login ="root";
  $pass="root";
$modifheader=  header_ada();



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      fonction_add_contact();

  }

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewContact.php');

?>
