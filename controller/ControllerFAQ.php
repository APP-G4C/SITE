  <?php 
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/ModelFAQ.php');
   require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ControllerSession.php');

// APPEL DE LA FONCTION
// Initialisation session
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil

// On charge le fichier config si pas déjà fait (charge databse)



$modifheader=  header_ada();
$QuestionFAQ=faq();
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/view/ViewFAQ.php');


?>
