<?php
// Initialisation session
session_start();
// On regarde si l'utilisateur est en ligne, si oui on le redirige sur la page d'accueil


// On charge le fichier config si pas déjà fait (charge databse)


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/config.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/fn_session.php');
$Mail = $Nom =$Prenom ="";
$err_Prenom = $err_Nom =$err_Mail= "";

// Si l'utilisateur entre des données dans le form...
//useless
$err=array('err_nom' =>$Nom ,'err_prenom' =>$Prenom,'err_mail' =>$Mail);
foreach ($err as $i ) {
  if (empty($i))
   {
    echo $i . "est vide";
  }
  # code...
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // On vérifie qu'un email a été entré
    if(empty(trim($_POST["Mail"]))){  //la fn trim sert a enlever les espaces sur les cotes du mail en cas de fautes de frappes
        $err_Mail = "Veuillez entrer votre adresse Mail.";
    } else{
        $Mail = trim($_POST["Mail"]);
    }

    // On vérifie qu'un mdp a été entré
    if(empty(trim($_POST["Prenom"]))){
        $err_password = "Veuillez entrer un Prénom.";
    } else{
        $password = trim($_POST["Prenom"]);
    }
    if(empty(trim($_POST["Nom"]))){
        $err_password = "Veuillez entrer un nom";
    } else{
        $password = trim($_POST["Nom"]);
    }

    // On vérifie qu'il n'y a pas d'erreur
    if(1==1){
      echo "bonjour";
       
    }

    // On ferme la connection à la base de donnée
    unset($pdo);
}
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






<br>
    <body>
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


              <label><strong><U>Email</U></strong></label>
              
              <br>
              <input type="email1" placeholder="Mail" value="">
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























 <hr width="100%"size="3" color=#EFD200 solid>
 <br>
  <div id="Backoffice">
      <p><strong><U>BACK OFFICE</U></strong></p>
      <br>
      <br>









      <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
        <div id="ajouterutilisateur">
        <fieldset>
          <legend><strong>AJOUTER UN GESTIONNAIRE</strong></legend>
          <br>
          <label id="nom" for="nom"><strong><U>Nom</U></strong></label>
          <br>
          <input name="nom"type="text" placeholder="Dupond"value="<?php echo $Nom; ?>">
          <br>
          <br>
          <label id="prenom"for='prenom'><strong><U>Prénom</U></strong></label>
          <br>
          <input name="prenom"type="text" placeholder="Jean"value="<?php echo $Prenom; ?>">
          <br>
          <br>
          <label id="email"for="email"><strong><U> Adresse mail</U></strong></label>
          <br>
          <input type="text"name="email" placeholder="email"value="<?php echo $Mail; ?>">
          <small></small>
          <br>
          <br>
          <button type="submit"><span>Ajouter l'utilisateur</span></button>
        
        </fieldset>
      </div>
       <div class="error_block"><p>
          <?php if(!empty($err_Nom)){
            echo $err_Nom;
          }
            elseif (!empty($err_Prenom)) {
              echo $err_Prenom;
            }
            elseif (!empty($err_Mail)) {
              echo $err_Mail;
            }
           ?></p>
        </div>
    </form>







<br>
<br>
        <div id="faq">
          <fieldset>
          <legend><strong>AJOUTER UNE FAQ</strong></legend>
          <label><strong><U>Titre FAQ:</U></strong></label>
          <br>
          <input type="text" placeholder="Titre FAQ">
          <br>
          <br>
          <label><strong><U>Description FAQ:</U></strong> </label>
          <br>
          <textarea></textarea>
          <br>
          <br>
          <button><span>Ajouter FAQ</span></button>
          </fieldset>
        </div>





<br>
<br>

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
