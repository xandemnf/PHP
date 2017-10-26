<?php

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$cpf_len = strlen($cpf);
echo $cpf_len;

?>

<form method="post" action="">
	<label>
		CPF:
		<input type="text" name="cpf">
	</label>
	<input type="submit" name="cadastrar" value="cadastrar">
</form>