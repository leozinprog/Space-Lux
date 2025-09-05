<?php
include("conexao.php");
include("head.php");

?>

<link rel="stylesheet" href="css/visualizar.css">

<main class="equipe-section">
    <div class="top-bar">
        <a href="listar_equipe.php" class="btn-voltar">← Voltar</a>
    </div>
    <h1>Nossa Equipe</h1>
    <div class="equipe-container">
        <?php
        $sql = "SELECT * FROM equipe ORDER BY id DESC";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                echo '<div class="card-membro">';
                echo '<img src="imagens/equipe/' . htmlspecialchars($linha['foto']) . '" alt="' . htmlspecialchars($linha['nome']) . '">';
                echo '<h3>' . htmlspecialchars($linha['nome']) . '</h3>';
                echo '<p>' . htmlspecialchars($linha['cargo']) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>Nenhum membro cadastrado ainda.</p>';
        }
        ?>
    </div>
</main>