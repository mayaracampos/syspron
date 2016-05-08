<?php

// função de listar Prescrições
function listaPrescricoes($con){
	$prescricoes = array();
	$resultado = mysqli_query($con, "select p.*, u. from prescricao as p join usuario as u on u.id=p.prontuario");

	while($prescricao = mysqli_fetch_assoc($resultado)){
		array_push($prescricoes, $prescricao);
	}
	return $prescricoes;
}

//Função para inserir prescrição no banco de dados
function inserePrescricao ($con, $id, $prontuario, $nome, $endereco, $idade, $medicacao, $metodo, $quantidade, $observacao, $data){
$query = "insert into prescricao (id, $prontuario, $nome, endereco, idade, medicacao, metodo, quantidade, observacao) values ('$id','$nome','$endereco','$idade','$medicacao','$metodo','$quantidade','$observacao', '$data')";
return mysqli_query($con, $query); }

// Invalidar Prescricao
function invalidaPrescricao ($con, $id){
	$query = "update prescricao set status = 3 where if='$id'";
	return mysqli_query($con, $query);
}

