<?php
	include "conexao.php";
	$codigo	= $_POST['codigo'];
	$nome	= $_POST['nome'];
	$end	= $_POST['endereco'];

	// Montando a query
    $query  ='INSERT cliente VALUES ("'.$codigo .'","'.$nome .'","'.$end .'");';
    
	// executando a query
	$res = mysqli_query( $GLOBALS["conexao"],$query);

	if($res == null)
		echo "erro na query... Dados não foram inseridos...<br>$query";
	else
		echo "Dados inseridos corretamente no banco";
?>
