<?php
    include("cabecalho.php");
    $pront = $_GET['pront'];
?>

	<form action="ideia.php" method="GET">
		<label>Nome:</label>
		<input type="text" name="nomeEditavel" />
		<br>
		
		<label>Endereço:</label>
		<input type="text" name="enderecoEditavel" />
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idadeEditavel" />
		<br>
		
        <input type="hidden" id="pront" name="pront" value="<?php echo $pront?>" />
		<input type="submit" value="Salvar" />
	</form>
		
<?php
	include("rodape.php");
?>