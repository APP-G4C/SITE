<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

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
            <li id="link"><a id="logoapp"href="page_accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="page_accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="page_faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="page_contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo header_ada()?>
        </ul>
    </nav>
  </header>
  <body>
      <div id="perso">
        <div id="textaboutus">
          <h1 id="titre_aboutus"></br>Qui sommes-nous ?</br></h1>
                <p id="introduction">Post hoc impie perpetratum quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati </p>
        </div>
                <div id="containerglobal">

                    <div id="container1">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description1">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction1()" id="myBtn1">Voir plus</button>
                        </div>
                    </div>


                    <div id="container2">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description2">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction2()" id="myBtn2">Voir plus</button>
                        </div>
                    </div>

                    <div id="container3">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description3">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction3()" id="myBtn3">Voir plus</button>
                        </div>
                    </div>

                    <div id="container4">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description4">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction4()" id="myBtn4">Voir plus</button>
                        </div>
                    </div>

                    <div id="container5">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description5">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
                                <a class="email" href="mailto:bidule@gmail.com" >Envoyez un mail</a></br></br>
                            </p>
                            <button onclick="myFunction5()" id="myBtn5">Voir plus</button>
                        </div>
                    </div>

                    <div id="container6">
                        <div class="photoprofil">
                            <img src="/SITE/public/images/profil.png" alt="Photo de Bidule" class="image">
                            <p class="overlay">NOM Prénom</p>
                        </div>
                        <div>
                            <p id="description6">
                                <span class="information">Nom :</span> NOM </br>
                                <span class="information">Prénom :</span> Prénom</br>
                                <span class="information">Poste :</span> Poste</br></br>
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
                <li id="link2"><a href="page_cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="page_contact.php">CONTACT</a></li>
                <li id="link2"><a href="page_faq.php">AIDE</a></li>
                <li id="link2"><a href="page_about_us.php">A PROPOS</a></li>
            </ul>
        </nav>
    </footer>



</html>
