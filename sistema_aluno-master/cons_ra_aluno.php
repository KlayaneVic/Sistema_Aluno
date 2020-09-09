<?php
	include("cabecalho.php");
?>

	<form action="operacao_ra.php" method="POST">
		<label>Informe o RA do aluno:</label>
		<input type="text" name="ra" />
		<br>
		
		<input type="submit" value="Pesquisar" />
	</form>
		
<?php
	include("rodape.php");
?>