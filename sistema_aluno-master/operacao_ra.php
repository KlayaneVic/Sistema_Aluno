<?php
    include ('cabecalho_conexao.php');
    $ra = $_POST['ra'];
    $SQL = "SELECT * FROM pessoas where id = $ra";

    $dados_recuperados = mysqli_query($con, $SQL);
    if(mysqli_num_rows($dados_recuperados) > 0){

        while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {

            echo $resultado['id'] . " - " . $resultado['nome'] . " - " . $resultado['idade'] . "<br>"; 
        }
	}else {
        echo "Nao possui Aluno com este RA. <br>";
    }
    echo "<a href='menu.php'>Voltar</a>";

	mysqli_close($con);
?>