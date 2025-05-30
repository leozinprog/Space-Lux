<?php
include("conexao.php");
include('head.php');
?>
<head>
  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $servico = $_POST['servico'];

    $sql = "INSERT INTO agendamentos (nome, data, hora, servico) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssss", $nome, $data, $hora, $servico);
    $stmt->execute();
    $stmt->close();

    // Redireciona para o WhatsApp
    $mensagem = "Olá! Meu nome é $nome. Gostaria de agendar um horário para $servico no dia $data às $hora.";
    $telefone = '5544988246427';
    header("Location: https://wa.me/$telefone?text=" . urlencode($mensagem));
    exit();
}
?>

  <link rel="stylesheet" href="css/agendamento.css">
</head>
<body>
  <div class="container">
    <h1>Agende seu horário</h1>
    <form id="form-agendamento" method="POST" action="agendamento.php">
  <input type="text" name="nome" placeholder="Seu nome" required>
  <input type="date" name="data" required>
  <input type="time" name="hora" required>
  <select name="servico" required>
    <option value="" disabled selected>Escolha um serviço</option>
    <option value="Corte">Corte</option>
    <option value="Manicure">Manicure</option>
    <option value="Maquiagem">Maquiagem</option>
    <option value="Sobrancelha">Sobrancelha</option>
  </select>
  <button type="submit">
    <i class="fab fa-whatsapp"></i> Agendar agora
  </button>
</form>
    <a href="contato.php" class="voltar">
      <i class="fas fa-arrow-left"></i> Voltar
    </a>
  </div>
</body>
</html>
