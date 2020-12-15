<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Website | Accueil</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/SITE/public/css/Header.css">
    <link rel="stylesheet" href="/SITE/public/css/footer.css">
    <link rel="stylesheet" href="/SITE/public/css/style.css">
   

    

</head>


  <header id="menu1">
    <nav>
        <ul id="menu">


            <li id="link"><a id="logoapp"href="accueil.html"><img src="/SITE/public/images/logoapp.png"/></a></li>
            <li id="link"><a id="b2" href="accueil.html"><i class="fas fa-home"></i> Accueil</a></li>
            <li id="link"><a id="b3"href="faq.html"><i class="fas fa-info"></i> Aide</a></li>
            <li id="link"><a id="b4"href="contact.html"><i class="fas fa-envelope"></i> Contact</a></li>
            <li id="link"><a id="b5"href="connexion.html"><i class="far fa-id-badge"></i> Connexion</a></li>



            <!--UTILISATEUR
            <li id='link'><a id="b6"href="#"> Ma Page</a>
                    <ul>
                        <li><a href="pageutilisateur.html"> Ma Page Utilisateur</li></a>
                        <li><a href="#">Déconnexion</li></a>
                    </ul>
                </li><!-->

             <!--GESTIONNAIRE
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.html"> Ma Page Gestionnaire</li></a>
                   
                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->
            <!-- ADMIN
             <li id='link'><a id="b7"href="#"> Ma Page</a>
                <ul>
                    <li><a href="pagegestionnaire.html"> Ma Page Administrateur</li></a>
                  

                    <li><a href="#">Déconnexion</li></a>
                </ul>
            </li><!-->
                
        </ul>
    </nav>
  </header>







    <body>
       <div id="informationspersonnelles">
      <fieldset> 
      <legend>INFORMATIONS PERSONELLES</legend>
          <label> Etat : Administrateur</label>
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

    <div id="prochainsrdv">
      <fieldset>
        <legend>Prochains RDV</legend>
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
          </tr>
        </table>
      </fieldset>
    </div>


     <div id="résultats">
      <fieldset>
        <legend>Résultats</legend>


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
          <legend>Ajouter un gestionnaire</legend>
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
          <button>Ajouter le gestionnaire</button>
        </fieldset>
        <fieldset>
          <legend>Ajouter une FAQ</legend>
          <label> Titre FAQ:</label>
          <br>
          <input type="text" placeholder="Titre FAQ">
          <br>
          <br>
          <label>Description FAQ: </label>
          <br>
          <textarea></textarea>
          <br>
          <br>
          <button>Ajouter FAQ</button>
        </fieldset>

        <fieldset>
          <legend>Ajouter une CGU ou une CL</legend>
          <label> Titre CGU/CL:</label>
          <br>
          <input type="text" placeholder="Titre CGU/CL">
          <br>
          <br>
          <label>Description CGU/CL: </label>
          <br>
          <textarea></textarea>
          <br>
          <br>
          <button>Ajouter CGU/CL</button>
      </fieldset>
      </fieldset>

      

    </body>

   <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="cgu.html">CGU & CL</a></li>
                <li id="link2"><a href="contact.html">Contact</a></li>
                <li id="link2"><a href="faq.html">FAQ</a></li>
                <li id="link2"><a href="aboutus.html">À propos</a></li>
            </ul>
        </nav>
    </footer>

    

</html>