<?php
include("conexao.php");
include("verificalogin.php");
include("head.php");


if (!isset($_GET['id'])) {
  die("ID não fornecido.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM equipe WHERE id = $id";
$res = $conexao->query($sql);
$membro = $res->fetch_assoc();

if (!$membro) {
  die("Membro não encontrado.");
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/editar.css">
  <meta charset="utf-8">
  <title>Editar Membro</title>
</head>

<body>
  <h2>Editar Membro</h2>
  <form action="atualizar_equipe.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $membro['id'] ?>">

    <label>Nome: <input type="text" name="nome" value="<?= htmlspecialchars($membro['nome']) ?>" required></label><br>
    <label>Cargo: <input type="text" name="cargo" value="<?= htmlspecialchars($membro['cargo']) ?>"
        required></label><br>

    <label>Foto atual:</label><br>
    <img src="imagens/equipe/<?= htmlspecialchars($membro['foto']) ?>" width="100"><br><br>

    <label>Nova Foto (opcional): <input type="file" name="foto"></label><br>

    <button type="submit">Atualizar</button>
  </form>
</body>

</html>