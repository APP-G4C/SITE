<?php


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>

    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
    <link rel="stylesheet" href="/SITE/public/css/contact.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>




</head>


  <header id="menu1">
    <nav>
        <ul id="menu">
            <li id="link"><a id="logoapp"href="ControllerAccueil.php"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="ControllerAccueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b2"href="ControllerFAQ.php"><i class="fas fa-info"></i> FAQ</a></li>
            <li id="link"><a id="b2"href="ControllerContact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <?php echo $modifheader ?>
        </ul>
    </nav>
  </header>









  <body>
    <div id="bloccontact">
      <form method="post" action="ViewContact.php">

    <!--Permet de traiter les données avec le php-->

        <div class="bloc">

              <span>
                <p class="Entete"><strong>Formulaire de Contact</strong></p>

              <p class="Mot"> Une question? <a class="lien" href ="ViewFAQ.php">Cliquez ici pour accéder à la FAQ</a> avant de nous contacter.<br> Merci de nous laisser vos questions, commentaires ou suggestions en complétant le formulaire. </p>
                <br>
                <!--REDIRIGE VERS LA FAQ DIRECTEMENT EN CLIQUANT DESSUS-->
              </span>


        </div>
      <br>
      <br>



    <div class="contenu">
        <fieldset>
        <legend> Informations importantes </legend>
      <!--FORMULAIRE-->
      <!-- 1) demande du Nom-->
                <div class="nom">
                  <label for="lname">
                    Remplissez votre nom :
                  </label>
                  <input type="text" name="lname" id="lname" placeholder="Nom" pattern="[A-Za-z]+" required />
                  <span class="validity"></span>
                </div>

                  <br/> <br/>
      <!-- 2) demande du Prénom-->
                <div class="Prenom">
                  <label for="fname">
                    Remplissez votre prénom :
                  </label>
                  <input type="text" name="fname" id="fname" placeholder="Prénom" pattern="[A-Za-z]+" required/>
                  <span class="validity"></span>
                </div>

                    <br><br>
      <!-- 3) demande du mail-->
                  <div class="email">
                    <label for="email">
                      Remplissez votre email:
                    </label>
                    <input type="email" name="email" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                    <span class="validity"></span>
                  </div>
                  <br/> <br/>
        <!-- 4) demande du Téléphone-->
                  <div class="tel">
                    <label for="tel">Entrez votre numéro de téléphone :</label>
                    <input type="tel" id="tel" name="tel" pattern="[0-9]{8,12}"required/>
                    <span class="validity"></span>
                  </div>
                  </br></br>
        </fieldset>
      <!-- 5) demande du Message-->
      <br>
          <div class="Message"><label class="label">Message:</label></div>

            <div class="input-row">

                <textarea name="message" rows="6" cols="65"data-size="full" required ></textarea>

            </div>
            <br>
            <br>
            <br><br>
            <script>
            function myFunction(){
              alert("Vous avez bien envoyé votre formulaire, merci !");}
            </script>
              <button class="btn" onclick="myFunction()" >Envoyer</button>
            </div>

        </div>
      </form>
    </div>

  </body>

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
