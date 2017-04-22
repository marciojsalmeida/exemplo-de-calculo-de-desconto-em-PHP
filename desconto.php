<?php
	require_once("funcoes_desconto.php");

	$valorTotal = 800;
	$desconto = 10;

	$valorComDesconto = calculaDesconto($valorTotal, $desconto);
?>

Valor total : R$ <?php echo $valorTotal ?> <br />
Valor desconto: <?php echo $desconto ?>% <br />
Valor total com desconto:R$ <?php echo $valorComDesconto ?>

	
