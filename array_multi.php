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
   $tabuleiro[1]['a'] = "Torre Branca";
   $tabuleiro[1]['b'] = "Cavalo Branco";
   $tabuleiro[1]['c'] = "Bispo Branco";
   $tabuleiro[1]['d'] = "Rei Branco";
   $tabuleiro[1]['e'] = "Rainha Branca";
   $tabuleiro[1]['f'] = "Bispo Branco";;
   $tabuleiro[1]['g'] = "Cavalo Branco";
   $tabuleiro[1]['h'] = "Torre Branca";
   
   $tabuleiro[2]['a'] = "Peão Branco";
   $tabuleiro[2]['b'] = "Peão Branco";
   $tabuleiro[2]['c'] = "Peão Branco";
   $tabuleiro[2]['d'] = "Peão Branco";
   $tabuleiro[2]['e'] = "Peão Branco";
   $tabuleiro[2]['f'] = "Peão Branco";
   $tabuleiro[2]['g'] = "Peão Branco";
   $tabuleiro[2]['h'] = "Peão Branco";

   $tabuleiro[3]['a'] = "";
   $tabuleiro[3]['b'] = "";
   $tabuleiro[3]['c'] = "";
   $tabuleiro[3]['d'] = "";
   $tabuleiro[3]['e'] = "";
   $tabuleiro[3]['f'] = "";
   $tabuleiro[3]['g'] = "";
   $tabuleiro[3]['h'] = "";
   
   $tabuleiro[4]['a'] = "";
   $tabuleiro[4]['b'] = "";
   $tabuleiro[4]['c'] = "";
   $tabuleiro[4]['d'] = "";
   $tabuleiro[4]['e'] = "";
   $tabuleiro[4]['f'] = "";
   $tabuleiro[4]['g'] = "";
   $tabuleiro[4]['h'] = "";

   $tabuleiro[5]['a'] = "";
   $tabuleiro[5]['b'] = "";
   $tabuleiro[5]['c'] = "";
   $tabuleiro[5]['d'] = "";
   $tabuleiro[5]['e'] = "";
   $tabuleiro[5]['f'] = "";
   $tabuleiro[5]['g'] = "";
   $tabuleiro[5]['h'] = "";
   
   $tabuleiro[6]['a'] = "";
   $tabuleiro[6]['b'] = "";
   $tabuleiro[6]['c'] = "";
   $tabuleiro[6]['d'] = "";
   $tabuleiro[6]['e'] = "";
   $tabuleiro[6]['f'] = "";
   $tabuleiro[6]['g'] = "";
   $tabuleiro[6]['h'] = "";

   $tabuleiro[7]['a'] = "Peão Preto";
   $tabuleiro[7]['b'] = "Peão Preto";
   $tabuleiro[7]['c'] = "Peão Preto";
   $tabuleiro[7]['d'] = "Peão Preto";
   $tabuleiro[7]['e'] = "Peão Preto";
   $tabuleiro[7]['f'] = "Peão Preto";
   $tabuleiro[7]['g'] = "Peão Preto";
   $tabuleiro[7]['h'] = "Peão Preto";
   
   $tabuleiro[8]['a'] = "Torre Preto";
   $tabuleiro[8]['b'] = "Cavalo Preto";
   $tabuleiro[8]['c'] = "Bispo Preto";
   $tabuleiro[8]['d'] = "Rei Preto";
   $tabuleiro[8]['e'] = "Rainha Preto";
   $tabuleiro[8]['f'] = "Bispo Preto";;
   $tabuleiro[8]['g'] = "Cavalo Preto";
   $tabuleiro[8]['h'] = "Torre Preto";

   print_r($tabuleiro);






 


?>

	



	<!--
	<?= 'Teste de tag de impressão' ?>
	-->


		
		
	</body>
</html>