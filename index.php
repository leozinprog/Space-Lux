<?php
include("conexao.php");
include('head.php');
?>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        #home {
            background: url('img/fundo.jpg') no-repeat center center fixed;
            height: 85vh;
            position: relative;
            width: 100%;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <div id="home">
            <div class="overlay">
                <div class="landing-text">
                    <h3>Preparando seu Cabelo</h3>
                    <h1>Space Lux</h1>
                    <hr id="hr-main">
                </div>
            </div>
        </div>
    </main>
</body>

</html>