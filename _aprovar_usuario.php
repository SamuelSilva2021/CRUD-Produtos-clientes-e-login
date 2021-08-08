<?php 

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];



if ($nivel == 1) {
	
	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = '$id'";
	$atualizacao = mysqli_query($conexao,$update);

}
if ($nivel == 2) {
	
	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = '$id'";
	$atualizacao = mysqli_query($conexao,$update);
}
if ($nivel == 3) {
	
	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = '$id'";
	$atualizacao = mysqli_query($conexao,$update);
}?>
	<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
	<center>
		<h3 style="margin-top:20px;">Usuário Aprovado com sucesso</h3>
		<div style="margin-top: 10px;"></div>
		<a class="btn btn-warning" style="color: #fff; margin-top: 10px;" href="aprovar_usuario.php" role="button">
		Voltar</a>
	</center>
</div>
