<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/fn_session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/add_gestionnaire.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/ADD_FAQ.php');
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8" name="viewport"/>
<title>Website | Accueil</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/p_uga.css">

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




  <a href="#informationspersonnelles"><button ><span>Informations personelles</span></button></a>
      <a href="#prochainsrdv"><button ><span>Prochains RDV</span></button></a>
      <a href="#résultats"><button><span>Résultats</span></button></a>
      <br>
      <br>
      <a href="#Backoffice"><button><span>Back-office</span></button></a>
      <a href="#ajouterutilisateur"><button><span>Ajouter un gestionnaire</span></button></a>
      <a href="#faq"><button><span>Ajouter une FAQ</span></button></a>
      <a href="#clcgu"><button><span>Ajouter une CGL/CGU</span></button></a>
      <a href="#form"><button><span>Formulaires de contact</span></button></a>
      <br>
      <br>


 <form id="loginForm">
      <div id="informationspersonnelles">
        <fieldset>
          <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
          <br>
          <form>
              <label> <strong><U>Etat :</U></strong> <br>Administrateur</label>
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
              <br>
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





          <label><strong><U>Date de Naissance</U></strong></label>

          <br>
          <input type="date" name="">

          <br>
          <br>


              <label><strong><U>Numéro de téléphone</U></strong></label>

              <br>
              <input type="tel"  placeholder="0606060606"pattern="[0-9]{10}$"value="">
              <br>
              <br>

              <label><strong><U>Date de Naissance</U></strong></label>

              <br>
              <input type="date" name="">
              <br>
              <br>
            </form>












          <form action="" method="POST" id="loginForm">
            <!-- Email -->

              <label for="email">Mail</label>
              <br>
              <input type="text" class="form-control" name="email" />
              <small></small>


            <!-- password -->
           <br>
              <label for="password">Mot de passe</label>
              <br>
              <input type="password" class="form-control" name="password" />
              <small></small>


            <br>
              <button type="submit" class="btn btn-secondary btn-block">

                <span>Connexion</span>
                <br>
              </button>
              <br>
              <br>


          </form>


  </fieldset>
  <br>
  <br>
  <hr width="100%"size="3" color=#EFD200 solid>
  <br>
  <div id="Backoffice">

      <br>
      <br>





      <form id="form" method="POST"action="page_administrateur.php">
        <div id="ajouterutilisateur">
        <fieldset>
          <legend><strong>AJOUTER UN GESTIONNAIRE</strong></legend>
          <br>

         <br>
         <br>
          <label id="Nom" for="Nom"><strong><U>Nom</U></strong></label>
          <br>
          <input name="Nom"type="text" placeholder="Dupond" pattern="[A-Za-z-].{1,}">
          <br>
          <br>
          <label id="Prenom"for='Prenom'><strong><U>Prénom</U></strong></label>
          <br>
          <input name="Prenom"type="text" placeholder="Jean"pattern="[A-Za-z-].{1,}">
          <br>
          <br>
          <label id="Mail"for="Mail"><strong><U> Adresse mail</U></strong></label>
          <br>
          <input type="text"name="Mail" placeholder="Mail"pattern="[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}">
          <br>
          <br>
          <button type="submit"name="submit"><span>Ajouter l'utilisateur</span></button>
        </fieldset>
      </div>
    </form>
</fieldset>
    <br>
    <br>
  </div>
  <div id="prochainsrdv">
      <fieldset>

        <legend><strong>PROCHAINS RDV</strong></legend>
        <br>
        <div id="prisederdv">

        <form>
          <label><strong><U>Gestionnaire</U></strong></label>
          <br>
          <select>
            <option>A</option>
            <option>B</option>
            <option>C</option>

          </select>
          <br>
          <br>
        <table>

          <tr>
            <td><strong><U>Nom</U></strong></td>
            <td><strong><U>Prénom</U></strong></td>
            <td><strong><U>Date</U></strong></td>
            <td><strong><U>Centre</U></strong></td>
            <td><strong><U>Horaire</U></strong></td>

          </tr>

          <tr>

            <td>
              <label> Dupond</label>
            </td>


            <td>
              <label>Jean</label>
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><label>1</label></td>
            <td><input type="time" name=""></td>

          </tr>

          <tr>

            <td>
              <label>Dupond</label>
            </td>


            <td>
              <label>Jean</label>
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><label>2</label></td>
             <td><input type="time" name=""></td>

          </tr>

          <tr>

            <td>
              <label>Dupond</label>
            </td>


            <td>
              <label>Jean</label>
            </td>


            <td>
              <input type="date" name="">
              </label>
            </td>

            <td><label>3</label></td>
            <td><input type="time" name=""></td>

          </tr>

        </table>
      </form>
      </fieldset>
    </div>
    <br>

<div id="résultats">
      <fieldset>
        <legend><strong>RESULTATS</strong></legend>
        <br>
        <form>


        <label><strong><U>Rechercher</U></strong></label>
        <br>

        <input type="text" name="">
        <br>
        <br>



        <label><strong><U>Trier par</U></strong></label>

        <br>
        <br>
        <table>


          <tr>
            <td><strong>Date</strong></td>
            <td><strong>Centre</strong></td>
            <td><strong>Gestionnaire</strong>
            <td><strong> Horaire</strong></td>


          </tr>

          <tr>
            <td>

              <input type="date" name="">
              </label>
            </td>

            <td><select>
              <option>1</option>
              <option>2</option>

            </select></td>
            <td>
              <select>
                <option>A</option>
                <option>B</option>
                <option>C</option>
              </select>
            <td><input type="time" ="">


          </tr>

        </table>
        <br>
        <br>
        <button><span>Afficher</span></button>
      </fieldset>
    </div>
    <br>
    <br>
    <br>
    <form class="form" action="ADD_FAQ.php" method="post">
      <div id="faq">
            <fieldset>
            <legend><strong>AJOUTER UNE FAQ</strong></legend>
            <label><strong><U>Question FAQ</U></strong></label>
            <br>
            <input type="text" placeholder="Question" name="Question">
            <br>
            <br>
            <label><strong><U>Réponse</U></strong> </label>
            <br>
            <input type="text" placeholder="Reponse" name="Reponse">
            <br>
            <br>
            <button><span>Ajouter FAQ</span></button>
            </fieldset>
          </div>
    </form>

        <br><br>


        <div id="clcgu">
          <fieldset>
          <legend><strong>AJOUTER UNE CL-CGU</strong></legend>
          <br>
          <label><strong><U>Titre CGU/CL:</U></strong></strong></label>
          <br>
          <input type="text" placeholder="Titre CGU/CL">
          <br>
          <br>
          <label><strong><U>Description CGU/CL:</U></strong> </label>
          <br>
          <textarea></textarea>
          <br>
          <br>
          <button><span>Ajouter CGU/CL</span></button>

          </fieldset>
        </div>

  <br>
  <br>
      <div id="form">
        <fieldset>
        <legend><strong>FORMULAIRES DE CONTACT</strong></legend>
        <table>
          <tr>
            <td><strong><U>Nom</U></strong></td>
            <td><strong><U>Prénom</U></strong></td>
            <td><strong><U>mail</U></strong></td>
            <td><strong><U>Téléphone</U></strong></td>
            <td><strong><U>Message reçu</U></strong></td>
            <td><strong><U>Message à envoyer</U></strong></td>
            <td><strong><U>Répondre</U></strong></td>

          </tr>
          <tr>
            <td> Dupond</td>
            <td>Jean</td>
            <td>Jean Dupond@gmail.com</td>
            <td> 0606060606</td>
            <td><textarea></textarea></td>
            <td><textarea></textarea></td>
            <td><button><span>Envoyer</span></button></td>
          </tr>
        </table>
        </fieldset>
      </div>
    </fieldset>

      <br>
    </div>

</body>
<script src="js/regexp.js"></script>


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

    <script src="/SITE/public/js/regexp.js"></script>
  </body>
</html>
