<?php
include('conexao.php');
include('head.php');
include('header.php');
?>
<link rel="stylesheet" href="css/galeria.css">

<div class="container-galeria">
    <h2>Alguns dos seus cortes de cabelo mais incríveis</h2>

    <div class="galeria-grid">
        <?php
        // Busque apenas campos que existem
        $sql = "SELECT id, imagem FROM galeria ORDER BY id DESC";
        $resultado = $conexao->query($sql);

        if ($resultado && $resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $img = htmlspecialchars($row['imagem'] ?? '');
                if ($img === '') continue;

                echo '
                <div class="galeria-card">
                    <div class="foto-wrap">
                        <img src="uploads/'.$img.'" alt="Foto '.$row['id'].'">
                    </div>
                </div>';
            }
        } else {
            echo '<p class="empty">Nenhuma imagem encontrada.</p>';
        }
        ?>
    </div>
</div>
