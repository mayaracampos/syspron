<?php 
// Armazena endereço, usuário e senha na variável $con
$con = mysqli_connect("localhost:3306", "root", "123456");
// Roda a Query e seleciona o banco "sposystem", caso a conexao nao ocorra, aparece mensagem de erro
mysqli_select_db($con,"syspron")or die("cannot select DB");
?>