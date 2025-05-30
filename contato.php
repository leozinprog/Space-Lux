<?php
include("conexao.php");
include('head.php');
?>
<head>
<link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <?php include('header.php'); ?>

    <section class="contato-section">
        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.7085122069643!2d-52.4442417!3d-23.071145699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9492942a494fa1ed%3A0x41cfe595ed8b9aaa!2sR.%20Jos%C3%A9%20Sebasti%C3%A3o%20Mulari%2C%203010%20-%20Jardim%20Guanabara%2C%20Paranava%C3%AD%20-%20PR%2C%2087706-385!5e0!3m2!1spt-BR!2sbr!4v1745457759043!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contato-info">
            <h2>Entre em Contato</h2>
            <p>Estamos aqui para te atender com carinho! Agende seu horário, envie suas dúvidas ou apenas diga olá.
                Nosso time está pronto para te receber.</p>
            <form>
                <input type="text" placeholder="Seu nome" required>
                <input type="email" placeholder="Seu e-mail" required>
                <textarea placeholder="Sua mensagem" required></textarea>
                <button type="submit">Enviar Mensagem</button>
            </form>
            <div class="info-extra">
                <p><i class="fas fa-phone"></i> (44) 98824-6427</p>
                <p><i class="fas fa-envelope"></i> deiseamapora@hotmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Rua José Sebastião Mulari - Paranavaí, PR</p>
            </div>
        </div>
    </section>

    
</body>
</html>
