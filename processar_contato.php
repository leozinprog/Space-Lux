<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Definir o e-mail para o qual a mensagem será enviada
    $para = "deiseamapora@hotmail.com"; // Altere para o seu e-mail
    $assunto = "Nova mensagem de contato";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='contato.php';</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem. Tente novamente!'); window.location.href='contato.php';</script>";
    }
}
?>
