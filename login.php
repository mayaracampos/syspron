<?php
include ('conexao.php');
include ('banco-usuario.php');

$usuario = buscaUsuario($con, $_POST["nomeusuario"],  $_POST["senha"]);

if($usuario==null){
	header("Location: index.php?login=false");
} else {
	header("Location: index.php?login=true");
}

