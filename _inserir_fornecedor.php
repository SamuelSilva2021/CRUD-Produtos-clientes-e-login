<?php

include 'conexao.php';

//variavel = nome que está codigo html ou seja tudo que é digitado em fornecedor é armazenado nessa varival
$fornecedor = $_POST['fornecedor'];

//var = Insert no banco 'fornecedor' dentro do campo 'nome_forne' e o valor da variavel declarada lá em cima
$sql = "INSERT INTO fornecedor (nome_forne) values('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);

?>



<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Fornecedor adicionado com sucesso!</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>
			<a href="index.php" role = "button" class="btn btn-sm btn-secondary">Voltar</a>	
			<a href="adicionar_fornecedor.php" role = "button" class="btn btn-sm btn-primary">Novo</a>		
		</center>

	</div>
</div>