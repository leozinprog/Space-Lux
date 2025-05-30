<?php
include("verificalogin.php");
include("conexao.php");
include("head.php");
include("header.php");
?>

<body>
    <div class="top-bar">
        <a href="logout.php" class="btn-sair">Sair</a>
    </div>
    <link rel="stylesheet" href="css/painelgerencial.css">
    <main class="painel">
        <div class="painel-header">
            <h1>Painel Gerencial</h1>
        </div>

        <div class="painel-cards">
            <a href="listar_equipe.php" class="card">
                <h2>Equipe</h2>
                <p>Gerencie os profissionais do salão</p>
            </a>

            <a href="listar_agendamento.php" class="card">
                <h2>Agendamentos</h2>
                <p>Visualize e administre os horários</p>
            </a>

            <a href="galeria_admin.php" class="card">
                <h2>Galeria</h2>
                <p>Atualize as fotos do portfólio</p>
            </a>
        </div>
    </main>
</body>

</html>
