<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    
    $imagem = '';
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $pasta_destino = 'img/';
        $nome_imagem = uniqid() . '_' . basename($_FILES['imagem']['name']);
        $caminho = $pasta_destino . $nome_imagem;
        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
        $imagem = $caminho;
    }

    $sql = "INSERT INTO sobre (titulo, descricao, imagem, ativo) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssi", $titulo, $descricao, $imagem, $ativo);

    if ($stmt->execute()) {
        header("Location: listar_sobre.php");
        exit();
    } else {
        echo "Erro ao salvar: " . $conexao->error;
    }
}
?>

