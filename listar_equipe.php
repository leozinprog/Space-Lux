<?php
include("conexao.php");
include("verificalogin.php");
include("head.php");
include("header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Equipe - Space Lux</title>
    <link rel="stylesheet" href="css/listar.css">
</head>

<body>
    <h2>Equipe Cadastrada</h2>
    <div class="btn-novo-membro">
        <a href="cadastro_equipe.php" class="botao-cadastrar">+ Cadastrar</a>
    </div>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM equipe ORDER BY id DESC";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='imagens/equipe/" . htmlspecialchars($linha['foto']) . "' width='60'></td>";
                    echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['cargo']) . "</td>";
                    echo "<td>
                  <a href='editar_equipe.php?id={$linha['id']}'>Editar</a> |
                  <a href='excluir_equipe.php?id={$linha['id']}' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
                </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum membro cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>