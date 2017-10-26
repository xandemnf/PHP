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

	    $url = 'https://economia.uol.com.br/cotacoes/';

		$html = file_get_html($url);

		//Multiplas Classes devem ser separadas por vígula
		$rows = $html->find('table.borda, table.mod-grafico-wide, table.quatro-colunas, td'); 	

		//Desconmente o bloco abaixo para imprimir os valores extraidos linha a linha para visualizar melhor o comprotamento do foreach
		/*
	   foreach ($rows as $row) {
	    	echo '<b>Achados nº ' . $counter . ': </b><br />';
	    	echo $row->outertext;
	    	echo '<hr /><br />';
	    	$counter++;
		} */

		foreach ($rows as $row) {
	    	//Dolar Comercial
	    	if($counter==7){ 
	    		$dolar_com_nome = $row->innertext;
	    	}
   	        if($counter==8){ 
	    		$dolar_com_compra = $row->innertext;
	    	}
    	    if($counter==9){ 
    			$dolar_com_venda = $row->innertext;
    	   	}
    	    if($counter==10){ 
    			$dolar_com_variacao = $row->innertext;
	    	}

	    	//Dolar Turismo
	    	if($counter==11){ 
	    		$dolar_tur_nome = $row->innertext;
	    	}
   	        if($counter==12){ 
	    		$dolar_tur_compra = $row->innertext;
	    	}
    	    if($counter==13){ 
    			$dolar_tur_venda = $row->innertext;
    	   	}
    	    if($counter==14){ 
    			$dolar_tur_variacao = $row->innertext;
	    	}

	    	//Euro
	    	if($counter==15){ 
	    		$euro_nome = $row->innertext;
	    	}
   	        if($counter==16){ 
	    		$euro_compra = $row->innertext;
	    	}
    	    if($counter==17){ 
    			$euro_venda = $row->innertext;
    	   	}
    	    if($counter==18){ 
    			$euro_variacao = $row->innertext;
	    	}

	    	//Libra
	    	if($counter==19){ 
	    		$libra_nome = $row->innertext;
	    	}
   	        if($counter==20){ 
	    		$libra_compra = $row->innertext;
	    	}
    	    if($counter==21){ 
    			$libra_venda = $row->innertext;
    	   	}
    	    if($counter==22){ 
    			$libra_variacao = $row->innertext;
	    	}

	    	//Peso Argentino
	    	if($counter==23){ 
	    		$pes_arg_nome = $row->innertext;
	    	}
   	        if($counter==24){ 
	    		$pes_arg_compra = $row->innertext;
	    	}
    	    if($counter==25){ 
    			$pes_arg_venda = $row->innertext;
    	   	}
    	    if($counter==26){ 
    			$pes_arg_variacao = $row->innertext;
	    	}

	    	$counter++;
		} 

?>	

<div class="container">
   <div class="row">
   		<h1>Plugin</h1>
   </div>

<table cellspacing="0" border="1" style="text-align: center">
   <tr>
      <td style="padding: 3px 5px;" colspan="2">Moeda</td>
	  <td style="padding: 3px 5px;" colspan="2">Compra</td>
      <td style="padding: 3px 5px;" colspan="2">Venda</td>
	  <td style="padding: 3px 5px;" colspan="2">Variação</td>
   </tr>
   <tr>
   	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_com_nome?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_com_compra?></td>
      <td style="padding: 3px 5px;" colspan="2"><?= $dolar_com_venda?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_com_variacao?></td>
   </tr>
   <tr>
   	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_tur_nome?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_tur_compra?></td>
      <td style="padding: 3px 5px;" colspan="2"><?= $dolar_tur_venda?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $dolar_tur_variacao?></td>
   </tr>
   <tr>
   	  <td style="padding: 3px 5px;" colspan="2"><?= $euro_nome?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $euro_compra?></td>
      <td style="padding: 3px 5px;" colspan="2"><?= $euro_venda?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $euro_variacao?></td>
   </tr>
   <tr>
   	  <td style="padding: 3px 5px;" colspan="2"><?= $libra_nome?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $libra_compra?></td>
      <td style="padding: 3px 5px;" colspan="2"><?= $libra_venda?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $libra_variacao?></td>
   </tr>
   <tr>
   	  <td style="padding: 3px 5px;" colspan="2"><?= $pes_arg_nome?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $pes_arg_compra?></td>
      <td style="padding: 3px 5px;" colspan="2"><?= $pes_arg_venda?></td>
	  <td style="padding: 3px 5px;" colspan="2"><?= $pes_arg_variacao?></td>
   </tr>


</table>







</div>

</body>
</html>