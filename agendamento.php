<?php
include("conexao.php");
include('head.php');
?>
<head>
  <link rel="stylesheet" href="css/agendamento.css">
</head>
<body>
  <div class="container">
    <h1>Agende seu horário</h1>
    <form id="form-agendamento">
      <input type="text" id="nome" placeholder="Seu nome" required>
      <input type="date" id="data" required>
      <input type="time" id="hora" required>
      <select id="servico" required>
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
    <a href="home.php" class="voltar">
      <i class="fas fa-arrow-left"></i> Voltar
    </a>
  </div>

  <script>
    document.getElementById('form-agendamento').addEventListener('submit', function(e) {
      e.preventDefault();

      const nome = document.getElementById('nome').value;
      const data = document.getElementById('data').value;
      const hora = document.getElementById('hora').value;
      const servico = document.getElementById('servico').value;

      const mensagem = `Olá! Meu nome é ${nome}. Gostaria de agendar um horário para ${servico} no dia ${data} às ${hora}.`;
      const telefone = '5544988246427'; 
      const linkWhatsApp = `https://wa.me/${telefone}?text=${encodeURIComponent(mensagem)}`;

      window.location.href = linkWhatsApp;
    });
  </script>
</body>
</html>
