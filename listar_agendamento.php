<?php
include("conexao.php");
include("head.php");

?>
<link rel="stylesheet" href="css/listar_agendamento.css">

<div class="container">
    <a href="painelgerencial.php" class="botao-voltar">← Voltar</a>
    <h2>Agendamentos Realizados</h2>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Serviço</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $conexao->query("SELECT * FROM agendamentos ORDER BY data, hora");
            while ($row = $resultado->fetch_assoc()):
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= date("d/m/Y", strtotime($row['data'])) ?></td>
                    <td><?= date("H:i", strtotime($row['hora'])) ?></td>
                    <td><?= htmlspecialchars($row['servico']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>