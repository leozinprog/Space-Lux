<?php
include("conexao.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    
    $sql_check = "SELECT * FROM sobre WHERE id = $id";
    $resultado = $conexao->query($sql_check);

    if ($resultado->num_rows > 0) {
        
        $sql_delete = "DELETE FROM sobre WHERE id = $id";
        if ($conexao->query($sql_delete) === TRUE) {
            echo "<script>alert('Registro excluído com sucesso!'); window.location.href='listar_sobre.php';</script>";
        } else {
            echo "<script>alert('Erro ao excluir: " . $conexao->error . "'); window.location.href='listar_sobre.php';</script>";
        }
    } else {
        echo "<script>alert('Registro não encontrado!'); window.location.href='listar_sobre.php';</script>";
    }
} else {
    echo "<script>alert('ID inválido!'); window.location.href='listar_sobre.php';</script>";
}
?>
