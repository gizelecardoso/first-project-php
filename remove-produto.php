<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
RemoveProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
?>
