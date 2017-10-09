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
		echo 'Teste de Tag padrão'
	?>

	<?= 'Teste de tag de impressão' ?>


		
		
	</body>
</html>