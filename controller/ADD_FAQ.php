<?php

if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] === true){
    header("Location: page_administrateur.php");
    exit;
}


require_once $_SERVER['DOCUMENT_ROOT']."/SITE/controller/config.php";
$Question = $Reponse = "";
$err_Question = $err_Reponse = "";


if ($_SERVER['REQUEST_METHOD']=='POST'){
      if(empty(trim($_POST["Question"]))){
          $err_Question = "Veuillez entrer la question.";
      } else{
          $Question = trim($_POST["Question"]);
      }
      if(empty(trim($_POST["Reponse"]))){
          $err_Reponse = "Veuillez entrer la reponse à la question.";
      } else{
          $Reponse = trim($_POST["Reponse"]);
      }


        $sql=" INSERT INTO faq (`Question`, `Reponse`) VALUES (:Question, :Reponse)";
        $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":Question", $param_Question, PDO::PARAM_STR);
            $stmt->bindParam(":Reponse", $param_Reponse, PDO::PARAM_STR);
            $param_Question = trim($_POST["Question"]);
            $param_Reponse = trim($_POST["Reponse"]);
            $stmt->execute();


}unset($pdo);
?>
