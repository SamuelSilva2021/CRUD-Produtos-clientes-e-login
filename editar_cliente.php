
<?php


include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Cliente</title>
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
		<h4>Editar Cliente</h4>

		<form class="row g-3" action="_atualizar_cliente.php" method="post" style="margin-top: 20px;" >

			<?php

			$sql = "SELECT * FROM `cliente` WHERE id_cliente = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {

				$id_cliente = $array['id_cliente'];
  				$nome_cliente = $array['nome_cliente'];
  				$endereco_cliente = $array['endereco_cliente'];
  				$bairro_cliente = $array['bairro_cliente'];
  				$cidade_cliente = $array['cidade_cliente'];
  				$estado_cliente = $array['estado_cliente'];
  				$num_cliente = $array['num_cliente'];
  				$cep_cliente = $array['cep_cliente'];
  				$telefone_cliente = $array['telefone_cliente'];

			?>

			
			
				<div class="col-md-8">
    				<label for="inputAddress" class="form-label">Nome completo</label>
    				<input type="text" class="form-control" name = "nome_cliente" value="<?php echo $nome_cliente ?>">
    				<input type="number" class="form-control" name="id" value="<?php echo $id_cliente ?>" style="display: none;">
  				</div>

  				<div class="col-md-4">
    				<label for="inputAddress" class="form-label">Telefone</label>
    				<input type="number" class="form-control" name = "telefone_cliente" value="<?php echo $telefone_cliente ?>">
  				</div>
  				<div class="col-md-6">
    				<label for="inputAddress" class="form-label">Endereço</label>
    				<input type="text" class="form-control" name = "endereco_cliente" value="<?php echo $endereco_cliente ?>">
  				</div>
  				<div class="col-md-2">
    				<label for="inputAddress" class="form-label">Numero</label>
    				<input type="number" class="form-control" name = "num_cliente" value="<?php echo $num_cliente ?>">
    			</div>
  				<div class="col-md-4">
    				<label for="inputAddress" class="form-label">Bairro</label>
    				<input type="text" class="form-control" name = "bairro_cliente" value="<?php echo $bairro_cliente ?>">
  				</div>
  				<div class="col-md-6">
    				<label for="inputCity" class="form-label">Cidade</label>
    				<input type="text" class="form-control" name = "cidade_cliente" value="<?php echo $cidade_cliente ?>">
  				</div>
  				<div class="col-md-4">
    				<label for="inputState" class="form-label">Estado</label>
    				<input type="text" class="form-control" name = "estado_cliente" value="<?php echo $estado_cliente ?>">
  				</div>
  				<div class="col-md-2">
    				<label for="inputZip" class="form-label">Cep</label>
    				<input type="number" class="form-control" name = "cep_cliente" value="<?php echo $cep_cliente ?>">
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