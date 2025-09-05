<?php
include("conexao.php");
include("verificalogin.php");
include("head.php");


$id = intval($_GET['id']);


$res = $conexao->query("SELECT foto FROM equipe WHERE id=$id");
$linha = $res->fetch_assoc();
if ($linha && file_exists("../imagens/equipe/" . $linha['foto'])) {
  unlink("../imagens/equipe/" . $linha['foto']);
}


$conexao->query("DELETE FROM equipe WHERE id=$id");

header("Location: listar_equipe.php");
exit;
?>