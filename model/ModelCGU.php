<?php
function show_cgl(){
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
                    $reponse = $bdd->query('SELECT * FROM CGU');

    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                        print_r("<h3>".$donnees['titre']."</h3>"); 
                        print_r("<div class=\"text\">".$donnees['contenu']."</div><br><br>"); 
                    }
                }
    ?>