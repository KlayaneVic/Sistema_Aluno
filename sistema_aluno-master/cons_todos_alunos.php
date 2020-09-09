<?php
    include ('cabecalho_conexao.php');

    $SQL = "SELECT * FROM pessoas";

    $dados_recuperados = mysqli_query($con, $SQL);

    if($dados_recuperados){
        if(mysqli_num_rows($dados_recuperados) > 0){
            echo "<table border='1'>";
            echo "<tr>
					<th>Prontuário</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Endereço</th>
					<th colspan='2'>Operações</th>
				  </tr>";
            while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                echo "<tr>";
                echo "<td>" . $resultado['id'] . "</td>";
                echo "<td>" . $resultado['nome'] . "</td>";
                echo "<td>" . $resultado['idade'] . "</td>";
                echo "<td>" . $resultado['endereco'] . "</td>";
                echo "<td><a href='edita_aluno.php?pront=$resultado[id]'>Editar</a></td>";
                echo "<td><a href='remover_aluno.php?pront=$resultado[id]'>Remover</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        }else{
            echo "Nao ha alunos cadastrados.<br>";
        }
    }
    echo "<a href='menu.php'>Voltar</a>";
    mysqli_close($con);
?>