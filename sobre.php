<?php
include("conexao.php");
include('head.php');
include('header.php');
?>
<html>
<link rel="stylesheet" href="css/sobre.css">

<body>
    <main class="sobre">
        <div style="width: 100%;">
            <?php
            $sql_sobre = "SELECT * FROM sobre WHERE ativo = 1 ORDER BY id DESC";
            $resultado_sobre = $conexao->query($sql_sobre);

            if ($resultado_sobre->num_rows > 0) {
                $linha_sobre = $resultado_sobre->fetch_assoc();

                echo "<section class='sobre-info'>";
                echo "<h2>" . htmlspecialchars($linha_sobre['titulo']) . "</h2>";
                echo "<p>" . nl2br(htmlspecialchars($linha_sobre['descricao'])) . "</p>";

                if (!empty($linha_sobre['imagem'])) {
                    echo "<img src='imagens/sobre/{$linha_sobre['imagem']}' alt='Imagem Sobre' class='img-sobre'>";
                }

                echo "</section>";
            } else {
                echo "<p style='padding: 20px;'>Nenhuma informação cadastrada na seção Sobre.</p>";
            }
            ?>
        </div>
    </main>
</body>

</html>