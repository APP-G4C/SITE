
<?php


require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');

function charge_cgl(){
  echo '<h3><br><br>Article '.$_SESSION['id_cgl'].' : '.$_SESSION['titre_cgl'].' </h3><br>
  <div class="text">'.$_SESSION['cgl'].'</div>';
}

function parc_cgl(){
  $pdo=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $query = $pdo->query("SELECT * FROM CGL");
  while($donnees=$query->fetch()) {
    $_SESSION['id_cgl']=$donnees['id_cgl'];
    $_SESSION['titre_cgl']=$donnees['titre_cgl'];
    $_SESSION['cgl']=$donnees['cgl'];
    charge_cgl();
  }
}
 ?>
