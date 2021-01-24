<?php 


function tram1()
{
	$bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	$sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User=159";
	$reponse = $bdd->query($sql);
	while ($donnees=$reponse->fetch())
	{
		$tram1= "'".$donnees['trame']."',";
		echo $tram1;
	}
}
function Heure1()
{
	$bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	$sql=" SELECT * FROM valeur_test WHERE id_test=1 AND id_User=159";
	$reponse = $bdd->query($sql);
	while ($donnees=$reponse->fetch())
	{
		$Heure1= "'".$donnees['Heure']."',";
		echo $Heure1;
	}
} 

function tram2()
{
	$bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	$sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User=159";
	$reponse = $bdd->query($sql);
	while ($donnees=$reponse->fetch())
	{
		$tram2= "'".$donnees['trame']."',";
		echo $tram2;
	}
}
function Heure2()
{
	$bdd=new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	$sql=" SELECT * FROM valeur_test WHERE id_test=2 AND id_User=159";
	$reponse = $bdd->query($sql);
	while ($donnees=$reponse->fetch())
	{
		$Heure2= "'".$donnees['Heure']."',";
		echo $Heure2;
	}
} 

?>