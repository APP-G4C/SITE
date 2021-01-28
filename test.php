<?php
function rd_password(){
  $caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $len_c=strlen($caractere);
  $rdpassword = '';
  for ($i=0;$i<8;$i++){
    $rdpassword.=$caractere[random_int(0,$len_c-1)];
  }
  return $rdpassword;
}
$mdp=rd_password();
echo password_hash($mdp, PASSWORD_DEFAULT);

 ?>
