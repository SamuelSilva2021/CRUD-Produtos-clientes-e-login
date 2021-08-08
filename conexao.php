

<?php

$servername = "localhost"; //endereço do servidor, nesse caso estamos utilizando um servidor local
$database = "curso_estoque"; //nome do banco de dados
$username = "root";//padrão root
$password = ""; //senha de conexão com o banco de dados.

//Create conection
$conexao = mysqli_connect($servername, $username, $password, $database);
