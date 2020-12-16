
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/p_uga.css">




</head>


  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="accueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="faq.php"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b2"href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <li id="link"><a id="b2"href="connexion.php"><i class="far fa-id-badge"></i> Connexion</a></li>



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
    <div id="informationspersonnelles">
      <fieldset>
      <legend>INFORMATIONS PERSONELLES</legend>
          <label> Etat : Utilisateur</label>
          <br>
          <br>



          <label>Photo de profil</label>
          <br>
          <br>
          <img id="photoavatar"src="/SITE/public/images/avatar.png">
          <br>
          <br>


          <br>
          <br>

          <label>Sexe</label>
          <br>
          <br>
          <select>
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>

          </select>

          <br>
          <br>

          <label>Nom</label>
          <br>
          <br>
          <input type="text" value="" placeholder="Nom">
          <br>
          <br>


          <label>Prénom</label>
          <br>
          <br>
          <input type="text" placeholder="Prénom"value="">
          <br>
          <br>


          <label>Email</label>
          <br>
          <br>
          <input type="email" placeholder="Mail" value="">
          <br>
          <br>

          <label>Mot de passe</label>
          <br>
          <br>
          <input type="password" value="G4CG4C">
          <br>


          <label> Numéro de téléphone</label>
          <br>
          <br>
          <input type="tel"  placeholder="0606060606"value="">
          <br>
          <br>

          <label>Date de Naissance</label>
          <br>
          <br>
          <input type="date" name="">
          <br>
          <br>
          

          <button>MODFIER MES INFORMATIONS PERSONNELLES</button>


      </fieldset>
    </div>


    <div id="prisederdv">
      <br>
      <br>

      <fieldset>


        <legend>PRISE DE RDV</legend>


        <label>Choix du centre</label>
        <br>
        <select>
          <option> Centre 1</option>
          <option>Centre 2</option>
        </select>
        <br>
        <br>

        <label>Choix de la date</label>
        <br>
        <input type="date" name="">
        <br>
        <br>

        <label>Choix de l'heure</label>
        <br>
        <input type="time" name="">
        <br>
        <br>

        <label>Choix du test</label>
        <br>
        <select>
          <option>Test 1</option>
          <option>Test 2</option>
        </select>
      </fieldset>
    </div>


    <div id="résultats">
      <fieldset>
        <legend>Résultats</legend>
        <table>


          <tr>
            <td><strong>Date</strong></td>
            <td><strong>Centre</strong></td>
            <td><strong>Fonction1</strong></td>
            <td><strong>Fonction 2 </strong></td>
          </tr>

          <tr>
            <td>

              <input type="date" name="">
              </label>
            </td>

            <td><input type="text" placeholder="1"></td>

            <td><input type="text" placeholder= "52" ="">
              <p> /</p>
              <input type="text" placeholder="100" ="">
            </td>

            <td><input type="text" placeholder= "48" ="">
              <p> /</p>
              <input type="text" placeholder="100" ="">
            </td>
          </tr>

        </table>
      </fieldset>
    </div>

    <div id="Graphique">

      <fieldset>
        <legend>Graphique</legend>
        <img id="graph"src="/SITE/public/images/Graphique.png">
      </fieldset>
    </div>


  </body>

    <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="cgu.php">CGU & CL</a></li>
                <li id="link2"><a href="contact.php">Contact</a></li>
                <li id="link2"><a href="faq.php">FAQ</a></li>
                <li id="link2"><a href="aboutus.php">À propos</a></li>
            </ul>
        </nav>
    </footer>



</html>
