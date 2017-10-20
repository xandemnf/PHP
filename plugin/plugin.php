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

		$url = "http://www.infomoney.com.br/mercados/acoes-e-indices";
		$html = file_get_html($url);

		$content = $html->find('#figQuotes',0);

		$info = array();
		/* 
		INDICES DO ARRAY INFO;
		$info['dolar_comercial'];
		$info['dolar_turismo'];
		$info['euro_comercial'];
		$info['euro_turismo'];
		$info['btc']; */

		foreach($content->find('li#liStock.li-dolar',0) as $elemento){

			//$teste = $elemento->find('strong',0);

			echo $elemento;

		}

				

		//$teste = $content->plaintext;

/*
foreach($content->find('h2.title') as $elemento){
	$titulos = array();
	
	$a = $elemento->find('a',0);
	
	$titulo= $a->plaintext;
	
	$titulos["titulo"] = $titulo;
	
	array_push($info,$titulo);
}*/




		
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