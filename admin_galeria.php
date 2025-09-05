<?php
include("conexao.php");
include('head.php');


// Buscar todas as imagens já cadastradas
$sql = "SELECT * FROM galeria ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<link rel="stylesheet" href="css/admin_galeria.css">

<div class="container">
    <h1>Gerenciar Galeria</h1>
    <p>Adicione, edite ou exclua imagens da galeria.</p>

    <!-- Formulário de Upload -->
    <form action="processa_upload_galeria.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagens[]" multiple required>
        <button type="submit">Enviar</button>
    </form>

    <hr style="margin:30px 0; border:0; border-top:1px solid #fff; opacity:0.3;">

    <!-- Lista de Imagens -->
    <h2>Imagens cadastradas</h2>
    <div class="galeria-lista">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="item">
                    <img src="uploads/<?php echo $row['imagem']; ?>" alt="Imagem" class="thumb">
                    
                    <!-- Formulário de editar -->
                    <form action="editar_galeria.php" method="post" enctype="multipart/form-data" class="edit-form">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="file" name="nova_imagem" required>
                        <button type="submit">Editar</button>
                    </form>

                    <!-- Excluir -->
                    <form action="excluir_galeria.php" method="post" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn-delete">Excluir</button>
                    </form>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhuma imagem cadastrada.</p>
        <?php endif; ?>
    </div>

    <a class="voltar" href="painelgerencial.php">← Voltar</a>
</div>
