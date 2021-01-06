	<?PHP
	$con = mysql_connect ("localhost", "user", "pwd") ;
	si (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}

	mysql_select_db ("maBase", $con) ;
	//en stocke la date du jour dans la variable $date_inscri
	$date_inscri=date();

	$sql=" INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `age`, `paye`, `sexe`, `date inscri`)
	VALUES
	('','$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[paye]','$_POST[sexe]','$date_inscri')";

	if (!mysql_query($sql,$con))
	{
	die('impossible d’ajouter cet enregistrement : ' . mysql_error());
	}
	echo "L’enregistrement est ajouté ";

	mysql_close($con)
	?>
	<a href=" formulaire.php ">Retour au formulaire</a>

 

Dans cet exemple nous créer deux pages:
Une qui contient le formulaire que nous avons nommé formulaire.php
Une page qui traite les données du formulaire insert.php .
Pour insérer la date nous avons utilisé la fonction php date() qui renvoie la date du jour.
Nous aurons pu utiliser une seule page voici le code:

Sélectionner le code


<?PHP
//On teste si le formulaire a été soumis
	if ((isset($_POST['nom'])) && (isset($_POST['prenom']))	&& (isset($_POST['age'])) && (isset($_POST['paye'])) && (isset($_POST['sexe']) ))
	{
	//on teste si tous les champs du formulaire sont remplits
	if ((!empty($_POST['nom'])) && (!empty($_POST['prenom']))	&& (!empty($_POST['age'])) && (!empty($_POST['paye'])) && (!empty($_POST['sexe'])))
	{
	//on se connecte au srveur
	$con = mysql_connect ("localhost", "root", "") ;
if (! $con){
die("ne pourrait pas se relier : ". mysql_error ());
}
// on selectionne la base de données
mysql_select_db ("mabase", $con) ;
//On stocke la date du jour dans la variable $date_inscri
$date_inscri= date("Y-m-d");
//on insere les données du formulaire dans la table 
$sql=" INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `age`, `paye`, `sexe`, `dateInscrit`)
VALUES('','$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[paye]','$_POST[sexe]','$date_inscri')";

if (!mysql_query($sql,$con))
{
die('impossible d’ajouter cet enregistrement : ' . mysql_error());
}
echo "L’enregistrement est ajouté ";
mysql_close($con);
}else $erreure="Un champ est vide";


}
?>
<html>
<body>
<?php
if(isset($erreure)) echo $erreure;
?>

<form action="" method="post">

Nom: <input type="text" name="nom" />
Prénom: <input type="text" name="prenom" />
Age: <input type="text" name="age" />
Payé : <input type="text" name="paye" />
Genre: <input type="text" name="sexe" />
 
<input type="submit" />
</form>

</body>
</html>