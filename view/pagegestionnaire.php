<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'\SITE\fn_session.php');
?>
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
<<<<<<< HEAD
      <div id="informationspersonnelles">
        <fieldset>
          <legend>INFORMATIONS PERSONNELLES</legend>
=======



















      <div id="informationspersonnelles">
        <fieldset> 
          <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
          <br>

>>>>>>> 57fadf490a4a44df7823651fca5aaddb6395dd33
          <form>
              <label> <strong><U>Etat :</U></strong> <br>Gestionnaire</label>
              <br>
              <br>
              <label><strong><U>ID :</U></strong></label>
              <br>
              <label> 12345
              <br>
              <br>



              <label><strong><U>Photo de profil</U></strong></label>

              <br>
              <img id="photoavatar"src="/SITE/public/images/avatar.png">
              <br>
<<<<<<< HEAD


          <label>Sexe</label>
          <br>
          <br>
          <select>
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>
            <
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


=======

>>>>>>> 57fadf490a4a44df7823651fca5aaddb6395dd33
              <label><strong><U>Sexe</U></strong></label>

              <br>
              <select>
                <option>Homme</option>
                <option>Femme</option>
                <option>Autre</option>
                <
              </select>

              <br>
              <br>

              <label><strong><U>Nom</U></strong></label>
              <br>

              <label>DUPOND</label>
              <br>
              <br>


              <label><strong><U>Prénom</U></strong></label>
              <br>


             <label> Jean</label>
              <br>
              <br>


              <label><strong><U>Email</U></strong></label>

              <br>
              <input type="email" placeholder="Mail" value="">
              <br>
              <br>

              <label><strong><U>Mot de passe</U></strong></label>

              <br>
              <input type="password" value="G4CG4C">
              <br>
              <br>


          <label>Date de Naissance</label>
          <br>
          <br>
          <input type="date" name="">
          <br>
          <br>


              <label><strong><U>Numéro de téléphone</U></strong></label>

              <br>
              <input type="tel"  placeholder="0606060606"value="">
              <br>
              <br>

              <label><strong><U>Date de Naissance</U></strong></label>

              <br>
              <input type="date" name="">
              <br>
              <br>


              <button><span>MODFIER MES INFORMATIONS PERSONNELLES<span></button>
              <br>
            </form>
        </fieldset>
      </div>

    <div id="prochainsrdv">
      <fieldset>

<<<<<<< HEAD
        <legend>Prochains RDV</legend>
=======
       
        <legend><strong>PROCHAINS RDV</strong></legend>
        <br>

>>>>>>> 57fadf490a4a44df7823651fca5aaddb6395dd33
        <div id="prisederdv">

        <form>
        <table>


          <tr>
            <td><strong>Nom</strong></td>
            <td><strong>Prénom</strong></td>
            <td><strong> Date</strong></td>
            <td><strong>Centre</strong></td>

          </tr>

          <tr>

            <td>
              <input type="text" placeholder="Dupond">
            </td>


            <td>
              <input type="text" placeholder="Jean">
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><input type="text" placeholder="1"></td>
            <td><button><span>Lancer le test</span></button></td>
          </tr>

          <tr>

            <td>
              <input type="text" placeholder="Dupond">
            </td>


            <td>
              <input type="text" placeholder="Jean">
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><input type="text" placeholder="1"></td>
            <td><button><span>Lancer le test</span></button></td>
          </tr>

          <tr>

            <td>
              <input type="text" placeholder="Dupond">
            </td>


            <td>
              <input type="text" placeholder="Jean">
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><input type="text" placeholder="1"></td>
            <td><button><span>Lancer le test</span></button></td>
          </tr>
        </table>
      </form>
      </fieldset>
    </div>


     <div id="résultats">
      <fieldset>
        <legend>Résultats</legend>
        <form>


        <label><strong>Rechercher</strong></label>
        <br>

        <input type="text" name="">
        <br>
        <br>



        <label><strong>Trier par</strong></label>

        <br>
        <table>


          <tr>
            <td><strong>Date</strong></td>
            <td><strong>Centre</strong></td>

          </tr>

          <tr>
            <td>

              <input type="date" name="">
              </label>
            </td>

            <td><input type="text" placeholder="1"></td>


          </tr>

        </table>
        <br>
        <br>
        <button>Afficher</button>
      </fieldset>
    </div>

    <div id="backoffice">
      <fieldset>
        <legend>Back-Office</legend>
        <fieldset>
          <legend>Ajouter un utilisateur</legend>
          <br>
          <label> Nom</label>
          <br>
          <input type="text" placeholder="Dupond">
          <br>
          <br>
          <label>Prénom</label>
          <br>
          <input type="text" placeholder="Jean">
          <br>
          <br>
          <label> Adresse mail</label>
          <br>
          <input type="mail" placeholder="mail">
          <br>
          <br>
          <button>Ajouter l'utilisateur</button>
        </form>
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
