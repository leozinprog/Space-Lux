<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Space Lux</title>
  <link rel="stylesheet" href="css/cadastro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="pagina-cadastro">
  <div class="form-container">
    <h2>Cadastro</h2>
    <form id="cadastroForm">
        <!-- Nome -->
        <div class="input-wrapper">
          <i class="fas fa-user"></i>
          <input type="text" id="nome" placeholder="Nome completo" required>
        </div>
      
        <!-- E-mail -->
        <div class="input-wrapper">
          <i class="fas fa-envelope"></i>
          <input type="email" id="email" placeholder="E-mail" required>
        </div>
      
        <!-- Senha -->
        <div class="input-wrapper">
          <i class="fas fa-lock"></i>
          <input type="password" id="senha" placeholder="Senha" required>
        </div>
      
        <button type="submit">Cadastrar</button>
      </form>

      
    </form>
  </div>
</body>
</html>

<script>
  document.getElementById("cadastroForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;

    fetch("ajcadastro.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `nome=${encodeURIComponent(nome)}&email=${encodeURIComponent(email)}&senha=${encodeURIComponent(senha)}`
    })
    .then(response => response.text())
    .then(data => {
      if (data === "sucesso") {
        alert("Cadastro realizado com sucesso!");
      } else if (data === "erro") {
        alert("Erro ao cadastrar. Tente novamente.");
      } else {
        alert(data);
      }
    })
    .catch(error => {
      alert("Erro de conexão com o servidor.");
      console.error(error);
    });
  });
</script>

