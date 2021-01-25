    <?php

    // Si tout va bien, on peut continuer
function faq(){
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=database_app;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM faq');

    // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
    {
        return $Question=$donnees["Question"];
        return $Reponse=$donnees["Reponse"];
    }


}
// Termine le traitement de la requête 

    ?>