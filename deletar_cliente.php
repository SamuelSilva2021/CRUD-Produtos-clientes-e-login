<?php


include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `cliente` WHERE id_cliente = $id";
$deletar = mysqli_query($conexao,$sql)
?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
	<center>
		<h3 style="margin-top:20px;">Deletado com sucesso</h3>
		<div style="margin-top: 10px;"></div>
		<a class="btn btn-warning" style="color: #fff; margin-top: 10px;" href="lista_clientes.php" role="button">
		Voltar</a>
	</center>
</div>