<?php
include("conexao.php");
include('verificalogin.php');

if (!isset($_GET['id'])) {
    echo "<script>alert('ID não informado!'); window.location.href='listar_sobre.php';</script>";
    exit;
}

$id = intval($_GET['id']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $sql_update = "UPDATE sobre SET titulo = ?, descricao = ?, ativo = ? WHERE id = ?";
    $stmt = $conexao->prepare($sql_update);
    $stmt->bind_param("ssii", $titulo, $descricao, $ativo, $id);


    if ($stmt->execute()) {
        echo "<script>alert('Atualizado com sucesso!'); window.location.href='listar_sobre.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar.');</script>";
    }

    $stmt->close();
} else {
    
    $sql = "SELECT * FROM sobre WHERE id = $id";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows == 0) {
        echo "<script>alert('Registro não encontrado!'); window.location.href='listar_sobre.php';</script>";
        exit;
    }

    $dados = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Sobre</title>
    <link rel="stylesheet" href="css/cadastro_sobre.css">
</head>

<body>

    <div class="container-sobre">
        <h2>Atualizar Informações da Sessão Sobre</h2>
        <form action="" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?= htmlspecialchars($dados['titulo']) ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="5"
                required><?= htmlspecialchars($dados['descricao']) ?></textarea>

            <label>
                <input type="checkbox" name="ativo" value="1" <?= $dados['ativo'] == 1 ? 'checked' : '' ?>>
                Ativar este conteúdo
            </label>

            <button type="submit">Atualizar</button>
        </form>

        <a href="listar_sobre.php" class="btn-voltar">← Voltar</a>
    </div>
</body>

</html>