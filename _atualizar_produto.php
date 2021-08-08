<?php


include 'conexao.php';


$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
	<center>
		<h3 style="margin-top:20px;">Atualizado com sucesso</h3>
		<div style="margin-top: 10px;"></div>
		<a class="btn btn-warning" style="color: #fff; margin-top: 10px;" href="lista_produtos.php" role="button"><i class="far fa-trash-alt"></i>&nbsp;Voltar</a>
	</center>
</div>