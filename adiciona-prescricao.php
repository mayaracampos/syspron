<html> 

<head>
<link href="css/bootstrap.css" rel= "stylesheet">
</head>

<?php  
include ("conexao.php");
include ("prescricao-funcao.php");



//Pegar as variaveis do formulario
$id = $_POST["id"];
$prontuario = $_POST["prontuario"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$medicacao = $_POST["medicacao"];
$metodo = $_POST["metodo"];
$quantidade = $_POST["quantidade"];
$observacao = $_POST["observacao"];
$data = $_POST["data"];

// Se a conexao com o banco de dados der certo, mostra um alerta de sucesso dizendo que a prescricao foi criada, caso contratio mostra um alerta de perigo dizendo que nao foi possivel.
if (inserePrescricao($con, $id, $prontuario, $nome, $endereco, $idade, $medicacao, $metodo, $quantidade, $observacao, $data)){ ?>
	<p class="alert-success"> prescricao <?php echo $id; ?> adicionada com sucesso!</p>
	<?php } 

else{?>
	<p class="alert-danger">  A prescrição <?php echo $id; ?> não pode ser criada </p><?php	
}?>



</html>
