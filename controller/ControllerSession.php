<?php
session_start();
function est_co (){
  if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
    return true;
  }
  else{
    return false;
  }
}
function type_u(){
  if (isset($_SESSION['type'])){
    return $_SESSION['type'];
  }
  else{return 4;}
}


function header_ada(){
$type=type_u();
if(!est_co()){
  return '<li id="link">
          <a id="b2"href="/SITE/controller/ControllerLogin.php">
          <i class="far fa-id-badge"></i> Connexion</a>
        </li>';

}else{
  if($type==1){
    return '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
              <ul>
                  <li><a href="ControllerUser.php"> Ma Page Utilisateur</li></a>
                  <li><a href="/SITE/controller/ControllerLogout.php">Déconnexion</li></a>
              </ul>
            </li';
        }
  if($type==2){
    return '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
                <li><a href="/SITE/controller/ControllerGestionnaire.php"> Ma Page Gestionnaire</li></a>
                <li><a href="/SITE/controller/ControllerLogout.php">Déconnexion</li></a>
             </ul>
          </li>';
        }
  if ($type==3){
    return '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
               <li><a href="/SITE/controller/ControllerAdmin.php"> Ma Page Administrateur</li></a>
               <li><a href="/SITE/controller/ControllerLogout.php">Déconnexion</li></a>
             </ul>
          </li>';
          }
}}
function Valid_ajout_gest(){
  $Nom_Prenom_gest=$_SESSION["Nom_Prenom_gest"];
  if (!empty($Nom_Prenom_gest)){
      echo 'Felicitations vous avez ajouté "'.$_SESSION["Nom_Prenom_gest"].'" en tant que Gestionnaire !';
    }
}
