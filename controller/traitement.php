<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/page_contact.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_add.php');
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
      fonction_add_contact();
    
  }

?>


</body>
</html>
