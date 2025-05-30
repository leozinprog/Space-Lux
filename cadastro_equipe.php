<?php
include("conexao.php");
include("header.php");
include("head.php");
include("verificalogin.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Membro - Space Lux</title>
  <link rel="stylesheet" href="css/cadastro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="pagina-cadastro">
  <div class="form-container">
    <h2>Cadastrar Membro da Equipe</h2>
    
    <form id="cadastroEquipeForm" action="ajequipe.php" method="POST" enctype="multipart/form-data">
      <!-- Nome -->
      <div class="input-wrapper">
        <i class="fas fa-user"></i>
        <input type="text" name="nome" placeholder="Nome do membro" required>
      </div>

      <!-- Cargo -->
      <div class="input-wrapper">
        <i class="fas fa-briefcase"></i>
        <input type="text" name="cargo" placeholder="Cargo" required>
      </div>

      <!-- Foto -->
      <div class="input-wrapper">
        <i class="fas fa-image"></i>
        <input type="file" name="foto" accept="image/*" required>
      </div>

      <button type="submit">Cadastrar</button>
    </form>

    <a href="listar_equipe.php" class="voltar">
      <i class="fas fa-arrow-left"></i> Voltar
    </a>
  </div>
</body>
</html>
