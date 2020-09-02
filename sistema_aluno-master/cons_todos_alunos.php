<?php
    include ('cabecalho_conexao.php');

    $SQL = "SELECT * FROM pessoas";

    $dados_recuperados = mysqli_query($con, $SQL);
    if(mysqli_num_rows($dados_recuperados) > 0){

        while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {

            echo $resultado['id'] . " - " . $resultado['nome'] . " - " . $resultado['idade'] . "<br>"; 
        }
	}else{
        echo "Nao ha alunos cadastrados.<br>";
    }
    echo "<a href='menu.php'>Voltar</a>";
	mysqli_close($con);
?>