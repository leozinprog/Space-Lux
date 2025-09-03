<?php
include("conexao.php");
include('head.php');

?>

<link rel="stylesheet" href="css/admin_galeria.css">

<div class="container">
    <h1>Atualizar Portfólio</h1>
    <p>Escolha as imagens para adicionar.</p>

    <form action="processa_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagens[]" multiple required>
        <button type="submit">Enviar</button>
    </form>

    <a class="voltar" href="painelgerencial.php">← Voltar</a>
</div>
