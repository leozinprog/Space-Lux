<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $cargo = $_POST['cargo'];

  if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto = $_FILES['foto'];

    $pasta = "imagens/equipe/";
    if (!is_dir($pasta)) {
      mkdir($pasta, 0755, true);
    }

    $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
    $nomeFoto = uniqid() . "." . $extensao;
    $caminhoFinal = $pasta . $nomeFoto;

    if (move_uploaded_file($foto['tmp_name'], $caminhoFinal)) {
      // Insere no banco
      $sql = "INSERT INTO equipe (nome, cargo, foto) VALUES (?, ?, ?)";
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("sss", $nome, $cargo, $nomeFoto);

      if ($stmt->execute()) {
        echo "<script>alert('Membro cadastrado com sucesso!'); window.location.href='listar_equipe.php';</script>";
      } else {
        echo "<script>alert('Erro ao salvar no banco de dados.'); history.back();</script>";
      }

    } else {
      echo "<script>alert('Erro ao mover a imagem.'); history.back();</script>";
    }
  } else {
    echo "<script>alert('Erro no envio da foto.'); history.back();</script>";
  }
} else {
  echo "<script>alert('Método de requisição inválido.'); history.back();</script>";
}
?>
