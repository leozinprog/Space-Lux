<?php
include("conexao.php");
include('head.php');
include('header.php');
?>
<html>
<link rel="stylesheet" href="css/equipe.css">
<body>
    <main class="equipe">
        <div class="equipe-container">
            <div>
                <h1>A Equipe</h1>
            </div>
        </div>

        <div class="row equipe-row">
            <?php
            $sql = "SELECT * FROM equipe ORDER BY id DESC";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                $contador = 0;

                while ($linha = $resultado->fetch_assoc()) {
                    if ($contador % 2 == 0) {
                        echo "<div class='column'>";
                    }

                    echo "<img src='imagens/equipe/{$linha['foto']}' alt='{$linha['nome']}' style='width: 100%'>";
                    echo "<h3>" . htmlspecialchars($linha['nome']) . "</h3>";
                    echo "<p>" . htmlspecialchars($linha['cargo']) . "</p>";

                    if ($contador % 2 == 1) {
                        echo "</div>";
                    }

                    $contador++;
                }

                // Fecha a última coluna se o número de membros for ímpar
                if ($contador % 2 != 0) {
                    echo "</div>";
                }

            } else {
                echo "<p style='padding: 20px;'>Nenhum membro cadastrado.</p>";
            }
            ?>
        </div>
    </main>
</body>

</html>