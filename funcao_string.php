<?php

//strtolower
$texto = 'Curso Completo de PHP';
echo $texto . '<br />';
$texto_lower = strtolower($texto);
echo $texto_lower . '<br /><br />';

//strtoupper
$texto = 'Curso Completo de PHP';
echo $texto . '<br />';
$texto_upper = strtoupper($texto);
echo $texto_upper . '<br /><br />';

//Upper Case First ucfirst
$texto = 'curso completo de PHP';
echo $texto . '<br />';
$texto_ucfirst = ucfirst($texto);
echo $texto_ucfirst . '<br /><br />';

//strlen
$texto = 'Curso Completo de PHP';
echo $texto . '<br />';
$texto_strlen = strlen($texto);
echo 'Quantidade de caracteres na linha acima: ' . $texto_strlen . '<br /><br />';


?>