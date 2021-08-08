<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Fornecedor</title>
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
	  		<a href="index.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>
	  	</div>
		<h4>Cadastro de Fornecedor</h4>
		<form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px;">
	  		
	  		<div class="form-group">
	    		<label id="label">Nome do fornecedor</label>
	    		<input type="text" class="form-control" name="fornecedor" placeholder="Digite o nome do fornecedor" required="Preencha esses campos" autocomplete="off">
	  		</div>

			<div style="text-align: right;">
			<button type="submit" class="btn btn-success btn-sm" id="btnCadastrar">Cadastrar</button>
	  	</form>
	  	

	  		</div>

	</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>