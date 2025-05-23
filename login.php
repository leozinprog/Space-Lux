<?php
session_start();
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Busca usuário pelo email
    $stmt = $conexao->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        // Verifica a senha
        if (password_verify($senha, $user['senha'])) {
            // Login OK - cria sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];
            $_SESSION['user_email'] = $user['email'];

            // Redireciona para a home
            header("Location: home.php");
            exit;
        } else {
            $erro = "Senha incorreta.";
        }
    } else {
        $erro = "Usuário não encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Space Lux - Login</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="pagina-login" background="img/fundo.jpg">
  <div class="form-container">
    <h2>Login</h2>
    <?php if (isset($erro)) : ?>
      <div style="color: red; margin-bottom: 15px;"><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>
    <form method="post" action="login.php">
      <div class="input-wrapper">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="E-mail" required />
      </div>

      <div class="input-wrapper">
        <i class="fas fa-lock"></i>
        <input type="password" name="senha" placeholder="Senha" required />
      </div>

      <button type="submit">Entrar</button>
    </form>
    <div class="login-link">
      Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
    </div>
  </div>
</body>
</html>
