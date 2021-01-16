<?php
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
if(!est_co()){
  echo '<li id="link">
          <a id="b2"href="page_connexion.php">
          <i class="far fa-id-badge"></i> Connexion</a>
        </li>';

}else{
  if(type_u()==1){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
              <ul>
                  <li><a href="page_utilisateur.php"> Ma Page Utilisateur</li></a>
                  <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
              </ul>
            </li';
        }
  if(type_u()==2){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
                <li><a href="page_gestionnaire.php"> Ma Page Gestionnaire</li></a>
                <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
             </ul>
          </li>';
        }
  if (type_u()==3){
    echo '<li id="link"><a id="b2"href="#"> Ma Page</a><br><br>
             <ul>
               <li><a href="page_administrateur.php"> Ma Page Administrateur</li></a>
               <li><a href="/SITE/controller/logout.php">Déconnexion</li></a>
             </ul>
          </li>';
          }
}
}

