<?php

function valida_login($login, $senha){
  $nome = "Alexandre";
  $key = "12345";

  if($login==$nome && $senha == '12345'){
     return true;
  } else{ 
     return false;
  }
}

?>