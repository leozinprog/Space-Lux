<?php
$host = 'localhost';
$db   = 'spacelux';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT caminho_imagem FROM galeria ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Space Lux - Galeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header class="header">
    <div class="container container-nav">
        <div class="site-title">
            <h1>Space Lux</h1>
            <p class="subtile">Preparando seu Cabelo</p>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="galeria.php" class="current-page">Galeria</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="agendamento.php">Agenda</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="galeria-header">
        <h1>Alguns dos seus cortes de cabelo mais incríveis</h1>
        <p>Espero que você volte logo</p>
    </div>
    <div class="row galeria-row">
        <?php
        if ($result->num_rows > 0) {
            $count = 0;
            echo '<div class="column">';
            while ($row = $result->fetch_assoc()) {
                echo '<img src="' . $row['caminho_imagem'] . '" alt="Imagem da galeria" style="width:100%">';
                $count++;
                if ($count % 4 == 0) {
                    echo '</div><div class="column">';
                }
            }
            echo '</div>';
        } else {
            echo '<p style="text-align:center;">Nenhuma imagem na galeria.</p>';
        }
        ?>
    </div>
</main>

<footer class="footer">
    <h3><span id="demo">&copy;</span> <a href="#">SpaceLuxDeise.com</a></h3>
</footer>

</body>
</html>
