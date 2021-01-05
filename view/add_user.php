<?php
// define variables and set to empty values




// define variables and set to empty values
$nomErr = $emailErr = $prenomrErr  = "";
$nom = $prenom = $email  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "Name is required";
  } else {
    $nom = test_input($_POST["nom"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["prenom"])) {
    $prenom = "";
  } else {
    $prenom = test_input($_POST["prenom"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

  echo $nom;
}
?>