<?php
    // Si tout va bien, on peut continuer
function show_faq()
{
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
    // Si tout va bien, on peut continuer
    // On récupère tout le contenu de la table faq
    $reponse = $bdd->query('SELECT * FROM faq');
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        print_r("<h3 class=\"question\">".$donnees['Question']."</h3>"); 
        print_r("<h3 class=\"reponses\">".$donnees['Reponse']."</h3><br><br>"); 
    }
}
    ?>