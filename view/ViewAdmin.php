<?php
// Appel des fonctions PHP

 ?>

<!--DEBUT HTML-->

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" name="viewport"/>
<title>Website | Accueil</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="/SITE/public/css/Header.css">
<link rel="stylesheet" href="/SITE/public/css/footer.css">
<link rel="stylesheet" href="/SITE/public/css/style.css">
<link rel="stylesheet" href="/SITE/public/css/p_uga.css">

<!--HEADER-->
<header id="menu1">
<nav>
  <ul id="menu">
      <li id="link"><a id="logoapp"href="/SITE/controller/ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
      <li id="link"><a id="b2" href="/SITE/controller/ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
      <li id="link"><a id="b2"href="/SITE/controller/ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
      <li id="link"><a id="b2"href="/SITE/controller/ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
      <!-- APPEL DE LA FONCTION DE "fn_session.php" AFIN DE MODIFIER LE HEADER EN FONCTION DE L'UTILISATEUR"-->
      <?php echo $modifheader ?>
  </ul>
</nav>
</header>

<!-- BOUTONS DE REDIRECTIONS SUR LA PAGE-->
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
<br><br>

<!--MESSAGE DE BIENVENUE PERSONNALISE-->

<br><br>

<!-- FORMULAIRE INFOS PERSONNELLES-->

    <div id="informationspersonnelles">
      <fieldset>
        <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
        <br>
        <form method="post" action="ControllerAdmin.php">
            <label> <strong><U>Etat :</U></strong> <br>Administrateur</label>
            <br> <br>
            <label><strong><U>Nom</U></strong></label>
            <br>
            <label><?php NomProfil()?></label>
            <br> <br>
            <label><strong><U>Prénom</U></strong></label>
            <br>
            <label><?php PrenomProfil()?></label>
            <br> <br>
            <label><strong><U>Photo de profil</U></strong></label>
            <br>
            <img id="photoavatar"src="/SITE/public/images/avatar.png">
            <br> <br>
             <label><strong><U>ID :</U></strong></label>
            <br>
            <?php echo $_SESSION["id"]?>
            <br> <br>
            <label><strong><U>Sexe</U></strong></label>
            <br>
            <table>
              <tr>
                <td>Etat actuel</td>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><?php SexeProfil();?></td>
                <td> <select name="SexeProfil">
              <option>Homme</option>
              <option>Femme</option>
              <option>Autre</option>
            </select></td>
            <td><input type="submit" name="submit" value="Valider"></td>
          </tr>
            </table>
            <br> <br>
            <label><strong><U>Date de Naissance</U></strong></label>
            <br>
            <table>
              <tr>
                <td>Etat actuel</td>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><?php DatenaissanceProfil()?></td>
                <td><input type="date" name="DatenaissanceProfil"></td>
                <td><input type="submit"value=Valider name="submit"></td>
              </tr>
            </table>
            <br> <br>
            <br> <br>
            <label><strong><U>Numéro de téléphone</U></strong></label>
            <br>
            <table>
              <tr>
                <td>Etat actuel</td>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><?php TelProfil()?></td>
                <td><input type="tel"  placeholder="0606060606"pattern="[0-9]{10}$"name="TelProfil"></td>
                <td><input type="submit"value=Valider name="submit"></td>
              </tr>
            </table>
           <br> <br>
          <!-- Email -->
            <label for="email"><strong><U>Mail</U></strong></label>
            <br>
            <table>
              <tr>
                <td>Etat actuel</td>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><?php MailProfil()?></td>
                <td><input type="mail" name="MailProfil"></td>
                <td><input type="submit"value=Valider name="submit"></td>
              </tr>
            </table>
            <br><br>
            <label><strong><U>Mot de passe</U></strong></label>
            <table>
              <tr>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><input type="password" name="PasswordProfil"></td>
                <td><input type="submit"value=Valider name="submit"></td>
              </tr>
            </table>
              <br>
            <br> <br>
        </form>
    </fieldset>
    </div>
      <br><br><br><br>
<!--BARRE DE SEPARATION AVEC LE BACK-OFFICE-->
<hr width="100%"size="3" color=#EFD200 solid>
<br>

<!-- BACK OFFICE-->

<!-- FORMULAIRE "AJOUTER UN GESTIONNAIRE"-->
  <br> <br>


  <h2> BACK OFFICE</h2>
  <br> <br>
  <br> <br>
  <br> <br>
  <form  method="POST"action="ControllerAdmin.php">
    <div id="ajouteruser">
    <fieldset>
      <legend><strong>AJOUTER UN GESTIONNAIRE</strong></legend>
      <br>

<!--AFFICHAGE DE LA FAQ AJOUTÉ-->
      
      <br><br>
      <label id="Nom" ><strong><U>Nom</U></strong></label>
      <br>
      <br>
      <input name="Nom"type="text" placeholder="Nom" pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="Prenom"><strong><U>Prenom</U></strong></label>
      <br>
      <input name="Prenom"type="text" placeholder="Prenom"pattern="[A-Za-z-].{1,}">
      <br>
       <label id="Mail"><strong><U>Mail</U></strong></label>
      <br><br>
      <input name="Mail"type="text" placeholder="Mail"pattern="[A-Za-z-].{1,}">

      <br> <br>
      <br> <br>
      <br> <br>
      <button onclick="alert('Es-tu sûr de vouloir ajouter cette FAQ ?')"type="submit"name="submit"><span>Ajouter la FAQ</span></button>
    </fieldset>
    </div>
  </form>
  <br> <br>
  </div>

  <!-- FORMULAIRE " PROCHAINS RDV"-->
  <div id="prochainsrdv">
    <fieldset>
    <legend><strong>PROCHAINS RDV</strong></legend>
    <br>

            <form action="ControllerAdmin.php"method="POST" >
              <label><strong><U>Rechercher id du Gestionnaire</U></strong></label>
              <br><br>

          <select name="SelectId">
            <option><?php id__gestionnaire_rdv();?></option>
          </select>
          <br><br>
          <input type="submit" value="valider" name="submit">
          <br><br>
          <table>
            <tr>
              <td><strong><U>id_User</U></strong></td>
              <td><strong><U>Date</U></strong></td>
              <td><strong><U>Horaire</U></strong></td>
            </tr>
            <tr>
              <td><?php id_prochainrdv_admin();?></td>
              <td><?php Date_prochainrdv_admin();?></td>
              <td><?php horaire_prochainrdv_admin();?></td>
            </tr>
          </table>
        </form>
    </fieldset>
    </div>


  <!-- FORMULAIRE "RESULTATS"-->
  <div id="résultats">
    <fieldset>
      <legend><strong>RESULTATS</strong></legend>
      <br>
      <form action="ControllerAdmin.php" method="POST">
        <label><strong><U>Rechercher id de l'Utlisateur</U></strong></label>
              <br><br>
              <select name="NomUser">
            <option><?php id__utilisateur_rdv();?></option>
          </select>
          <br><br>


          <table>
          <tr>
            <td><strong><U>Trame</U></strong></td>
            <td><strong><U>Heure</U></strong></td>
          </tr> 
          <tr>
            <td><?php user_trame();?></td>
            <td><?php user_Heure();?></td>           
          </table>
      <br> <br>

      <button><span>Afficher</span></button>
    </form>
    </fieldset>
  </div>
  <br><br><br>

<!-- RECHERCHER-->
<fieldset>
  <legend><strong><U>RECHERCHER ADMIN-GESTIONNAIRE-UTILISATEUR</U></strong></legend>
  <form method="GET">
    <br><br>
     <input type="search" name="q" placeholder="Recherche..." />
     <br><br>
     <input type="submit" value="Rechercher" />
     <br><br>
     <table>
        <tr>
          <td><strong><U>id_user</U></strong></td>
          <td><strong><U>Nom</U></strong></td>
          <td><strong><U>Prenom</U></strong></td>
          <td><strong><U>Date de naissance</U></strong></td>
          <td><strong><U>Sexe</U></strong></td>
          <td><strong><U>Mail</U></strong></td>

        </tr>
        <tr>
          <td><?php recherche_id();?></td>
          <td><?php recherche_nom()?></td>
          <td><?php recherche_prenom();?></td>
          <td><?php recherche_date_de_naissance();?></td>
          <td><?php recherche_sexe();?></td>
          <td><?php recherche_mail();?></td>
        </tr>
      </table>
  </form>
</fieldset>
<br><br>


  <!-- FORMULAIRE "AJOUTER UNE FAQ"-->
<div id="Backoffice">
  <br> <br>
  <br> <br>
  <form id="form" method="POST"action="ControllerAdmin.php">
    <div id="ajouterfaq">
    <fieldset>
      <legend><strong>AJOUTER UNE FAQ</strong></legend>
      <br>

<!--AFFICHAGE DE LA FAQ AJOUTÉ-->
      <h3></h3>
      <br><br>
      <label id="Question" for="Question"><strong><U>Question</U></strong></label>
      <br>
      <br>
      <input name="Question"type="text" placeholder="Question" pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="Reponse"for="Reponse"><strong><U>Reponse</U></strong></label>
      <br>
      <input name="Reponse"type="text" placeholder="Reponse"pattern="[A-Za-z-].{1,}">
      <br> <br>
      <br> <br>
      <br> <br>
      <button onclick="alert('Es-tu sûr de vouloir ajouter cette FAQ ?')"type="submit"name="submit"><span>Ajouter la FAQ</span></button>
    </fieldset>
    </div>
  </form>
  <br> <br>
  </div>

  <!--FORMULAIRE "AJOUTER UNE CL/CGU"-->
  <div id="clcgu">
     <form id="form" method="POST"action="ControllerAdmin.php">
    <div id="ajouterfaq">
    <fieldset>
      <legend><strong>AJOUTER CGL/CGU</strong></legend>
      <br>

<!--AFFICHAGE DE LA FAQ AJOUTÉ-->
      <h3></h3>
      <br><br>
      <label id="Question" for="Question"><strong><U>Titre</U></strong></label>
      <br>
      <br>
      <input name="TitreCGL"type="text" placeholder="Titre CGU">
      <br> <br>
      <label id="Reponse"for="Reponse"><strong><U>Contenu</U></strong></label>
      <br>
      <input name="ContenuCGL"type="text" placeholder="Contenue">
      <br> <br>
      <br> <br>
      <br> <br>
      <button onclick="alert('Es-tu sûr de vouloir ajouter cette CGU ?')"type="submit"name="submit"><span>Ajouter la CGU</span></button>
    </fieldset>
    </div>
  </form>
  </div>
  <br> <br>
  <!-- AFFICHAGES MESSAGES AIDE-->
  <div id="form">
    <fieldset>
      <legend><strong>MESSAGES</strong></legend>
      <table>
        <tr>
          <td><strong><U>Nom</U></strong></td>
          <td><strong><U>Prenom</U></strong></td>
          <td><strong><U>Mail</U></strong></td>
          <td><strong><U>Telephone</U></strong></td>
          <td><strong><U>Message</U></strong></td>
        </tr>
        <tr>
          <td><?php NomMessage(); ?></td>
          <td><?php PrenomMessage();?></td>
          <td><?php MailMessage(); ?></td>
          <td><?php TelMessage();?></td>
          <td><?php MessageMessage(); ?></td>
      </table>
    </fieldset>
  <br>
</div>
</body>

<!--APPEL DU DOCUMENT JAVASCRIPT-->
<script src="/SITE/public/js/regexp.js"></script>
<script src="/SITE/public/js/popup.js"></script>
<script src="/SITE/public/js/teststyle.js"></script>

<!--FOOTER-->
<footer id="menu2">
  <nav>
      <ul>
          <li id="link2"><a href="ControllerCGU.php">CGU & CL</a></li>
          <li id="link2"><a href="ControllerContact.php">Contact</a></li>
          <li id="link2"><a href="ControllerFAQ.php">FAQ</a></li>
          <li id="link2"><a href="ControllerAboutus.php">À propos</a></li>
      </ul>
  </nav>
</footer>
</html>
</body>
</html>
