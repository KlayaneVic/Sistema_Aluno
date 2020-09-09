<?php


    $pront = $_GET['pront'];
    $nomeEdit = $_GET['nomeEditavel'];
    $idadeEdit = $_GET['idadeEditavel'];
    $enderecoEdit = $_GET['enderecoEditavel'];
	
    include('cabecalho_conexao.php');
	
	$SQL = "UPDATE pessoas SET endereco='$enderecoEdit', 
    nome='$nomeEdit', idade='$idadeEdit' WHERE id=$pront";
	//echo $SQL;

	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
		echo "<a href='menu.php'>Voltar</a>";
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
	
    header('location:cons_todos_alunos.php');
?>
