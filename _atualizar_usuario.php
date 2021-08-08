<?php 

include 'conexao.php';

$id = $_POST['id_usuario'];
$nome = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$nivel = $_POST['nivelusuario'];
$status = $_POST['status'];

$sql = "UPDATE usuarios SET `nome_usuario`='$nome',`email_usuario`='$email',`nivel_usuario`='$nivel',`status`='$status' WHERE id_usuario = '$id'";

$atualizar= mysqli_query($conexao,$sql);

?>
