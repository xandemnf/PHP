<?php 

function	calcula_desconto($valor_produto, $desconto){
   $valor_total_com_desconto = $valor_produto - ($valor_produto * ($desconto/100));
   return $valor_total_com_desconto;
}

?>		



	