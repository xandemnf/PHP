<?php

require_once('function_valida_login.php');

$login_usuario = $_POST['login'];
$senha_usuario = $_POST['senha'];
$botao_logar = $_POST['login'];

$usuario_validado = valida_login($login_usuario, $senha_usuario);

if($usuario_validado==true){
	echo "Acesso Liberado";
}else{
	echo "Acesso NEGADO";
}

?>