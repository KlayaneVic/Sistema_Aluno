<?php
    include("cabecalho.php");
    include("cabecalho_conexao.php");
    $pront = $_GET['pront'];
    $SQL = "SELECT * FROM pessoas where id = $pront";
    $dados_recuperados = mysqli_query($con, $SQL);
    $resultado = mysqli_fetch_assoc($dados_recuperados);
?>

	<form action="processa_edita_aluno.php" method="GET">
		<label>Nome:</label>
		<input type="text" name="nomeEditavel" value="<?php echo $resultado['nome'];?>"/>
		<br>
		
		<label>Endereço:</label>
		<input type="text" name="enderecoEditavel" value="<?php echo $resultado['endereco'];?>"/>
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idadeEditavel" value="<?php echo $resultado['idade'];?>"/>
		<br>
		
        <input type="hidden" id="pront" name="pront" value="<?php echo $pront?>" />
		<input type="submit" value="Salvar" />
	</form>
		
<?php
	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
		echo "<a href='menu.php'>Voltar</a>";
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
	include("rodape.php");
?>