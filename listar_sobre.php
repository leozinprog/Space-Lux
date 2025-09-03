<?php
include('conexao.php');
include('head.php');
include('verificalogin.php');
?>
<link rel="stylesheet" href="css/listar_sobre.css">

<div class="container-lista">
    <h2>Lista de Informações da Sessão Sobre</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM sobre ORDER BY id DESC";
            $result = $conexao->query($sql);

            if ($result && $result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['titulo']) ?></td>
                        <td>
                            <?php if (!empty($row['imagem'])): ?>
                                <img src="<?= $row['imagem'] ?>" alt="Imagem" class="thumb">
                            <?php else: ?>
                                Sem imagem
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="visualizar_sobre.php?id=<?= $row['id'] ?>" class="btn visualizar">Visualizar</a>
                            <a href="atualizar_sobre.php?id=<?= $row['id'] ?>" class="btn atualizar">Atualizar</a>
                            <a href="excluir_sobre.php?id=<?= $row['id'] ?>" class="btn excluir"
                                onclick="return confirm('Tem certeza que deseja excluir este registro?')">Excluir</a>
                            <p>Status: <strong><?= $row['ativo'] ? 'Ativo' : 'Inativo' ?></strong></p>

                        </td>

                    </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="4">Nenhum registro encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="painelgerencial.php" class="btn-voltar">← Voltar</a>
</div>