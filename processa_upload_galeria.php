<?php
include("conexao.php");

if (!empty($_FILES['imagens']['name'][0])) {
    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {
        $nomeArquivo = uniqid() . "_" . $_FILES['imagens']['name'][$key];
        $caminho = "uploads/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $caminho)) {
            $sql = "INSERT INTO galeria (imagem) VALUES ('$nomeArquivo')";
            $conexao->query($sql);
        }
    }
}
header("Location: admin_galeria.php");
exit;
