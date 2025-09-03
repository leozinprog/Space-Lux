<?php
include("conexao.php");
include('head.php');
include('header.php');
?>
<html>
<link rel="stylesheet" href="css/equipe.css">

<body>
    <main class="equipe">
        <div style="width: 100%;">
        <h1>A Equipe</h1>
    </div>
        </div>

        <div class="equipe-container"> 
            <?php
            $sql = "SELECT * FROM equipe ORDER BY id DESC";
            $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='imagens/equipe/{$linha['foto']}' alt='{$linha['nome']}'>";
                    echo "<h3>" . htmlspecialchars($linha['nome']) . "</h3>";
                    echo "<p>" . htmlspecialchars($linha['cargo']) . "</p>";
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
