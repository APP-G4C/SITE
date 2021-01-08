<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'\SITE\fn_session.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/faq.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>



  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="page_accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="page_accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="page_faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="page_contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo header_ada()?>



            <!--UTILISATEUR
            <li id='link'><a id="b6"href="#"> Ma Page</a>
                    <ul>
                        <li><a href="pageutilisateur.php"> Ma Page Utilisateur</li></a>
                        <li><a href="#">Déconnexion</li></a>
                    </ul>
                </li><!-->

             <!--GESTIONNAIRE
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.php"> Ma Page Gestionnaire</li></a>

                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->
            <!-- ADMIN
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.php"> Ma Page Administrateur</li></a>


                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->

        </ul>
    </nav>
  </header>






  <body>
    <br>
    <div class="container" id="blocaide">
        <h1 class="top">Nous sommes là pour vous aider</h1>
        <br>
          <fieldset>

            <legend>Questions fréquentes </legend>
            <br>
                <h3 class="question1">1.Comment se connecter à votre compte ?</h3>
                <br>
                  <div class="reponses1">
                    <li>Pour vous connecter à votre compte, accédez à la page d'accueil et cliquez sur "Connexion".</li>
                    <li>Si vous vous êtes déjà connecté à votre compte sur votre ordinateur, smartphone ou tablette, vous pouvez directement choisir le compte mémorisé sur la page et saisir votre mot de passe. </li>
                  </div>

                <br>
                <h3 class="question2">2.Que faire en cas d'oubli de votre mot de passe ?</h3>
                <br>  <div class="reponses2">
                    <li>Depuis le portail de connexion, cliquez sur la phrase « Mot de passe oublié ? » qui se situe sous le petit cadenas.</li>
                    <li>Vous serez alors redirigé vers cette page où vous devez renseigner votre adresse mail de connexion puis cliquer sur le bouton « Envoyer ».</li>
                    <li>Vous recevrez votre nouveau mot de passe dans quelques jours.</li>
                  </div>

                <br>
                <h3 class="question3">3.Comment sont calculées les statistiques ?</h3>
                  <br><div class="reponses3">
                    Dans le calcul des statistiques, nous prenons en compte :
                    <li>Votre taux de réussite.</li>
                    <li>Le temps de travail enregistré (correspondant au temps passé pendant une session entre le début et la fin d’une activité).</li>
                    Le temps passé à lire les fiches de révision ou à consulter vos statistiques n’est pas comptabilisé.
                  </div>

                <br>
                <h3 class="question4">4.Vous n'arrivez pas à vous entraîner ?</h3>
                  <br><div class="reponses4">
                    Pour une utilisation optimisée de la plateforme PPTest, nous invitons tout utilisateur à :
                    <li>Utiliser un ordinateur comme support de travail.</li>
                    <li>Se connecter via les navigateurs Google Chrome ou Mozilla Firefox.</li>

                    ATTENTION: L’erreur peut également être due à un double compte.
                  </div>

                <br>
                <h3 class="question5">5.Pourquoi faire le test psychotechnique afin d'obtenir le permis de conduire ?</h3>
                <br>  <div class="reponses5">
                    Le test psychotechnique se déroule en deux temps.
                    <li>Vous aurez un entretien individuel d'une durée de 10/15 minutes maximum avec le ou la psychologue agréée.</li>

                    Cet entretien va permet d’établir un compte rendu du test psychotechnique, connaître les antécédents médicaux
                    ainsi que les raisons de la suspension du permis de conduire de l’usager.
                    <li>Vous effectuez le test psychotechnique</li>

                    Il est individuel, et effectué sur un ordinateur avec des manettes aux mains et des pédales au niveau des pieds.
                    Le test psychotechnique permet de mesurer les réflexes, les capacités d'attention, de concentration et de coordination."
                  </div>
                  <br>
      </div>

            </fieldset>
          </div>
        </body>



 <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="page_cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="page_contact.php">Contact</a></li>
                <li id="link2"><a href="page_faq.php">FAQ</a></li>
                <li id="link2"><a href="page_aboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>


</html>