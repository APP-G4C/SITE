       <?php 
        
            // On attache les variables au statement comme paramètres
            
    function tram(){
      $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" SELECT * FROM valeur_test";
        $reponse = $bdd->query($sql);
      while ($donnees=$reponse->fetch()){
          $trame= "'".$donnees['trame']."',";
          echo $trame;}}

       function Heure(){
      $bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql=" SELECT * FROM valeur_test";
        $reponse = $bdd->query($sql);
      while ($donnees=$reponse->fetch()){
          $Heure= "'".$donnees['Heure']."',";
          echo $Heure;}}  ?>
        
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <div id="Graphique" style="width: 75%;margin: auto;">
          <canvas id="myChart"></canvas>
        </div>
          <script> 
            Chart.defaults.global.title.display=true;
            Chart.defaults.global.title.text="PAS DE TITRE";
            Chart.defaults.global.elements.point.radius=10;
          </script>
          <script > 
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
            // The type of chart we want to create
              type: 'line',

            // The data for our dataset
              data: {
                labels: [<?php echo Heure();?>],
                datasets: [{
                  label: 'Battement par minutes',
                  backgroundColor: 'rgb(255, 247, 0,0.25)',
                  borderColor: 'rgb(0, 108, 255)',
                  data: [<?php echo tram();?>]
                }]
              },

    // Configuration options go here
              options: {
                title:{
                  text:"Capteur cardiaque"
                },
                elements:{
                  point:{
                    radius:5,
                    backgroundColor: 'rgb(0,108,255)'
                  }
                }
              }
        });
          </script>