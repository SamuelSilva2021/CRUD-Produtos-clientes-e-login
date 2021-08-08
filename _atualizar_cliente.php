<?php


include 'conexao.php';


$id = $_POST['id'];
$nome_cliente = $_POST['nome_cliente'];
$endereco_cliente = $_POST['endereco_cliente'];
$bairro_cliente = $_POST['bairro_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];
$estado_cliente = $_POST['estado_cliente'];
$num_cliente = $_POST['num_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];

$sql = "UPDATE `cliente` SET `nome_cliente`='$nome_cliente',`endereco_cliente`='$endereco_cliente',`bairro_cliente`='$bairro_cliente',`cidade_cliente`='$cidade_cliente',`estado_cliente`='$estado_cliente',`num_cliente`= $num_cliente,`cep_cliente`= $cep_cliente,`telefone_cliente`= $telefone_cliente WHERE id_cliente = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
	<center>
		<h3 style="margin-top:20px;">Atualizado com sucesso</h3>
		<div style="margin-top: 10px;"></div>
		<a class="btn btn-warning" style="color: #fff; margin-top: 10px;" href="lista_clientes.php" role="button"><i class="far fa-trash-alt"></i>&nbsp;Voltar</a>
	</center>
</div>