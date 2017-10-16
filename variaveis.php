<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Divs</title>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		
		<!-- jquery -->
		<!---<script src="js/jquery-3.2.1.js"></script>--> 

		<script type="text/javascript">
			function exibeElementoporTag(tag){
 			   $(tag).show();
			}

			function ocultaElementoporTag(tag){
				$(tag).hide();
			}

			function exibeElementoporClasse(classe){
 			   $("."+classe).show();
			}

			function ocultaElementoporClasse(classe){
				$("."+classe).hide();
			}

      </script>
	</head>

	<body>




	<?php 
	//echo 'Teste de Tag padrão'
	//INTEIRO
	$valor_inteiro = 2;
	echo $valor_inteiro;
	echo '<br />';

	$valor_inteiro = $valor_inteiro * 4;
	echo $valor_inteiro . '<br />'; // . = concatena
	echo '<br />';

	//floatval(var)
	$valor_float = 5.43;
	echo $valor_float;
	echo '<br />';

	//BOOLEAM
	$var_bollean = true;
	echo $var_bollean;
	echo '<br />';

	//STRING
	$texto = "Curso de PHP = $valor_inteiro";
	echo $texto;
	echo '<br />';
	//aspas simples significa texto literal
	$texto = 'Curso de PHP = $valor_inteiro';
	echo $texto;
	echo '<br />';
	echo '<br />';

	//ARRAYS
	$arrays[1] = "Este é um teste de array 1";
	$arrays[2] = "Este é um teste de array 2";
	$arrays[3] = "Este é um teste de array 3";
	$arrays[4] = "Este é um teste de array 4";
	$arrays[5] = "Este é um teste de array 5";

	var_dump($arrays);
	echo '<br />';
	echo '<br />';

	print_r($arrays);
	echo '<br />';
	echo '<br />';

	echo $arrays[4];
	echo '<br />';
	echo '<br />';

	print "$arrays[2]";
	echo '<br />';
	echo '<br />';

 	


?>

	



	<!--
	<?= 'Teste de tag de impressão' ?>
	-->


		
		
	</body>
</html>