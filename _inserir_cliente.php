<?php

include 'conexao.php';

$nome_cliente = $_POST['nome_cliente'];
$endereco_cliente = $_POST['endereco_cliente'];
$bairro_cliente = $_POST['bairro_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];
$estado_cliente = $_POST['estado_cliente'];
$num_cliente = $_POST['num_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];

$sql = "INSERT INTO `cliente`(`nome_cliente`, `endereco_cliente`, `bairro_cliente`, `cidade_cliente`, `estado_cliente`, `num_cliente`, `cep_cliente`, `telefone_cliente`) VALUES ('$nome_cliente','$endereco_cliente','$bairro_cliente','$cidade_cliente','$estado_cliente',$num_cliente,$cep_cliente,$telefone_cliente)";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Cliente adicionado com sucesso!</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>	
			<a href="menu.php" role = "button" class="btn btn-sm btn-secondary">voltar</a>
			<a href="adicionar_cliente.php" role = "button" class="btn btn-sm btn-primary">Novo</a>
			
		</center>

	</div>
</div>



