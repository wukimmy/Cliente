<?php
	$servidor = “localhost”;
	$login = “root”;
	$senha = “”;
	$banco = “nomeBanco”;

	$conexao = mysql_connect($servidor, $login, $senha);

	if($conexao != null)
	{
		$banco = mysql_select_db($banco);
		if($banco != null)
			echo "banco ok<br><br>";
	}
?>
