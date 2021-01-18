s<?php
// Initialisation session
session_start();

// On détruit toutes le variables de la session
$_SESSION = array();

// On détruit la session
session_destroy();

// On redirige vers la page d'accueil
header("location: /SITE/view/page_accueil.php");
exit;
?>
