<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Tela de Login</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style type="text/css">
	#tamanho{
		width: 500px;
		margin-top: 200px;
		border-radius: 15px;
		border: 2px solid #f3f3f3;
		-webkit-box-shadow: 10px 10px 32px 0px rgba(102,102,102,1);
		-moz-box-shadow: 10px 10px 32px 0px rgba(102,102,102,1);
		box-shadow: 10px 10px 32px 0px rgba(102,102,102,1);
		Copy Text
	}
	#label{
		margin-top: 10px;
	}
</style>
</head>
<body>

	<div class="container" id="tamanho">
		<div style="padding: 20px;">
		<center>
			<img src="img/cadeado.png" style="width: 150px;">
		</center>

		<h4>Login</h4>
		<form action="index_login.php" method="post">
			<div class="form-group" >
				<label id="label">Login</label>
				<input type="text" name="login" class="form-control" placeholder="login" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label id="label">Senha</label>
				<input type="text" name="senha" class="form-control" placeholder="senha" autocomplete="off" required>
			</div>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-success" style="margin-top: 10px;">Login</button>
			</div>
		
		</form>
		</div>
	</div>
	<p style="text-align: center; margin-top: 15px;">Ainda não possui cadastro? clique <a href="cadastrar_usuario_externo.php">aqui</a></p>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>