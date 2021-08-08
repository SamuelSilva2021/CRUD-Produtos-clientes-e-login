<?php

include 'conexao.php';

$nomecategoria = $_POST['nomecategoria'];



$sql = "INSERT INTO categoria(nomecategoria) VALUES ('$nomecategoria')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Categoria adicionada com sucesso!</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>	
			<a href="menu.php" role = "button" class="btn btn-sm btn-secondary">Voltar</a>
			<a href="adicionar_categoria.php" role = "button" class="btn btn-sm btn-primary">Nova</a>
		</center>

	</div>
</div>