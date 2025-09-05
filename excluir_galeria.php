<?php
include("conexao.php");

$id = $_POST['id'];

// Buscar imagem antes de excluir
$res = $conexao->query("SELECT imagem FROM galeria WHERE id=$id");
$row = $res->fetch_assoc();
$imagem = "uploads/" . $row['imagem'];

if (file_exists($imagem)) {
    unlink($imagem);
}

// Excluir do banco
$sql = "DELETE FROM galeria WHERE id=$id";
$conexao->query($sql);

header("Location: admin_galeria.php");
exit;
