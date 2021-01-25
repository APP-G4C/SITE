         <?php 
         require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/controller/graph.php');
         require_once($_SERVER['DOCUMENT_ROOT'].'/SITE/model/fonction_graph.php');
         ?>
         <script >
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
  datasets: [{
    label: 'Battement par minutes',
    backgroundColor: 'rgb(255, 247, 0,0.25)',
    borderColor: 'rgb(0, 108, 255)',
    data: [<?php echo tram1();?>]
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
  labels: [<?php echo Heure1();?>],
  datasets: [{
    label: 'Battement par minutes',
    backgroundColor: 'rgb(255, 247, 0,0.25)',
    borderColor: 'rgb(0, 108, 255)',
    data: [<?php echo tram1();?>]
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