<?php
include("conexao.php");
include('head.php');
?>

<head>
    <link rel="stylesheet" href="css/contato.css">
    <style>
        .contato-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
            transform: translateY(-70px);
        }

        .contato-info {
            max-width: 800px;
            margin-bottom: 30px;
        }

        .mapa {
            width: 100%;
            margin: 0;
            transform: translateY(200px);
        }

        .mapa iframe {
            width: 100%;
            height: 400px;
            border-radius: 5%;
            transform: translateY(-70px);
        }

        .info-extra {
            margin-top: 20px;
            font-size: 16px;
            transform: translateY(-110px);
        }

        .info-extra p {
            margin: 8px 0;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="contato-section">
        <!-- TOPO - Texto -->
        <div class="contato-info">
            <h2>Entre em Contato</h2>
            <p>Estamos aqui para te atender com carinho! Agende seu horário, envie suas dúvidas ou apenas diga olá.
                Nosso time está pronto para te receber.</p>
        </div>

        <!-- MEIO - Mapa em largura total -->
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.7085122069643!2d-52.4442417!3d-23.071145699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9492942a494fa1ed%3A0x41cfe595ed8b9aaa!2sR.%20Jos%C3%A9%20Sebasti%C3%A3o%20Mulari%2C%203010%20-%20Jardim%20Guanabara%2C%20Paranava%C3%AD%20-%20PR%2C%2087706-385!5e0!3m2!1spt-BR!2sbr!4v1745457759043!5m2!1spt-BR!2sbr"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- FINAL - Informações extras -->
        <div class="info-extra">
            <p><i class="fas fa-phone"></i> (44) 98824-6427</p>
            <p><i class="fas fa-envelope"></i> deiseamapora@hotmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Rua José Sebastião Mulari - Paranavaí, PR</p>
        </div>
    </section>

</body>
</html>
