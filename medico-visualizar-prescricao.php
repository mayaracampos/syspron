<?php 	include("cabecalho-medico.php");
		include("conexao.php");
		include ("prescricao-funcao.php");?>
		
<html>		
<div class="panel">
<div class="panel-heading">
<span class="panel-title">Prescrição Médica</span>
</div>
<div class="panel-body">

<form class="form-horizontal" role="form">
<div class="form-group">
				<label class="col-lg-3 control-label">Prontuário</label>
					<div class="col-lg-8">
				<div class="bs-component">
				<?echo $prontuario?>
				</div>
				</div>

				<label for="col-lg-3 control-label">Número da Prescrição</label>
					<?echo $id?>
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Nome</label>
					<?echo $nome?>
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Endereço</label>
					<?echo $endereco?>
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Idade</label>
					<?echo $idade?>
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Medicação</label>
					<?echo $medicacao?>	
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Modo de Uso</label>
					<?echo $metodo?>	
				</div>
				<div class="form-group">
					<label for="col-lg-3 control-label">Quantidade</label>
					<?echo $quantidade?>	
				</div>
				<div class="form-group">
				    <label for="col-lg-3 control-label">Obervação</label>
				    <?echo $observacao?>
				</div>
				<div class="form-group">
				    <label for="col-lg-3 control-label">Data da Prescrição</label>
				    <?echo $data?>

</div>
</form>
</div>
</div>
</html>