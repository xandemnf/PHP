<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Plugin</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

 <?php 	

		include "simple_html_dom.php";
		include "pretty_json.php";
		
		$counter = 1;

		//$html = new simple_html_dom();

		//$html = load_file('https://www.juanwilde.com/');

		$url = 'https://www.juanwilde.com/';

		$html = file_get_html($url);

		$titles = $html->find('h3');

	    foreach ($titles as $title) {
	    	echo '<b>Título nº ' . $counter . ': </b><br />';
	    	echo $title->innertext;
	    	echo '<hr /><br />';
	    	$counter++;
	    }

?>	


<div class="container">
   <div class="row">
   		<h1>Plugin</h1>
   </div>

<table cellspacing="0" border="1";>
   <tr>
      <td style="padding: 3px 5px;" colspan="2">Dólar Comercial</td>
	  <td style="padding: 3px 5px;" colspan="2">Dólar Turismo</td>
      <td style="padding: 3px 5px;" colspan="2">Euro Comercial</td>
	  <td style="padding: 3px 5px;" colspan="2">Euro Turismo</td>
	  <td style="padding: 3px 5px;" colspan="2">BitCoin</td>
   </tr>
   <tr>
   	  <!--Variação no dia-->
      <td style="padding: 3px 5px;">var</td>
	  <!--Valor em Reais-->
	  <td style="padding: 3px 5px;">R$</td>
	   <!--Variação no dia-->
      <td style="padding: 3px 5px;">var</td>
	  <!--Valor em Reais-->
	  <td style="padding: 3px 5px;">R$</td>
	  <!--Variação no dia-->
      <td style="padding: 3px 5px;">var</td>
	  <!--Valor em Reais-->
	  <td style="padding: 3px 5px;">R$</td>
	  <!--Variação no dia-->
      <td style="padding: 3px 5px;">var</td>
	  <!--Valor em Reais-->
	  <td style="padding: 3px 5px;">R$</td>
	  <!--Variação no dia-->
      <td style="padding: 3px 5px;">var</td>
	  <!--Valor em Reais-->
	  <td style="padding: 3px 5px;">R$</td>
	 
    </tr>


</table>







</div>

</body>
</html>