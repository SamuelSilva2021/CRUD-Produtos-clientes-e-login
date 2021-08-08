

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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
		<div style="text-align: right;">
	  		<a href="menu.php" role = "button" class="btn btn-sm btn-primary" role = "button">Voltar</a>
	  	</div>

		<h4>Cadastro de produtos</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
			
	  		<div class="form-group">
	   		 	<label>Cod Produto</label>
	    		<input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required="Preencha esses campos" autocomplete="off">

	 		</div>
	  		<div class="form-group">
	    		<label id="label">Nome Produto</label>
	    		<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required="Preencha esses campos" autocomplete="off">

	  		</div>


			<div class="form-group">
				<label >Categoria</label>
	  		<select class="form-select" name="categoria">
	  			
	  			<?php
	  			include 'conexao.php';
	  			$sql = "SELECT * FROM categoria";
	  			$buscar = mysqli_query($conexao, $sql);

	  			while ($array = mysqli_fetch_array($buscar)) {
	  				
	  				$id_categoria = $array['id_categoria'];
	  				$nomecategoria = $array['nomecategoria'];

	  			?>

	  			<option><?php echo $nomecategoria ?></option>

	  		<?php } ?>
			</select>

			</div>
	  		<div class="form-group">
	    		<label id="label">Quantidade</label>
	    		<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required="Preencha esses campos" autocomplete="off">

	  		</div>
			<div class="form-group">
	  			<label id="label">Fornecedor</label>
	  		<select class="form-select" name="fornecedor">

	  			<?php
	  			include 'conexao.php';
	  			$sql2 = "SELECT * FROM fornecedor";
	  			$buscar = mysqli_query($conexao, $sql2);

	  			while ($array = mysqli_fetch_array($buscar)) {
	  				
	  				$id_fornecedor = $array['id_fornecedor'];
	  				$nome_fornecedor = $array['nome_forne'];

	  			?>

	  			<option><?php echo $nome_fornecedor ?></option>

	  		<?php } ?>

			</select>
			</div>

			<div style="text-align: right;">
			<button type="submit" class="btn btn-success btn-sm" id="btnCadastrar">Cadastrar</button>
	
	  	</form>
	  	
	  		</div>

	</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>