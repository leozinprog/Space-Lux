<?php
include("conexao.php");

$id = $_POST['id'];

if (!empty($_FILES['nova_imagem']['name'])) {
    $nomeArquivo = uniqid() . "_" . $_FILES['nova_imagem']['name'];
    $caminho = "uploads/" . $nomeArquivo;

    if (move_uploaded_file($_FILES['nova_imagem']['tmp_name'], $caminho)) {
        // Buscar a imagem antiga para excluir do servidor
        $res = $conexao->query("SELECT imagem FROM galeria WHERE id=$id");
        $row = $res->fetch_assoc();
        $imagem_antiga = "uploads/" . $row['imagem'];
        if (file_exists($imagem_antiga)) {
            unlink($imagem_antiga);
        }

        // Atualizar no banco
        $sql = "UPDATE galeria SET imagem='$nomeArquivo' WHERE id=$id";
        $conexao->query($sql);
    }
}
header("Location: admin_galeria.php");
exit;
