<?php
include('conexao.php');
include('head.php');
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefoneCliente = $_POST['telefone'];
    $email = $_POST['email'];
    $servico = $_POST['servico'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $obs = $_POST['obs'];

    // Salvar no banco
    $sql = "INSERT INTO agendamentos (nome, telefone, email, servico, data, hora, observacoes) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $telefoneCliente, $email, $servico, $data, $hora, $obs);
    $stmt->execute();
    $stmt->close();

    // Redirecionar para o WhatsApp da sua mãe
    $mensagem = "Olá! Meu nome é $nome. Gostaria de agendar um horário para $servico no dia $data às $hora. 
    Telefone: $telefoneCliente | E-mail: $email. 
    Observações: $obs";
    
    $telefoneMae = '44988246427'; // número da sua mãe (55 + DDD + número)
    header("Location: https://wa.me/$telefoneMae?text=" . urlencode($mensagem));
    exit();
}
?>

<link rel="stylesheet" href="css/agendamentos.css">

<div class="container-agendamento">
    <h2>Agende seu horário</h2>
    <form action="" method="POST" class="form-agendamento">
        
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="servico">Serviço desejado:</label>
        <select id="servico" name="servico" required>
            <option value="">Selecione...</option>
            <option value="Corte de cabelo">Corte de cabelo</option>
            <option value="Escova">Escova</option>
            <option value="Coloração">Coloração</option>
            <option value="Manicure">Manicure</option>
            <option value="Pedicure">Pedicure</option>
            <option value="Tratamento capilar">Tratamento capilar</option>
        </select>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required>
        
        <label for="hora">Horário:</label>
        <input type="time" id="hora" name="hora" required>
        
        <label for="obs">Observações:</label>
        <textarea id="obs" name="obs" rows="4"></textarea>
        
        <button type="submit">
            <i class="fab fa-whatsapp"></i> Agendar agora
        </button>
    </form>
</div>
</html>
