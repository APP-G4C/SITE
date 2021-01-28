<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PPT - Test</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/apropos.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="\SITE\public\js\about_us.js"></script>
</head>


  <header id="menu1">
    <nav>
        <ul>
            <li id="link"><a id="logoapp"href="/SITE/controller/ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="/SITE/controller/ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="/SITE/controller/ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
            <li id="link"><a id="b2"href="/SITE/controller/ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo $modifheader ?>
        </ul>
    </nav>
  </header>
  <body>
      <div id="perso">
        <div id="textaboutus">
          <h1 id="titre_aboutus"></br>Qui sommes-nous ?</br></h1>
                <p id="introduction">Notre équipe est fière de vous accompagnez dans l'évaluation de vos performances psychotechniques ! </p>

        </div>
        <br><br><br>
                <div id="containerglobal">

                    <div id="container1">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/paul.png" alt="Photo de Paul" class="image">
                            <p class="overlay">Malagoli</p>
                        </div>
                        <div>
                            <p id="description1">
                                <span class="information">Nom :</span> MALAGOLI </br>
                                <span class="information">Prénom :</span> Paul</br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction1()" id="myBtn1">Voir plus</button>
                        </div>
                    </div>


                    <div id="container2">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/laure.png" alt="Photo de Laure" class="image">
                            <p class="overlay">Degot</p>
                        </div>
                        <div>
                            <p id="description2">
                                <span class="information">Nom :</span> DEGOT </br>
                                <span class="information">Prénom :</span> Laure </br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction2()" id="myBtn2">Voir plus</button>
                        </div>
                    </div>

                    <div id="container3">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/timothée.png" alt="Photo de Timothée" class="image">
                            <p class="overlay">Lamare</p>
                        </div>
                        <div>
                            <p id="description3">
                                <span class="information">Nom :</span> LAMARE </br>
                                <span class="information">Prénom :</span> Timothée</br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction3()" id="myBtn3">Voir plus</button>
                        </div>
                    </div>

                    <div id="container4">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/yifei.png" alt="Photo de Yifei" class="image">
                            <p class="overlay">Zhao</p>
                        </div>
                        <div>
                            <p id="description4">
                                <span class="information">Nom :</span> ZHAO </br>
                                <span class="information">Prénom :</span> Yifei</br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction4()" id="myBtn4">Voir plus</button>
                        </div>
                    </div>

                    <div id="container5">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/hugo.png" alt="Photo de Hugo" class="image">
                            <p class="overlay">Poulain</p>
                        </div>
                        <div>
                            <p id="description5">
                                <span class="information">Nom :</span> POULAIN </br>
                                <span class="information">Prénom :</span> Hugo</br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction5()" id="myBtn5">Voir plus</button>
                        </div>
                    </div>

                    <div id="container6">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/thibault.png" alt="Photo de Thibault" class="image">
                            <p class="overlay">Poyet</p>
                        </div>
                        <div>
                            <p id="description6">
                                <span class="information">Nom :</span> POYET </br>
                                <span class="information">Prénom :</span> Thibault</br>
                                <span class="information">Poste :</span> Administrateur</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction6()" id="myBtn6">Voir plus</button>
                        </div>
                    </div>
                </div>
            </div>

  </body>

    <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="/SITE/controller/ControllerCGU.php">CGU & CL</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerContact.php">CONTACT</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerFAQ.php">AIDE</a></li>
                <li id="link2"><a href="/SITE/controller/ControllerAboutus.php">A PROPOS</a></li>
            </ul>
        </nav>
    </footer>



</html>
