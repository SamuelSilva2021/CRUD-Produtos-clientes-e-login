<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, status) values('$nomeusuario','$email',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4>Usuário adicionado com sucesso! Esperando aprovação.</h4>
		<div style="padding-top: 20px;">
	</center>

		<center>	
			<a href="index.php" role = "button" class="btn btn-sm btn-primary">Logar</a>
		</center>

	</div>
</div>