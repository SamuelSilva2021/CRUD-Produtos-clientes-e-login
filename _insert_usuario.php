<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, nivel_usuario, status) values('$nomeusuario','$email',sha1('$senha'),'$nivel','$status')";

$inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Usuário cadastrado com sucesso!</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>	
			<a href="index.php" role = "button" class="btn btn-sm btn-secondary">Voltar</a>
			<a href="cadastrar_usuario.php" role = "button" class="btn btn-sm btn-primary">Nova</a>
		</center>

	</div>
</div>