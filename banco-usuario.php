<?php

function buscaUsuario($con, $nomeusuario, $senha){
	$senhasha1 =  sha1($senha);
	$query = "select * from usuario where nomeusuario='{$nomeusuario}' and senha='{$senhasha1}'";
	$resultado = mysqli_query($con, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
	
}