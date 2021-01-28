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
        <li id="link"><a id="logoapp"href="/SITE/controller/ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
        <li id="link"><a id="b2" href="/SITE/controller/ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
        <li id="link"><a id="b2"href="/SITE/controller/ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
        <li id="link"><a id="b2"href="/SITE/controller/ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        <!-- APPEL DE LA FONCTION DE "fn_session.php" AFIN DE MODIFIER LE HEADER EN FONCTION DE L'UTILISATEUR"-->
        <?php echo $modifheader ?>
    </ul>
  </nav>
  </header>

  <body>
    <!-- BOUTONS DE REDIRECTIONS SUR LA PAGE-->
    <a href="#informationspersonnelles"><button ><span>Informations personnelles</span></button></a>
    <a href="#résultats"><button><span>Résultats</span></button></a>
    <a href="#prochainsrdv"><button ><span>Prochains RDV</span></button></a>
    <a href="#Graphique"><button ><span>Graphique</span></button></a>
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
        <form method="post" action="ControllerUser.php">
            <label> <strong><U>Etat :</U></strong> Utilisateur</label>
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
                <td>
                  <select name="SexeProfil">
                    <option>Homme</option>
                    <option>Femme</option>
                    <option>Autre</option>
                  </select>
                </td>
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
      <br><br><br>

      <!--FORMULAIRE "RESULTATS"-->
        <div id="résultats">
          <fieldset>
            <legend><strong>RESULTATS</strong></legend>
            <br>
              <table>
                <tr>
                  <td><strong><U>id_test</U></strong></td>
                  <td><strong><U>trame</U></strong></td>
                  <td><strong><U>Heure</U></strong></td>
                </tr>
                <br>
                <tr>
                  <td><label><?php  user_id_test();?></label></td>
                  <td><label><?php user_trame();?></label></td>
                  <td><label><?php user_Heure();?></label></td>
                </tr>
              </table>
              <br>
          </fieldset>
        </div>
        <br><br>

          <!-- FORMULAIRE " PROCHAINS RDV"-->
    <div id="prochainsrdv">
      <fieldset>
        <legend><strong>PROCHAINS RDV</strong></legend>
        <br>
        <form>
          <table>
            <tr>
              <td><strong><U>Date</U></strong></td>
              <td><strong><U>Horaire</U></strong></td>
            </tr>
            <br>
            <tr>
              <td><?php  user_Date_prochainrdv();?></td>
              <td><?php  user_horaire_prochainrdv();?></td>
            </tr>
          </table>
        </form>
        <br>
      </fieldset>
    </div>
    <br>

      <!--GRAPHIQUE-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <h2> TEST </h2>
      <div id="Graphique" style="width: 50%;margin: auto;">
        <canvas id="myChart"></canvas>
        <canvas id="test"></canvas>
      </div>
          <script src="/SITE/public/js/graph.js.js"></script>
          <script>
            Chart.defaults.global.title.display=true;
            Chart.defaults.global.title.text="PAS DE TITRE";
            Chart.defaults.global.elements.point.radius=10;
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
            // The data for our dataset
            data:
            {
              labels: [<?php echo Heure1();?>],
              datasets: [
              {
                label: 'Battement par minutes',
                backgroundColor: 'rgb(255, 247, 0,0.25)',
                borderColor: 'rgb(0, 108, 255)',
                data: [<?php echo tram1();?>]
              }
              ]
            },
            // Configuration options go here
            options:
            {
              title:
              {
                text:"Capteur cardiaque"
              },
              elements:
              {
                point:
                {
                  radius:5,
                  backgroundColor: 'rgb(0,108,255)'
                }
              }
            }
          }
          );
            Chart.defaults.global.title.display=true;
            Chart.defaults.global.title.text="PAS DE TITRE";
            Chart.defaults.global.elements.point.radius=10;
            var ctx = document.getElementById('test').getContext('2d');
            var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
            // The data for our dataset
            data:
            {
              labels: [<?php echo Heure2();?>],
              datasets: [
              {
                label: 'Pression',
                backgroundColor: 'rgb(255, 247, 0,0.25)',
                borderColor: 'rgb(0, 108, 255)',
                data: [<?php echo tram2();?>]
              }]
            },
            // Configuration options go here
            options:
            {
              title:
              {
                text:"Capteur cardiaque"
              },
              elements:
              {
                point:
                {
                  radius:5,
                  backgroundColor: 'rgb(0,108,255)'
                }
              }
            }
          }
          );
      </script>
    <br>
  </body>

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
  <!--APPEL DU FICHIER JS-->
  <script src="/SITE/public/js/regexp.js"></script>
</html>
