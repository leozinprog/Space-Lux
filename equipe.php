<?php
include("conexao.php");
include("verificalogin.php");
include('head.php');
?>

<body>
    <?php include('header.php'); ?>
    <main class="equipe">
        <div class="equipe-container">
            <div class="equipe-header">
                <h1>A Equipe</h1>
            </div>
        </div>
        <div class="row equipe-row">
            <div class="column">
                <img src="img/20.jpg" alt="" style="width: 100%">
                <h3>Deise Rebussi</h3>
                <p>Cabeleleira-chefe</p>
                <img src="img/26.jpg" alt="" style="width: 100%">
                <h3>Lorena Rebussi</h3>
                <p>Gerente</p>
            </div>
            <div class="column">
                <img src="img/19.jpg" alt="" style="width: 100%">
                <h3>stefany</h3>
                <p>Cabeleleira</p>
                <img src="img/21.jpg" alt="" style="width: 100%">
                <h3>Paula</h3>
                <p>Esteticista</p>
            </div>
            <div class="column">
                <img src="img/22.jpg" alt="" style="width: 100%">
                <h3>Maicon</h3>
                <p>Cabeleleiro</p>
                <img src="img/23.jpg" alt="" style="width: 100%">
                <h3>Bruna</h3>
                <p>Recepção</p>
            </div>
            <div class="column">
                <img src="img/24.jpg" alt="" style="width: 100%">
                <h3>Rosana</h3>
                <p>Cabeleleira</p>
                <img src="img/25.jpg" alt="" style="width: 100%">
                <h3>Vanessa</h3>
                <p>Pedicure/Manicure e Cabeleleira</p>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>