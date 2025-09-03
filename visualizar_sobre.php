<?php
include('conexao.php');
include('head.php');

if (!isset($_GET['id'])) {
    echo "<p>ID não especificado.</p>";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM sobre WHERE id = $id";
$resultado = $conexao->query($sql);

if ($resultado->num_rows != 1) {
    echo "<p>Registro não encontrado.</p>";
    exit;
}

$dado = $resultado->fetch_assoc();
?>

<link rel="stylesheet" href="css/visualizar_sobre.css">

<body>
    <?php include('header.php'); ?>

    <div class="container">
        <h2>Visualizar Detalhes</h2>

        <div class="detalhe">
            <strong>Título:</strong>
            <p><?= htmlspecialchars($dado['titulo']) ?></p>
        </div>

        <div class="detalhe">
            <strong>Descrição:</strong>
            <p><?= nl2br(htmlspecialchars($dado['descricao'])) ?></p>
        </div>

        <div class="btn-voltar">
            <a href="listar_sobre.php" class="botao-voltar">Voltar</a>
        </div>
    </div>
</body>
</html>
