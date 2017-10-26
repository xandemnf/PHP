<?php
//********* ISSET() **********

//valor = null, ou se nao existir $valor, isset() retornara false;
$valor = 0;
if( isset($valor) ){
	echo "Variavel Inicializada<br />";
} else {
	echo "Variavel não Inicializada<br />";
}

//********* EMPTY() **********
//TRUE -> '', 0, '0', false, null, array();
$valor = false;
if( empty($valor) ){
	echo "Variavel Vazia<br />";
} else {
	echo "Variavel não Vazia<br />";
}

//********* IS_NUMERIC() **********

$valor = '100a';
if( is_numeric($valor) ){
	echo "É um número<br />";
} else {
	echo "Não é um número<br />";
}




?>