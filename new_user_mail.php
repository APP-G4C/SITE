<?php
ini_set("SMTP", "smtp.sfr.fr");
ini_set("sendmail_from","tmtlamare@gmail.com");
if (mail("tmtlamare@gmail.com","test","test")){
echo "test réussi";
}
else {
  echo "test raté";
}?>
