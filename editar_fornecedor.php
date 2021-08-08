
<?php


include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Fornecedor</title>
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
		<h4>Editar Fornecedor</h4>
		<form action="_atualizar_fornecedor.php" method="post" style="margin-top: 20px;">
			<?php

			$sql = "SELECT * FROM fornecedor WHERE id_forne = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {

				$id_forne = $array['id_forne'];
  				$nome_forne = $array['nome_forne'];

			?>

	
	  		<div class="form-group">
	    		<label >Nome Fornecedor</label>
	    		<input type="text" class="form-control" name="nome_forne" value="<?php echo $nome_forne?>">
	    		
	    		<input type="text" class="form-control" name="id" value="<?php echo $id_forne ?>" style="display: none;">

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