
<?php


require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');

function charge_cgl(){
  echo '<h3><br><br>Article'.$_SESSION['id_cgl'].':'.$_SESSION['titre_cgl'].'</h3><br>
  <div class="text">'.$_SESSION['cgl'].'</div>';
}

function parc_cgl(){
  for ($i=0; $i < 2; $i++) {
    $_SESSION['id_cgl']=1;
    $_SESSION['titre_cgl']='test';
    $_SESSION['cgl']='test';
    charge_cgl();
  }
}
 ?>
