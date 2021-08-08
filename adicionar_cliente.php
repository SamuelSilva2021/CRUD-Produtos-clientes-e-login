

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanhoContainer{
			width: 1000px;
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
	  		<a href="menu.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>
	  	</div>

		<h4>Cadastro de Clientes</h4>
		
		<form class="row g-3" action="_inserir_cliente.php" method="post" style="margin-top: 20px;" >
			
		<div class="col-md-8">
    <label for="inputAddress" class="form-label">Nome completo</label>
    <input type="text" class="form-control" name = "nome_cliente" placeholder="Digite seu nome" autocomplete="off" required="Preencha esses campos">
  </div>

  <div class="col-4">
    <label for="inputAddress" class="form-label">Telefone</label>
    <input type="number" class="form-control" name = "telefone_cliente" placeholder="Telefone" autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" name = "endereco_cliente" placeholder="Av, Rua..." autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-2">
    <label for="inputAddress" class="form-label">Numero</label>
    <input type="number" class="form-control" name = "num_cliente" placeholder="123" autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Bairro</label>
    <input type="text" class="form-control" name = "bairro_cliente" placeholder="Bairro" autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" name = "cidade_cliente" autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <input type="text" class="form-control" name = "estado_cliente" autocomplete="off" required="Preencha esses campos">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Cep</label>
    <input type="number" class="form-control" name = "cep_cliente" autocomplete="off" required="Preencha esses campos">
  </div>

			<div style="text-align: right;">
			<button type="submit" class="btn btn-success btn-sm" id="btnCadastrar">Cadastrar</button>
	
	  	</form>
	  	
	  		</div>

	</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>