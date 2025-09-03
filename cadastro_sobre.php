<?php include('head.php');
include('verificalogin.php');
?>
<link rel="stylesheet" href="css/cadastro_sobre.css">

<div class="container-sobre">
    <h2>Cadastrar Sessão Sobre</h2>
    <form action="ajsobre.php" method="POST" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="6" required></textarea>

        <button type="submit">Salvar</button>
    </form>

    <a href="listar_sobre.php" class="btn-voltar">← Voltar</a>
</div>