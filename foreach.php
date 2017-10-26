<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Foreach</title>	

      </script>
	</head>

	<body>

	<?php 
		$produtos[1] = 'Sofá';
		$produtos[2] = 'Mesa';
		$produtos[3] = 'Cadeira';
		$produtos[4] = 'Fogão';
		$produtos[5] = 'Geladeira';

		foreach($produtos as $produto){
			echo $produto . '<br />';

		}

?>		
		
	</body>
</html>