
<?php
//On teste si le formulaire a été soumis
	if ((isset($_POST['nom'])) && (isset($_POST['prenom']))	&& (isset($_POST['email'])))
	{
	//on teste si tous les champs du formulaire sont remplits
	if ((!empty($_POST['nom'])) && (!empty($_POST['prenom']))	&& (!empty($_POST['email'])))
	{
	//on se connecte au srveur
	$con = mysql_connect ("localhost", "root", "") ;
if (! $con){
die("ne pourrait pas se relier : ". mysql_error ());
}
// on selectionne la base de données
mysql_select_db ("mabase", $con) ;
//On stocke la date du jour dans la variable $date_inscri

//on insere les données du formulaire dans la table 
	$sql=" INSERT INTO `User` (`id_User`, `id_centre`,`Nom, `Prenom`, `Sexe`,`Date_de_Naissanc`,`Mail`,`Password`,`Type`)
  VALUES
  ('','',$_POST[nom],'$_POST[prenom]','','','$_POST[email]','','2')";

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
email: <input type="text" name="email" />

 
<input type="submit" />
</form>

</body>
</html>