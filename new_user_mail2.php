<?php
ini_set('SMTP','smtp.sfr.fr');
ini_set('smtp_port',465);

$to = "tmtlamare@gmail.com";
$objet = "test";
$msg = "test";
$headers = "From: G4CAPP@gmail.com"."\r\n".
          "MIME-Version: 1.0"."\r\n".
          "Content-type: text/html; charset=utf8";
if(mail($to,$objet,$msg,$headers)){
    echo "mail sent";
} else{
  echo "ca marche pas :'(";
}


?>
