<?php 

require_once("funcao_desconto.php"); 

	$valor_total = 800;
	$valor_desconto = 10;
	$val_total_com_desconto = calcula_desconto($valor_total, $valor_desconto);
?>		

Valor Total: R$ <?php echo $valor_total . '<br />'?>
Valor do Desconto: R$ <?php echo $valor_desconto . '<br />' ?>
Valor Total com Desconto: R$ <?php echo  $val_total_com_desconto . '<br />' ?>