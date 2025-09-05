<?php
include("conexao.php");
include("verificalogin.php");
include("head.php");


$id = intval($_POST['id']);
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
  $foto = $_FILES['foto'];
  $pasta = "imagens/equipe/";
  $ext = pathinfo($foto['name'], PATHINFO_EXTENSION);
  $nomeFoto = uniqid() . "." . $ext;
  $caminho = $pasta . $nomeFoto;

  if (move_uploaded_file($foto['tmp_name'], $caminho)) {
    
    $sql = "UPDATE equipe SET nome=?, cargo=?, foto=? WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssi", $nome, $cargo, $nomeFoto, $id);
  }
} else {
  
  $sql = "UPDATE equipe SET nome=?, cargo=? WHERE id=?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("ssi", $nome, $cargo, $id);
}

if ($stmt->execute()) {
  echo "<script>alert('Membro atualizado com sucesso.'); window.location.href='listar_equipe.php';</script>";
} else {
  echo "<script>alert('Erro ao atualizar.'); history.back();</script>";
}
?>