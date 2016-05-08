<?php 	include("cabecalho-medico.php");
		include("conexao.php");
		include ("prescricao-funcao.php");
		
		$id = $_GET['$id'];
		invalidaPrescricao($con, $id);

		?>
		<p class"text-success"> Prescrição <?php echo $id?>Invalidada  </p> 