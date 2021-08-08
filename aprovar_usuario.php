<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">
        <title>Aprovar usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/12858fdcd0.js" crossorigin="anonymous"></script>

</head>
<body>

        <div class="container" style="margin-top: 40px">
    <div style="text-align: right;">
        <a href="menu.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>
      </div>
                <h3>Aprovar usuários</h3><br>

                <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nivel</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
                
               <?php 
                        include 'conexao.php'; //conexão com o banco
                        $sql = "SELECT * FROM usuarios WHERE status = 'inativo'";
                        $busca = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($busca)) {
                                
                                $id_usuario = $array['id_usuario'];
                                $nomeusuario = $array['nome_usuario'];
                                $email = $array['email_usuario'];
                                $nivel = $array['nivel_usuario'];

                ?>

        <tr>
                <td><?php echo $nomeusuario ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $nivel ?></td>
                


                <td><a class="btn btn-success btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="far fa-check-square"></i>&nbsp;Admin</a></td>
                <td><a class="btn btn-warning btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="far fa-check-square"></i>&nbsp;Super</a></td>
                <td><a class="btn btn-dark btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-check-square"></i>&nbsp;User</a></td>
                <td><a class="btn btn-danger btn-sm" style="color: #fff;" href="_deletar_usuario_externo.php?id=<?php echo $id_usuario ?>&nivel=<?php echo $nivel ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

                </td>
            </tr>

    <?php } ?>
    
</table>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>