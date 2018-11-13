<?php
	include "conexao.php";

	$consulta = "select * from cliente";
	$resultado = mysqli_query($GLOBALS["conexao"],$consulta);

	if($resultado != null)
	{
		while($registro = mysqli_fetch_object($resultado))
		{
			echo "<a href='excluir.php?cod=$registro->codigo'>";
			echo $registro->nome . " | ";
			echo "</a><br>";
		}
	}
		?>
