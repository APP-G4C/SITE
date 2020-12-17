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
    <link rel="stylesheet" href="/SITE/public/css/page_agu.css">






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



















      <div id="informationspersonnelles">
        <fieldset> 
          <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
          <br>

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


          <label><strong><U>Date de Naissance</U></strong></label>
        
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


              <button><span>Modifier mes informations personnelles<span></button>
              <br>
            </form>
        </fieldset>
      </div>
      <br>
      <br>



























    <div id="prochainsrdv">
      <fieldset>

       
        <legend><strong>PROCHAINS RDV</strong></legend>
        <br>

        <div id="prisederdv">

        <form>
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
            <td><button><span>Lancer le test</span></button></td>
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
            <td><button><span>Lancer le test</span></button></td>
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
            <td><button><span>Lancer le test</span></button></td>
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
            <td><input type="time" ="">


          </tr>

        </table>
        <br>
        <br>
        <button><span>Afficher</span></button>
      </fieldset>
    </div>
    <br>

























    <div id="backoffice">
      <fieldset>
        <legend><strong>BACK-OFFICE</strong></legend>
        <div id="ajouterutilisateur">
        <fieldset>
          <legend><strong>AJOUTER UN UTILISATEUR</strong></legend>
          <br>
          <label><strong><U>Nom</label>
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
          <button><span>Ajouter l'utilisateur<span></button>
        </form>
        </fieldset>
      </div>
      </div>
      <br>













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