<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar usuário</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<style type="text/css">
	#formato{
		width: 500px;
		margin-top: 50px;
		border-radius: 15px;
		border: 2px solid #f3f3f3;
		-webkit-box-shadow: 10px 10px 16px 0px rgba(196,196,196,1);
		-moz-box-shadow: 10px 10px 16px 0px rgba(196,196,196,1);
		box-shadow: 10px 10px 16px 0px rgba(196,196,196,1);
	}
	#label{
			margin-top: 10px;
		}
</style>

</head>
<body>
	<div class="container" id="formato">
		<div style="padding: 20px;">
		<h4>Formulario cadastro de usuário</h4>
		<form action="_insert_usuario_externo.php" method="post" style="margin-top: 20px">
			
			<div class="form-group">
				<label id="label">Nome do usuário</label>
				<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome de usuário" >
			</div>

			<div class="form-group">
				<label id="label">E-mail</label>
				<input type="E-mail" name="emailusuario" class="form-control" required autocomplete="off" placeholder= "E-mail do usuário" >
			</div>
			<div class="form-group">
				<label id="label">Senha</label>
				<input id ="txtsenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha de usuário" >
			</div>
			<div class="form-group">
				<label id="label">Repita a senha</label>
				<input type="password" name="senha2usuario" class="form-control" required autocomplete="off" placeholder="Repita a senha" oninput="validaSenha(this)">
			</div>
			
			<div style="text-align: right;">
				<button type="submit" class="btn btn-success" style="margin-top: 10px;">Cadastro</button>
			</div>
		</form>
	</div>
	</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

<script>
	function validaSenha(input){
		if(input.value != document.getElementById('txtsenha').value){
			input.setCustomValidity('Repita a senha corretamente');
		}else{
			input.setCustomValidity('')
		}
	}
</script>
</body>
</html>