<?php
function est_co (){
  if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
    return true;
  }
  else{
    return false;
  }
}
?>
