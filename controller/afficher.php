
<?php
function afficher_gestionnaire(){
     if ($test=1 &&empty(!$Prenom)&&empty(!$Nom))
        {
          echo 'Felicitations vous avez ajouté "'.$Prenom.' '.$Nom.'" en tant que Gestionnaire !';
        }
      else
        {
          header("Location:ViewGestionnaire.php");
        }
}
?>