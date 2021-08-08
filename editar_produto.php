
<?php


include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar produto</title>
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
		<h4>Editar produto</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
			<?php

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {

				$id_estoque = $array['id_estoque'];
  				$nroproduto = $array['nroproduto'];
  				$nomeproduto = $array['nomeproduto'];
  				$categoria = $array['categoria'];
  				$quantidade = $array['quantidade'];
  				$fornecedor = $array['fornecedor'];

			?>

	  		<div class="form-group">
	   		 	<label>Nro Produto</label>
	    		<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
	    		<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

	 		</div>
	  		<div class="form-group">
	    		<label id="label">Nome Produto</label>
	    		<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">

	  		</div>
			<div class="form-group">
	  			<label id="label">Categoria</label>
	  		<select class="form-select" name="categoria">
	  			<option value="Periféricos">Periféricos</option>
	  			<option value="Hardware">Hardware</option>
	  			<option value="Software">Software</option>
	  			<option value="Celulares">Celulares</option>
			</select>

			</div>
	  		<div class="form-group">
	    		<label id="label">Quantidade</label>
	    		<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">

	  		</div>
			<div class="form-group">
	  			<label id="label">Fornecedor</label>
	  		<select class="form-select" name="fornecedor">
	  			<option value="Fornecedor A">Fornecedor A</option>
	  			<option value="Fornecedor B">Fornecedor B</option>
	  			<option value="Fornecedor C">Fornecedor C</option>

			</select>
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