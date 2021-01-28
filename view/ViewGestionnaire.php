<?php

// Appel des fonctions PHP

?>


<!--DEBUT HTML-->
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" name="viewport"/>
<title>PPT - Test</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="/SITE/public/css/Header.css">
<link rel="stylesheet" href="/SITE/public/css/footer.css">
<link rel="stylesheet" href="/SITE/public/css/style.css">
<link rel="stylesheet" href="/SITE/public/css/p_uga.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<!--HEADER-->
<header id="menu1">
<nav>
  <ul id="menu">
      <li id="link"><a id="logoapp"href="ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
      <li id="link"><a id="b2" href="/SITE/controller/ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
      <li id="link"><a id="b2"href="/SITE/controller/ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
      <li id="link"><a id="b2"href="/SITE/controller/ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
      <!-- APPEL DE LA FONCTION DE "fn_session.php" AFIN DE MODIFIER LE HEADER EN FONCTION DE L'UTILISATEUR"-->
      <?php echo $modifheader ?>
  </ul>
</nav>
</header>

<!-- BOUTONS DE REDIRECTIONS SUR LA PAGE-->
<a href="#informationspersonnelles"><button ><span>Informations personnelles</span></button></a>
<a href="#Backoffice"><button><span>Back-office</span></button></a>
<a href="#ajouterutilisateur"><button><span>Ajouter un utilisateur</span></button></a>
<a href="#prochainsrdv"><button ><span>Prochains RDV</span></button></a>
<a href="#résultats"><button><span>Résultats</span></button></a>
<a href="#rechercheuga"><button><span>Rechercher</span></button></a>
<a href="#ajouterrdv"><button><span>Ajouter un RDV</span></button></a>
<br><br>
<!--MESSAGE DE BIENVENUE PERSONNALISE-->
<h2>BIENVENUE</h2>
<h2><?php PrenomProfil();?></h2>
<h2><?php NomProfil();?></h2>

<br><br>

<!-- FORMULAIRE INFOS PERSONNELLES-->
    <div id="informationspersonnelles">
      <fieldset>
        <legend><strong>INFORMATIONS PERSONNELLES</strong></legend>
        <br>
        <form method="post" action="ControllerGestionnaire.php">
            <label> <strong><U>Etat :</U></strong> Gestionnaire</label>
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
            <td><input id="submitinfoperso" type="submit" name="submit" value="Valider"></td>
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
                <td><input id="box" type="date" name="DatenaissanceProfil"></td>
                <td><input id="submitinfoperso" type="submit"value=Valider name="submit"></td>
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
                <td><input id="box" type="tel"  placeholder="0606060606"pattern="[0-9]{10}$"name="TelProfil"></td>
                <td><input id="submitinfoperso" type="submit"value=Valider name="submit"></td>
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
                <td><input id="box" type="mail" name="MailProfil"></td>
                <td><input id="submitinfoperso" type="submit"value=Valider name="submit"></td>
              </tr>
            </table>
            <br><br>
            <label><strong><U>Mot de passe</U></strong></label>
            <table>
              <tr>
                <td>Modifier</td>
              </tr>
              <tr>
                <td><input id="box" type="password" name="PasswordProfil"></td>
                <td><input id="submitinfoperso" type="submit"value=Valider name="submit"></td>
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
<div id="Backoffice">
<h2> BACK OFFICE</h2>
<br> <br>
<br>
<hr width="100%"size="3" color=#EFD200 solid>
</div>
<br>
<br> <br>
  <form id="form" method="POST"action="ControllerGestionnaire.php">
    <div id="ajouterutilisateur">
    <fieldset>
      <legend><strong>AJOUTER UN UTILISATEUR</strong></legend>
      <br> <br>
<!--AFFICHAGE DE L'UTILISATEUR AJOUTÉ-->
      <h3><?php
      if ($test=1 &&empty(!$Prenom)&&empty(!$Nom))
        {
          echo 'Felicitations vous avez ajouté "'.$Prenom.' '.$Nom.'" en tant que utilisateur !';
        }
      ?></h3>
      <br>

      <label id="Nom" for="Nom"><strong><U>Nom</U></strong></label>
      <br>
      <input name="Nom"type="text" placeholder="Dupond" pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="Prenom"><strong><U>Prénom</U></strong></label>
      <br>
      <input name="Prenom"type="text" placeholder="Jean"pattern="[A-Za-z-].{1,}">
      <br> <br>
      <label id="Mail"><strong><U> Adresse mail</U></strong></label>
      <br>
      <input type="text"name="Mail" placeholder="Mail"pattern="[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}">
      <br> <br>
      <button id="submitrecherche" type="submit"name="submit"><span>Ajouter l'utilisateur</span></button>
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
  <div id="prisederdv">
  <form>
    <table>
      <tr>
        <td><strong><U>id_User</U></strong></td>
        <td><strong><U>Date</U></strong></td>
        <td><strong><U>Horaire</U></strong></td>
      </tr>
      <tr>
        <td><?php id_user_prochainrdv()?></td>
        <td><?php Date_prochainrdv()?></td>
        <td><?php horaire_prochainrdv()?></td>
      </tr>
    </table>
  </form>
  <br>
  </fieldset>
  </div>

  <br>
  <!-- FORMULAIRE "RESULTATS"-->
  <div id="résultats">
    <fieldset>
      <legend><strong>RESULTATS</strong></legend>
      <br>
      <form action="ControllerGestionnaire.php" method="POST">
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

      <button id="submitrecherche"><span>Afficher</span></button>
    </form>
    </fieldset>
  </div>
  <br><br><br>


<!-- RECHERCHER-->
<div id="rechercheuga">
<fieldset>
  <legend><strong><U>RECHERCHER</U></strong></legend>
  <form method="GET">
    <br><br>
     <input type="search" name="q" placeholder="Recherche..." />
     <br><br>
     <input id="submitrecherche" type="submit" value="Rechercher" />
     <br><br>
     <table id="abc">
        <tr>
          <td><strong><U>id_user</U></strong></td>
          <td><strong><U>Nom</U></strong></td>
          <td><strong><U>Prenom</U></strong></td>
          <td><strong><U>Date de naissance</U></strong></td>
          <td><strong><U>Sexe</U></strong></td>
          <td><strong><U>Mail</U></strong></td>
        </tr>
        <tr>
          <td><?php recherche_id_user();?></td>
          <td><?php recherche_nom_user()?></td>
          <td><?php recherche_prenom_user();?></td>
          <td><?php recherche_date_de_naissance_user();?></td>
          <td><?php recherche_sexe_user();?></td>
          <td><?php recherche_mail_user();?></td>
        </tr>
      </table>
  </form>
  <br><br>
</fieldset>
</div>
<br><br><br>

  <!-- AJOUTER UN RDV-->
  <div id="ajouterrdv">
    <fieldset>
      <br>
      <legend><strong>AJOUTER UN RDV</strong></legend>
      <form method="POST" action="ControllerGestionnaire.php">
        <table>
        <tr>
          <td><strong><U>id_User</U></strong></td>
          <td><strong><U>Date</U></strong></td>
          <td><strong><U>Centre</U></strong></td>
          <td><strong><U>Horaire</U></strong></td>
          <td><strong><U>Choix du test</U></strong></td>
          <td><strong><U>Valider</U></strong></td>
        </tr>
        <br>
        <tr>
          <td>
            <select name="id_user_rdv" for="prenom_utilisateur">
              <option><?php id_user_rdv();?></option>
            </select>
          </td>
          <td><input type="Date" name="date_rdv_utilisateur"></td>
          <td><?php centre_gestionnaire_rdv();?></td>
          <td><input type="time" name="horaire_rdv_utilisateur"></td>
          <td>
            <select name="test_utilisateur">
                <option>TEST 1</option>
                <option>TEST 2</option>
            </select>
          </td>
          <td><input id="submitrecherche" type="submit" name="submit"value="ajouter un rdv"></td>
        </tr>
      </table>
    </form>
    <br><br>
    </fieldset>
    <br><br><br>
  </div>

  <!--APPEL DU FICHIER JS-->
  <script src="/SITE/public/js/regexp.js"></script>

  <!--FOOTER-->
      <footer id="menu2">
          <nav>
              <ul>
                  <li id="link2"><a href="/SITE/controller/ControllerCGU.php">CGU & CL</a></li>
                  <li id="link2"><a href="/SITE/controller/ControllerContact.php">Contact</a></li>
                  <li id="link2"><a href="/SITE/controller/ControllerFAQ.php">FAQ</a></li>
                  <li id="link2"><a href="/SITE/controller/ControllerAboutus.php">À propos</a></li>
              </ul>
          </nav>
      </footer>
</html>
