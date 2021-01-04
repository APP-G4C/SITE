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

    <link rel="stylesheet" href="/SITE/public/css/p_agu.css">






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







    <a href="#informationspersonnelles"><button ><span>Informations personelles</span></button></a>
      <a href="#prochainsrdv"><button ><span>Prochains RDV</span></button></a>
      <a href="#résultats"><button><span>Résultats</span></button></a>
      <br>
      <br>
      <a href="#Backoffice"><button><span>Back-office</span></button></a>
      <a href="#ajouterutilisateur"><button><span>Ajouter un utilisateur</span></button></a>
      
      <br>
      <br>

   <br>
    <body>
      <div id="informationspersonnelles">
        <fieldset> 
          <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
          <br>
          <form>
              <label> <strong><U>Etat :</U></strong> <br>Utilisateur</label>
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
      <br>
      <br>

      <fieldset>


        <legend><strong>PRISE DE RDV</strong></legend>
        <table>
          <tr>
            <td><strong><U>Choix du centre</U></strong></td>
            <td><strong><U>Choix de la date</U></strong></td>
            <td><strong><U>Choix de l'heure</U></strong></td>
            <td><strong><U>Choix du test</U></strong></td>
          </tr>

          <tr>
            <td>
              <select>
                <option>Centre A</option>
                <option>Centre B</option>
                <option>Centre C</option>
              
              </select>
            </td>
            <td><input type="date" name=""></td>
            <td><input type="time" name=""></td>
            <td><select>
              <option>Test A</option>
              <option>Test B</option>
              <option>Test B</option>
            </select>
          </td>
          <td><button><span>Confirmer</span></button>
        </tr>
      </table>
      </fieldset>
    </div>


<br>
<br>
    <div id="résultats">
      <fieldset>
        <legend><strong>RESULTATS</strong></legend>
        <table>


          <tr>
            <td><strong><U>Date</U></strong></td>
            <td><strong><U>Centre</U></strong></td>

            <td><strong><U>Capteur 1</U></strong></td>
            <td><strong><U>Capteur 2</U></strong></td>
          </tr>

          <tr>
            <td>

              <input type="date" name="">
              </label>
            </td>

            <td><label>1</label></td>


            <td><label>52/100</label>
          
              
            </td>

            <td><label>52/100</label>
            </td>
          </tr>

        </table>
      </fieldset>
    </div>






<br>
<br>

    <div id="Graphique">

      <fieldset>
        <legend><strong>GRAPHIQUE</strong></legend>
        <br>
        <img id="graph"src="/SITE/public/images/Graphique.png">
        </br>
      </fieldset>
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

