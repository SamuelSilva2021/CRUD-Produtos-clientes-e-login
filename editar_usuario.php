
<?php


include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar usuário</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		#btnCadastrar{
			margin-top: 10px;
			background: #04A519; /* cor de fundo */
			color: #ffffff; /* cor da letra */
			font-family: "arial";
		}
		#label{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top:40px;">
		<h4>Editar usuário</h4>
		<form action="_atualizar_usuario.php" method="post" style="margin-top: 20px;">
			<?php

			$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {

				$id_usuario = $array['id_usuario'];
  				$nome = $array['nome_usuario'];
  				$email = $array['email_usuario'];
  				$nivel = $array['nivel_usuario'];
  				$status = $array['status'];

			?>

			<div class="form-group">
	   		 	<label>Nome</label>
	    		<input type="text" class="form-control" name="nomeusuario" value="<?php echo $nome ?>">
	    		<input type="number" class="form-control" name="id_usuario" value="<?php echo $id_usuario ?>" style="display: none;">

	 		</div>
	  		<div class="form-group">
	    		<label id="label">Email</label>
	    		<input type="email" class="form-control" name="emailusuario" value="<?php echo $email ?>">

	  		</div>
			<div class="form-group">
				<label>Nivel Usuário</label>
				<input type="text" class="form-control" name="nivelusuario" value="<?php echo $nivel ?>">

	  		<div class="form-group">
	    		<label id="label">Status</label>
	    		<input type="text" class="form-control" name="status" value="<?php echo $status ?>">

	  		</div>
			<div style="text-align: right;">
			<button type="submit" class="btn btn-success btn-sm" id="btnAtualizar" style="margin-top: 10px;">Atualizar</button>
			</div>
		<?php } ?>
	  	</form>
	  </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

