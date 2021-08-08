<?php

include 'conexao.php';


$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria', $quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Produto adicionado com sucesso</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>	
			<a href="menu.php" role = "button" class="btn btn-sm btn-secondary">Voltar</a>
			<a href="adicionar_produto.php" role = "button" class="btn btn-sm btn-primary">Novo</a>
			
		</center>

	</div>
</div>